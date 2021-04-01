@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')

@section('content')
    <h2 class="mt-4 mb-4">Create New Report</h2>

    <form class="mb-5" method="POST" action="{{ route('report.store') }}">
        @csrf
        <div class="card bg-light mb-4">
            <div class="card-body">
                <h5 class="card-title">Report Details</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="report_db">Distribution</label>
                        <select class="custom-select custom-select-md mb-3 dynamic" id="report_db" name="report_db" required>
                            <option value="" >Select Distribution</option>
                            @foreach( $dbs as $db)
                                <option value="{{ $db->code }}">{{ $db->code }} - {{ $db->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg mt-4 mb-4">Next <i class="fas fa-chevron-circle-right"></i></button>
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
