@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">Edit Employee</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="/employee">Employee</a></li>
        <li class="breadcrumb-item active">Edit Employee</li>
    </ol>

    <form class="col-md-6" method="POST" action="{{ route('markethierarchy.show', $markethierarchy) }}">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="markethierarchy_code">Code</label>
                <input type="text" class="form-control mb-3" id="markethierarchy_name" placeholder="Code" name="code"
                       autocomplete="off" value="{{ $markethierarchy->name }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="employee_mobile">Mobile Number</label>
                <input type="text" class="form-control mb-3" id="employee_mobile" placeholder="Mobile Number"
                       name="mobile"
                       autocomplete="off" value="{{ $employee->mobile }}">
            </div>
            <div class="form-group col-md-6">
                <label for="employee_alt_mobile">Alternative Mobile Number</label>
                <input type="text" class="form-control mb-3" id="employee_alt_mobile"
                       placeholder="Alternative Mobile Number" name="alt_mobile"
                       autocomplete="off" value="{{ $employee->alt_mobile }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="employee_email">Email Address</label>
                <input type="email" class="form-control mb-3" id="employee_email" placeholder="Email Address" name="email"
                       autocomplete="off" value="{{ $employee->email }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="employee_nid">National ID Number</label>
                <input type="text" class="form-control mb-3" id="employee_nid" placeholder="National ID Number" name="nid"
                       autocomplete="off" value="{{ $employee->nid }}">
            </div>
            <div class="form-group col-md-6">
                <label for="joining_date">Joining Date</label>
                <div class="input-group date" data-provide="joining-date">
                    <input id="joining-date" type="text" class="form-control" placeholder="YYYY/MM/DD" name="joining_date" value="{{ $employee->joining_date }}">
                </div>
            </div>
        </div>
        <div class="form-group">
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


        <button type="submit" class="btn btn-success">Update</button>
    </form>


@endsection


