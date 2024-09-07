<?php

namespace App\Http\Controllers\RPO;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPalmPurchase extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:view RPO',['only' => ['index']]);
        $this->middleware('permission:create RPO',['only' => ['create','store']]);
        $this->middleware('permission:update RPO',['only' => ['update','edit']]);
        $this->middleware('permission:delete RPO',['only' => ['destory']]);
    }
    public function index()
    {
        return view('RPO.dashboard-palm-purchase-index');
    }
}
