<?php

namespace App\Http\Controllers\GM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPalmController extends Controller
{
    public function index()
    {
        return view('GM.dashboard-palm-index');
    }
}
