<?php

namespace App\Http\Controllers\HRE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarRequestController extends Controller
{
    public function index()
    {
        return view('HRE.car-request-index');
    }
}
