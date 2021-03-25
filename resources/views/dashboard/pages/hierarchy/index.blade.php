@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">Hierarchy</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Hierarchy</li>
    </ol>

    {{--UPLOAD FORM START--}}
    {{--UPLOAD FORM START--}}
    <div class="col-md-6">
        <form method="POST" action="{{ route('hierarchy.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" class="btn" id="customFile" name="file">
            <button type="submit" name="submit" class="btn btn-success">Upload</button>
            <small id="upload_hierarchy_small" class="form-text text-muted">Upload Market Hierarchy file here. The file should be .CSV</small>
        </form>
        @if(session()->has('message'))
            <div class="alert alert-success mt-2">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>
    {{--UPLOAD FORM END--}}
    {{--UPLOAD FORM END--}}


    {{--DISPLAY TABLE START--}}
    {{--DISPLAY TABLE START--}}
    <div class="col-md-12">
        <div class="card mb-4 mt-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Market Hierarchy
            </div>
            <div class="card-body">
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
        </div>
    </div>
    {{--DISPLAY TABLE END--}}
    {{--DISPLAY TABLE END--}}
@endsection
