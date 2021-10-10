@extends('layout.Dashboard.dashboard')

@section('page_title','Dashboard')

@section('navbar')
    <x-User.Navbar.dashboard_navbar/>
@endsection

@section('sidebar')
    <x-User.Sidebar.dashboard_sidebar :userClassrooms="$userClassrooms" :userEnrolled="$userEnrolled"/>
@endsection

@section('content')


    <section class="text-gray-600  body-font ">
        <div class=" px-5 mx-auto ">
            <div class="flex flex-wrap -m-4">

                @forelse ($userClassrooms as $userClassroom)

                    <a href="{{route('user.classroom.show',[$userClassroom])}}">
                        <div class="p-4 mt-10  md:w-1/3">
                            <div
                                class="hover:shadow-2xl ring ring-orange-400 duration-200  shadow-md  h-full  ring-opacity-40 rounded-lg overflow-hidden">
                                <img class="lg:h-32 md:h-36 w-full object-cover object-center"
                                     src="https://source.unsplash.com/random" alt="blog">
                                <div class="p-6">
                                    <h1 class="title-font text-xl relative   font-bold text-gray-800 mb-3">{{$userClassroom->class_nm}}</h1>
                                    <p class="leading-relaxed 0 text-gray-600 font-medium mb-3">
                                        Topic
                                    </p>
                                    <div class="flex items-center flex-wrap ">
                                        <a></a>

                                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                            Javaughn Bailey
                          </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    {{--TODO ADD CLASSROOM DASHBOARD EMPTY DISPLAY--}}
                    <a href="#">
                        <div class="p-4 mt-10  md:w-1/3">
                            <div
                                class="hover:shadow-2xl duration-200  shadow-md  h-full  border-opacity-60 rounded-lg overflow-hidden">
                                <img class="lg:h-32 md:h-36 w-full object-cover object-center"
                                     src="https://source.unsplash.com/random" alt="blog">
                                <div class="p-6">
                                    <h1 class="title-font text-xl relative   font-bold text-gray-800 mb-3">Add
                                        Classroom</h1>
                                    <p class="leading-relaxed 0 text-gray-600 font-medium mb-3">
                                        Add Classroom
                                    </p>
                                    <div class="flex items-center flex-wrap ">
                                        <a></a>

                                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                            Add Classroom
                          </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                @endforelse

                {{--                    {{dd($userEnrolled)}}--}}

                @forelse($userEnrolled->student as $class )
                    <a href="{{route('user.classroom.show',[$class->classroom])}}">
                        <div class="p-4 mt-10  md:w-1/3">
                            <div
                                class="hover:shadow-2xl duration-200 ring-2  shadow-md  h-full  border-opacity-60 rounded-lg overflow-hidden">
                                <img class="lg:h-32 md:h-36 w-full object-cover object-center"
                                     src="https://source.unsplash.com/random" alt="blog">
                                <div class="p-6">
                                    <h1 class="title-font text-xl relative   font-bold text-gray-800 mb-3">{{$class->classroom->class_nm}}</h1>
                                    <p class="leading-relaxed 0 text-gray-600 font-medium mb-3">
                                        Topic
                                    </p>
                                    <div class="flex items-center flex-wrap ">
                                        <a></a>

                                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">

                                            @if ($class->classroom->teacherInfo->first_nm === null)
                                                {{$class->classroom->teacherInfo->username}}

                                            @elseif ($class->classroom->teacherInfo->username !== null)
                                                {{$class->classroom->teacherInfo->first_nm}} {{$class->classroom->teacherInfo->last_nm}}
                                            @endif

                          </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty

                @endforelse

            </div>
        </div>
    </section>



    {{--    TODO ADJUST MODAL JAVASCRIPT TOGGLE FUNCTION--}}
    {{--            Modals--}}

    {{--Create Classroom Modal--}}

    <x-User.modal.dashboard_crt-class-modal/>

    {{--Create Classroom Modal End--}}

    {{--Join Classroom Modal--}}

    <x-User.modal.dashboard_join-class-modal/>

    {{--Join Classroom Modal End--}}

    {{--            Modals End--}}
@endsection

