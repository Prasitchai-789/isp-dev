<?php

namespace App\Http\Controllers\CAR;

use App\Http\Controllers\Controller;
use App\Models\CAR\CarReport;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return view('CAR.car-report-index');
    }

    public function characterIndex()
    {
        return view('CAR.car-character-index');
    }
    public function typeIndex()
    {
        return view('CAR.car-type-index');
    }

    public function viewIndex($carReportId)
    {
        $carReport = CarReport::findOrFail($carReportId);
        return view('CAR.car-view-index',[
            'carReport'=> $carReport,
        ]);
    }
}
