<?php

namespace App\Http\Controllers\PRO;

use Illuminate\Http\Request;
use App\Models\PRO\Machinery;
use App\Http\Controllers\Controller;
use App\Models\PRO\SparePart;

class MachineryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view user',['only' => ['index']]);
    }
    public function index() {
        return view('pro.index');
    }

    public function reportIndex(Request $request,$machineryId)
    {
        $machineryId = Machinery::findOrFail($machineryId);
        return view('pro.report-machinery',[
            'machinery' => $machineryId,
        ]);
    }

    public function listIndex(Request $request,$sparepartId)
    {
        $sparepartId = SparePart::findOrFail($sparepartId);
        return view('pro.list-machinery',[
            'sparepart' => $sparepartId,
        ]);
    }
}
