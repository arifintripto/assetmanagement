@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">Create New Report</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('report.index') }}">Report</a></li>
        <li class="breadcrumb-item active">Create New Report</li>
    </ol>

    <form class="col-md-12 mb-5" method="POST" action="{{ route('marketwork.store', ['id' => $id]) }}">
        @csrf
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

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success btn-lg mt-4">Next <i class="fas fa-chevron-circle-right"></i></button>
        </div>
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
