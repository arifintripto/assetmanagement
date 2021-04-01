@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4 mb-4">Visit Area Details</h2>

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
            <td colspan="2" style="width: 50%"><strong>Date: </strong>{{ $newDate = date("d F, Y", strtotime($data['report']->report_date))  }}</td>
            <td colspan="2"><strong>Report By: </strong>{{ Auth::user()->rsm_asm }} - {{ Auth::user()->name }}</td>
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
            <td colspan="2">
                @if(isset($data['spo_name']))
                    <strong>SPO: </strong>{{ $data['spo_name'] }}
                @else
                    <form method="POST" action="{{ route('spo.store', ['id' => $data['id']]) }}" id="spo_select_form">
                        @csrf
                        <select class="custom-select custom-select-md mb-3 " id="report_spo" name="report_spo" required>
                            <option value="" >Select SPO</option>
                            @foreach( $data['hierarchy']['spos'] as $spo)
                                <option value="{{ $spo->code }}">{{ $spo->code }} - {{ $spo->name }}</option>
                            @endforeach
                        </select>
                    </form>
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="4"><strong>DB: </strong>{{ $data['hierarchy']['db']->name }}</td>
        </tr>
        </tbody>
    </table>

    @if(isset($data['report_btn']))
        <div class="">
            <div class="text-center">
                <a href="{{ route('getpdf', ['id'=> $data['id']]) }}" class="btn btn-success mt-4 mb-4" target="_blank">Field Visit Report <i class="far fa-file-alt"></i></a>
                <a href="{{ route('godown_report', ['id'=> $data['id']]) }}" class="btn btn-success mt-4 mb-4" target="_blank">Godown Report <i class="far fa-file-alt"></i></a>
            </div>
        </div>
    @else
        <div class="">
            <div class="text-center">
                <button type="submit" form="spo_select_form" class="btn btn-success btn-lg mt-4 mb-4">Next <i class="fas fa-chevron-circle-right"></i></button>
            </div>
        </div>
    @endif


@endsection
