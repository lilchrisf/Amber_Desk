<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invitation</title>
</head>
<body>

<link rel="stylesheet" href="{{mix('css/app.css')}}">
<div class="bg-orange-400 h-screen md:overflow-hidden">
    <div class="px-4  md:py-4">
        <div class="md:max-w-6xl md:mx-auto">
            <div class="md:flex md:flex-wrap">
                <div class="md:w-1/2 text-center  md:text-left md:pt-10">


                    <div class=" items-center px-5 ">
                        <div class="w-full text-blueGray-500 bg-gray-100  border rounded-lg shadow-xl "
                             aria-hidden="false"
                             aria-describedby="modalDescription" role="dialog">
                            <div class="flex items-center justify-end   ">
                                <button class="p-1 transition-colors duration-200 transform rounded-md hover:bg-opacity-25 hover:bg-blueGray-600 focus:outline-none" type="button" aria-label="Close" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="9"></circle>
                                        <path d="M10 10l4 4m0 -4l-4 4"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="flex flex-col w-full p-10 mx-auto  text-left">

                                <h1 class="mb-8 text-3xl font-semibold leading-none tracking-tighter text-black title-font">
                                    {{$Invitation->class_nm}} </h1>
                                <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 "> Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit. Corporis dicta distinctio error eum
                                    impedit molestiae nihil, non nulla obcaecati placeat, repellendus reprehenderit,
                                    soluta? Accusantium asperiores aut rem repellendus voluptatum. Accusamus ad alias,
                                    at atque aut delectus dignissimos ducimus ea eius enim eos fuga id itaque laboriosam
                                    magnam maiores molestiae necessitatibus nobis nostrum obcaecati odit officiis optio
                                    pariatur perspiciatis, quae quaerat quam quasi. </p>
                                <div class="flex mt-4">
                                    <form  method="post" action="{{route("Invitation-Validate",$Invitation->invi_link)}}" class=" border-blue-600 flex justify-start items-center h-full w-full">
                                        @csrf
                                        <div class="relative mt-4  w-3/4">
                                            <input type="password" id="password" name="password"
                                                   placeholder="Enter Classroom Password"
                                                   class="w-full px-4 py-2 focus:scale-105 transform mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 relative">
                    <div class="hidden md:block">

                        <div
                            class="mt-10 w-full absolute right-0 top-0 flex rounded-lg bg-white overflow-hidden shadow-lg"
                            style="transform: rotate(-8deg); margin-right: -250px; z-index: 1;"
                        >
                            <div class="w-32 bg-gray-200" style="height: 565px;"></div>
                            <div class="flex-1 p-6">
                                <h2 class="text-lg text-gray-700 font-bold mb-3">
                                    <a href="{{route('Homepage')}}"
                                       class=" font-semibold tracking-widest text-gray-900 uppercase
     rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                                        <span class="text-orange-500">Javaughn's</span>-<span
                                            class="text-blue-600">Desk</span>
                                    </a>
                                </h2>
                                <div class="flex mb-5 w-72">
                                    <div class="w-full rounded-full bg-gray-100 py-2 px-4"></div>
                                </div>

                                <div class="flex flex-wrap -mx-4 mb-15">
                                    <div class="w-1/3 px-4">
                                        <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                                            <div
                                                class="w-16 text-3xl flex justify-center items-center  h-16 rounded bg-orange-100 mb-4"
                                            >6</div>
                                            <div
                                                class="h-2 font-semibold w-16 text-center  mb-2 rounded-full"
                                            >Desk</div>
                                        </div>
                                    </div>
                                    <div class="w-1/3 px-4">
                                        <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                                            <div
                                                class="w-16 text-3xl flex justify-center items-center  h-16 rounded bg-orange-100 mb-4"
                                            >6</div>
                                            <div
                                                class="h-2 font-semibold w-16 text-center  mb-2 rounded-full"
                                            >Desk</div>
                                        </div>
                                    </div>
                                </div>


                                <div class="flex flex-wrap -mx-4 mb-5">
                                    <div class="w-1/3 px-4">
                                        <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                                            <div
                                                class="w-16 text-3xl flex justify-center items-center  h-16 rounded bg-orange-100 mb-4"
                                            >6</div>
                                            <div
                                                class="h-2 font-semibold w-16 text-center  mb-2 rounded-full"
                                            >Desk</div>
                                        </div>
                                    </div>
                                    <div class="w-1/3 px-4">
                                        <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                                            <div
                                                class="w-16 text-3xl flex justify-center items-center  h-16 rounded bg-orange-100 mb-4"
                                            >6</div>
                                            <div
                                                class="h-2 font-semibold w-16 text-center  mb-2 rounded-full"
                                            >Desk</div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div
                            class="w-full absolute left-0 bottom-0 ml-1"
                            style="transform: rotate(-8deg); z-index: 1; margin-bottom: -360px;"
                        >
                            <div class="grid--gray h-48 w-48"></div>
                        </div>
                    </div>

                    <div
                        class="md:hidden w-full absolute right-0 top-0 flex rounded-lg bg-white overflow-hidden shadow"
                    >
                        <div
                            class="h-4 bg-gray-200 absolute top-0 left-0 right-0 rounded-t-lg flex items-center"
                        >
                  <span
                      class="h-2 w-2 rounded-full bg-red-500 inline-block mr-1 ml-2"
                  ></span>
                            <span
                                class="h-2 w-2 rounded-full bg-orange-400 inline-block mr-1"
                            ></span>
                            <span
                                class="h-2 w-2 rounded-full bg-green-500 inline-block mr-1"
                            ></span>
                        </div>
                        <div class="w-20 bg-gray-100 " style="height: 340px;">
                            <div
                                class="h-14  items-end -mt-2   justify-center w-full flex bg-white text-xs font-semibold ">
                                <span class="text-orange-500">Amber</span>-<span
                                    class="text-blue-500">Desk</span></div>

                            <div class="h-2 w-6 bg-gray-200 rounded-full my-2"></div>
                            <div class="h-2 w-15 bg-gray-200 rounded-full mb-2"></div>
                            <div class="h-2 w-15 bg-gray-200 rounded-full mb-2"></div>
                            <div class="h-2 w-6 bg-gray-200 rounded-full mb-2"></div>
                            <div class="h-2 w-15 bg-gray-200 rounded-full mb-2"></div>
                            <div class="h-2 w-10 bg-gray-200 rounded-full mb-2"></div>
                            <div class="h-2 w-15 bg-gray-200 rounded-full mb-2"></div>
                            <div class="h-2 w-6 bg-red-200 rounded-full mb-2"></div>
                        </div>
                        <div class="flex-1 px-4 py-8">
                            <h2 class="text-xs text-gray-700 font-bold mb-4">
                                Dashboard
                            </h2>

                            <div class="flex flex-wrap -mx-2 mb-5">
                                <div class="w-1/3 px-2">
                                    <div class="p-3 rounded-lg bg-white shadow">
                                        <div
                                            class="w-12 h-6 rounded bg-orange-100 mb-2"
                                        ></div>
                                        <div
                                            class="h-2 w-10 bg-blue-200 mb-1 rounded-full"
                                        ></div>
                                        <div class="h-2 w-6 bg-blue-200 rounded-full"></div>
                                    </div>
                                </div>
                                <div class="w-1/3 px-2">
                                    <div class="p-3 rounded-lg bg-white shadow">
                                        <div
                                            class="w-12 h-6 rounded bg-orange-100 mb-2"
                                        ></div>
                                        <div
                                            class="h-2 w-10 bg-blue-200 mb-1 rounded-full"
                                        ></div>
                                        <div class="h-2 w-6 bg-blue-200 rounded-full"></div>
                                    </div>
                                </div>
                                <div class="w-1/3 px-2">
                                    <div class="p-3 rounded-lg bg-white shadow">
                                        <div
                                            class="w-12 h-6 rounded bg-orange-100 mb-2"
                                        ></div>
                                        <div
                                            class="h-2 w-10 bg-blue-200 mb-1 rounded-full"
                                        ></div>
                                        <div class="h-2 w-6 bg-blue-200 rounded-full"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-2 mt-5">
                                <div class="w-1/3 px-2">
                                    <div class="p-3 rounded-lg bg-white shadow">
                                        <div
                                            class="w-12 h-6 rounded bg-orange-100 mb-2"
                                        ></div>
                                        <div
                                            class="h-2 w-10 bg-blue-200 mb-1 rounded-full"
                                        ></div>
                                        <div class="h-2 w-6 bg-blue-200 rounded-full"></div>
                                    </div>
                                </div>
                                <div class="w-1/3 px-2">
                                    <div class="p-3 rounded-lg bg-white shadow">
                                        <div
                                            class="w-12 h-6 rounded bg-orange-100 mb-2"
                                        ></div>
                                        <div
                                            class="h-2 w-10 bg-blue-200 mb-1 rounded-full"
                                        ></div>
                                        <div class="h-2 w-6 bg-blue-200 rounded-full"></div>
                                    </div>
                                </div>
                                <div class="w-1/3 px-2">
                                    <div class="p-3 rounded-lg bg-white shadow">
                                        <div
                                            class="w-12 h-6 rounded bg-orange-100 mb-2"
                                        ></div>
                                        <div
                                            class="h-2 w-10 bg-blue-200 mb-1 rounded-full"
                                        ></div>
                                        <div class="h-2 w-6 bg-blue-200 rounded-full"></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <svg
        class="fill-current text-white hidden md:block"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
    >
        <path fill-opacity="1" d="M0,224L1440,32L1440,320L0,320Z"></path>
    </svg>
</div>

</body>
</html>
