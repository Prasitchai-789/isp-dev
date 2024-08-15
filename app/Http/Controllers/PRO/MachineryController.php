<?php

namespace App\Http\Controllers\PRO;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MachineryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view user',['only' => ['index']]);
    }
    public function index() {
        return view('pro.index');
    }

    public function reportIndex()
    {
        return view('pro.report-machinery');
    }

    public function listIndex()
    {
        return view('pro.list-machinery');
    }
}
