@extends('layout.Dashboard.dashboard')

@section('page_title','Classroom')

@section('navbar')
    <x-User.Navbar.classroom_navbar/>
@endsection

@section('sidebar')
    <x-User.Sidebar.dashboard_sidebar :userClassrooms="$userClassrooms" :userEnrolled="$userEnrolled"/>
@endsection

@section('content')

    {{--Navbar Start--}}
{{--    <style>--}}
{{--        @import url(https://pro.fontawesome.com/releases/v5.10.0/css/all.css);--}}
{{--        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;800&display=swap');--}}
{{--        body {--}}
{{--            font-family: 'Poppins', sans-serif;--}}
{{--        }--}}
{{--        .hover\:w-full:hover {--}}
{{--            width: 100%;--}}
{{--        }--}}
{{--        .group:hover .group-hover\:w-full {--}}
{{--            width: 100%;--}}
{{--        }--}}
{{--        .group:hover .group-hover\:inline-block {--}}
{{--            display: inline-block;--}}
{{--        }--}}
{{--        .group:hover .group-hover\:flex-grow {--}}
{{--            flex-grow: 1;--}}
{{--        }--}}
{{--    </style>--}}

{{--    <div class="min-w-full flex items-center justify-center px-5 pt-5 ">--}}
{{--        <div class="w-full max-w-md mx-auto">--}}

{{--            <div class="px-7 bg-white shadow-lg rounded-2xl mb-5">--}}
{{--                <div class="flex">--}}
{{--                    <div class="flex-auto duration-300 transition hover:w-full group">--}}
{{--                        <a href="#" class="flex items-center justify-center text-center mx-auto px-4 py-2 group-hover:w-full text-indigo-500">--}}
{{--                        <span class="block px-1 py-1 group-hover:bg-indigo-100 rounded-full group-hover:flex-grow">--}}
{{--                            <i class="far fa-home text-2xl pt-1"></i><span class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Home</span>--}}
{{--                        </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="flex-auto hover:w-full group">--}}
{{--                        <a href="#" class="flex items-center justify-center text-center mx-auto px-4 py-2 group-hover:w-full text-indigo-500">--}}
{{--                        <span class="block px-1 py-1 group-hover:bg-indigo-100 rounded-full group-hover:flex-grow">--}}
{{--                            <i class="far fa-compass text-2xl pt-1"></i><span class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Explore</span>--}}
{{--                        </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="flex-auto hover:w-full group">--}}
{{--                        <a href="#" class="flex items-center justify-center text-center mx-auto px-4 py-2 group-hover:w-full text-indigo-500">--}}
{{--                        <span class="block px-1 py-1 group-hover:bg-indigo-100 rounded-full group-hover:flex-grow">--}}
{{--                            <i class="far fa-search text-2xl pt-1"></i><span class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Search</span>--}}
{{--                        </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="flex-auto hover:w-full group">--}}
{{--                        <a href="#" class="flex items-center justify-center text-center mx-auto px-4 py-2 group-hover:w-full text-indigo-500">--}}
{{--                        <span class="block px-1 py-1 group-hover:bg-indigo-100 rounded-full group-hover:flex-grow">--}}
{{--                            <i class="far fa-cog text-2xl pt-1"></i><span class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Settings</span>--}}
{{--                        </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
    {{--Navbar End--}}
    {{$Classroom[0]->class_nm}}
    <div class="divide-blue-400"></div>
    {{$Classroom[0]->password}}
    <div class="divide-blue-400"></div>
    {{$Classroom[0]->invi_link}}
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
