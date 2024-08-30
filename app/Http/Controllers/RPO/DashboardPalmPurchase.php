<?php

namespace App\Http\Controllers\RPO;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPalmPurchase extends Controller
{
    public function index()
    {
        return view('RPO.dashboard-palm-purchase-index');
    }
}
