@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">Items</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Items</li>
    </ol>

    <form class="col-md-6" method="POST" action="{{ route('item.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                   autocomplete="off" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" id="model" placeholder="Model" name="model"
                   autocomplete="off" value="{{ old('model') }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="identification_no">Identification No</label>
            <input type="text" class="form-control" id="identification_no" placeholder="Identification No" name="identification_no"
                   autocomplete="off" value="{{ old('identification_no') }}">
        </div>
        <div class="form-group">
            <label for="sim">Sim</label>
            <select class="custom-select custom-select-md mb-3" id="sim" name="sim">
                <option value="" >Select SIM</option>
                @foreach( $sims as $sim)
                    <option value="{{ $sim->id }}">{{ $sim->number }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cost">Cost</label>
            <input type="text" class="form-control" id="cost" placeholder="Cost" name="cost"
                   autocomplete="off" value="{{ old('cost') }}">
        </div>
        <div class="form-group">
            <label for="purchase_date">Purchase Date</label>
            <input type="date" class="form-control" id="purchase_date" placeholder="Purchase Date" name="purchase_date"
                   autocomplete="off" value="{{ old('purchase_date') }}">
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


        <button type="submit" class="btn btn-success">Add Item</button>
    </form>

    <div class="col-md-12">
        <div class="card mb-4 mt-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                All Items
            </div>
            <div class="card-body">
                @if (session()->has('deletedItemMsg'))
                    <div class="alert alert-danger text-center">
                        {{ session()->get('deletedItemMsg') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="departmentindextable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Model</th>
                            <th>Identification No</th>
                            <th>Cost</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Model</th>
                            <th>Identification No</th>
                            <th>Cost</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @forelse ($items as $item )
                            <tr class="department-table-row">
                                <td><a class="clickable-table-row-a" href="{{ route('item.show', $item) }}">{{ $loop->index+1 }}</a></td>
                                <td><a class="clickable-table-row-a" href="{{ route('item.show', $item) }}">{{ $item->name }}</a></td>
                                <td><a class="clickable-table-row-a" href="{{ route('item.show', $item) }}">{{ $item->model }}</a></td>
                                <td><a class="clickable-table-row-a" href="{{ route('item.show', $item) }}">{{ $item->identification_no }}</a></td>
                                <td><a class="clickable-table-row-a" href="{{ route('item.show', $item) }}">{{ $item->cost }}</a></td>
                                <td>
                                    <a href="{{ route('item.edit', $item) }}"
                                       class="btn btn-primary mr-1 mb-1 ml-2"
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Edit"><i class="far fa-edit"></i>
                                    </a>
                                    <form action="{{ route('item.destroy', $item) }}"
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
                                <td colspan="6">No Items Found</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

