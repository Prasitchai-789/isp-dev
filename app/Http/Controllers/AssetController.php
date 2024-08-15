<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function assetIndex() {
        return view('asset.index');
    }
}
