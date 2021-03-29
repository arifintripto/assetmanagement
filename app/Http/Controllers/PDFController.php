<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function generatePDF($id)
    {

        $data = DB::table('reports')
            ->join('dbpointreview', 'reports.id', '=', 'dbpointreview.db_report_id')
            ->join('areaterritoryoverview', 'reports.id', '=', 'areaterritoryoverview.area_report_id')
            ->join('marketworkwith', 'reports.id', '=', 'marketworkwith.market_report_id')
            ->join('agreedactionpoints', 'reports.id', '=', 'agreedactionpoints.agreed_report_id')
            ->where('reports.id', '=', $id)
            ->first();

        $db = DB::table('hierarchies')
            ->where('code', '=', $data->report_db)->get();
        $tso = DB::table('hierarchies')
            ->where('code','=', $db[0]->parent_code)->get();
        $asm = DB::table('hierarchies')
            ->where('code','=', $tso[0]->parent_code)->get();

        $rsm = DB::table('hierarchies')
            ->where('code','=', $asm[0]->parent_code)->get();

        $hierarchy = array([
            'db' =>$db[0],
            'tso'=>$tso[0],
            'asm'=>$asm[0],
            'rsm'=>$rsm[0]
        ]);
        $hierarchy = $hierarchy[0];

        $pdf = PDF::loadView('dashboard.layout.pdf', compact('data', 'hierarchy'));

        return $pdf->stream('Report.pdf');
    }

    public function godown_maintenance_pdf($id) {
        $pdf = PDF::loadView('dashboard.layout.godown_maintenance')->setPaper('a4', 'landscape');

        return $pdf->stream('Godown_Maintenance.pdf');
    }


}
