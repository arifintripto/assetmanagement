@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    @include('dashboard.pages.dashboard.pagetitle')
    @include('dashboard.pages.dashboard.topcards')
    @include('dashboard.pages.dashboard.charts')
    @include('dashboard.pages.dashboard.datatable')
@endsection
