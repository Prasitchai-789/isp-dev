<?php

namespace App\Http\Controllers\Technician;

use Illuminate\Http\Request;
use App\Models\PRO\Machinery;
use App\Models\PRO\SparePart;
use App\Http\Controllers\Controller;

class MachineryReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view PRO',['only' => ['index','reportIndex','sparePartIndex']]);
    }
    public function index() {
        return view('technician.machinery-index');
    }

    public function reportIndex($machineryId)
    {
        $machinery = Machinery::findOrFail($machineryId);
        return view('technician.machinery-report-index', [
            'machinery' => $machinery,
        ]);
    }

    public function sparePartIndex(Request $request,$sparePartId)
    {
        $sparePartId = SparePart::findOrFail($sparePartId);
        return view('technician.spare-part-index',[
            'sparePart' => $sparePartId,
        ]);
    }
}
