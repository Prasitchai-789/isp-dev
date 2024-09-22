<?php

namespace App\Http\Controllers\CAR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddCardController extends Controller
{
    public function index()
    {
        return view('CAR.add-card-index');
    }
}
