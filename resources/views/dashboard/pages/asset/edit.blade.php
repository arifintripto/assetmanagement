@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">SIM</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="/sim">Sim</a></li>
        <li class="breadcrumb-item active">Edit Sim</li>
    </ol>

    <form class="col-md-6" method="POST" action="{{ route('sim.show', $sim) }}">
        @csrf
        @method('PUT')


        <div class="form-group">
            <label for="number">Sim Number</label>
            <input type="text" class="form-control" id="number" placeholder="Sim Number" name="number"
                   autocomplete="off" value="{{ $sim->number }}">
        </div>
        <div class="form-group">
            <label for="serial_no">Serial Number</label>
            <input type="text" class="form-control" id="serial_no" placeholder="Serial Number" name="serial_no"
                   autocomplete="off" value="{{ $sim->serial_no }}">
        </div>
        <div class="form-group">
            <label for="pin1">PIN1</label>
            <input type="text" class="form-control" id="pin1" placeholder="PIN1" name="pin1"
                   autocomplete="off" value="{{ $sim->pin1 }}">
        </div>
        <div class="form-group">
            <label for="pin2">PIN2</label>
            <input type="text" class="form-control" id="pin2" placeholder="PIN2" name="pin2"
                   autocomplete="off" value="{{ $sim->pin2 }}">
        </div>
        <div class="form-group">
            <label for="puk1">PUK1</label>
            <input type="text" class="form-control" id="puk1" placeholder="PUK1" name="puk1"
                   autocomplete="off" value="{{ $sim->puk1 }}">
        </div>
        <div class="form-group">
            <label for="puk2">PUK2</label>
            <input type="text" class="form-control" id="puk2" placeholder="PUK2" name="puk2"
                   autocomplete="off" value="{{ $sim->puk2 }}">
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


