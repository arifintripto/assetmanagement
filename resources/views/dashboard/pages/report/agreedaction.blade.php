@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4">Actions Agreed</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('report.index') }}">Report</a></li>
        <li class="breadcrumb-item active">Actions Agreed</li>
    </ol>

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
                <td><input type="text" class="form-control mb-3" id="db_point_actions_agreed"
                           placeholder="Db Pt. Actions Agreed"
                           name="db_point_actions_agreed"
                           autocomplete="off" value="{{ old('db_point_actions_agreed') }}"></td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="db_point_responsibility"
                            name="db_point_responsibility">
                        <option selected disabled>DB Point Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td><input type="date" class="form-control mb-3" id="db_point_timeline" placeholder="Db Pt. Timeline"
                           name="db_point_timeline"
                           autocomplete="off" value="{{ old('db_point_timeline') }}"></td>
            </tr>
            <tr>
                <th scope="row">Sub-DB</th>
                <td>
                    <input type="text" class="form-control mb-3"
                           id="sub_db_point_actions_agreed"
                           placeholder="Sub-DB Actions Agreed"
                           name="sub_db_point_actions_agreed"
                           autocomplete="off"
                           value="{{ old('sub_db_point_actions_agreed') }}">
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="sub_db_point_responsibility"
                            name="sub_db_point_responsibility">
                        <option selected disabled>Sub-DB Point Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td>
                    <input type="date" class="form-control mb-3"
                           id="sub_db_point_timeline"
                           placeholder="Sub-DB Timeline"
                           name="sub_db_point_timeline"
                           autocomplete="off"
                           value="{{ old('sub_db_point_timeline') }}">
                </td>
            </tr>
            <tr>
                <th scope="row">Overview</th>
                <td>
                    <input type="text" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Overview Actions Agreed"
                           name="overview_actions_agreed"
                           id="overview_actions_agreed"
                           value="{{ old('overview_actions_agreed') }}">
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="overview_responsibility"
                            name="overview_responsibility">
                        <option selected disabled>Overview Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td>
                    <input type="date" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Overview Timeline"
                           name="overview_timeline"
                           id="overview_timeline"
                           value="{{ old('overview_timeline') }}">
                </td>
            </tr>
            <tr>
                <th scope="row">Processes</th>
                <td>
                    <input type="text" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Processes Actions Agreed"
                           name="processes_actions_agreed"
                           id="processes_actions_agreed"
                           value="{{ old('processes_actions_agreed') }}">
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="processes_responsibility"
                            name="processes_responsibility">
                        <option selected disabled>Processes Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td>
                    <input type="date" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Processes Timeline"
                           name="processes_timeline"
                           id="processes_timeline"
                           value="{{ old('processes_timeline') }}">
                </td>
            </tr>
            <tr>
                <th scope="row">Mkt Work</th>
                <td>
                    <input type="text" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Mkt Work Actions Agreed"
                           name="mkt_work_actions_agreed"
                           id="mkt_work_actions_agreed"
                           value="{{ old('mkt_work_actions_agreed') }}">
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="mkt_work_responsibility"
                            name="mkt_work_responsibility">
                        <option selected disabled>Mkt Work Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="mkt_work_timeline"
                            name="mkt_work_timeline">
                        <option selected disabled>Mkt Work Timeline</option>
                        <option value="1">Regularly</option>
                        <option value="2">Irregularly</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">People</th>
                <td>
                    <input type="text" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="People Actions Agreed"
                           name="people_actions_agreed"
                           id="people_actions_agreed"
                           value="{{ old('people_actions_agreed') }}">
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="people_responsibility"
                            name="people_responsibility">
                        <option selected disabled>People Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td>
                    <input type="date" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="People Timeline"
                           name="people_timeline"
                           id="people_timeline"
                           value="{{ old('people_timeline') }}">
                </td>
            </tr>
            <tr>
                <th scope="row">Other</th>
                <td>
                    <input type="text" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Other Actions Agreed"
                           name="other_actions_agreed"
                           id="other_actions_agreed"
                           value="{{ old('other_actions_agreed') }}">
                </td>
                <td>
                    <select class="custom-select custom-select-md mb-3" id="other_responsibility"
                            name="other_responsibility">
                        <option selected disabled>Other Responsibility</option>
                        <option value="1">DB/ASM</option>
                        <option value="2">TSO</option>
                        <option value="3">SPO</option>
                    </select>
                </td>
                <td>
                    <input type="date" class="form-control mb-3"
                           autocomplete="off"
                           placeholder="Other Timeline"
                           name="other_timeline"
                           id="other_timeline"
                           value="{{ old('other_timeline') }}">
                </td>
            </tr>

            </tbody>
        </table>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success btn-lg mt-4 mb-4">Next <i class="fas fa-chevron-circle-right"></i></button>
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


    </form>


@endsection
