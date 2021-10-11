@extends('layout.Dashboard.dashboard')

@section('page_title','Classroom')

@section('navbar')
    <x-User.Navbar.classroom_navbar/>
@endsection

@section('sidebar')
    <x-User.Sidebar.dashboard_sidebar :userClassrooms="$userClassrooms" :userEnrolled="$userEnrolled"/>
@endsection

@section('content')

<div id="desk_home_view" class="w-full h-full">

    <div class="h-5/12 text-white flex-col mb-6 rounded-b-lg  justify-start flex items-center "
         style="background: url('https://source.unsplash.com/random'); object-fit: cover; object-position: center;">
{{--TODO MAKE THIS CHANGEABLE--}}
        {{--                {{dd($Classroom->classroomStudents)}}--}}

        <div class="w-full flex flex-col justify-around h-full">
            <div
                class=" shadow-2xl ml-4 p-4 rounded-2xl bg-black bg-opacity-70 w-2/3  h-1/2 flex justify-around flex-col">
                <div class="text-4xl">{{$Classroom->class_nm}}</div>

                <div class="text-md"><span id="classroom_link">Classroom ID: {{$Classroom->invi_link}}</span></div>
            </div>

        </div>

        <div class="flex justify-end p-5 items-end w-full">
            <button id="change_cover_img_btn" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 duration-200  hover:text-orange-400" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </button>
        </div>

    </div>

    <button id="mkAnnouncementBtn"
            class="py-1  w-full flex items-center justify-between px-6  rounded-2xl shadow-inner border-b border-gray-100">

        <div class="flex-row items-center flex">
            <div class="flex relative w-12 h-12 justify-center items-center m-1 mr-2 text-xl rounded-full text-white">
                <img class="rounded-full" alt="A" src="{{$Classroom->teacherInfo->avatar}}"></div>

            <div class="text-sm text-gray-600 font-semibold">Make Announcement To Desk</div>
        </div>

        <div>
            <div class="mx-auto flex gap-10">
                <div class="w-auto h-auto">
                    <div class="flex-1 h-full">
                        <div class="flex items-center justify-center flex-1 h-full p-2 bg-white shadow-md rounded-lg">
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </button>

    <form id="addAnnouncementView" method="post" action="" class="h-3/12">
        @csrf
        <textarea name="announcement_message"
                  placeholder="Announcement"
                  class="py-1 resize-none mt-6  h-full w-full flex items-center justify-between px-6  rounded-2xl shadow-inner border-b border-gray-100 focus:outline-none"></textarea>

        <div id="addAnnouncementsBtnControl" class="w-full justify-between   items-center flex">
            <div class=" duration-200 rounded-xl  shadow-md ml-2 w-1/5">

                <select name="student"
                        class=" duration-300 font-extrabold  border-b-2 border-orange-400 form-select focus:outline-none outline-none focus:ring-0  block w-full mt-1">
                    @forelse($Classroom->classroomStudents as $students)
                        <option value="All" selected>For All</option>
                        <option
                            value="{{$students->user_info->user_id}}">{{$students->user_info->first_nm}} {{$students->user_info->last_nm}}</option>
                    @empty
                        <option selected disabled>For All</option>
                    @endforelse
                </select>

            </div>

            <div>

                <div class="flex items-center  justify-center">

                    <div class="m-3">
                        <button
                            type="button"
                            id="mkAnnouncementCloseBtn"
                            class="bg-white text-gray-800 font-bold rounded duration-200 border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                            <span class="mr-2">Close</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentcolor"
                                      d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                            </svg>
                        </button>
                    </div>

                    <div class="m-3">
                        <button
                            type="submit"
                            class="bg-white text-gray-800 font-bold rounded border-b-2 duration-200 border-green-400 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                            <span class="mr-2">Send</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                            </svg>
                        </button>
                    </div>


                </div>

            </div>
        </div>
    </form>

    <section
        id="userActivity"
        class="relative mt-6 h-4/12   bg-blueGray-50">
        <div class="w-full h-full">
            <div class="relative h-full flex flex-col min-w-0 break-words w-full  shadow-inner rounded-2xl text-black">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
                            <h3 class="font-semibold text-lg text-black">Desk Activity</h3>
                        </div>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto ">
                    <table class="items-center w-full bg-transparent border-collapse">
                        <tbody>
                        <tr>
                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                <img src="{{$Classroom->teacherInfo->avatar}}"
                                     class="h-10 w-10 bg-white rounded-full border" alt="...">
                                <span class="ml-3 font-bold text-black"> Javaughn Bailey </span></th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="desk_classwork_view" class="w-full h-full">
classwork
</div>

<div id="desk_student_view" class="w-full h-full">
    Students
</div>

<div id="desk_settings_view" class="w-full h-full">
Settings
</div>

<script>

    $(document).ready(function (){

        let desk_home_btn = $('#desk_home_btn'),
            desk_classwork_btn = $('#desk_work_btn'),
            desk_student_btn = $('#desk_students'),
            desk_settings_btn = $('#desk_settings'),

            desk_home_view = $('#desk_home_view'),
            desk_classwork_view = $('#desk_classwork_view'),
            desk_student_view = $('#desk_student_view'),
            desk_settings_view = $('#desk_settings_view')


        desk_classwork_view.hide()
        desk_student_view.hide()
        desk_settings_view.hide()


        function classViewToggle($view){
            desk_home_view.slideUp()
            desk_classwork_view.slideUp()
            desk_student_view.slideUp()
            desk_settings_view.slideUp()

            if($view === 'home'){
                desk_home_view.slideDown()
            }
            else if($view === 'classwork'){
                desk_classwork_view.slideDown()
            }
            else if($view === 'student'){
                desk_student_view.slideDown()
            }
            else if($view === 'settings'){
                desk_settings_view.slideDown()
            }
            console.log('Review Function')
        }

        desk_home_btn.on('click',function (){
            classViewToggle('home')
        });

        desk_classwork_btn.on('click',function (){
            classViewToggle('classwork')
        });

        desk_student_btn.on('click',function (){
            classViewToggle('student')
        });

        desk_settings_btn.on('click',function (){
            classViewToggle('settings')
        });
    });

</script>






    {{--            <form method="post" action="{{route('user.classroom.destroy',[$Classroom])}}">--}}
    {{--                @method('delete')--}}
    {{--                @csrf--}}
    {{--                <button type="submit" class="px-4 py-2 bg-red-500 rounded">Delete</button>--}}
    {{--            </form>--}}








@endsection
