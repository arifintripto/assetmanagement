@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">Create New Report</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('report.index') }}">Report</a></li>
        <li class="breadcrumb-item active">Create New Report</li>
    </ol>

    <style>
        th {
            text-align: center;
        }
    </style>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th  colspan="4"><strong>Daily Field Visit Report</strong></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="2"><strong>Date: </strong>{{ $newDate = date("d F, Y", strtotime($data['report']->report_date))  }}</td>
            <td colspan="2"><strong>RSM/ASM: </strong>{{ $data['hierarchy']['rsm']->name }}</td>
        </tr>
        <tr>
            <th colspan="4"><strong>Visit Location Details</strong></th>
        </tr>
        <tr>
            <td colspan="2"><strong>Area: </strong>{{ $area = str_replace('_', ' ', $data['hierarchy']['asm']->area) }}</td>
            <td colspan="2"><strong>ASM: </strong>{{ $data['hierarchy']['asm']->name }}</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Territory: </strong>{{ $data['hierarchy']['tso']->area }}</td>
            <td colspan="2"><strong>TSO: </strong>{{ $data['hierarchy']['tso']->name }}</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Town: </strong>{{ $data['hierarchy']['db']->area }}</td>
            <td colspan="2"><strong>SPO: </strong>{{ $data['report']->report_spo }}</td>
        </tr>
        <tr>
            <td colspan="4"><strong>DB: </strong>{{ $data['hierarchy']['db']->name }}</td>
        </tr>
        </tbody>
    </table>

    @if(isset($data['report_btn']))
        <div class="col-md-12">
            <div class="text-center">
                <a href="{{ route('getpdf', ['id'=> $data['id']]) }}" class="btn btn-success btn-lg mt-4" target="_blank">Field Visit Report <i class="fas fa-chevron-circle-right"></i></a>
                <a href="{{ route('godown_report', ['id'=> $data['id']]) }}" class="btn btn-success btn-lg mt-4" target="_blank">DB Godown Maintenance Monitor <i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
    @else
        <div class="col-md-12">
            <div class="text-center">
                <a href="{{ route('inputdbinfo', ['id'=> $data['id']]) }}" class="btn btn-success btn-lg mt-4">Next <i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
    @endif


@endsection
