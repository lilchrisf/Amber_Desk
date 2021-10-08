<link rel="stylesheet" href="{{mix("css/app.css")}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<div class="flex flex-col h-screen">

    <div class="flex bg-white border-b border-black py-3 px-4 items-center justify-between">
        <x-logo.amber_desk/>

        <form action="{{route('Logout')}}" method="post">
            <button type="submit" class="text-white bg-red-600 py-2 px-6 rounded">Logout</button>
        </form>
    </div>

{{--    {{Auth::id()}}--}}

    <section class="h-full flex flex-col">

        @if (session()->has('message'))
            <x-alert.alert class="bg-green-600">
                <p>{{session('message')}}</p>
            </x-alert.alert>
        @endif


        <div class="flex  w-full h-full flex-col justify-center items-center">

            <!-- component -->
            <form action="{{route("user.classroom.store")}}" method="post" class="bg-white shadow rounded-lg p-6">
                @csrf
                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="name" class="bg-white text-gray-600 px-1">Classroom Name *</label>
                            </p>
                        </div>
                        <p>
                            <input name="class_nm" id="name" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 text-gray-900 outline-none block h-full w-full">
                        </p>
                    </div>
                    <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="lastname" class="bg-white text-gray-600 px-1">Classroom Description</label>
                            </p>
                        </div>
                        <p>
                            <input name="class_desc" id="lastname" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
                        </p>
                    </div>
                    <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="username" class="bg-white text-gray-600 px-1">Subject *</label>
                            </p>
                        </div>
                        <p>
                            <input name="subject" id="username" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
                        </p>
                    </div>
                    <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                        <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                            <p>
                                <label for="password" class="bg-white text-gray-600 px-1">Password *</label>
                            </p>
                        </div>
                        <p>
                            <input name="password" id="password" autocomplete="false" tabindex="0" type="password" class="py-1 px-1 outline-none block h-full w-full">
                        </p>
                    </div>
                </div>
                <div class="border-t mt-6 pt-3">
                    <button
                        class="rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
                        Create
                    </button>
                </div>
            </form>
        </div>

    </section>

</div>

