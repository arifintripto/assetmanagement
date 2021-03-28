<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Report;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function generatePDF()
    {
//        $data = Report::findOrfail(1);
        $data = DB::table('reports')
            ->join('dbpointreview', 'reports.id', '=', 'dbpointreview.db_report_id')
            ->join('areaterritoryoverview', 'reports.id', '=', 'areaterritoryoverview.area_report_id')
            ->join('marketworkwith', 'reports.id', '=', 'marketworkwith.market_report_id')
            ->join('agreedactionpoints', 'reports.id', '=', 'agreedactionpoints.agreed_report_id')
            ->where('reports.id', '=', 1)
            ->first();
//        dd($data);

        $pdf = PDF::loadView('dashboard.layout.pdf', compact('data'));

        return $pdf->stream('Report.pdf');
    }
}
