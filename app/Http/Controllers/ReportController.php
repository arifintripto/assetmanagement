<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function step2show($id) {



        $report = DB::table('reports')
            ->where('id', '=', $id)
            ->first();

        $db = DB::table('hierarchies')
            ->where('code', '=', $report->report_db)->first();
        $tso = DB::table('hierarchies')
            ->where('code','=', $db->parent_code)->first();
        $asm = DB::table('hierarchies')
            ->where('code','=', $tso->parent_code)->first();
        $rsm = DB::table('hierarchies')
            ->where('code','=', $asm->parent_code)->first();
        $spos = DB::table('hierarchies')
                ->where('parent_code','=', $db->code)->get();
        $hierarchy = array([
            'spos'=> $spos,
            'db' =>$db,
            'tso'=>$tso,
            'asm'=>$asm,
            'rsm'=>$rsm
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

//            dd($data);

            return view('dashboard.pages.report.step2', compact('data'));
        }
        else {
            $spo_code = DB::table('reports')->where('id','=',$id)->first();
            $spo_name = DB::table('hierarchies')->where('code','=', $spo_code->report_spo)->first();
//            dd($spo_name);
            $data = array([
                'hierarchy' => $hierarchy,
                'report' => $report,
                'id' => $id,
                'report_btn' => $report_btn[0],
                'spo_name' => $spo_name->name
            ]);
            $data = $data[0];



            return view('dashboard.pages.report.step2', compact('data'));
        }

    }
    public function step2spostore($id){
        Report::where([
           'id' => $id
        ])->first()->update([
            'report_spo' => \request('report_spo'),
        ]);
        return redirect(route('inputdbinfo', ['id'=> $id]));
    }
    public function inputdbinfo($id) {

        return view('dashboard.pages.report.dbpoint', compact('id'));

    }

    public function inputdbinfostore(Request $request, $id) {

        $validate_dbpoint = \request()->validate([
            'db_avg_sale' => 'required|numeric',
            'db_ytd_gr_percent' => 'required|numeric',
            'db_month_target' => 'required|numeric',
            'db_mtd_pry' => 'required|numeric',
            'db_mtd_ims' => 'required|numeric',
            'db_stock_value' => 'required|numeric',
            'db_sku_carried' => 'required|numeric',
            'db_sku_stockout' => 'required|numeric',
            'db_wh_mgmt' => 'required',
            'db_fifo' => 'required',
            'db_stock_register' => 'required',
            'db_damage_stk_value' => 'required',
            'db_damage_stk_storage' => 'required',
            'db_beat_plan' => 'required',
            'db_printer_status' => 'required',
            'db_dms_implementation' => 'required',
            'db_no_of_sub_db' => 'numeric|nullable',
            'db_sub_db_avg_sale' => 'numeric|nullable',
            'db_sub_db_month_sale' => 'numeric|nullable',
            'db_sub_db_av_sku' => 'numeric|nullable',
            'db_sub_db_bills_per_month' => 'numeric|nullable',
            'db_sub_db_month_target' => 'numeric|nullable',
            'db_sub_db_mtd_lifting' => 'numeric|nullable',
        ]);

        DB::table('dbpointreview')->insert([
            'db_report_id' => $id,
            'db_avg_sale' => $validate_dbpoint['db_avg_sale'],
            'db_ytd_gr_percent' => $validate_dbpoint['db_ytd_gr_percent'],
            'db_month_target' => $validate_dbpoint['db_month_target'],
            'db_mtd_pry' => $validate_dbpoint['db_mtd_pry'],
            'db_mtd_ims' => $validate_dbpoint['db_mtd_ims'],
            'db_stock_value' => $validate_dbpoint['db_stock_value'],
            'db_sku_carried' => $validate_dbpoint['db_sku_carried'],
            'db_sku_stockout' => $validate_dbpoint['db_sku_stockout'],
            'db_wh_mgmt' => $validate_dbpoint['db_wh_mgmt'],
            'db_fifo' => $validate_dbpoint['db_fifo'],
            'db_stock_register' => $validate_dbpoint['db_stock_register'],
            'db_damage_stk_value' => $validate_dbpoint['db_damage_stk_value'],
            'db_damage_stk_storage' => $validate_dbpoint['db_damage_stk_storage'],
            'db_beat_plan' => $validate_dbpoint['db_beat_plan'],
            'db_printer_status' => $validate_dbpoint['db_printer_status'],
            'db_dms_implementation' => $validate_dbpoint['db_dms_implementation'],
            'db_no_of_sub_db' => $validate_dbpoint['db_no_of_sub_db'],
            'db_sub_db_avg_sale' => $validate_dbpoint['db_sub_db_avg_sale'],
            'db_sub_db_month_sale' => $validate_dbpoint['db_sub_db_month_sale'],
            'db_sub_db_av_sku' => $validate_dbpoint['db_sub_db_av_sku'],
            'db_sub_db_bills_per_month' => $validate_dbpoint['db_sub_db_bills_per_month'],
            'db_sub_db_month_target' => $validate_dbpoint['db_sub_db_month_target'],
            'db_sub_db_mtd_lifting' => $validate_dbpoint['db_sub_db_mtd_lifting'],
        ]);

        return redirect(route('areareview', ['id'=>$id]));
    }

    public function areareview($id) {

        return view('dashboard.pages.report.areareview', compact('id'));

    }

    public function areareviewstore($id) {

        $validate_areareview = \request()->validate([
            'area_avg_sale' => 'required|numeric',
            'area_ytd_gr_percent' => 'required|numeric',
            'area_month_target' => 'required|numeric',
            'area_mtd_pry' => 'required|numeric',
            'area_mtd_ims' => 'required|numeric',
            'area_stock_value' => 'required|numeric',
            'area_stock_days' => 'required|numeric',
            'area_focus_sku_percent_ach' => 'required|numeric',
            'area_sku_stockout' => 'required|numeric',
            'area_spo_tgt_knowledge' => 'required',
            'area_morn_or_eve_meeting' =>  'required',
            'area_sfa_compliance' =>  'required',
            'area_spo_rfts_knowledge' => 'required',
            'area_dsr_status' =>  'required',
            'area_sfa_tabs' =>  'required',
        ]);

        DB::table('areaterritoryoverview')->insert([
            'area_report_id' => $id,
            'area_avg_sale' => $validate_areareview['area_avg_sale'],
            'area_ytd_gr_percent' => $validate_areareview['area_ytd_gr_percent'],
            'area_month_target' => $validate_areareview['area_month_target'],
            'area_mtd_pry' => $validate_areareview['area_mtd_pry'],
            'area_mtd_ims' => $validate_areareview['area_mtd_ims'],
            'area_stock_value' => $validate_areareview['area_stock_value'],
            'area_stock_days' => $validate_areareview['area_stock_days'],
            'area_focus_sku_percent_ach' => $validate_areareview['area_focus_sku_percent_ach'],
            'area_sku_stockout' => $validate_areareview['area_sku_stockout'],
            'area_spo_tgt_knowledge' => $validate_areareview['area_spo_tgt_knowledge'],
            'area_morn_or_eve_meeting' => $validate_areareview['area_morn_or_eve_meeting'],
            'area_sfa_compliance' => $validate_areareview['area_sfa_compliance'],
            'area_spo_rfts_knowledge' => $validate_areareview['area_spo_rfts_knowledge'],
            'area_dsr_status' => $validate_areareview['area_dsr_status'],
            'area_sfa_tabs' => $validate_areareview['area_sfa_tabs'],
        ]);

        return redirect(route('marketwork', ['id'=>$id]));
    }

    public function marketwork($id) {

        return view('dashboard.pages.report.marketwork', compact('id'));

    }

    public function marketworkstore($id) {

        $validate_marketwork = \request()->validate([
            'market_beat_visited' => 'required|string',
            'market_daily_avg' => 'required|numeric',
            'market_day_tgt' => 'required|numeric',
            'market_asking_rate' => 'required|numeric',
            'market_spo_knwl_prep' => 'required|numeric',
            'market_total_outlets' => 'required|numeric',
            'market_outlets_worked' => 'required|numeric',
            'market_eff_calls' => 'required|numeric',
            'market_total_memo_value' => 'required|numeric',
            'market_av_lpc' => 'required|numeric',
            'market_9steps' => 'required',
            'market_focus_sku' => 'required',
            'market_samples' => 'required',
            'market_tab_used' => 'required',
            'market_sfa_compliance' => 'required',
        ]);

        DB::table('marketworkwith')->insert([
            'market_report_id' => $id,
            'market_beat_visited' => $validate_marketwork['market_beat_visited'],
            'market_daily_avg' => $validate_marketwork['market_daily_avg'],
            'market_day_tgt' => $validate_marketwork['market_day_tgt'],
            'market_asking_rate' => $validate_marketwork['market_asking_rate'],
            'market_spo_knwl_prep' => $validate_marketwork['market_spo_knwl_prep'],
            'market_total_outlets' => $validate_marketwork['market_total_outlets'],
            'market_outlets_worked' => $validate_marketwork['market_outlets_worked'],
            'market_eff_calls' => $validate_marketwork['market_eff_calls'],
            'market_total_memo_value' => $validate_marketwork['market_total_memo_value'],
            'market_av_lpc' => $validate_marketwork['market_av_lpc'],
            'market_9steps' => $validate_marketwork['market_9steps'],
            'market_focus_sku' => $validate_marketwork['market_focus_sku'],
            'market_samples' => $validate_marketwork['market_samples'],
            'market_tab_used' => $validate_marketwork['market_tab_used'],
            'market_sfa_compliance' => $validate_marketwork['market_sfa_compliance']
        ]);

        return redirect(route('agreedaction', ['id'=>$id]));
    }
    public function agreedaction($id) {

        return view('dashboard.pages.report.agreedaction', compact('id'));

    }

    public function agreedactionstore($id) {

        $validate_agreedaction = \request()->validate([
            'db_point_actions_agreed' => 'string|nullable',
            'db_point_responsibility' => 'numeric|nullable',
            'db_point_timeline' => 'nullable',
            'sub_db_point_actions_agreed' => 'string|nullable',
            'sub_db_point_responsibility' => 'numeric|nullable',
            'sub_db_point_timeline' => 'nullable',
            'overview_actions_agreed' => 'string|nullable',
            'overview_responsibility' => 'numeric|nullable',
            'overview_timeline' => 'nullable',
            'processes_actions_agreed' => 'string|nullable',
            'processes_responsibility' => 'numeric|nullable',
            'processes_timeline' => 'nullable',
            'mkt_work_actions_agreed' => 'string|nullable',
            'mkt_work_responsibility' => 'numeric|nullable',
            'mkt_work_timeline' => 'nullable',
            'people_actions_agreed' => 'string|nullable',
            'people_responsibility' => 'numeric|nullable',
            'people_timeline' => 'nullable',
            'other_actions_agreed' => 'string|nullable',
            'other_responsibility' => 'numeric|nullable',
            'other_timeline' => 'nullable',
        ]);

        DB::table('agreedactionpoints')->insert([
            'agreed_report_id' => $id,
            'db_point_actions_agreed' => $validate_agreedaction['db_point_actions_agreed'],
            'db_point_responsibility' => $validate_agreedaction['db_point_responsibility'],
            'db_point_timeline' => $validate_agreedaction['db_point_timeline'],
            'sub_db_point_actions_agreed' => $validate_agreedaction['sub_db_point_actions_agreed'],
            'sub_db_point_responsibility' => $validate_agreedaction['sub_db_point_responsibility'],
            'sub_db_point_timeline' => $validate_agreedaction['sub_db_point_timeline'],
            'overview_actions_agreed' => $validate_agreedaction['overview_actions_agreed'],
            'overview_responsibility' => $validate_agreedaction['overview_responsibility'],
            'overview_timeline' => $validate_agreedaction['overview_timeline'],
            'processes_actions_agreed' => $validate_agreedaction['processes_actions_agreed'],
            'processes_responsibility' => $validate_agreedaction['processes_responsibility'],
            'processes_timeline' => $validate_agreedaction['processes_timeline'],
            'mkt_work_actions_agreed' => $validate_agreedaction['mkt_work_actions_agreed'],
            'mkt_work_responsibility' => $validate_agreedaction['mkt_work_responsibility'],
            'mkt_work_timeline' => $validate_agreedaction['mkt_work_timeline'],
            'people_actions_agreed' => $validate_agreedaction['people_actions_agreed'],
            'people_responsibility' => $validate_agreedaction['people_responsibility'],
            'people_timeline' => $validate_agreedaction['people_timeline'],
            'other_actions_agreed' => $validate_agreedaction['other_actions_agreed'],
            'other_responsibility' => $validate_agreedaction['other_responsibility'],
            'other_timeline' => $validate_agreedaction['other_timeline'],
        ]);

        return redirect(route('godown', ['id'=>$id]));
    }

    public function godown($id) {

        return view('dashboard.pages.report.godown_maintenance', compact('id'));

    }

    public function godownstore($id) {

        $validate_godown = \request()->validate([
            'cool_area_compliance' => 'required',
            'cool_area_comments' => 'string|nullable',
            'cool_area_corrective_action' => 'string|nullable',
            'cool_area_corrective_date' => 'nullable',
            'dry_place_compliance' => 'required',
            'dry_place_comments' => 'string|nullable',
            'dry_place_corrective_action' => 'string|nullable',
            'dry_place_corrective_date' => 'nullable',
            'free_from_dirt_cobwebs_compliance' => 'required',
            'free_from_dirt_cobwebs_comments' => 'string|nullable',
            'free_from_dirt_cobwebs_corrective_action' => 'string|nullable',
            'free_from_dirt_cobwebs_corrective_date' => 'nullable',
            'away_from_smell_compliance' => 'required',
            'away_from_smell_comments' => 'string|nullable',
            'away_from_smell_corrective_action' => 'string|nullable',
            'away_from_smell_corrective_date' => 'nullable',
            'fifo_maintained_compliance' => 'required',
            'fifo_maintained_comments' => 'string|nullable',
            'fifo_maintained_corrective_action' => 'string|nullable',
            'fifo_maintained_corrective_date' => 'nullable',
            'pets_control_in6months_compliance' => 'required',
            'pets_control_in6months_comments' => 'string|nullable',
            'pets_control_in6months_corrective_action' => 'string|nullable',
            'pets_control_in6months_corrective_date' => 'nullable',
            'recommended_height_compliance' => 'required',
            'recommended_height_comments' => 'string|nullable',
            'recommended_height_corrective_action' => 'string|nullable',
            'recommended_height_corrective_date' => 'nullable',
            'proper_illiminated_compliance' => 'required',
            'proper_illiminated_comments' => 'string|nullable',
            'proper_illiminated_corrective_action' => 'string|nullable',
            'proper_illiminated_corrective_date' => 'nullable',
            'sagregated_from_expired_dmg_compliance' => 'required',
            'sagregated_from_expired_dmg_comments' => 'string|nullable',
            'sagregated_from_expired_dmg_corrective_action' => 'string|nullable',
            'sagregated_from_expired_dmg_corrective_date' => 'nullable',
            'sign_put_up_compliance' => 'required',
            'sign_put_up_comments' => 'string|nullable',
            'sign_put_up_corrective_action' => 'string|nullable',
            'sign_put_up_corrective_date' => 'nullable',
            'loading_receipt_quality_compliance' => 'required',
            'loading_receipt_quality_comments' => 'string|nullable',
            'loading_receipt_quality_corrective_action' => 'string|nullable',
            'loading_receipt_quality_corrective_date' => 'nullable',
        ]);

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
        $reports = DB::table('reports')
            ->join('godownmaintenance', 'reports.id', '=', 'godownmaintenance.godown_report_id')->get();

        foreach ($reports as $report) {
            $db_codes[] = $report->report_db;
        }

        $dbs = DB::table('hierarchies')
                ->whereIn('code', $db_codes)->get();


        return view('dashboard.pages.report.index', compact('reports', 'dbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = Auth::user()->rsm_asm;

        if (substr( $user, 0, -2) == 'RM' ){
            $rsm = DB::table('hierarchies')->where('code','=', $user)->first();

            $asms = DB::table('hierarchies')
                ->where('parent_code', '=', $rsm->code)->get();

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
        }
        elseif (substr( $user, 0, -2) == 'AM'){
            $asms = DB::table('hierarchies')
                ->where('code', '=', $user)->get();

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
        }



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
        $user = Auth::user()->rsm_asm;
        $db = DB::table('hierarchies')
            ->where('code', '=', \request('report_db'))->get();
        $db = $db[0];


        DB::table('reports')->insert([
            'report_date'=> Carbon::today()->toDateString(),
            'report_rsm_asm'=> $user,
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
//    public function show(Report $report)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
//    public function edit(Report $report)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, Report $report)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
//    public function destroy(Report $report)
//    {
//        //
//    }
}
