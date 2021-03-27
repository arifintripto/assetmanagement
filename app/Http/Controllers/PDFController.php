<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Report;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = Report::findOrFail(1);
//        dd($data);

        $pdf = PDF::loadView('dashboard.layout.pdf', $data);

        return $pdf->stream('Report.pdf');
    }
}
