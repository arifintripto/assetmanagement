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
                        <label for="report_date">Date</label>
                        <input type="date" class="form-control mb-3" id="report_date" placeholder="Date" name="report_date"
                               autocomplete="off" value="{{ old('report_date') }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="report_db">Distribution</label>
                        <select class="custom-select custom-select-md mb-3 dynamic" id="report_db" name="report_db" data-dependent="report_spo">
                            <option selected disabled>Select Distribution</option>
                            @foreach( $dbs as $db)
                                <option value="{{ $db->code }}">{{ $db->name }}</option>
                            @endforeach
                        </select>
                    </div>
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="report_spo">SPO</label>--}}
{{--                        <input type="text" class="form-control mb-3" id="report_spo" placeholder="SPO" name="report_spo"--}}
{{--                               autocomplete="off" value="{{ old('report_spo') }}">--}}
{{--                    </div>--}}
                    <div class="form-report_spo">
                        <label for="state">SPO</label>
                        <select name="report_spo" class="form-control dynamic"style="width:250px" >
                            <option>--State--</option>
                        </select>
                    </div>




















                    <div class="form-group">
                        <select name="country" id="country" class="form-control input-lg dynamic" data-dependent="state">
                            <option value="">Select Country</option>
                            @foreach($country_list as $country)
                                <option value="{{ $country->country}}">{{ $country->country }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br />
                    <div class="form-group">
                        <select name="state" id="state" class="form-control input-lg dynamic" data-dependent="city">
                            <option value="">Select State</option>
                        </select>
                    </div>
                    <br />
                    <div class="form-group">
                        <select name="city" id="city" class="form-control input-lg">
                            <option value="">Select City</option>
                        </select>
                    </div>











                    <script type="text/javascript">
                        $(document).ready(function(){

                            $('.dynamic').change(function(){
                                if($(this).val() != '')
                                {
                                    var select = $(this).attr("id");
                                    var value = $(this).val();
                                    var dependent = $(this).data('dependent');
                                    var _token = $('input[name="_token"]').val();
                                    $.ajax({
                                        url:"{{ route('getsposdynamic.fetch') }}",
                                        method:"POST",
                                        data:{select:select, value:value, _token:_token, dependent:dependent},
                                        success:function(result)
                                        {
                                            $('#'+dependent).html(result);
                                        }

                                    })
                                }
                            });

                            $('#country').change(function(){
                                $('#state').val('');
                                $('#city').val('');
                            });

                            $('#state').change(function(){
                                $('#city').val('');
                            });


                        });
                    </script>





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
                        <label for="db_wh_mgmt">Warehouse Management</label>
                        <select class="custom-select custom-select-md mb-3" id="db_wh_mgmt" name="db_wh_mgmt">
                            <option selected disabled>Warehouse Management</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="db_ytd_gr_percent">DB YTD Gr%</label>
                        <input type="text" class="form-control mb-3" id="db_ytd_gr_percent"
                               placeholder="DB YTD Gr%" name="db_ytd_gr_percent"
                               autocomplete="off" value="{{ old('db_ytd_gr_percent') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="db_fifo">FIFO</label>
                        <select class="custom-select custom-select-md mb-3" id="db_fifo" name="db_fifo">
                            <option selected disabled>FIFO</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="db_month_target">Month Target</label>
                        <input type="text" class="form-control mb-3" id="db_month_target" placeholder="Month Target"
                               name="db_month_target"
                               autocomplete="off" value="{{ old('db_month_target') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="db_stock_register">Stock Register</label>
                        <select class="custom-select custom-select-md mb-3" id="db_stock_register" name="db_stock_register">
                            <option selected disabled>Stock Register</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="db_mtd_pry">MTD Pry</label>
                        <input type="text" class="form-control mb-3" id="db_mtd_pry" placeholder="MTD Pry" name="db_mtd_pry"
                               autocomplete="off" value="{{ old('db_mtd_pry') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="db_damage_stk_value">Damage Stock Value</label>
                        <input type="text" class="form-control mb-3" id="db_damage_stk_value"
                               placeholder="Damage Stock Value" name="db_damage_stk_value"
                               autocomplete="off" value="{{ old('db_damage_stk_value') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="db_mtd_ims">MTD IMS</label>
                        <input type="text" class="form-control mb-3" id="db_mtd_ims" placeholder="MTD IMS" name="db_mtd_ims"
                               autocomplete="off" value="{{ old('db_mtd_ims') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="db_damage_stk_storage">Damage Stock Storage</label>
                        <select class="custom-select custom-select-md mb-3" id="db_damage_stk_storage"
                                name="db_damage_stk_storage">
                            <option selected disabled>Damage Stock Storage</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="db_stock_value">Stock Value</label>
                        <input type="text" class="form-control mb-3" id="db_stock_value" placeholder="Stock Value"
                               name="db_stock_value"
                               autocomplete="off" value="{{ old('db_stock_value') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="db_beat_plan">Beat Plan</label>
                        <select class="custom-select custom-select-md mb-3" id="db_beat_plan" name="db_beat_plan">
                            <option selected disabled>Beat Plan</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="db_sku_carried">#SKU Carried</label>
                        <input type="text" class="form-control mb-3" id="db_sku_carried" placeholder="#SKU Carried"
                               name="db_sku_carried"
                               autocomplete="off" value="{{ old('db_sku_carried') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="db_printer_status">Printer Status</label>
                        <select class="custom-select custom-select-md mb-3" id="db_printer_status" name="db_printer_status">
                            <option selected disabled>Printer Status</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="db_sku_stockout">SKU's Stockout</label>
                        <input type="text" class="form-control mb-3" id="db_sku_stockout" placeholder="SKU's Stockout"
                               name="db_sku_stockout"
                               autocomplete="off" value="{{ old('db_sku_stockout') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="db_dms_implementation">DMS Implementation</label>
                        <select class="custom-select custom-select-md mb-3" id="db_dms_implementation"
                                name="db_dms_implementation">
                            <option selected disabled>DMS Implementation</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="db_no_of_sub_db">#Sub DB's</label>
                        <input type="text" class="form-control mb-3" id="db_no_of_sub_db" placeholder="#Sub DB's"
                               name="db_no_of_sub_db"
                               autocomplete="off" value="{{ old('db_no_of_sub_db') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="db_sub_db_avg_sale">Sub DB Avg Sale</label>
                        <input type="text" class="form-control mb-3" id="db_sub_db_avg_sale" placeholder="Sub DB Avg Sale"
                               name="db_sub_db_avg_sale"
                               autocomplete="off" value="{{ old('db_sub_db_avg_sale') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="db_sub_db_month_sale">Sub DB Month Sale</label>
                        <input type="text" class="form-control mb-3" id="db_sub_db_month_sale" placeholder="Sub DB Month Sale"
                               name="db_sub_db_month_sale"
                               autocomplete="off" value="{{ old('db_sub_db_month_sale') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="db_sub_db_av_sku">#Sub DB Av #SKU's</label>
                        <input type="text" class="form-control mb-3" id="db_sub_db_av_sku" placeholder="#Sub DB's"
                               name="db_sub_db_av_sku"
                               autocomplete="off" value="{{ old('db_sub_db_av_sku') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_sub_db_bills_per_month">Sub DB # Bills/Month</label>
                        <input type="text" class="form-control mb-3" id="db_sub_db_bills_per_month" placeholder="Sub DB # Bills/Month"
                               name="db_sub_db_bills_per_month"
                               autocomplete="off" value="{{ old('db_sub_db_bills_per_month') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_sub_db_month_target">Sub DB Month Tgt</label>
                        <input type="text" class="form-control mb-3" id="db_sub_db_month_target" placeholder="Sub DB Month Tgt"
                               name="db_sub_db_month_target"
                               autocomplete="off" value="{{ old('db_sub_db_month_target') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_sub_db_mtd_lifting">Sub DB MTD Lifting</label>
                        <input type="text" class="form-control mb-3" id="db_sub_db_mtd_lifting" placeholder="Sub DB MTD Lifting"
                               name="db_sub_db_mtd_lifting"
                               autocomplete="off" value="{{ old('db_sub_db_mtd_lifting') }}">
                    </div>

                </div>

            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Area/Territory Overview</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="area_avg_sale">ASM/TSO Average Sale</label>
                        <input type="text" class="form-control mb-3" id="area_avg_sale" placeholder="ASM/TSO Average Sale"
                               name="area_avg_sale"
                               autocomplete="off" value="{{ old('area_avg_sale') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="area_stock_value">Stock Value</label>
                        <input type="text" class="form-control mb-3" id="area_stock_value" placeholder="Stock Value"
                               name="area_stock_value"
                               autocomplete="off" value="{{ old('area_stock_value') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="area_ytd_gr_percent">YTD Gr%</label>
                        <input type="text" class="form-control mb-3" id="area_ytd_gr_percent"
                               placeholder="YTD Gr%" name="area_ytd_gr_percent"
                               autocomplete="off" value="{{ old('area_ytd_gr_percent') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="area_stock_days">Stock Days</label>
                        <input type="text" class="form-control mb-3" id="area_stock_days" placeholder="Stock Days"
                               name="area_stock_days"
                               autocomplete="off" value="{{ old('area_stock_days') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="area_month_target">Month Target</label>
                        <input type="text" class="form-control mb-3" id="area_month_target" placeholder="Month Target"
                               name="area_month_target"
                               autocomplete="off" value="{{ old('area_month_target') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="area_focus_sku_percent_ach">Focus SKU %Ach</label>
                        <input type="text" class="form-control mb-3" id="area_focus_sku_percent_ach"
                               placeholder="Focus SKU %Ach" name="area_focus_sku_percent_ach"
                               autocomplete="off" value="{{ old('area_focus_sku_percent_ach') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="area_mtd_pry">MTD Pry</label>
                        <input type="text" class="form-control mb-3" id="area_mtd_pry"
                               placeholder="MTD Pry" name="area_mtd_pry"
                               autocomplete="off" value="{{ old('area_mtd_pry') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="area_sku_stockout">SKU Stockout</label>
                        <input type="text" class="form-control mb-3" id="area_sku_stockout"
                               placeholder="SKU Stockout"
                               name="area_sku_stockout"
                               autocomplete="off" value="{{ old('area_sku_stockout') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="area_mtd_ims">MTD IMS</label>
                        <input type="text" class="form-control mb-3" id="area_mtd_ims"
                               placeholder="MTD IMS" name="area_mtd_ims"
                               autocomplete="off" value="{{ old('area_mtd_ims') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="area_spo_tgt_knowledge">SPO Target Knowledge</label>
                        <select class="custom-select custom-select-md mb-3" id="area_spo_tgt_knowledge"
                                name="area_spo_tgt_knowledge">
                            <option selected disabled>SPO Target Knowledge</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="area_morn_or_eve_meeting">Morn/Eve Meetings</label>
                        <select class="custom-select custom-select-md mb-3" id="area_morn_or_eve_meeting"
                                name="area_morn_or_eve_meeting">
                            <option selected disabled>Morn/Eve Meetings</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="area_sfa_compliance">SFA Compliance</label>
                        <select class="custom-select custom-select-md mb-3" id="area_sfa_compliance"
                                name="area_sfa_compliance">
                            <option selected disabled>SFA Compliance</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="area_spo_rfts_knowledge">SPO RFTS Knowledge</label>
                        <select class="custom-select custom-select-md mb-3"
                                id="area_spo_rfts_knowledge"
                                name="area_spo_rfts_knowledge">
                            <option selected disabled>SPO RFTS Knowledge</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="area_dsr_status">DSR Status</label>
                        <select class="custom-select custom-select-md mb-3" id="area_dsr_status"
                                name="area_dsr_status">
                            <option selected disabled>DSR Status</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="area_sfa_tabs">SFA Tabs</label>
                        <select class="custom-select custom-select-md mb-3" id="area_sfa_tabs"
                                name="area_sfa_tabs">
                            <option selected disabled>SFA Tabs</option>
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
                        <label for="market_beat_visited">Beat Visited</label>
                        <input type="text" class="form-control mb-3" id="market_beat_visited"
                               placeholder="Beat Visited"
                               name="market_beat_visited"
                               autocomplete="off" value="{{ old('market_beat_visited') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="market_total_outlets">Total Outlets</label>
                        <input type="text" class="form-control mb-3" id="market_total_outlets"
                               placeholder="Total Outlets"
                               name="market_total_outlets"
                               autocomplete="off" value="{{ old('market_total_outlets') }}">
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="market_daily_avg">Daily Avg</label>
                        <input type="text" class="form-control mb-3" id="market_daily_avg"
                               placeholder="Daily Avg"
                               name="market_daily_avg"
                               autocomplete="off" value="{{ old('market_daily_avg') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="market_outlets_worked">Outlets Worked</label>
                        <input type="text" class="form-control mb-3" id="market_outlets_worked"
                               placeholder="Outlets Worked"
                               name="market_outlets_worked"
                               autocomplete="off" value="{{ old('market_outlets_worked') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="market_day_tgt">Daily Target</label>
                        <input type="text" class="form-control mb-3" id="market_day_tgt" placeholder="Daily Target"
                               name="market_day_tgt"
                               autocomplete="off" value="{{ old('market_day_tgt') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="market_eff_calls">Eff Calls</label>
                        <input type="text" class="form-control mb-3" id="market_eff_calls" placeholder="Eff Calls"
                               name="market_eff_calls"
                               autocomplete="off" value="{{ old('market_eff_calls') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="market_asking_rate">Asking Rate</label>
                        <input type="text" class="form-control mb-3" id="market_asking_rate"
                               placeholder="Asking Rate"
                               name="market_asking_rate"
                               autocomplete="off" value="{{ old('market_asking_rate') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="market_total_memo_value">Total Memo Value</label>
                        <input type="text" class="form-control mb-3" id="market_total_memo_value"
                               placeholder="Total Memo Value" name="market_total_memo_value"
                               autocomplete="off" value="{{ old('market_total_memo_value') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="market_spo_knwl_prep">SPO Knowledge/Prep</label>
                        <select class="custom-select custom-select-md mb-3" id="market_spo_knwl_prep"
                                name="market_spo_knwl_prep">
                            <option selected disabled>SPO Knowledge/Prep</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="market_av_lpc">Av LPC</label>
                        <input type="text" class="form-control mb-3" id="market_av_lpc" placeholder="Av LPC"
                               name="market_av_lpc"
                               autocomplete="off" value="{{ old('market_av_lpc') }}">
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="market_9steps">9Steps</label>
                        <select class="custom-select custom-select-md mb-3" id="market_9steps" name="market_9steps">
                            <option selected disabled>9Steps</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="market_focus_sku">Focus SKU</label>
                        <input type="text" class="form-control mb-3" id="market_focus_sku"
                               placeholder="Focus SKU"
                               name="market_focus_sku"
                               autocomplete="off" value="{{ old('market_focus_sku') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="market_samples">Samples</label>
                        <select class="custom-select custom-select-md mb-3" id="market_samples" name="market_samples">
                            <option selected disabled>Samples</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="market_tab_used">Tab Used</label>
                        <select class="custom-select custom-select-md mb-3" id="tab_used" name="market_tab_used">
                            <option selected disabled>Tab Used</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="market_sfa_compliance">SFA Compliance</label>
                        <select class="custom-select custom-select-md mb-3" id="market_sfa_compliance"
                                name="market_sfa_compliance">
                            <option selected disabled>SFA Compliance</option>
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
                <td>
                    <select class="custom-select custom-select-md mb-3" id="db_point_responsibility"
                            name="db_point_responsibility">
                        <option selected disabled>DB Point Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td><input type="date" class="form-control mb-3" id="db_point_timeline" placeholder="Db Pt. Timeline"
                           name="db_point_timeline"
                           autocomplete="off" value="{{ old('db_point_timeline') }}"></td>
            </tr>
            <tr>
                <th scope="row">Sub-DB</th>
                <td>
                    <input type="text" class="form-control mb-3"
                           id="sub_db_point_actions_agreed"
                           placeholder="Sub-DB Actions Agreed"
                           name="sub_db_point_actions_agreed"
                           autocomplete="off"
                           value="{{ old('sub_db_point_actions_agreed') }}">
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="sub_db_point_responsibility"
                            name="sub_db_point_responsibility">
                        <option selected disabled>Sub-DB Point Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td>
                    <input type="date" class="form-control mb-3"
                           id="sub_db_point_timeline"
                           placeholder="Sub-DB Timeline"
                           name="sub_db_point_timeline"
                           autocomplete="off"
                           value="{{ old('sub_db_point_timeline') }}">
                </td>
            </tr>
            <tr>
                <th scope="row">Overview</th>
                <td>
                    <input type="text" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Overview Actions Agreed"
                           name="overview_actions_agreed"
                           id="overview_actions_agreed"
                           value="{{ old('overview_actions_agreed') }}">
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="overview_responsibility"
                            name="overview_responsibility">
                        <option selected disabled>Overview Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td>
                    <input type="date" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Overview Timeline"
                           name="overview_timeline"
                           id="overview_timeline"
                           value="{{ old('overview_timeline') }}">
                </td>
            </tr>
 <tr>
                <th scope="row">Processes</th>
                <td>
                    <input type="text" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Processes Actions Agreed"
                           name="processes_actions_agreed"
                           id="processes_actions_agreed"
                           value="{{ old('processes_actions_agreed') }}">
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="processes_responsibility"
                            name="processes_responsibility">
                        <option selected disabled>Processes Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td>
                    <input type="date" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Processes Timeline"
                           name="processes_timeline"
                           id="processes_timeline"
                           value="{{ old('processes_timeline') }}">
                </td>
            </tr>
 <tr>
                <th scope="row">Mkt Work</th>
                <td>
                    <input type="text" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Mkt Work Actions Agreed"
                           name="mkt_work_actions_agreed"
                           id="mkt_work_actions_agreed"
                           value="{{ old('mkt_work_actions_agreed') }}">
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="mkt_work_responsibility"
                            name="mkt_work_responsibility">
                        <option selected disabled>Mkt Work Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="mkt_work_timeline"
                            name="mkt_work_timeline">
                        <option selected disabled>Mkt Work Timeline</option>
                        <option value="1">Regularly</option>
                        <option value="2">Irregularly</option>
                    </select>
                </td>
            </tr>
 <tr>
                <th scope="row">People</th>
                <td>
                    <input type="text" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="People Actions Agreed"
                           name="people_actions_agreed"
                           id="people_actions_agreed"
                           value="{{ old('people_actions_agreed') }}">
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="people_responsibility"
                            name="people_responsibility">
                        <option selected disabled>People Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td>
                    <input type="date" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="People Timeline"
                           name="people_timeline"
                           id="people_timeline"
                           value="{{ old('people_timeline') }}">
                </td>
            </tr>
 <tr>
                <th scope="row">Other</th>
                <td>
                    <input type="text" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Other Actions Agreed"
                           name="other_actions_agreed"
                           id="other_actions_agreed"
                           value="{{ old('other_actions_agreed') }}">
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="other_responsibility"
                            name="other_responsibility">
                        <option selected disabled>Other Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td>
                    <input type="date" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Other Timeline"
                           name="other_timeline"
                           id="other_timeline"
                           value="{{ old('other_timeline') }}">
                </td>
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
