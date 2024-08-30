<?php

namespace App\Livewire\GM;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\RPO\WebappPOInv;
use Illuminate\Support\Facades\DB;

class DashboardPalmIndex extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $sumPalmOfDate;
    public $filterDate;
    public $selectedDate;
    public $dates;
    public $selectedMonth;

    public function mount()
    {
        $this->filterDate = Carbon::now()->toDateString();
    }

    public function updatedFilterDate()
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

        return $sumPrice / $sumGoodNet;
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
        $this->selectedDate = Carbon::parse($this->selectedDate)->locale('th')->translatedFormat('j F Y');
        $this->selectedMonth = Carbon::parse($this->filterDate)->locale('th')->translatedFormat(' F Y');
        $date = $this->filterDate;

        // $diff = Carbon::now()->diffInDays($date);
        $filterDate = Carbon::parse($this->filterDate)->subDay(0);
        $subDays = collect(range(0, 6))->map(function ($date) use ($filterDate) {
            return $filterDate->copy()->subDays($date)->toDateString();
        })->reverse()->values();

        $subDaysFormatted = $subDays->map(function ($date) {
            return Carbon::parse($date)->format('d/m/y');
        });

        $getPalmOf7 = $subDays->map(function ($date) {
            return $this->getSumByDate($date) / 1000;
        });

        $getPriceOf7 = $subDays->map(function ($date) {
            $average = $this->getAveragePricePerGoodNetByDate($date);
            return number_format($average, 2);
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

        $months = range(1, 12); // ทุกเดือนในปี
        $monthlySumsChart = WebappPOInv::whereYear('DocuDate', $filteredYear)
            ->select(
                DB::raw('MONTH(DocuDate) as month'),
                DB::raw('SUM(GoodNet) as sum')
            )
            ->groupBy(DB::raw('MONTH(DocuDate)'))
            ->get()
            ->keyBy('month'); // ใช้ month เป็น key

        // เตรียมข้อมูลสำหรับกราฟ
        $labelMonthlySums = [];
        $dataMonthlySums = [];

        foreach ($months as $month) {
            $sum = $monthlySumsChart->get($month)->sum ?? 0; // ใช้ค่า 0 ถ้าไม่มีข้อมูล
            $labelMonthlySums[] = Carbon::create()->month($month)->format('M'); // ใช้ชื่อเดือนแทนเลขเดือน
            $dataMonthlySums[] = $sum/1000;
        }

        $monthlyCount = WebappPOInv::whereYear('DocuDate', $filteredYear)
            ->whereMonth('DocuDate', $filteredMonth)
            ->count();

        $monthlyRamCount = WebappPOInv::whereYear('DocuDate', $filteredYear)
            ->whereMonth('DocuDate', $filteredMonth)
            ->where('VendorCode', 'like', '97%')
            ->count();

        $monthlyVendorRamSum = WebappPOInv::whereYear('DocuDate', $filteredYear)
            ->whereMonth('DocuDate', $filteredMonth)
            ->where('VendorCode', 'like', '97%')
            ->selectRaw('SUM(CAST(GoodNet AS DECIMAL(10, 2))) as total')
            ->first()
            ->total;

        $averagePriceOfMonth = $monthlySumsPrice[0]->sum / $monthlySums[0]->sum;
        $monthlyVendorAgrSum =  $monthlySums[0]->sum - $monthlyVendorRamSum;
        $monthlyVendorRamPercent =  ($monthlyVendorRamSum / $monthlySums[0]->sum) * 100;
        $monthlyVendorAgrPercent =  100 - $monthlyVendorRamPercent;
        $monthlyAgrCount =  $monthlyCount - $monthlyRamCount;

        $getSumByDate = $this->getSumByDate($date);
        $getAveragePriceByDate = $this->getAveragePricePerGoodNetByDate($date);
        $getSumPriceByDate = $this->getSumPriceByDate($date);
        return view('livewire.GM.dashboard-palm-index', [
            'getSumByDate' => ($getSumByDate == 0 ? 0 : number_format($getSumByDate, 0)),
            'getAveragePriceByDate' => ($getAveragePriceByDate == 0 ? 0 : number_format($getAveragePriceByDate, 2)),
            'getSumPriceByDate' => ($getSumPriceByDate == 0 ? 0 : number_format($getSumPriceByDate / 1000000, 2)),
            'getPalmOf7' => $getPalmOf7,
            'getPriceOf7' => $getPriceOf7,
            'subDaysFormatted' => $subDaysFormatted,
            'labelMonthlySums' => $labelMonthlySums,
            'dataMonthlySums' => $dataMonthlySums,
            'monthlySums' => number_format($monthlySums[0]->sum, 0),
            'monthlySumsPrice' => number_format($monthlySumsPrice[0]->sum / 1000000, 2),
            'averagePriceOfMonth' => number_format($averagePriceOfMonth, 2),
            'monthlyCount' => number_format($monthlyCount, 0),
            'monthlyVendorRamSum' => number_format($monthlyVendorRamSum, 0),
            'monthlyVendorAgrSum' => number_format($monthlyVendorAgrSum, 0),
            'monthlyVendorRamPercent' => number_format($monthlyVendorRamPercent, 2),
            'monthlyVendorAgrPercent' => number_format($monthlyVendorAgrPercent, 2),
            'monthlyRamCount' => number_format($monthlyRamCount, 0),
            'monthlyAgrCount' => number_format($monthlyAgrCount, 0),
        ]);
    }
}
