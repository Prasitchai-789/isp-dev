<?php

namespace App\Http\Controllers\IT;

use Illuminate\Http\Request;
use App\Models\Technical\WorkOrder;
use App\Http\Controllers\Controller;

class RepairController extends Controller
{
    public function index()
    {
        return view('IT.repair-index');
    }
}
