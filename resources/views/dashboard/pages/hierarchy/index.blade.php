@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4 mb-4">Hierarchy</h2>

    {{--UPLOAD FORM START--}}
    {{--UPLOAD FORM START--}}
    <form method="POST" action="{{ route('hierarchy.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" class="btn btn-secondary" id="customFile" name="file">
        <button type="submit" name="submit" class="btn btn-success" style="padding: 9px">Upload</button>
        <small id="upload_hierarchy_small" class="form-text text-warning">Upload Market Hierarchy file here. The file should be .CSV</small>
    </form>
    @if(session()->has('message'))
        <div class="alert alert-success mt-2">
            {{ session()->get('message') }}
        </div>
    @endif
    {{--UPLOAD FORM END--}}
    {{--UPLOAD FORM END--}}


    {{--DISPLAY TABLE START--}}
    {{--DISPLAY TABLE START--}}
    <div class="mb-4 mt-4">
        <div class="table-responsive">
                <table class="table table-bordered table-hover" id="departmentindextable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Code</th>
                        <th>Parent Code</th>
                        <th>Name</th>
                        <th>Area</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Serial</th>
                        <th>Code</th>
                        <th>Parent Code</th>
                        <th>Name</th>
                        <th>Area</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @forelse ($hierarchies as $hierarchy )
                        <tr class="department-table-row">
                            <td><a class="clickable-table-row-a" href="{{ route('hierarchy.show', $hierarchy) }}">{{ $loop->index+1 }}</a></td>
                            <td><a class="clickable-table-row-a" href="{{ route('hierarchy.show', $hierarchy) }}">{{ $hierarchy->code }}</a></td>
                            <td><a class="clickable-table-row-a" href="{{ route('hierarchy.show', $hierarchy) }}">{{ $hierarchy->parent_code }}</a></td>
                            <td><a class="clickable-table-row-a" href="{{ route('hierarchy.show', $hierarchy) }}">{{ $hierarchy->name }}</a></td>
                            <td><a class="clickable-table-row-a" href="{{ route('hierarchy.show', $hierarchy) }}">{{ $hierarchy->area }}</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No Hierarchy Found</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
    </div>
    {{--DISPLAY TABLE END--}}
    {{--DISPLAY TABLE END--}}
@endsection
