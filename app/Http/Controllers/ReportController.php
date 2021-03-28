<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('country_state_city')
            ->where($select, $value)
            ->groupBy($dependent)
            ->get();
        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $row)
        {
            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
        echo $output;
    }

    public function getSpoList($parent_code){
        $spos = DB::table('hierarchies')->where('parent_code', $parent_code)->get();

        return json_encode($spos);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asms = DB::table('hierarchies')
                ->where('parent_code', '=', 'RM04')->get();
        foreach ($asms as $asm){
            $asms_codes[] = $asm->code;
        }
        $tsos = DB::table('hierarchies')
                ->whereIn('parent_code', $asms_codes)->get();
        foreach ($tsos as $tso){
            $tso_codes[] = $tso->code;
        }
        $dbs = DB::table('hierarchies')
            ->whereIn('parent_code', $tso_codes)->get();

//        dd($dbs);
        return view('dashboard.pages.report.create', compact('dbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Report::create(\request()->validate([
            'report_date' => '',
            'report_asm_rsm' => '',
            'report_area' => '',
            'report_asm' => '',
            'report_territory' => '',
            'report_tso' => '',
            'report_town' => '',
            'report_spo' => '',
            'report_db' => ''
        ]));
        DB::table('dbpointreview')->updateOrInsert(\request()->validate([
            'db_avg_sale' => '',
            'db_ytd_gr_percent' => '',
            'db_month_target' => '',
            'db_mtd_pry' => '',
            'db_mtd_ims' => '',
            'db_stock_value' => '',
            'db_sku_carried' => '',
            'db_sku_stockout' => '',
            'db_wh_mgmt' => '',
            'db_fifo' => '',
            'db_stock_register' => '',
            'db_damage_stk_value' => '',
            'db_damage_stk_storage' => '',
            'db_beat_plan' => '',
            'db_printer_status' => '',
            'db_dms_implementation' => '',
            'db_no_of_sub_db' => '',
            'db_sub_db_avg_sale' => '',
            'db_sub_db_month_sale' => '',
            'db_sub_db_av_sku' => '',
            'db_sub_db_bills_per_month' => '',
            'db_sub_db_month_target' => '',
            'db_sub_db_mtd_lifting' => '',
        ]));
        DB::table('areaterritoryoverview')->updateOrInsert(\request()->validate([
            'area_avg_sale' => '',
            'area_ytd_gr_percent' => '',
            'area_month_target' => '',
            'area_mtd_pry' => '',
            'area_mtd_ims' => '',
            'area_stock_value' => '',
            'area_stock_days' => '',
            'area_focus_sku_percent_ach' => '',
            'area_sku_stockout' => '',
            'area_spo_tgt_knowledge' => '',
            'area_morn_or_eve_meeting' => '',
            'area_sfa_compliance' => '',
            'area_spo_rfts_knowledge' => '',
            'area_dsr_status' => '',
            'area_sfa_tabs' => '',
        ]));
        DB::table('marketworkwith')->updateOrInsert(\request()->validate([
            'market_beat_visited' => '',
            'market_daily_avg' => '',
            'market_day_tgt' => '',
            'market_asking_rate' => '',
            'market_spo_knwl_prep' => '',
            'market_total_outlets' => '',
            'market_outlets_worked' => '',
            'market_eff_calls' => '',
            'market_total_memo_value' => '',
            'market_av_lpc' => '',
            'market_9steps' => '',
            'market_focus_sku' => '',
            'market_samples' => '',
            'market_tab_used' => '',
            'market_sfa_compliance' => '',
        ]));
        DB::table('agreedactionpoints')->updateOrInsert(\request()->validate([
            'db_point_actions_agreed' => '',
            'db_point_responsibility' => '',
            'db_point_timeline' => '',
            'sub_db_point_actions_agreed' => '',
            'sub_db_point_responsibility' => '',
            'sub_db_point_timeline' => '',
            'overview_actions_agreed' => '',
            'overview_responsibility' => '',
            'overview_timeline' => '',
            'processes_actions_agreed' => '',
            'processes_responsibility' => '',
            'processes_timeline' => '',
            'mkt_work_actions_agreed' => '',
            'mkt_work_responsibility' => '',
            'mkt_work_timeline' => '',
            'people_actions_agreed' => '',
            'people_responsibility' => '',
            'people_timeline' => '',
            'other_actions_agreed' => '',
            'other_responsibility' => '',
            'other_timeline' => ''
        ]));

        return view('dashboard.pages.dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
