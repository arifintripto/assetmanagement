@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">Create New Report</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('report.index') }}">Report</a></li>
        <li class="breadcrumb-item active">Create New Report</li>
    </ol>
    <form class="col-md-12 mb-5" method="POST" action="{{ route('dbpoint.store', ['id' => $id]) }}">
        @csrf


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
                        <select class="custom-select custom-select-md mb-3" id="db_stock_register"
                                name="db_stock_register">
                            <option selected disabled>Stock Register</option>
                            <option value="1">OK</option>
                            <option value="2">Not OK</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="db_mtd_pry">MTD Pry</label>
                        <input type="text" class="form-control mb-3" id="db_mtd_pry" placeholder="MTD Pry"
                               name="db_mtd_pry"
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
                        <input type="text" class="form-control mb-3" id="db_mtd_ims" placeholder="MTD IMS"
                               name="db_mtd_ims"
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
                        <select class="custom-select custom-select-md mb-3" id="db_printer_status"
                                name="db_printer_status">
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
                        <input type="text" class="form-control mb-3" id="db_sub_db_avg_sale"
                               placeholder="Sub DB Avg Sale"
                               name="db_sub_db_avg_sale"
                               autocomplete="off" value="{{ old('db_sub_db_avg_sale') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="db_sub_db_month_sale">Sub DB Month Sale</label>
                        <input type="text" class="form-control mb-3" id="db_sub_db_month_sale"
                               placeholder="Sub DB Month Sale"
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
                        <input type="text" class="form-control mb-3" id="db_sub_db_bills_per_month"
                               placeholder="Sub DB # Bills/Month"
                               name="db_sub_db_bills_per_month"
                               autocomplete="off" value="{{ old('db_sub_db_bills_per_month') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_sub_db_month_target">Sub DB Month Tgt</label>
                        <input type="text" class="form-control mb-3" id="db_sub_db_month_target"
                               placeholder="Sub DB Month Tgt"
                               name="db_sub_db_month_target"
                               autocomplete="off" value="{{ old('db_sub_db_month_target') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_sub_db_mtd_lifting">Sub DB MTD Lifting</label>
                        <input type="text" class="form-control mb-3" id="db_sub_db_mtd_lifting"
                               placeholder="Sub DB MTD Lifting"
                               name="db_sub_db_mtd_lifting"
                               autocomplete="off" value="{{ old('db_sub_db_mtd_lifting') }}">
                    </div>

                </div>

            </div>
        </div>


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
