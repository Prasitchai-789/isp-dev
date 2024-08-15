<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function computerIndex() {
        return view('computer.index');
    }

    public function windowsIndex() {
        return view('computer.windows.index');
    }
}
