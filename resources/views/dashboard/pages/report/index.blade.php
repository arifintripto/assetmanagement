@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">All Reports</h2>

    <div class="mb-4 mt-4">
        <div class="table-responsive">
                <table class="table table-bordered table-hover" id="departmentindextable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Date</th>
                        <th>DB</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Serial</th>
                        <th>Date</th>
                        <th>DB</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @forelse ($reports as $report )
                        <tr class="department-table-row">
                            <td><a class="clickable-table-row-a" href="">{{ $loop->index+1 }}</a></td>
                            <td>
                                <a class="clickable-table-row-a" target="_blank" href="{{ route('step2show', ['id'=>$report->godown_report_id]) }}">{{ $report->report_date }}</a>
                            </td>
                            <td>
                                <a class="clickable-table-row-a" target="_blank" href="{{ route('step2show', ['id'=>$report->godown_report_id]) }}">{{ $report->report_db }}</a>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No Hierarchy Found</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
    </div>

@endsection
