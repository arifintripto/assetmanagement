@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">SIM</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">SIM</li>
    </ol>

    <form class="col-md-6" method="POST" action="{{ route('sim.store') }}">
        @csrf
        <div class="form-group">
            <label for="number">Sim Number</label>
            <input type="text" class="form-control" id="number" placeholder="Sim Number" name="number"
                   autocomplete="off" value="{{ old('number') }}">
        </div>
        <div class="form-group">
            <label for="serial_no">Serial Number</label>
            <input type="text" class="form-control" id="serial_no" placeholder="Serial Number" name="serial_no"
                   autocomplete="off" value="{{ old('serial_no') }}">
        </div>
        <div class="form-group">
            <label for="pin1">PIN1</label>
            <input type="text" class="form-control" id="pin1" placeholder="PIN1" name="pin1"
                   autocomplete="off" value="{{ old('pin1') }}">
        </div>
        <div class="form-group">
            <label for="pin2">PIN2</label>
            <input type="text" class="form-control" id="pin2" placeholder="PIN2" name="pin2"
                   autocomplete="off" value="{{ old('pin2') }}">
        </div>
        <div class="form-group">
            <label for="puk1">PUK1</label>
            <input type="text" class="form-control" id="puk1" placeholder="PUK1" name="puk1"
                   autocomplete="off" value="{{ old('puk1') }}">
        </div>
        <div class="form-group">
            <label for="puk2">PUK2</label>
            <input type="text" class="form-control" id="puk2" placeholder="PUK2" name="puk2"
                   autocomplete="off" value="{{ old('puk2') }}">
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


        <button type="submit" class="btn btn-success">Add SIM</button>
    </form>

    <div class="col-md-12">
        <div class="card mb-4 mt-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                All SIM's
            </div>
            <div class="card-body">
                @if (session()->has('deletedSimMsg'))
                    <div class="alert alert-danger text-center">
                        {{ session()->get('deletedSimMsg') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="departmentindextable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>SIM No</th>
                            <th>Serial No</th>
                            <th>PIN1</th>
                            <th>PIN2</th>
                            <th>PUK1</th>
                            <th>PUK2</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>SIM No</th>
                            <th>Serial No</th>
                            <th>PIN1</th>
                            <th>PIN2</th>
                            <th>PUK1</th>
                            <th>PUK2</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @forelse ($sims as $sim )
                            <tr class="department-table-row">
                                <td><a class="clickable-table-row-a" href="{{ route('sim.show', $sim) }}">{{ $loop->index+1 }}</a></td>
                                <td><a class="clickable-table-row-a" href="{{ route('sim.show', $sim) }}">{{ $sim->number }}</a></td>
                                <td><a class="clickable-table-row-a" href="{{ route('sim.show', $sim) }}">{{ $sim->serial_no }}</a></td>
                                <td><a class="clickable-table-row-a" href="{{ route('sim.show', $sim) }}">{{ $sim->pin1 }}</a></td>
                                <td><a class="clickable-table-row-a" href="{{ route('sim.show', $sim) }}">{{ $sim->pin2 }}</a></td>
                                <td><a class="clickable-table-row-a" href="{{ route('sim.show', $sim) }}">{{ $sim->puk1 }}</a></td>
                                <td><a class="clickable-table-row-a" href="{{ route('sim.show', $sim) }}">{{ $sim->puk2 }}</a></td>
                                <td>
                                    <a href="{{ route('sim.edit', $sim) }}"
                                       class="btn btn-primary mr-1 mb-1 ml-2"
                                       data-bs-toggle="tooltip"
                                       data-bs-placement="top"
                                       title="Edit"><i class="far fa-edit"></i>
                                    </a>
                                    <form action="{{ route('sim.destroy', $sim) }}"
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
                                <td colspan="6">No SIM Found</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

