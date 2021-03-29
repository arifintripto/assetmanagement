<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{

    public function step2show($id) {


        $report = DB::table('reports')
            ->where('id', '=', $id)
            ->first();
        $db = DB::table('hierarchies')
            ->where('code', '=', $report->report_db)->get();
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

        $report_btn = DB::table('godownmaintenance')->where('godown_report_id','=', $id)->pluck('id');
//        dd($report_btn[0]);

        if (!isset($report_btn[0])) {
            $data = array([
                'hierarchy' => $hierarchy,
                'report' => $report,
                'id' => $id
            ]);
            $data = $data[0];

            return view('dashboard.pages.report.step2', compact('data'));
        }
        else {
            $data = array([
                'hierarchy' => $hierarchy,
                'report' => $report,
                'id' => $id,
                'report_btn' => $report_btn[0]
            ]);
            $data = $data[0];

            return view('dashboard.pages.report.step2', compact('data'));
        }

    }

    public function inputdbinfo($id) {

        return view('dashboard.pages.report.dbpoint', compact('id'));

    }

    public function inputdbinfostore($id) {

        DB::table('dbpointreview')->insert([
            'db_report_id' => $id,
            'db_avg_sale' => \request('db_avg_sale'),
            'db_ytd_gr_percent' => \request('db_ytd_gr_percent'),
            'db_month_target' => \request('db_month_target'),
            'db_mtd_pry' => \request('db_mtd_pry'),
            'db_mtd_ims' => \request('db_mtd_ims'),
            'db_stock_value' => \request('db_stock_value'),
            'db_sku_carried' => \request('db_sku_carried'),
            'db_sku_stockout' => \request('db_sku_stockout'),
            'db_wh_mgmt' => \request('db_wh_mgmt'),
            'db_fifo' => \request('db_fifo'),
            'db_stock_register' => \request('db_stock_register'),
            'db_damage_stk_value' => \request('db_damage_stk_value'),
            'db_damage_stk_storage' => \request('db_damage_stk_storage'),
            'db_beat_plan' => \request('db_beat_plan'),
            'db_printer_status' => \request('db_printer_status'),
            'db_dms_implementation' => \request('db_dms_implementation'),
            'db_no_of_sub_db' => \request('db_no_of_sub_db'),
            'db_sub_db_avg_sale' => \request('db_sub_db_avg_sale'),
            'db_sub_db_month_sale' => \request('db_sub_db_month_sale'),
            'db_sub_db_av_sku' => \request('db_sub_db_av_sku'),
            'db_sub_db_bills_per_month' => \request('db_sub_db_bills_per_month'),
            'db_sub_db_month_target' => \request('db_sub_db_month_target'),
            'db_sub_db_mtd_lifting' => \request('db_sub_db_mtd_lifting'),
        ]);

        return redirect(route('areareview', ['id'=>$id]));
    }

    public function areareview($id) {

        return view('dashboard.pages.report.areareview', compact('id'));

    }

    public function areareviewstore($id) {

        DB::table('areaterritoryoverview')->insert([
            'area_report_id' => $id,
            'area_avg_sale' => \request('area_avg_sale'),
            'area_ytd_gr_percent' => \request('area_ytd_gr_percent'),
            'area_month_target' => \request('area_month_target'),
            'area_mtd_pry' => \request('area_mtd_pry'),
            'area_mtd_ims' => \request('area_mtd_ims'),
            'area_stock_value' => \request('area_stock_value'),
            'area_stock_days' => \request('area_stock_days'),
            'area_focus_sku_percent_ach' => \request('area_focus_sku_percent_ach'),
            'area_sku_stockout' => \request('area_sku_stockout'),
            'area_spo_tgt_knowledge' => \request('area_spo_tgt_knowledge'),
            'area_morn_or_eve_meeting' => \request('area_morn_or_eve_meeting'),
            'area_sfa_compliance' => \request('area_sfa_compliance'),
            'area_spo_rfts_knowledge' => \request('area_spo_rfts_knowledge'),
            'area_dsr_status' => \request('area_dsr_status'),
            'area_sfa_tabs' => \request('area_sfa_tabs')
        ]);

        return redirect(route('marketwork', ['id'=>$id]));
    }

    public function marketwork($id) {

        return view('dashboard.pages.report.marketwork', compact('id'));

    }

    public function marketworkstore($id) {

        DB::table('marketworkwith')->insert([
            'market_report_id' => $id,
            'market_beat_visited' => \request('market_beat_visited'),
            'market_daily_avg' => \request('market_daily_avg'),
            'market_day_tgt' => \request('market_day_tgt'),
            'market_asking_rate' => \request('market_asking_rate'),
            'market_spo_knwl_prep' => \request('market_spo_knwl_prep'),
            'market_total_outlets' => \request('market_total_outlets'),
            'market_outlets_worked' => \request('market_outlets_worked'),
            'market_eff_calls' => \request('market_eff_calls'),
            'market_total_memo_value' => \request('market_total_memo_value'),
            'market_av_lpc' => \request('market_av_lpc'),
            'market_9steps' => \request('market_9steps'),
            'market_focus_sku' => \request('market_focus_sku'),
            'market_samples' => \request('market_samples'),
            'market_tab_used' => \request('market_tab_used'),
            'market_sfa_compliance' => \request('market_sfa_compliance')
        ]);

        return redirect(route('agreedaction', ['id'=>$id]));
    }
    public function agreedaction($id) {

        return view('dashboard.pages.report.agreedaction', compact('id'));

    }

    public function agreedactionstore($id) {

        DB::table('agreedactionpoints')->insert([
            'agreed_report_id' => $id,
            'db_point_actions_agreed' => \request('db_point_actions_agreed'),
            'db_point_responsibility' => \request('db_point_responsibility'),
            'db_point_timeline' => \request('db_point_timeline'),
            'sub_db_point_actions_agreed' => \request('sub_db_point_actions_agreed'),
            'sub_db_point_responsibility' => \request('sub_db_point_responsibility'),
            'sub_db_point_timeline' => \request('sub_db_point_timeline'),
            'overview_actions_agreed' => \request('overview_actions_agreed'),
            'overview_responsibility' => \request('overview_responsibility'),
            'overview_timeline' => \request('overview_timeline'),
            'processes_actions_agreed' => \request('processes_actions_agreed'),
            'processes_responsibility' => \request('processes_responsibility'),
            'processes_timeline' => \request('processes_timeline'),
            'mkt_work_actions_agreed' => \request('mkt_work_actions_agreed'),
            'mkt_work_responsibility' => \request('mkt_work_responsibility'),
            'mkt_work_timeline' => \request('mkt_work_timeline'),
            'people_actions_agreed' => \request('people_actions_agreed'),
            'people_responsibility' => \request('people_responsibility'),
            'people_timeline' => \request('people_timeline'),
            'other_actions_agreed' => \request('other_actions_agreed'),
            'other_responsibility' => \request('other_responsibility'),
            'other_timeline' => \request('other_timeline')
        ]);

        return redirect(route('godown', ['id'=>$id]));
    }

    public function godown($id) {

        return view('dashboard.pages.report.godown_maintenance', compact('id'));

    }

    public function godownstore($id) {

        DB::table('godownmaintenance')->insert([
        'godown_report_id' => $id,
        'cool_area_compliance' => \request('cool_area_compliance'),
        'cool_area_comments' => \request('cool_area_comments'),
        'cool_area_corrective_action' => \request('cool_area_corrective_action'),
        'cool_area_corrective_date' => \request('cool_area_corrective_date'),
        'dry_place_compliance' => \request('dry_place_compliance'),
        'dry_place_comments' => \request('dry_place_comments'),
        'dry_place_corrective_action' => \request('dry_place_corrective_action'),
        'dry_place_corrective_date' => \request('dry_place_corrective_date'),
        'free_from_dirt_cobwebs_compliance' => \request('free_from_dirt_cobwebs_compliance'),
        'free_from_dirt_cobwebs_comments' => \request('free_from_dirt_cobwebs_comments'),
        'free_from_dirt_cobwebs_corrective_action' => \request('free_from_dirt_cobwebs_corrective_action'),
        'free_from_dirt_cobwebs_corrective_date' => \request('free_from_dirt_cobwebs_corrective_date'),
        'away_from_smell_compliance' => \request('away_from_smell_compliance'),
        'away_from_smell_comments' => \request('away_from_smell_comments'),
        'away_from_smell_corrective_action' => \request('away_from_smell_corrective_action'),
        'away_from_smell_corrective_date' => \request('away_from_smell_corrective_date'),
        'fifo_maintained_compliance' => \request('fifo_maintained_compliance'),
        'fifo_maintained_comments' => \request('fifo_maintained_comments'),
        'fifo_maintained_corrective_action' => \request('fifo_maintained_corrective_action'),
        'fifo_maintained_corrective_date' => \request('fifo_maintained_corrective_date'),
        'pets_control_in6months_compliance' => \request('pets_control_in6months_compliance'),
        'pets_control_in6months_comments' => \request('pets_control_in6months_comments'),
        'pets_control_in6months_corrective_action' => \request('pets_control_in6months_corrective_action'),
        'pets_control_in6months_corrective_date' => \request('pets_control_in6months_corrective_date'),
        'recommended_height_compliance' => \request('recommended_height_compliance'),
        'recommended_height_comments' => \request('recommended_height_comments'),
        'recommended_height_corrective_action' => \request('recommended_height_corrective_action'),
        'recommended_height_corrective_date' => \request('recommended_height_corrective_date'),
        'proper_illiminated_compliance' => \request('proper_illiminated_comments'),
        'proper_illiminated_comments' => \request('proper_illiminated_comments'),
        'proper_illiminated_corrective_action' => \request('proper_illiminated_corrective_action'),
        'proper_illiminated_corrective_date' => \request('proper_illiminated_corrective_date'),
        'sagregated_from_expired_dmg_compliance' => \request('sagregated_from_expired_dmg_compliance'),
        'sagregated_from_expired_dmg_comments' => \request('sagregated_from_expired_dmg_comments'),
        'sagregated_from_expired_dmg_corrective_action' => \request('sagregated_from_expired_dmg_corrective_action'),
        'sagregated_from_expired_dmg_corrective_date' => \request('sagregated_from_expired_dmg_corrective_date'),
        'sign_put_up_compliance' => \request('sign_put_up_compliance'),
        'sign_put_up_comments' => \request('sign_put_up_comments'),
        'sign_put_up_corrective_action' => \request('sign_put_up_corrective_action'),
        'sign_put_up_corrective_date' => \request('sign_put_up_corrective_date'),
        'loading_receipt_quality_compliance' => \request('loading_receipt_quality_compliance'),
        'loading_receipt_quality_comments' => \request('loading_receipt_quality_comments'),
        'loading_receipt_quality_corrective_action' => \request('loading_receipt_quality_corrective_action'),
        'loading_receipt_quality_corrective_date' => \request('loading_receipt_quality_corrective_date'),
        ]);

        return redirect()->route('step2show', ['id'=>$id]);
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
            ->where('parent_code', '=', 'RM01')->get();

        if ($asms) {
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
        }



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
        $db = DB::table('hierarchies')
            ->where('code', '=', \request('report_db'))->get();
        $db = $db[0];
//        $tso = DB::table('hierarchies')
//            ->where('code','=', $db[0]->parent_code)->get();
//        $asm = DB::table('hierarchies')
//            ->where('code','=', $tso[0]->parent_code)->get();


        DB::table('reports')->insert([
            'report_date'=> Carbon::today()->toDateString(),
            'report_db' => $db->code
        ]);

        $id = DB::table('reports')->pluck('id')->last();




        return redirect()->route('step2show', ['id'=>$id]);
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
