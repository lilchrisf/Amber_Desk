@extends('layout.Dashboard.dashboard')

@section('page_title','Classroom')

@section('navbar')
    <x-User.Navbar.dashboard_navbar/>
@endsection

@section('sidebar')
    <x-User.Sidebar.dashboard_sidebar :userClassrooms="$userClassrooms" :userEnrolled="$userEnrolled"/>
@endsection

@section('content')

    {{$Classroom[0]->class_nm}}
    <div class="divide-blue-400"></div>
    {{$Classroom[0]->password}}
    <div class="divide-blue-400"></div>
    <a href="{{'http://127.0.0.1:8000'.'/'.'c'.'/'.'i'.'/'.$Classroom[0]->invi_link}}">Invitation Link</a>
    <div class="divide-blue-400"></div>
    {{$Classroom[0]->class_id}}

    <form method="post" action="{{route('user.classroom.destroy',[$Classroom[0]])}}">
        @method('delete')
        @csrf
        <button type="submit" class="px-4 py-2 bg-red-500 rounded">Delete</button>
    </form>






@endsection
