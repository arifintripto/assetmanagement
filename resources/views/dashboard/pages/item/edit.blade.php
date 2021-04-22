@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">Item</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('item.index') }}">Item</a></li>
        <li class="breadcrumb-item active">Edit Item</li>
    </ol>

    <form class="col-md-6" method="POST" action="{{ route('item.show', $item) }}">
        @csrf
        @method('PUT')


        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                   autocomplete="off" value="{{ $item->name }}">
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" id="model" placeholder="Model" name="model"
                   autocomplete="off" value="{{ $item->model }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="identification_no">Identification No</label>
            <input type="text" class="form-control" id="identification_no" placeholder="Identification No" name="identification_no"
                   autocomplete="off" value="{{ $item->identification_no }}">
        </div>
        <div class="form-group">
            <label for="sim">Sim</label>
            <select class="custom-select custom-select-md mb-3" id="sim" name="sim">
                <option value="{{ $item->sim }}" selected>{{ \App\Models\Sim::where('id', '=', $item->sim)->pluck('number')->first() }}</option>
                @foreach( $sims as $sim)
                    <option value="{{ $sim->id }}" >{{ $sim->number }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cost">Cost</label>
            <input type="text" class="form-control" id="cost" placeholder="Cost" name="cost"
                   autocomplete="off" value="{{ $item->cost }}">
        </div>
        <div class="form-group">
            <label for="purchase_date">Purchase Date</label>
            <input type="date" class="form-control" id="purchase_date" placeholder="Purchase Date" name="purchase_date"
                   autocomplete="off" value="{{ $item->purchase_date }}">
        </div>


        @if(session()->has('message'))
            <small class="form-text text-success">{{ session()->get('message') }}</small>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <small class="form-text text-danger">{{ $error }}</small>
            @endforeach
        @endif
        <button type="submit" class="btn btn-primary">Update</button>
    </form>


@endsection


