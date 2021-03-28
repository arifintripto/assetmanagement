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
//            ->join('dbpointreview', 'reports.id', '=', 'dbpointreview.db_report_id')
//            ->join('areaterritoryoverview', 'reports.id', '=', 'areaterritoryoverview.area_report_id')
//            ->join('marketworkwith', 'reports.id', '=', 'marketworkwith.market_report_id')
//            ->join('agreedactionpoints', 'reports.id', '=', 'agreedactionpoints.agreed_report_id')
            ->where('reports.id', '=', 4)
            ->first();
//        dd($data->report_db);


        $db = DB::table('hierarchies')
            ->where('code', '=', $data->report_db)->get();
        $tso = DB::table('hierarchies')
            ->where('code','=', $db[0]->parent_code)->get();
        $asm = DB::table('hierarchies')
            ->where('code','=', $tso[0]->parent_code)->get();

        $hierarchy = array([
            'db' =>$db[0],
            'tso'=>$tso[0],
            'asm'=>$asm[0]
        ]);
        $hierarchy = $hierarchy[0];
//        dd($hierarchy['db']->name,$hierarchy['db']->area,$hierarchy['tso']->name,$hierarchy['tso']->area,$hierarchy['asm']->name,$hierarchy['asm']->area);

        $pdf = PDF::loadView('dashboard.layout.pdf', compact('data', 'hierarchy'));

        return $pdf->stream('Report.pdf');
    }
}
