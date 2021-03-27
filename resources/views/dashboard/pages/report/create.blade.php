@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">Create New Report</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('report.index') }}">Report</a></li>
        <li class="breadcrumb-item active">Create New Report</li>
    </ol>

    <form class="col-md-12 mb-5" method="POST" action="{{ route('report.store') }}">
        @csrf
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Report Details</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date">Date</label>
                        <input type="date" class="form-control mb-3" id="date" placeholder="Date" name="date"
                               autocomplete="off" value="{{ old('date') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="asm_rsm">ASM/RSM</label>
                        <select class="custom-select custom-select-md mb-3" id="asm_rsm" name="asm_rsm">
                            <option selected disabled>Select ASM/RSM</option>
                            <option value="1">ASM</option>
                            <option value="2">RSM</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Visit Location Details</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="report_area">Area</label>
                        <input type="text" class="form-control mb-3" id="report_area" placeholder="Area" name="report_area"
                               autocomplete="off" value="{{ old('report_area') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="report_asm">ASM</label>
                        <input type="text" class="form-control mb-3" id="report_asm" placeholder="ASM" name="report_asm"
                               autocomplete="off" value="{{ old('report_asm') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="report_territory">Territory</label>
                        <input type="text" class="form-control mb-3" id="report_territory" placeholder="Territory"
                               name="report_territory"
                               autocomplete="off" value="{{ old('report_territory') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="report_tso">TSO</label>
                        <input type="text" class="form-control mb-3" id="tso" placeholder="TSO" name="report_tso"
                               autocomplete="off" value="{{ old('report_tso') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="report_town">Town</label>
                        <input type="text" class="form-control mb-3" id="report_town" placeholder="Town" name="report_town"
                               autocomplete="off" value="{{ old('report_town') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="report_spo">SPO</label>
                        <input type="text" class="form-control mb-3" id="report_spo" placeholder="SPO" name="report_spo"
                               autocomplete="off" value="{{ old('report_spo') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="report_db">Distribution</label>
                        <input type="text" class="form-control mb-3" id="report_db" placeholder="Distribution"
                               name="report_db"
                               autocomplete="off" value="{{ old('report_db') }}">
                    </div>
                </div>

            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">DB Point Review</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="db_avg_sale">DB Average Sale</label>
                        <input type="text" class="form-control mb-3" id="db_avg_sale" placeholder="DB Average Sale"
                               name="db_avg_sale"
                               autocomplete="off" value="{{ old('db_avg_sale') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="wh_mgmt">Warehouse Management</label>
                        <select class="custom-select custom-select-md mb-3" id="wh_mgmt" name="wh_mgmt">
                            <option selected>Warehouse Management</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                </div>
{{--                <div class="form-row">--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="db_ytd_gr_percent">DB Year to Date Growth</label>--}}
{{--                        <input type="text" class="form-control mb-3" id="db_ytd_gr_percent"--}}
{{--                               placeholder="DB Year to Date Growth" name="db_ytd_gr_percent"--}}
{{--                               autocomplete="off" value="{{ old('db_ytd_gr_percent') }}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="fifo">FIFO</label>--}}
{{--                        <select class="custom-select custom-select-md mb-3" id="fifo" name="fifo">--}}
{{--                            <option selected>FIFO</option>--}}
{{--                            <option value="1">OK</option>--}}
{{--                            <option value="2">Not OK</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-row">--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="month_target">Month Target</label>--}}
{{--                        <input type="text" class="form-control mb-3" id="month_target" placeholder="Month Target"--}}
{{--                               name="month_target"--}}
{{--                               autocomplete="off" value="{{ old('month_target') }}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="stock_register">Stock Register</label>--}}
{{--                        <select class="custom-select custom-select-md mb-3" id="stock_register" name="stock_register">--}}
{{--                            <option selected>Stock Register</option>--}}
{{--                            <option value="1">OK</option>--}}
{{--                            <option value="2">Not OK</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-row">--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="mtd_pry">MTD Pry</label>--}}
{{--                        <input type="text" class="form-control mb-3" id="mtd_pry" placeholder="MTD Pry" name="mtd_pry"--}}
{{--                               autocomplete="off" value="{{ old('mtd_pry') }}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="damage_stk_value">Damage Stock Value</label>--}}
{{--                        <input type="text" class="form-control mb-3" id="damage_stk_value"--}}
{{--                               placeholder="Damage Stock Value" name="damage_stk_value"--}}
{{--                               autocomplete="off" value="{{ old('damage_stk_value') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-row">--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="mtd_ims">MTD IMS</label>--}}
{{--                        <input type="text" class="form-control mb-3" id="mtd_ims" placeholder="MTD IMS" name="mtd_ims"--}}
{{--                               autocomplete="off" value="{{ old('mtd_ims') }}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="damage_stk_storage">Damage Stock Storage</label>--}}
{{--                        <select class="custom-select custom-select-md mb-3" id="damage_stk_storage"--}}
{{--                                name="damage_stk_storage">--}}
{{--                            <option selected>Damage Stock Storage</option>--}}
{{--                            <option value="1">OK</option>--}}
{{--                            <option value="2">Not OK</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-row">--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="stock_value">Stock Value</label>--}}
{{--                        <input type="text" class="form-control mb-3" id="stock_value" placeholder="Stock Value"--}}
{{--                               name="stock_value"--}}
{{--                               autocomplete="off" value="{{ old('stock_value') }}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="beat_plan">Beat Plan</label>--}}
{{--                        <select class="custom-select custom-select-md mb-3" id="beat_plan" name="beat_plan">--}}
{{--                            <option selected>Beat Plan</option>--}}
{{--                            <option value="1">OK</option>--}}
{{--                            <option value="2">Not OK</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-row">--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="sku_carried">#SKU Carried</label>--}}
{{--                        <input type="text" class="form-control mb-3" id="sku_carried" placeholder="#SKU Carried"--}}
{{--                               name="sku_carried"--}}
{{--                               autocomplete="off" value="{{ old('sku_carried') }}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="printer_status">Printer Status</label>--}}
{{--                        <select class="custom-select custom-select-md mb-3" id="printer_status" name="printer_status">--}}
{{--                            <option selected>Printer Status</option>--}}
{{--                            <option value="1">OK</option>--}}
{{--                            <option value="2">Not OK</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-row">--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="sku_stockout">SKU's Stockout</label>--}}
{{--                        <input type="text" class="form-control mb-3" id="sku_stockout" placeholder="SKU's Stockout"--}}
{{--                               name="sku_stockout"--}}
{{--                               autocomplete="off" value="{{ old('sku_stockout') }}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="dms_implementation">DMS Implementation</label>--}}
{{--                        <select class="custom-select custom-select-md mb-3" id="dms_implementation"--}}
{{--                                name="dms_implementation">--}}
{{--                            <option selected>DMS Implementation</option>--}}
{{--                            <option value="1">OK</option>--}}
{{--                            <option value="2">Not OK</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Area/Territory Overview</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="avg_sale">ASM/TSO Average Sale</label>
                        <input type="text" class="form-control mb-3" id="avg_sale" placeholder="ASM/TSO Average Sale"
                               name="avg_sale"
                               autocomplete="off" value="{{ old('avg_sale') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="stock_value">Stock Value</label>
                        <input type="text" class="form-control mb-3" id="stock_value" placeholder="Stock Value"
                               name="stock_value"
                               autocomplete="off" value="{{ old('stock_value') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ytd_gr_percent">Year to Date Growth</label>
                        <input type="text" class="form-control mb-3" id="ytd_gr_percent"
                               placeholder="Year to Date Growth" name="ytd_gr_percent"
                               autocomplete="off" value="{{ old('ytd_gr_percent') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="stock_days">Stock Days</label>
                        <input type="text" class="form-control mb-3" id="stock_days" placeholder="Stock Days"
                               name="stock_days"
                               autocomplete="off" value="{{ old('stock_days') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="month_target">Month Target</label>
                        <input type="text" class="form-control mb-3" id="month_target" placeholder="Month Target"
                               name="month_target"
                               autocomplete="off" value="{{ old('month_target') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="focus_sku_percent_ach">Focus SKU %Ach</label>
                        <input type="text" class="form-control mb-3" id="focus_sku_percent_ach"
                               placeholder="Focus SKU %Ach" name="focus_sku_percent_ach"
                               autocomplete="off" value="{{ old('focus_sku_percent_ach') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="mtd_pry">MTD Pry</label>
                        <input type="text" class="form-control mb-3" id="mtd_pry" placeholder="MTD Pry" name="mtd_pry"
                               autocomplete="off" value="{{ old('mtd_pry') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sku_stockout">SKU Stockout</label>
                        <input type="text" class="form-control mb-3" id="sku_stockout" placeholder="SKU Stockout"
                               name="sku_stockout"
                               autocomplete="off" value="{{ old('sku_stockout') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="mtd_ims">MTD IMS</label>
                        <input type="text" class="form-control mb-3" id="mtd_ims" placeholder="MTD IMS" name="mtd_ims"
                               autocomplete="off" value="{{ old('mtd_ims') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="spo_tgt_knowledge">SPO Target Knowledge</label>
                        <select class="custom-select custom-select-md mb-3" id="spo_tgt_knowledge"
                                name="SPO Target Knowledge">
                            <option selected>Damage Stock Storage</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="morn_or_eve_meeting">Morn/Eve Meetings</label>
                        <select class="custom-select custom-select-md mb-3" id="morn_or_eve_meeting"
                                name="morn_or_eve_meeting">
                            <option selected>Morn/Eve Meetings</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sfa_compliance">SFA Compliance</label>
                        <select class="custom-select custom-select-md mb-3" id="sfa_compliance" name="sfa_compliance">
                            <option selected>SFA Compliance</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="spo_rfts_knowledge">SPO RFTS Knowledge</label>
                        <select class="custom-select custom-select-md mb-3" id="spo_rfts_knowledge"
                                name="spo_rfts_knowledge">
                            <option selected>SPO RFTS Knowledge</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="dsr_status">DSR Status</label>
                        <select class="custom-select custom-select-md mb-3" id="dsr_status" name="dsr_status">
                            <option selected>DSR Status</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sfa_tabs">SFA Tabs</label>
                        <select class="custom-select custom-select-md mb-3" id="sfa_tabs" name="sfa_tabs">
                            <option selected>SFA Tabs</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Market Work With</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="beat_visited">Beat Visited</label>
                        <input type="text" class="form-control mb-3" id="beat_visited" placeholder="Beat Visited"
                               name="beat_visited"
                               autocomplete="off" value="{{ old('beat_visited') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="total_outlets">Total Outlets</label>
                        <input type="text" class="form-control mb-3" id="total_outlets" placeholder="Total Outlets"
                               name="total_outlets"
                               autocomplete="off" value="{{ old('total_outlets') }}">
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="daily_avg">Daily Avg</label>
                        <input type="text" class="form-control mb-3" id="daily_avg" placeholder="Daily Avg"
                               name="daily_avg"
                               autocomplete="off" value="{{ old('daily_avg') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="outlets_worked">Outlets Worked</label>
                        <input type="text" class="form-control mb-3" id="outlets_worked" placeholder="Outlets Worked"
                               name="outlets_worked"
                               autocomplete="off" value="{{ old('outlets_worked') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="day_tgt">Daily Target</label>
                        <input type="text" class="form-control mb-3" id="day_tgt" placeholder="Daily Target"
                               name="day_tgt"
                               autocomplete="off" value="{{ old('day_tgt') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="eff_calls">Eff Calls</label>
                        <input type="text" class="form-control mb-3" id="eff_calls" placeholder="Eff Calls"
                               name="eff_calls"
                               autocomplete="off" value="{{ old('eff_calls') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="asking_rate">Asking Rate</label>
                        <input type="text" class="form-control mb-3" id="asking_rate" placeholder="Asking Rate"
                               name="asking_rate"
                               autocomplete="off" value="{{ old('asking_rate') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="total_memo_value">Total Memo Value</label>
                        <input type="text" class="form-control mb-3" id="total_memo_value"
                               placeholder="Total Memo Value" name="total_memo_value"
                               autocomplete="off" value="{{ old('total_memo_value') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="spo_knwl_prep">SPO Knowledge/Prep</label>
                        <input type="text" class="form-control mb-3" id="spo_knwl_prep" placeholder="SPO Knowledge/Prep"
                               name="spo_knwl_prep"
                               autocomplete="off" value="{{ old('spo_knwl_prep') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="av_lpc">Av LPC</label>
                        <input type="text" class="form-control mb-3" id="av_lpc" placeholder="Av LPC" name="av_lpc"
                               autocomplete="off" value="{{ old('av_lpc') }}">
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="9steps">9Steps</label>
                        <select class="custom-select custom-select-md mb-3" id="9steps" name="9steps">
                            <option selected>9Steps</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="focus_sku">Force SKU</label>
                        <input type="text" class="form-control mb-3" id="focus_sku" placeholder="Force SKU"
                               name="focus_sku"
                               autocomplete="off" value="{{ old('focus_sku') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="samples">Samples</label>
                        <select class="custom-select custom-select-md mb-3" id="samples" name="samples">
                            <option selected>Samples</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="dsr_status">Tab Used</label>
                        <select class="custom-select custom-select-md mb-3" id="tab_used" name="tab_used">
                            <option selected>Tab Used</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sfa_tabs">SFA Compliance</label>
                        <select class="custom-select custom-select-md mb-3" id="sfa_compliance" name="sfa_compliance">
                            <option selected>SFA Compliance</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">Area</th>
                <th scope="col">Actions Agreed</th>
                <th scope="col">Responsibility</th>
                <th scope="col">Timeline</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">DB Pt.</th>
                <td><input type="text" class="form-control mb-3" id="db_point_actions_agreed" placeholder="Db Pt. Actions Agreed"
                           name="db_point_actions_agreed"
                           autocomplete="off" value="{{ old('db_point_actions_agreed') }}"></td>
                <td><input type="text" class="form-control mb-3" id="db_point_responsibility" placeholder="Db Pt. Responsibility"
                           name="db_point_responsibility"
                           autocomplete="off" value="{{ old('db_point_responsibility') }}"></td>
                <td><input type="date" class="form-control mb-3" id="db_point_timeline" placeholder="Db Pt. Timeline"
                           name="db_point_timeline"
                           autocomplete="off" value="{{ old('db_point_timeline') }}"></td>
            </tr>
            <tr>
                <th scope="row">Sub-DB</th>
                <td><input type="text" class="form-control mb-3" id="sub_db_point_actions_agreed" placeholder="Sub-DB Actions Agreed"
                           name="sub_db_point_actions_agreed"
                           autocomplete="off" value="{{ old('sub_db_point_actions_agreed') }}"></td>
                <td><input type="text" class="form-control mb-3" id="sub_db_point_responsibility" placeholder="Sub-DB Responsibility"
                           name="sub_db_point_responsibility"
                           autocomplete="off" value="{{ old('sub_db_point_responsibility') }}"></td>
                <td><input type="date" class="form-control mb-3" id="sub_db_point_timeline" placeholder="Sub-DB Timeline"
                           name="sub_db_point_timeline"
                           autocomplete="off" value="{{ old('sub_db_point_timeline') }}"></td>
            </tr>

            </tbody>
        </table>

        <button type="submit" class="btn btn-success">Submit Report</button>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif


    </form>


@endsection
