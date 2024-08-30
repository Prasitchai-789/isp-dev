<?php

namespace App;

use Carbon\Carbon;
use App\Models\RPO\WebappPOInv;

class CalculatePalm
{
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
}
