<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="{{mix("css/app.css")}}">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script defer src="{{asset("js/DashboardModalControl.js")}}"></script>
    <script defer src="{{asset("js/DeskOwnerControl.js")}}"></script>

    <script defer src="{{asset("js/DashboardAlertToggleControl.js")}}"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
</head>
<style>
    ::selection {
        color: orangered;
    }
</style>
<body>



<div class="  flex flex-col h-screen ">


    <div style="height: 9vh">
        @yield('navbar')
    </div>


    <div class="w-full flex flex-row " style="height: 91vh">
        <div>
            @yield('sidebar')
        </div>

        <div class="overflow-x-hidden flex-col px-5 h-full  w-10/12 overflow-y-auto">


            @if (session()->has('undoDeletion'))
                <x-User.alert.dashboard_del-class-alert :undoDeletion="session('undoDeletion')"/>
            @endif

            @if (session()->has('message'))
                <x-user.toast.dashboard_activity-toast name="{{session('message')}}"/>
            @endif



                @yield('content')


        </div>
    </div>

</div>

{{--{{dd(session()->all())}}--}}


</body>
</html>
