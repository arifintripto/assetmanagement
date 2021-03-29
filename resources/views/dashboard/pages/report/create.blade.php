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
                        <label for="report_db">Distribution</label>
                        <select class="custom-select custom-select-md mb-3 dynamic" id="report_db" name="report_db" data-dependent="report_spo">
                            <option selected disabled>Select Distribution</option>
                            @foreach( $dbs as $db)
                                <option value="{{ $db->code }}">{{ $db->code }} - {{ $db->name }}</option>
                            @endforeach
                        </select>
                    </div>
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="report_spo">SPO</label>--}}
{{--                        <input type="text" class="form-control mb-3" id="report_spo" placeholder="SPO" name="report_spo"--}}
{{--                               autocomplete="off" value="{{ old('report_spo') }}">--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-lg btn-success">Next <i class="fas fa-chevron-circle-right"></i></button>
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

{{--    <a href="#" class="btn btn-success">DB Point</a>--}}


@endsection
