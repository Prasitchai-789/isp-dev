<?php

namespace App\Livewire\RPO;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\MAR\SOPlan;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\PRO\Production;
use App\Models\RPO\WebappPOInv;
use App\Models\PRO\CountTrainHD;
use Illuminate\Support\Facades\DB;

class DashboardPalmPurchaseIndex extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public WebappPOInv $webappPOInv;
    public $deleteId;
    public $updateId;
    public $selectedDate;
    public $average;
    public $TotalFFB;
    public $FilterProduct;
    public $filterDate;
    public $today;
    public $labels;
    public $currentDate;

    public function mount()
    {
        $this->filterDate = Carbon::now()->toDateString();
    }

    public function updated()
    {
        $CarbonDate = Carbon::parse($this->filterDate);
        $this->selectedDate = $CarbonDate->locale('th')->isoFormat('YYYY-MM-DD');
    }

    public function getSumByDate($date)
    {
        return WebappPOInv::whereDate('DocuDate', $date)
            ->selectRaw('SUM(CAST(GoodNet AS DECIMAL(10, 2))) as total')
            ->first()
            ->total;
    }

    public function getSumPriceByDate($date)
    {
        return WebappPOInv::whereDate('DocuDate', $date)
            ->selectRaw('SUM(CAST(Amnt2 AS DECIMAL(10, 2))) as total')
            ->first()
            ->total;
    }

    public function getAveragePricePerGoodNetByDate($date)
    {
        $sumGoodNet = $this->getSumByDate($date);
        $sumPrice = $this->getSumPriceByDate($date);

        if ($sumGoodNet == 0) {
            return 0;
        }

        return   $sumPrice / $sumGoodNet;
    }

    public function getDaysInMonth($year, $month)
    {
        $daysInMonth = Carbon::createFromDate($year, $month, 1)->daysInMonth;
        $dates = collect();

        for ($day = 1; $day <= $daysInMonth; $day++) {
            $dates->push(Carbon::createFromDate($year, $month, $day)->toDateString());
        }

        return $dates;
    }

    public function render()
    {
        try {

        $this->selectedDate = Carbon::parse($this->selectedDate)->locale('th')->translatedFormat('j F Y');
        $date = $this->filterDate;

        $filterDate = Carbon::parse($this->filterDate)->subDay(0);
        $subDays = collect(range(0, 9))->map(function ($date) use ($filterDate) {
            return $filterDate->copy()->subDays($date)->toDateString();
        })->reverse()->values();

            $subDaysFormatted = $subDays->map(function ($date) {
                return Carbon::parse($date)->format('d/m/y');
            });


            $ffbData = $subDays->map(function ($date) {
                return $this->getSumByDate($date) / 1000;
            });


            $endDate = Carbon::now();
            $filteredMonth = Carbon::parse($this->filterDate)->month;
            $filteredYear = Carbon::parse($this->filterDate)->year;
            $currentMonth = $endDate->month;
            $currentYear = $endDate->year;

            $datesInMonth = $this->getDaysInMonth($currentYear, $currentMonth);


            if ($filteredYear > $currentYear || ($filteredYear == $currentYear && $filteredMonth > $currentMonth)) {
                $monthlySums = collect([
                    (object) [
                        'month' => $filteredMonth,
                        'sum' => 0
                    ]
                ]);
            } else {
                $monthlySums = WebappPOInv::whereYear('DocuDate', $filteredYear)
                    ->whereMonth('DocuDate', $filteredMonth)
                    ->select(
                        DB::raw('MONTH(DocuDate) as month'),
                        DB::raw('SUM(GoodNet) as sum')
                    )
                    ->groupBy(DB::raw('MONTH(DocuDate)'))
                    ->get();
                if ($monthlySums->isEmpty()) {
                    $monthlySums = collect([
                        (object) [
                            'month' => $filteredMonth,
                            'sum' => 0
                        ]
                    ]);
                } else {
                    $monthlySums = $monthlySums->map(function ($item) {
                        if (is_null($item->sum)) {
                            $item->sum = 0;
                        }
                        return $item;
                    });
                }
            }

            if ($filteredYear > $currentYear || ($filteredYear == $currentYear && $filteredMonth > $currentMonth)) {
                $monthlySums = collect([
                    (object) [
                        'month' => $filteredMonth,
                        'sum' => 0
                    ]
                ]);
            } else {
                $monthlySumsPrice = WebappPOInv::whereYear('DocuDate', $filteredYear)
                    ->whereMonth('DocuDate', $filteredMonth)
                    ->select(
                        DB::raw('MONTH(DocuDate) as month'),
                        DB::raw('SUM(Amnt2) as sum')
                    )
                    ->groupBy(DB::raw('MONTH(DocuDate)'))
                    ->get();

                if ($monthlySumsPrice->isEmpty()) {
                    $monthlySumsPrice = collect([
                        (object) [
                            'month' => $filteredMonth,
                            'sum' => 0
                        ]
                    ]);
                } else {
                    $monthlySumsPrice = $monthlySumsPrice->map(function ($item) {
                        if (is_null($item->sum)) {
                            $item->sum = 0;
                        }
                        return $item;
                    });
                }
            }

            $averagePriceOfMonth = $monthlySumsPrice[0]->sum / $monthlySums[0]->sum;

            $startOfDay = Carbon::parse($date)->startOfDay();
            $endOfDay = Carbon::parse($date)->endOfDay();



            $sumFFBsubDays1 = WebappPOInv::whereBetween('DocuDate', [$startOfDay, $endOfDay])
                ->selectRaw('SUM(CAST(GoodNet AS DECIMAL(10, 2))) as total')
                ->first()
                ->total;
            $sumAmnt2subDays1 = WebappPOInv::whereBetween('DocuDate', [$startOfDay, $endOfDay])
                ->selectRaw('SUM(CAST(Amnt2 AS DECIMAL(10, 2))) as total')
                ->first()
                ->total;

            $averagePriceSubDays1 = $sumAmnt2subDays1 / $sumFFBsubDays1;

            $sumagr = WebappPOInv::whereBetween('DocuDate', [$startOfDay, $endOfDay])
                ->where(function ($query) {
                    $query->where('VendorCode', 'like', '96%')
                        ->orWhere('VendorCode', 'like', '91%');
                })
                ->sum('GoodNet');


            $sumram = WebappPOInv::whereBetween('DocuDate', [$startOfDay, $this->filterDate])
                ->where(function ($query) {
                    $query->where('VendorCode', 'like', '97%');
                })
                ->sum('GoodNet');
            if ($sumFFBsubDays1 != 0) {
                $percentram = ($sumram / $sumFFBsubDays1) * 100;
            } else {
                $percentram = 0;
            }
            $percentage = 100 - $percentram;


            $topCustomers = WebappPOInv::whereDate('DocuDate', $this->filterDate)
                ->select('VendorCode', DB::raw('SUM(CAST(GoodNet AS DECIMAL(10, 2))) as totalGoodNet'))
                ->groupBy('VendorCode')
                ->orderBy('totalGoodNet', 'desc')
                ->take(10)
                ->get();

            return view('livewire.RPO.dashboard-palm-purchase-index', [
                'sumFFBsubDays1' => ($sumFFBsubDays1 == 0 ? "" : number_format($sumFFBsubDays1, 0)),
                'sumAmnt2subDays1' => number_format($sumAmnt2subDays1 / 1000000, 2),
                'labelsdate' => $subDaysFormatted,
                'dataffb' => $ffbData,
                'averagePriceSubDays1' => number_format($averagePriceSubDays1, 2),
                'averagePriceOfMonth' => number_format($averagePriceOfMonth, 2),
                'topCustomers' => $topCustomers,
                'sumagr' => ($sumagr == 0 ? "-" : number_format($sumagr, 0)),
                'sumram' => ($sumram == 0 ? "-" : number_format($sumram, 0)),
                'percentage' => ($percentage == 0 ? 0 : number_format($percentage, 0)),
                'percentram' => ($percentram == 0 ? 0 : number_format($percentram, 0)),
                'monthlySums' => number_format($monthlySums[0]->sum, 0),
                'monthlySumsPrice' => number_format($monthlySumsPrice[0]->sum / 100000, 2),



            ]);
        } catch (\Throwable $th) {
            return view('livewire.RPO.dashboard-palm-purchase-index', [
                'sumFFBsubDays1' => "-",
                'sumAmnt2subDays1' => "-",
                'labels' => collect(),
                'data' => collect(),
                'averagePriceSubDays1' => "-",
                'averagePriceOfMonth' => "-",
                'percentage' => "-",
                'sumagr' => "-",
                'sumram' => "-",
                'percentram' => "-",
                'monthlySums' => "-",
                'monthlySumsPrice' => "-",
                'dataffb' => "-",
                'labelsdate' => "-",
            ]);
        }
    }
}
