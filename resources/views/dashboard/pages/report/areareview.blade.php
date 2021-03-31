@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">Create New Report</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('report.index') }}">Report</a></li>
        <li class="breadcrumb-item active">Create New Report</li>
    </ol>

    <form class="mb-5" method="POST" action="{{ route('areareview.store', ['id' => $id]) }}">
        @csrf


        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Area/Territory Overview</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="area_avg_sale">ASM/TSO Average Sale</label>
                        <input type="text" class="form-control mb-3 @error('area_avg_sale') is-invalid @enderror"
                               id="area_avg_sale"
                               placeholder="ASM/TSO Average Sale"
                               name="area_avg_sale"
                               autocomplete="off" value="{{ old('area_avg_sale') }}">
                        @error('area_avg_sale')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="area_stock_value">Stock Value</label>
                        <input type="text" class="form-control mb-3 @error('area_stock_value') is-invalid @enderror"
                               id="area_stock_value" placeholder="Stock Value"
                               name="area_stock_value"
                               autocomplete="off" value="{{ old('area_stock_value') }}">
                        @error('area_stock_value')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="area_ytd_gr_percent">YTD Gr%</label>
                        <input type="text" class="form-control mb-3 @error('area_ytd_gr_percent') is-invalid @enderror"
                               id="area_ytd_gr_percent"
                               placeholder="YTD Gr%" name="area_ytd_gr_percent"
                               autocomplete="off" value="{{ old('area_ytd_gr_percent') }}">
                        @error('area_ytd_gr_percent')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="area_stock_days">Stock Days</label>
                        <input type="text" class="form-control mb-3 @error('area_stock_days') is-invalid @enderror"
                               id="area_stock_days" placeholder="Stock Days"
                               name="area_stock_days"
                               autocomplete="off" value="{{ old('area_stock_days') }}">
                        @error('area_stock_days')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="area_month_target">Month Target</label>
                        <input type="text" class="form-control mb-3 @error('area_month_target') is-invalid @enderror"
                               id="area_month_target" placeholder="Month Target"
                               name="area_month_target"
                               autocomplete="off" value="{{ old('area_month_target') }}">
                        @error('area_month_target')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="area_focus_sku_percent_ach">Focus SKU %Ach</label>
                        <input type="text" class="form-control mb-3 @error('area_focus_sku_percent_ach') is-invalid @enderror"
                               id="area_focus_sku_percent_ach"
                               placeholder="Focus SKU %Ach" name="area_focus_sku_percent_ach"
                               autocomplete="off" value="{{ old('area_focus_sku_percent_ach') }}">
                        @error('area_focus_sku_percent_ach')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="area_mtd_pry">MTD Pry</label>
                        <input type="text" class="form-control mb-3 @error('area_mtd_pry') is-invalid @enderror"
                               id="area_mtd_pry"
                               placeholder="MTD Pry" name="area_mtd_pry"
                               autocomplete="off" value="{{ old('area_mtd_pry') }}">
                        @error('area_mtd_pry')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="area_sku_stockout">SKU Stockout</label>
                        <input type="text" class="form-control mb-3 @error('area_sku_stockout') is-invalid @enderror"
                               id="area_sku_stockout"
                               placeholder="SKU Stockout"
                               name="area_sku_stockout"
                               autocomplete="off" value="{{ old('area_sku_stockout') }}">
                        @error('area_sku_stockout')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="area_mtd_ims">MTD IMS</label>
                        <input type="text" class="form-control mb-3 @error('area_mtd_ims') is-invalid @enderror"
                               id="area_mtd_ims"
                               placeholder="MTD IMS" name="area_mtd_ims"
                               autocomplete="off" value="{{ old('area_mtd_ims') }}">
                        @error('area_mtd_ims')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="area_spo_tgt_knowledge">SPO Target Knowledge</label>
                        <select class="custom-select custom-select-md mb-3 @error('area_spo_tgt_knowledge') is-invalid @enderror"
                                id="area_spo_tgt_knowledge"
                                name="area_spo_tgt_knowledge">
                            <option value="">SPO Target Knowledge</option>
                            <option value="1" {{ old('area_spo_tgt_knowledge')=='1' ? 'selected' : ''  }}>OK</option>
                            <option value="2" {{ old('area_spo_tgt_knowledge')=='2' ? 'selected' : ''  }}>Not OK</option>
                        </select>
                        @error('area_spo_tgt_knowledge')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="area_morn_or_eve_meeting">Morn/Eve Meetings</label>
                        <select class="custom-select custom-select-md mb-3 @error('area_morn_or_eve_meeting') is-invalid @enderror"
                                id="area_morn_or_eve_meeting"
                                name="area_morn_or_eve_meeting">
                            <option value="">Morn/Eve Meetings</option>
                            <option value="1" {{ old('area_morn_or_eve_meeting')=='1' ? 'selected' : ''  }}>OK</option>
                            <option value="2" {{ old('area_morn_or_eve_meeting')=='2' ? 'selected' : ''  }}>Not OK</option>
                        </select>
                        @error('area_morn_or_eve_meeting')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="area_sfa_compliance">SFA Compliance</label>
                        <select class="custom-select custom-select-md mb-3 @error('area_sfa_compliance') is-invalid @enderror"
                                id="area_sfa_compliance"
                                name="area_sfa_compliance">
                            <option value="">SFA Compliance</option>
                            <option value="1" {{ old('area_sfa_compliance')=='1' ? 'selected' : ''  }}>OK</option>
                            <option value="2" {{ old('area_sfa_compliance')=='2' ? 'selected' : ''  }}>Not OK</option>
                        </select>
                        @error('area_sfa_compliance')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="area_spo_rfts_knowledge">SPO RFTS Knowledge</label>
                        <select class="custom-select custom-select-md mb-3 @error('area_spo_rfts_knowledge') is-invalid @enderror"
                                id="area_spo_rfts_knowledge"
                                name="area_spo_rfts_knowledge">
                            <option value="">SPO RFTS Knowledge</option>
                            <option value="1" {{ old('area_spo_rfts_knowledge')=='1' ? 'selected' : ''  }}>OK</option>
                            <option value="2" {{ old('area_spo_rfts_knowledge')=='2' ? 'selected' : ''  }}>Not OK</option>
                        </select>
                        @error('area_spo_rfts_knowledge')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="area_dsr_status">DSR Status</label>
                        <select class="custom-select custom-select-md mb-3 @error('area_dsr_status') is-invalid @enderror"
                                id="area_dsr_status"
                                name="area_dsr_status">
                            <option value="">DSR Status</option>
                            <option value="1" {{ old('area_dsr_status')=='1' ? 'selected' : ''  }}>OK</option>
                            <option value="2" {{ old('area_dsr_status')=='2' ? 'selected' : ''  }}>Not OK</option>
                        </select>
                        @error('area_dsr_status')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="area_sfa_tabs">SFA Tabs</label>
                        <select class="custom-select custom-select-md mb-3 @error('area_sfa_tabs') is-invalid @enderror"
                                id="area_sfa_tabs"
                                name="area_sfa_tabs">
                            <option value="">SFA Tabs</option>
                            <option value="1" {{ old('area_sfa_tabs')=='1' ? 'selected' : ''  }}>OK</option>
                            <option value="2" {{ old('area_sfa_tabs')=='2' ? 'selected' : ''  }}>Not OK</option>
                        </select>
                        @error('area_sfa_tabs')
                        <small id="" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
            </div>
        </div>


        <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg mt-4 mb-4">Next <i class="fas fa-chevron-circle-right"></i></button>
        </div>
{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif


    </form>


@endsection
