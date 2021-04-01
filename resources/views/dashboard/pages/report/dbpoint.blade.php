@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4 mb-4">DB Point Review</h2>

    <form class="mb-5" method="POST" action="{{ route('dbpoint.store', ['id' => $id]) }}">
        @csrf
        <div class="card mb-4 bg-light">
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="db_avg_sale">DB Average Sale</label>
                        <input type="text" class="form-control @error('db_avg_sale') is-invalid @enderror"
                               id="db_avg_sale" placeholder="DB Average Sale"
                               name="db_avg_sale"
                               autocomplete="off" value="{{ old('db_avg_sale') }}" >
                        @error('db_avg_sale')
                            <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_ytd_gr_percent">DB YTD Gr%</label>
                        <input type="text" class="form-control @error('db_ytd_gr_percent') is-invalid @enderror"
                               id="db_ytd_gr_percent"
                               placeholder="DB YTD Gr%" name="db_ytd_gr_percent"
                               autocomplete="off" value="{{ old('db_ytd_gr_percent') }}">
                        @error('db_ytd_gr_percent')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_month_target">Month Target</label>
                        <input type="text" class="form-control @error('db_month_target') is-invalid @enderror"
                               id="db_month_target" placeholder="Month Target"
                               name="db_month_target"
                               autocomplete="off" value="{{ old('db_month_target') }}">
                        @error('db_month_target')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_mtd_pry">MTD Pry</label>
                        <input type="text" class="form-control @error('db_mtd_pry') is-invalid @enderror"
                               id="db_mtd_pry" placeholder="MTD Pry"
                               name="db_mtd_pry"
                               autocomplete="off" value="{{ old('db_mtd_pry') }}">
                        @error('db_mtd_pry')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="db_mtd_ims">MTD IMS</label>
                        <input type="text" class="form-control @error('db_mtd_ims') is-invalid @enderror"
                               id="db_mtd_ims" placeholder="MTD IMS"
                               name="db_mtd_ims"
                               autocomplete="off" value="{{ old('db_mtd_ims') }}">
                        @error('db_mtd_ims')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_stock_value">Stock Value</label>
                        <input type="text" class="form-control @error('db_stock_value') is-invalid @enderror"
                               id="db_stock_value" placeholder="Stock Value"
                               name="db_stock_value"
                               autocomplete="off" value="{{ old('db_stock_value') }}">
                        @error('db_stock_value')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_sku_carried">#SKU Carried</label>
                        <input type="text" class="form-control @error('db_sku_carried') is-invalid @enderror"
                               id="db_sku_carried" placeholder="#SKU Carried"
                               name="db_sku_carried"
                               autocomplete="off" value="{{ old('db_sku_carried') }}">
                        @error('db_sku_carried')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_sku_stockout">SKU's Stockout</label>
                        <input type="text" class="form-control @error('db_sku_stockout') is-invalid @enderror"
                               id="db_sku_stockout" placeholder="SKU's Stockout"
                               name="db_sku_stockout"
                               autocomplete="off" value="{{ old('db_sku_stockout') }}">
                        @error('db_sku_stockout')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="db_damage_stk_value">Damage Stock Value</label>
                        <input type="text" class="form-control @error('db_damage_stk_value') is-invalid @enderror"
                               id="db_damage_stk_value"
                               placeholder="Damage Stock Value" name="db_damage_stk_value"
                               autocomplete="off" value="{{ old('db_damage_stk_value') }}">
                        @error('db_damage_stk_value')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_wh_mgmt">Warehouse Management</label>
                        <select class="custom-select custom-select-md @error('db_wh_mgmt') is-invalid @enderror"
                                id="db_wh_mgmt" name="db_wh_mgmt">
                            <option value="">Warehouse Management</option>
                            <option value="1" {{ old('db_wh_mgmt')=='1' ? 'selected' : ''  }}>OK</option>
                            <option value="2" {{ old('db_wh_mgmt')=='2' ? 'selected' : ''  }}>Not OK</option>
                        </select>
                        @error('db_wh_mgmt')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_fifo">FIFO</label>
                        <select class="custom-select custom-select-md @error('db_fifo') is-invalid @enderror"
                                id="db_fifo" name="db_fifo">
                            <option value="">FIFO</option>
                            <option value="1" {{ old('db_fifo')=='1' ? 'selected' : ''  }}>OK</option>
                            <option value="2" {{ old('db_fifo')=='2' ? 'selected' : ''  }}>Not OK</option>
                        </select>
                        @error('db_fifo')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_stock_register">Stock Register</label>
                        <select class="custom-select custom-select-md @error('db_stock_register') is-invalid @enderror"
                                id="db_stock_register"
                                name="db_stock_register">
                            <option value="">Stock Register</option>
                            <option value="1" {{ old('db_stock_register')=='1' ? 'selected' : ''  }}>OK</option>
                            <option value="2" {{ old('db_stock_register')=='2' ? 'selected' : ''  }}>Not OK</option>
                        </select>
                        @error('db_stock_register')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="db_damage_stk_storage">Damage Stock Storage</label>
                        <select class="custom-select custom-select-md @error('db_damage_stk_storage') is-invalid @enderror"
                                id="db_damage_stk_storage"
                                name="db_damage_stk_storage">
                            <option value="">Damage Stock Storage</option>
                            <option value="1" {{ old('db_damage_stk_storage')=='1' ? 'selected' : ''  }}>OK</option>
                            <option value="2" {{ old('db_damage_stk_storage')=='2' ? 'selected' : ''  }}>Not OK</option>
                        </select>
                        @error('db_damage_stk_storage')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_beat_plan">Beat Plan</label>
                        <select class="custom-select custom-select-md @error('db_beat_plan') is-invalid @enderror"
                                id="db_beat_plan" name="db_beat_plan">
                            <option value="">Beat Plan</option>
                            <option value="1" {{ old('db_beat_plan')=='1' ? 'selected' : ''  }}>OK</option>
                            <option value="2" {{ old('db_beat_plan')=='2' ? 'selected' : ''  }}>Not OK</option>
                        </select>
                        @error('db_beat_plan')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_printer_status">Printer Status</label>
                        <select class="custom-select custom-select-md @error('db_printer_status') is-invalid @enderror"
                                id="db_printer_status"
                                name="db_printer_status">
                            <option value="">Printer Status</option>
                            <option value="1" {{ old('db_printer_status')=='1' ? 'selected' : ''  }}>OK</option>
                            <option value="2" {{ old('db_printer_status')=='2' ? 'selected' : ''  }}>Not OK</option>
                        </select>
                        @error('db_printer_status')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_dms_implementation">DMS Implementation</label>
                        <select class="custom-select custom-select-md @error('db_dms_implementation') is-invalid @enderror"
                                id="db_dms_implementation"
                                name="db_dms_implementation" >
                            <option value="">DMS Implementation</option>
                            <option value="1" {{ old('db_dms_implementation')=='1' ? 'selected' : ''  }}>OK</option>
                            <option value="2" {{ old('db_dms_implementation')=='2' ? 'selected' : ''  }}>Not OK</option>
                        </select>
                        @error('db_dms_implementation')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
                <hr class="mb-4">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="db_no_of_sub_db">#Sub DB's</label>
                        <input type="text" class="form-control @error('db_no_of_sub_db') is-invalid @enderror"
                               id="db_no_of_sub_db" placeholder="#Sub DB's"
                               name="db_no_of_sub_db"
                               autocomplete="off" value="{{ old('db_no_of_sub_db') }}">
                        @error('db_no_of_sub_db')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="db_sub_db_avg_sale">Sub DB Avg Sale</label>
                        <input type="text" class="form-control @error('db_sub_db_avg_sale') is-invalid @enderror"
                               id="db_sub_db_avg_sale"
                               placeholder="Sub DB Avg Sale"
                               name="db_sub_db_avg_sale"
                               autocomplete="off" value="{{ old('db_sub_db_avg_sale') }}">
                        @error('db_sub_db_avg_sale')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="db_sub_db_month_sale">Sub DB Month Sale</label>
                        <input type="text" class="form-control @error('db_sub_db_month_sale') is-invalid @enderror"
                               id="db_sub_db_month_sale"
                               placeholder="Sub DB Month Sale"
                               name="db_sub_db_month_sale"
                               autocomplete="off" value="{{ old('db_sub_db_month_sale') }}">
                        @error('db_sub_db_month_sale')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="db_sub_db_av_sku">#Sub DB Av #SKU's</label>
                        <input type="text" class="form-control @error('db_sub_db_av_sku') is-invalid @enderror"
                               id="db_sub_db_av_sku" placeholder="#Sub DB's"
                               name="db_sub_db_av_sku"
                               autocomplete="off" value="{{ old('db_sub_db_av_sku') }}">
                        @error('db_sub_db_av_sku')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_sub_db_bills_per_month">Sub DB # Bills/Month</label>
                        <input type="text" class="form-control @error('db_sub_db_bills_per_month') is-invalid @enderror"
                               id="db_sub_db_bills_per_month"
                               placeholder="Sub DB # Bills/Month"
                               name="db_sub_db_bills_per_month"
                               autocomplete="off" value="{{ old('db_sub_db_bills_per_month') }}">
                        @error('db_sub_db_bills_per_month')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_sub_db_month_target">Sub DB Month Tgt</label>
                        <input type="text" class="form-control @error('db_sub_db_month_target') is-invalid @enderror"
                               id="db_sub_db_month_target"
                               placeholder="Sub DB Month Tgt"
                               name="db_sub_db_month_target"
                               autocomplete="off" value="{{ old('db_sub_db_month_target') }}">
                        @error('db_sub_db_month_target')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="db_sub_db_mtd_lifting">Sub DB MTD Lifting</label>
                        <input type="text" class="form-control @error('db_sub_db_mtd_lifting') is-invalid @enderror"
                               id="db_sub_db_mtd_lifting"
                               placeholder="Sub DB MTD Lifting"
                               name="db_sub_db_mtd_lifting"
                               autocomplete="off" value="{{ old('db_sub_db_mtd_lifting') }}">
                        @error('db_sub_db_mtd_lifting')
                        <small id="" class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>

                </div>

            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg mt-4 mb-4">Next <i class="fas fa-chevron-circle-right"></i></button>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif


    </form>


@endsection
