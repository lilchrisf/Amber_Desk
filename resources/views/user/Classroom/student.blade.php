@extends('layout.Dashboard.dashboard')

@section('page_title','Classroom')

@section('navbar')
    <x-User.Navbar.classroom_navbar/>
@endsection

@section('sidebar')
    <x-User.Sidebar.dashboard_sidebar/>
@endsection

@section('content')
    ok
@endsection
