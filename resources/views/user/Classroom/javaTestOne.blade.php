<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Drag and drop</title>
</head>

<body class="bg-blue-300 flex flex-col gap-5 items-center">

<<!-- Component Start -->
<div class="flex w-screen h-screen p-10 space-x-4 overflow-auto text-gray-700">

    <div id = 'dropZone' class="flex flex-col flex-shrink-0 w-64 bg-gray-200 border border-gray-300">

        <div class="flex items-center justify-between flex-shrink-0 h-10 px-2 border-b border-gray-300 bg-white">
            <span class="block text-sm font-medium">Column A</span>
            <button class="flex items-center justify-center w-6 h-6">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </button>
        </div>

        <div id = 'place' class=" flex flex-col px-2 pb-2 overflow-auto">
            <div draggable="true" class="p-6 mt-2 dragElement border border-gray-300 bg-white cursor-pointer">Item A</div>
        </div>
    </div>

    <div id = 'dropZone'  class="flex flex-col flex-shrink-0 w-64 bg-gray-200 border border-gray-300">
        <div class="flex items-center justify-between flex-shrink-0 h-10 px-2 border-b border-gray-300 bg-white">
            <span class="block text-sm font-medium">Column B</span>
            <button class="flex items-center justify-center w-6 h-6">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </button>
        </div>

        <div id = 'place'  class=" flex flex-col px-2 pb-2 overflow-auto">

            <div draggable="true" class=" dragElement p-6 mt-2 border border-gray-300 bg-white cursor-pointer">Item B</div>

        </div>
    </div>

    <div id = 'dropZone' class="flex flex-col flex-shrink-0 w-64 bg-gray-200 border border-gray-300">
        <div class="flex items-center justify-between flex-shrink-0 h-10 px-2 border-b border-gray-300 bg-white">
            <span class="block text-sm font-medium">Column C</span>
            <button class="flex items-center justify-center w-6 h-6">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </button>
        </div>
        <div id = 'place'  class=" flex flex-col px-2 pb-2 overflow-auto">

            <div draggable="true" class="dragElement p-6 mt-2 border border-gray-300 bg-white cursor-pointer">Item C</div>

        </div>
    </div>

    <div id = 'dropZone' class="flex flex-col flex-shrink-0 w-64 bg-gray-200 border border-gray-300">
        <div class="flex items-center justify-between flex-shrink-0 h-10 px-2 border-b border-gray-300 bg-white">
            <span class="block text-sm font-medium">Column D</span>
            <button class="flex items-center justify-center w-6 h-6">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </button>
        </div>
        <div id = 'place'  class="  flex flex-col px-2 pb-2 overflow-auto">

            <div draggable="true" class="dragElement p-6 mt-2 border border-gray-300 bg-white cursor-pointer">Item D</div>

        </div>
    </div>

    <div id = 'dropZone' class="flex flex-col flex-shrink-0 w-64 bg-gray-200 border border-gray-300">
        <div class="flex items-center justify-between flex-shrink-0 h-10 px-2 border-b border-gray-300 bg-white">
            <span class="block text-sm font-medium">Column E</span>
            <button class="flex items-center justify-center w-6 h-6">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </button>
        </div>

        <div id = 'place'  class="  flex flex-col px-2 pb-2 overflow-auto">
            <div draggable="true" class="dragElement p-6 mt-2 border border-gray-300 bg-white cursor-pointer">Item E</div>

        </div>

    </div>

    <div id = 'dropZone' class="flex flex-col flex-shrink-0 w-64 bg-gray-200 border border-gray-300">
        <div class="flex items-center justify-between flex-shrink-0 h-10 px-2 border-b border-gray-300 bg-white">
            <span class="block text-sm font-medium">Column F</span>
            <button class="flex items-center justify-center w-6 h-6">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </button>
        </div>

        <div id = 'place' class=" flex flex-col px-2 pb-2 overflow-auto">

            <div draggable="true" class="dragElement p-6 mt-2 border border-gray-300 bg-white cursor-pointer">Item F</div>

        </div>
    </div>

</div>
<!-- Component End -->

<a class="fixed flex items-center justify-center h-8 pr-2 pl-1 bg-blue-600 rounded-full bottom-0 right-0 mr-4 mb-4 shadow-lg text-blue-100 hover:bg-blue-600" href="https://twitter.com/lofiui" target="_top">
    <div class="flex items-center justify-center h-6 w-6 bg-blue-500 rounded-full">
        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" class="r-jwli3a r-4qtqp9 r-yyyyoo r-16y2uox r-1q142lx r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>
    </div>
    <span class="text-sm ml-1 leading-none">@lofiui</span>
</a>

</body>

<script src ={{asset('js/dragNDropScript.js')}}  ></script>

</html>
