@extends('layout.Dashboard.dashboard')

@section('page_title','Classroom')

@section('content')


    {{$classroom->class_nm}}
    <div class="divide-blue-400"></div>
    {{$classroom->password}}
    <div class="divide-blue-400"></div>
    {{$classroom->invi_link}}
    <div class="divide-blue-400"></div>
    {{$classroom->class_id}}

    <form method="post" action="{{route('user.classroom.destroy',[$classroom])}}">
        @method('delete')
        @csrf
        <button type="submit" class="px-4 py-2 bg-red-500 rounded">Delete</button>
        </form>






@endsection
