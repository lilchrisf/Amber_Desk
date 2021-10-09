<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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



    <div style="height: 9vh">
        @yield('navbar')
    </div>


    <div class="w-full flex flex-row " style="height: 91vh">
        <div>
            @yield('sidebar')
        </div>

        <div class=" flex-col px-5 h-full  w-10/12 overflow-y-auto">

{{--            @if (session()->has('undoDeletion'))--}}
{{--                <x-alert.alert class="bg-orange-400 rounded-xl z-40">--}}
{{--                    <form class="flex items-center justify-between w-full" method="post" action="{{route('Restore-Classroom',[session('undoDeletion')])}}">--}}
{{--                        @csrf--}}
{{--                        <p>Are You Sure You Want To Delete {{session('undoDeletion')->class_nm}}</p>--}}
{{--                        <button class="font-semibold text-black mr-10 p-1" type="submit">Undo</button>--}}

{{--                    </form>--}}
{{--                </x-alert.alert>--}}

            <x-User.modal.dashboard_crt-class-toast/>

                @if (session()->has('RestoreAlert'))

                    <script>

                        let timerInterval
                        Swal.fire({
                            titleText: '{{session('RestoreAlert')}}',
                            backdrop: false,
                            toast: true,
                            customClass: {
                                icon: 'info',
                            },
                            background: 'rgba(238,95,0,0.04)',
                            allowOutsideClick: true,
                            showConfirmButton: false,

                            timer: 5000,
                            timerProgressBar: true,
                            position: 'bottom-right',
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        })
                    </script>

                    @endif





                @yield('content')


        </div>
    </div>

</div>
{{--{{dd(session()->all())}}--}}




</body>
</html>
