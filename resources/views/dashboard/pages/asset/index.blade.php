@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">Asset</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Asset</li>
    </ol>

    <form class="col-md-6" method="POST" action="{{ route('asset.store') }}">
        @csrf

        <div class="form-group">
            <label for="item">Item</label>
            <select class="custom-select custom-select-md mb-3" id="item" name="item">
                <option value="" >Select Item</option>
                @foreach( $items as $item)
                    <option value="{{ $item->id }}">{{ $item->identification_no }} - {{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="condition">Condition</label>
            <input type="text" class="form-control" id="condition" placeholder="Condition" name="condition"
                   autocomplete="off" value="{{ old('condition') }}">
        </div>
        <div class="form-group">
            <label for="assigned_date">Assigned Date</label>
            <input type="date" class="form-control" id="assigned_date" placeholder="Assigned Date" name="assigned_date"
                   autocomplete="off" value="{{ old('assigned_date') }}">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="custom-select custom-select-md mb-3" id="status" name="status">
                <option value="" >Select Status</option>
                <option value="1">Active</option>
                <option value="2">Balance</option>
                <option value="3">Lost</option>
            </select>
        </div>
        <div class="form-group">
            <label for="knox">Knox</label>
            <select class="custom-select custom-select-md mb-3" id="knox" name="knox">
                <option value="" >Select Knox</option>
                <option value="1">Knox</option>
                <option value="2">No Knox</option>
            </select>
        </div>
        <div class="form-group">
            <label for="remarks">Remarks</label>
            <input type="text" class="form-control" id="remarks" placeholder="Remarks" name="remarks"
                   autocomplete="off" value="{{ old('remarks') }}">
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


        <button type="submit" class="btn btn-success">Add Asset</button>
    </form>

    <div class="col-md-12">
        <div class="card mb-4 mt-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                All Assets
            </div>
            <div class="card-body">
                @if (session()->has('deletedAssetMsg'))
                    <div class="alert alert-danger text-center">
                        {{ session()->get('deletedAssetMsg') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="departmentindextable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Asset ID</th>
                            <th>Status</th>
                            <th>Assigned Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Asset ID</th>
                            <th>Status</th>
                            <th>Assigned Date</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @forelse ($assets as $asset )
                            <tr class="department-table-row">
                                <td><a class="clickable-table-row-a" href="{{ route('asset.show', $asset) }}">{{ $loop->index+1 }}</a></td>
                                <td><a class="clickable-table-row-a" href="{{ route('asset.show', $asset) }}">{{ $asset->id }}</a></td>
                                <td><a class="clickable-table-row-a" href="{{ route('asset.show', $asset) }}">{{ $asset->status }}</a></td>
                                <td><a class="clickable-table-row-a" href="{{ route('asset.show', $asset) }}">{{ $asset->assigned_date }}</a></td>
                                <td>
                                    <a href="{{ route('asset.edit', $asset) }}"
                                       class="btn btn-primary mr-1 mb-1 ml-2"
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Edit"><i class="far fa-edit"></i>
                                    </a>
                                    <form action="{{ route('asset.destroy', $asset) }}"
                                          method="POST"
                                          class="form-btn"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Delete" type="submit">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No Asset Found</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

