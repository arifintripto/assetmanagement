@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">Create New Report</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('report.index') }}">Report</a></li>
        <li class="breadcrumb-item active">Create New Report</li>
    </ol>

{{--    <table class="table table-bordered">--}}
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            <th scope="row">1</th>--}}
{{--            <td>Mark</td>--}}
{{--            <td>Otto</td>--}}
{{--            <td>@mdo</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th scope="row">2</th>--}}
{{--            <td>Jacob</td>--}}
{{--            <td>Thornton</td>--}}
{{--            <td>@fat</td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}
    <style>
        th {
            text-align: center;
        }
    </style>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th  colspan="6"><strong>Daily Field Visit Report</strong></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="3"><strong>Date: </strong>{{ $newDate = date("d F, Y", strtotime($data->report_date))  }}</td>
            <td colspan="3"><strong>RSM/ASM: </strong>{{ $data->report_asm_rsm }}</td>
        </tr>
        <tr>
            <th colspan="6"><strong>Visit Location Details</strong></th>
        </tr>
        <tr>
            <td colspan="3"><strong>Area: </strong>{{ $area = str_replace('_', ' ', $hierarchy['asm']->area) }}</td>
            <td colspan="3"><strong>ASM: </strong>{{ $hierarchy['asm']->name }}</td>
        </tr>
        <tr>
            <td colspan="3"><strong>Territory: </strong>{{ $hierarchy['tso']->area }}</td>
            <td colspan="3"><strong>TSO: </strong>{{ $hierarchy['tso']->name }}</td>
        </tr>
        <tr>
            <td colspan="3"><strong>Town: </strong>{{ $hierarchy['db']->area }}</td>
            <td colspan="3"><strong>SPO: </strong>{{ $data->report_spo }}</td>
        </tr>
        <tr>
            <td colspan="6"><strong>DB: </strong>{{ $hierarchy['db']->name }}</td>
        </tr>
        </tbody>
    </table>


@endsection
