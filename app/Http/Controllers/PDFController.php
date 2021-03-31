<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
            ->where('code', '=', $data->report_db)->first();
        $spo = DB::table('hierarchies')->where('parent_code','=', $db->code);
        $tso = DB::table('hierarchies')
            ->where('code','=', $db->parent_code)->first();
        $asm = DB::table('hierarchies')
            ->where('code','=', $tso->parent_code)->first();

        $rsm = DB::table('hierarchies')
            ->where('code','=', $asm->parent_code)->first();

        $hierarchy = array([
            'spo' => $spo,
            'db' =>$db,
            'tso'=>$tso,
            'asm'=>$asm,
            'rsm'=>$rsm
        ]);
        $hierarchy = $hierarchy[0];

        $pdf = PDF::loadView('dashboard.layout.pdf', compact('data', 'hierarchy'));

        return $pdf->stream('Report.pdf');
    }

    public function godown_maintenance_pdf($id) {

        $data = DB::table('reports')
            ->join('godownmaintenance', 'reports.id', '=', 'godownmaintenance.godown_report_id')
            ->where('reports.id', '=', $id)
            ->first();

        $db = DB::table('hierarchies')
            ->where('code', '=', $data->report_db)->first();
        $tso = DB::table('hierarchies')
            ->where('code','=', $db->parent_code)->first();
        $asm = DB::table('hierarchies')
            ->where('code','=', $tso->parent_code)->first();

        $rsm = DB::table('hierarchies')
            ->where('code','=', $asm->parent_code)->get();

        $hierarchy = array([
            'db' =>$db,
            'tso'=>$tso,
            'asm'=>$asm,
            'rsm'=>$rsm
        ]);
        $hierarchy = $hierarchy[0];

        $pdf = PDF::loadView('dashboard.layout.godown_maintenance', compact('data', 'hierarchy'))->setPaper('a4', 'landscape');

        return $pdf->stream('Godown_Maintenance.pdf');
    }


}
