<?php

namespace App\Http\Controllers\CAR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarUseController extends Controller
{
    public function index()
    {
        return view("CAR.car-use-index");
    }
}
