<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script defer src="{{asset("js/DashboardModalControl.js")}}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>@yield('page_title')</title>
</head>
<style>
    ::selection {
        color: orangered;
    }
</style>
<body>



<div class=" flex flex-col h-screen ">

    {{--    <div class="bg-orange-400 absolute h-full w-full" style="background: url('/media/Backgrounds/AmberWaves.svg'); background-size: cover; background-position: center; filter: brightness(0.8)"></div>--}}

    <div style="height: 9vh">
        <x-user.navbar/>
    </div>


    <div class="w-full flex flex-row " style="height: 91vh">


        <div>
            <x-user.sidebar/>
        </div>

        <div class=" flex-col px-5 h-full  w-10/12 overflow-y-auto">

            @if (session()->has('message'))
                <x-alert.alert class="bg-green-600 z-50 top-0 sticky">
                    <p>{{session('message')}}</p>
                </x-alert.alert>
            @endif


                @yield('content')


            {{--            Modals End--}}
        </div>
    </div>

</div>



</body>
</html>
