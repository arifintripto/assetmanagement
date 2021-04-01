@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4 mb-4">Actions Agreed</h2>

    <form class="mb-5" method="POST" action="{{ route('agreedaction.store', ['id' => $id]) }}">
        @csrf

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">Area</th>
                <th scope="col">Actions Agreed</th>
                <th scope="col">Responsibility</th>
                <th scope="col">Timeline</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">DB Pt.</th>
                <td><input type="text" class="form-control  @error('db_point_actions_agreed') is-invalid @enderror"
                           id="db_point_actions_agreed"
                           placeholder="Db Pt. Actions Agreed"
                           name="db_point_actions_agreed"
                           autocomplete="off" value="{{ old('db_point_actions_agreed') }}">
                    @error('db_point_actions_agreed')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <select class="custom-select custom-select-md  @error('db_point_responsibility') is-invalid @enderror"
                            id="db_point_responsibility"
                            name="db_point_responsibility">
                        <option value="">DB Point Responsibility</option>
                        <option value="1" {{ old('db_point_responsibility')=='1' ? 'selected' : ''  }}>DB/ASM</option>
                        <option value="2" {{ old('db_point_responsibility')=='2' ? 'selected' : ''  }}>TSO</option>
                        <option value="3" {{ old('db_point_responsibility')=='3' ? 'selected' : ''  }}>SPO</option>
                    </select>
                    @error('db_point_responsibility')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <input type="date" class="form-control  @error('market_beat_visited') is-invalid @enderror"
                           id="db_point_timeline"
                           placeholder="Db Pt. Timeline"
                           name="db_point_timeline"
                           autocomplete="off" value="{{ old('db_point_timeline') }}">
                    @error('db_point_timeline')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <th scope="row">Sub-DB</th>
                <td>
                    <input type="text" class="form-control  @error('sub_db_point_actions_agreed') is-invalid @enderror"
                           id="sub_db_point_actions_agreed"
                           placeholder="Sub-DB Actions Agreed"
                           name="sub_db_point_actions_agreed"
                           autocomplete="off"
                           value="{{ old('sub_db_point_actions_agreed') }}">
                    @error('sub_db_point_actions_agreed')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <select class="custom-select custom-select-md  @error('sub_db_point_responsibility') is-invalid @enderror"
                            id="sub_db_point_responsibility"
                            name="sub_db_point_responsibility">
                        <option value="">Sub-DB Point Responsibility</option>
                        <option value="1" {{ old('sub_db_point_responsibility')=='1' ? 'selected' : ''  }}>DB/ASM</option>
                        <option value="2" {{ old('sub_db_point_responsibility')=='2' ? 'selected' : ''  }}>TSO</option>
                        <option value="3" {{ old('sub_db_point_responsibility')=='3' ? 'selected' : ''  }}>SPO</option>
                    </select>
                    @error('sub_db_point_responsibility')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <input type="date" class="form-control  @error('sub_db_point_timeline') is-invalid @enderror"
                           id="sub_db_point_timeline"
                           placeholder="Sub-DB Timeline"
                           name="sub_db_point_timeline"
                           autocomplete="off"
                           value="{{ old('sub_db_point_timeline') }}">
                    @error('sub_db_point_timeline')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <th scope="row">Overview</th>
                <td>
                    <input type="text" class="form-control  @error('overview_actions_agreed') is-invalid @enderror"
                           autocomplete="off"
                           placeholder="Overview Actions Agreed"
                           name="overview_actions_agreed"
                           id="overview_actions_agreed"
                           value="{{ old('overview_actions_agreed') }}">
                    @error('overview_actions_agreed')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <select class="custom-select custom-select-md  @error('overview_responsibility') is-invalid @enderror"
                            id="overview_responsibility"
                            name="overview_responsibility">
                        <option value="">Overview Responsibility</option>
                        <option value="1" {{ old('overview_responsibility')=='1' ? 'selected' : ''  }}>DB/ASM</option>
                        <option value="2" {{ old('overview_responsibility')=='2' ? 'selected' : ''  }}>TSO</option>
                        <option value="3" {{ old('overview_responsibility')=='3' ? 'selected' : ''  }}>SPO</option>
                    </select>
                    @error('overview_responsibility')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <input type="date" class="form-control  @error('overview_timeline') is-invalid @enderror"
                           autocomplete="off"
                           placeholder="Overview Timeline"
                           name="overview_timeline"
                           id="overview_timeline"
                           value="{{ old('overview_timeline') }}">
                    @error('overview_timeline')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <th scope="row">Processes</th>
                <td>
                    <input type="text" class="form-control  @error('processes_actions_agreed') is-invalid @enderror"
                           autocomplete="off"
                           placeholder="Processes Actions Agreed"
                           name="processes_actions_agreed"
                           id="processes_actions_agreed"
                           value="{{ old('processes_actions_agreed') }}">
                    @error('processes_actions_agreed')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <select class="custom-select custom-select-md  @error('processes_responsibility') is-invalid @enderror"
                            id="processes_responsibility"
                            name="processes_responsibility">
                        <option value="">Processes Responsibility</option>
                        <option value="1" {{ old('processes_responsibility')=='1' ? 'selected' : ''  }}>DB/ASM</option>
                        <option value="2" {{ old('processes_responsibility')=='2' ? 'selected' : ''  }}>TSO</option>
                        <option value="3" {{ old('processes_responsibility')=='3' ? 'selected' : ''  }}>SPO</option>
                    </select>
                    @error('processes_responsibility')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <input type="date" class="form-control  @error('processes_timeline') is-invalid @enderror"
                           autocomplete="off"
                           placeholder="Processes Timeline"
                           name="processes_timeline"
                           id="processes_timeline"
                           value="{{ old('processes_timeline') }}">
                    @error('processes_timeline')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <th scope="row">Mkt Work</th>
                <td>
                    <input type="text" class="form-control  @error('mkt_work_actions_agreed') is-invalid @enderror"
                           autocomplete="off"
                           placeholder="Mkt Work Actions Agreed"
                           name="mkt_work_actions_agreed"
                           id="mkt_work_actions_agreed"
                           value="{{ old('mkt_work_actions_agreed') }}">
                    @error('mkt_work_actions_agreed')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <select class="custom-select custom-select-md  @error('mkt_work_responsibility') is-invalid @enderror"
                            id="mkt_work_responsibility"
                            name="mkt_work_responsibility">
                        <option value="">Mkt Work Responsibility</option>
                        <option value="1" {{ old('mkt_work_responsibility')=='1' ? 'selected' : ''  }}>DB/ASM</option>
                        <option value="2" {{ old('mkt_work_responsibility')=='2' ? 'selected' : ''  }}>TSO</option>
                        <option value="3" {{ old('mkt_work_responsibility')=='3' ? 'selected' : ''  }}>SPO</option>
                    </select>
                    @error('mkt_work_responsibility')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <select class="custom-select custom-select-md  @error('mkt_work_timeline') is-invalid @enderror"
                            id="mkt_work_timeline"
                            name="mkt_work_timeline">
                        <option value="">Mkt Work Timeline</option>
                        <option value="1" {{ old('mkt_work_timeline')=='1' ? 'selected' : ''  }}>Regularly</option>
                        <option value="2" {{ old('mkt_work_timeline')=='2' ? 'selected' : ''  }}>Irregularly</option>
                    </select>
                    @error('mkt_work_timeline')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <th scope="row">People</th>
                <td>
                    <input type="text" class="form-control  @error('people_actions_agreed') is-invalid @enderror"
                           autocomplete="off"
                           placeholder="People Actions Agreed"
                           name="people_actions_agreed"
                           id="people_actions_agreed"
                           value="{{ old('people_actions_agreed') }}">
                    @error('people_actions_agreed')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <select class="custom-select custom-select-md  @error('people_responsibility') is-invalid @enderror"
                            id="people_responsibility"
                            name="people_responsibility">
                        <option value="">People Responsibility</option>
                        <option value="1" {{ old('people_responsibility')=='1' ? 'selected' : ''  }}>DB/ASM</option>
                        <option value="2" {{ old('people_responsibility')=='2' ? 'selected' : ''  }}>TSO</option>
                        <option value="3" {{ old('people_responsibility')=='3' ? 'selected' : ''  }}>SPO</option>
                    </select>
                    @error('people_responsibility')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <input type="date" class="form-control  @error('people_timeline') is-invalid @enderror"
                           autocomplete="off"
                           placeholder="People Timeline"
                           name="people_timeline"
                           id="people_timeline"
                           value="{{ old('people_timeline') }}">
                    @error('people_timeline')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <th scope="row">Other</th>
                <td>
                    <input type="text" class="form-control  @error('other_actions_agreed') is-invalid @enderror"
                           autocomplete="off"
                           placeholder="Other Actions Agreed"
                           name="other_actions_agreed"
                           id="other_actions_agreed"
                           value="{{ old('other_actions_agreed') }}">
                    @error('other_actions_agreed')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <select class="custom-select custom-select-md  @error('other_responsibility') is-invalid @enderror"
                            id="other_responsibility"
                            name="other_responsibility">
                        <option value="">Other Responsibility</option>
                        <option value="1" {{ old('other_responsibility')=='1' ? 'selected' : ''  }}>DB/ASM</option>
                        <option value="2" {{ old('other_responsibility')=='2' ? 'selected' : ''  }}>TSO</option>
                        <option value="3" {{ old('other_responsibility')=='3' ? 'selected' : ''  }}>SPO</option>
                    </select>
                    @error('other_responsibility')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <input type="date" class="form-control  @error('other_timeline') is-invalid @enderror"
                           autocomplete="off"
                           placeholder="Other Timeline"
                           name="other_timeline"
                           id="other_timeline"
                           value="{{ old('other_timeline') }}">
                    @error('other_timeline')
                    <small id="" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </td>
            </tr>

            </tbody>
        </table>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success btn-lg mt-4 mb-4">Next <i class="fas fa-chevron-circle-right"></i></button>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif


    </form>


@endsection
