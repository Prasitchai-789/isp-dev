<?php

namespace App\Http\Controllers\CAR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportCarController extends Controller
{
    public function index()
    {
        return view('CAR.report-car-index');
    }

    public function characterIndex()
    {
        return view('CAR.character-car-index');
    }
    public function typeIndex()
    {
        return view('CAR.type-car-index');
    }
}
