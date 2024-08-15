<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;

class PDFController extends Controller
{
    public function index()
    {
        $filename = "demo.pdf";

        $data = [
            'title' => 'Generate PDF usign LARAVEL ประสิทธิ์ชัย'
        ];
        $html = view()->make('pdfSample', $data)->render();

        $pdf = new TCPDF;
        $pdf::SetTitle('Hello World');
        $pdf::AddPage();
        $pdf::SetFont('freeserif', '', 12);
        $pdf::writeHTML($html, true, false, true, false, "");
        $pdf::Output(public_path($filename), "F");
        return response()->download(public_path($filename));
    }
}
