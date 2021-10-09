<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amber Desk</title>
</head>
<body>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>



<div class="flex flex-col h-screen">
    <div>
        <div class=" shadow-2xl top-0 sticky  z-40 ">
            <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
                <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
                    <div class="flex items-center justify-between flex-row md:px-6 lg:px-8">
                        <div class="flex flex-row  items-center justify-between p-4">

                            <x-logo.logo_normal/>

                        </div>

                        <div class="flex justify-between  w-48 h-full">
                            <a href="{{--{{route('Register')}}--}}"
                               class="bg-gray-100 hover:bg-orange-400 font-semibold duration-200 rounded px-4 py-2">Register</a>
                            <a href="{{--{{route('Login')}}--}}"
                               class="bg-gray-100 hover:bg-orange-400 font-semibold duration-200 rounded px-4 py-2">Login</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="bg-orange-400 md:overflow-hidden">
            <div class="px-4 py-20 md:py-4">
                <div class="md:max-w-6xl md:mx-auto">
                    <div class="md:flex md:flex-wrap">
                        <div class="md:w-1/2 text-center md:text-left md:pt-16">
                            <h1
                                class="font-bold text-white text-2xl  md:text-5xl leading-tight mb-48"
                            >
                                Simple,
                                Fluent
                                Homework Management System
                            </h1>

                        </div>
                        <div class="md:w-1/2 relative">
                            <div class="hidden md:block">

                                {{--                                TODO Add Icons Or Image To Media Here--}}

                                {{--                                <div--}}
                                {{--                                    class="-ml-24 -mb-40 absolute left-0 bottom-0 w-40 bg-white rounded-lg shadow-lg px-6 py-8"--}}
                                {{--                                    style="transform: rotate(-8deg);"--}}
                                {{--                                >--}}

                                {{--                                    --}}{{--                                    Media Here--}}

                                {{--                                    <div class="text-gray-800 text-center">--}}
                                {{--                                        Grade <br/>Tracking--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                {{--                                <div--}}
                                {{--                                    class="ml-24 mb-16 absolute left-0 bottom-0 w-40 bg-white rounded-lg shadow-lg px-6 py-8"--}}
                                {{--                                    style="transform: rotate(-8deg); z-index: 2;"--}}
                                {{--                                >--}}
                                {{--                                    --}}{{--                                    Media Here--}}

                                {{--                                    <div class="text-gray-800 text-center">--}}
                                {{--                                        Classrooms--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                {{--                                <div--}}
                                {{--                                    class="ml-32 absolute left-0 bottom-0 w-48 bg-white rounded-lg shadow-lg px-10 py-8"--}}
                                {{--                                    style="transform: rotate(-8deg); z-index: 2; margin-bottom: -220px;"--}}
                                {{--                                >--}}
                                {{--                                    --}}{{--                                    Media Here--}}

                                {{--                                    <div class="text-gray-800 text-center">--}}
                                {{--                                        Assignment <br/>Tracking--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                <div
                                    class="mt-10 w-full absolute right-0 top-0 flex rounded-lg bg-white overflow-hidden shadow-lg"
                                    style="transform: rotate(-8deg); margin-right: -250px; z-index: 1;"
                                >
                                    <div class="w-32 bg-gray-200" style="height: 560px;"></div>
                                    <div class="flex-1 p-6">
                                        <h2 class="text-lg text-gray-700 font-bold mb-3">
                                            <x-logo.logo_normal/>
                                        </h2>
                                        <div class="flex mb-5 w-72">
                                            <div class="w-full rounded-full bg-gray-100 py-2 px-4"></div>
                                        </div>

                                        <div class="flex flex-wrap -mx-4 mb-15">
                                            <div class="w-1/3 px-4">
                                                <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                                                    <div
                                                        class="w-16  h-16 rounded bg-orange-100 mb-6"
                                                    ></div>
                                                    <div
                                                        class="h-2 w-16 bg-blue-200 mb-2 rounded-full"
                                                    ></div>
                                                    <div class="h-2 w-10 bg-blue-200 rounded-full"></div>
                                                </div>
                                            </div>
                                            <div class="w-1/3 px-4">
                                                <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                                                    <div
                                                        class="w-16  h-16 rounded bg-orange-100 mb-6"
                                                    ></div>
                                                    <div
                                                        class="h-2 w-16 bg-blue-200 mb-2 rounded-full"
                                                    ></div>
                                                    <div class="h-2 w-10 bg-blue-200 rounded-full"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="flex flex-wrap -mx-4 mb-5">
                                            <div class="w-1/3 px-4">
                                                <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                                                    <div
                                                        class="w-16  h-16 rounded bg-orange-100 mb-6"
                                                    ></div>
                                                    <div
                                                        class="h-2 w-16 bg-blue-200 mb-2 rounded-full"
                                                    ></div>
                                                    <div class="h-2 w-10 bg-blue-200 rounded-full"></div>
                                                </div>
                                            </div>
                                            <div class="w-1/3 px-4">
                                                <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                                                    <div
                                                        class="w-16  h-16 rounded bg-orange-100 mb-6"
                                                    ></div>
                                                    <div
                                                        class="h-2 w-16 bg-blue-200 mb-2 rounded-full"
                                                    ></div>
                                                    <div class="h-2 w-10 bg-blue-200 rounded-full"></div>
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

    </div>
</div>

<div class=" mt-32 h-screen">

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                <div class="text-5xl font-bold leading-tight capitalize mb-10">Lorem ipsum</div>
                <p class=" text-xl">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's
                    cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar
                    cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko
                    knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify
                    plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch
                    ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>

            </div>
        </div>
    </section>
</div>

<div id="#features">
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-5 top-0 sticky bg-white">
                <div class="text-5xl font-bold leading-tight capitalize mb-5">Features</div>
                <div class="flex my-6 justify-center">
                    <div class="w-96 h-1 rounded-full bg-orange-500 inline-flex"></div>
                </div>
            </div>

            <p class=" text-xl l:w-1/2 lg:w-3/4 w-full mx-auto text-center mb-10 ">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's
                cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar
                cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko
                knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify
                plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch
                ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>

            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-orange-100 text-yellow-500 mb-5 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Shooting Stars</h2>
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast
                            vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                            try-hard.</p>

                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-5 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">The Catalyzer</h2>
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast
                            vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                            try-hard.</p>

                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-5 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Neptune</h2>
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast
                            vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                            try-hard.</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-orange-100 text-yellow-500 mb-5 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Shooting Stars</h2>
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast
                            vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                            try-hard.</p>

                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-5 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">The Catalyzer</h2>
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast
                            vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                            try-hard.</p>

                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-5 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Neptune</h2>
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast
                            vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS
                            try-hard.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<div class="h-screen">
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                <div class="text-center mb-5 top-0 sticky bg-white">
                    <div class="text-5xl font-bold leading-tight capitalize mb-5">About Us</div>
                    <div class="flex my-6 justify-center">
                        <div class="w-96 h-1 rounded-full bg-orange-500 inline-flex"></div>
                    </div>
                </div>

                <p class=" text-xl">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's
                    cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar
                    cronut adaptogen squid fanny pack vaporware. Man bun next level coloring book skateboard four loko
                    knausgaard. Kitsch keffiyeh master cleanse direct trade indigo juice before they sold out gentrify
                    plaid gastropub normcore XOXO 90's pickled cindigo jean shorts. Slow-carb next level shoindigoitch
                    ethical authentic, yr scenester sriracha forage franzen organic drinking vinegar.</p>

            </div>
        </div>
    </section>
</div>


<div class="h-screen">
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                <div class="text-5xl font-bold leading-tight capitalize mb-10">Privacy Policy</div>
                <div class="flex my-6 justify-center">
                    <div class="w-96 h-1 rounded-full bg-orange-500 inline-flex"></div>
                </div>
                <p class=" text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at inventore ipsam
                    necessitatibus numquam placeat veniam! Adipisci alias asperiores dicta doloremque, ducimus ea fugiat
                    hic inventore iure iusto laboriosam laborum laudantium maxime minus modi mollitia nesciunt nihil
                    obcaecati officia officiis optio possimus quam quibusdam ratione reprehenderit saepe soluta
                    temporibus veniam vero voluptas. Alias asperiores blanditiis consectetur doloremque doloribus
                    facilis impedit inventore natus, nobis possimus quibusdam quos ratione recusandae rem reprehenderit
                    repudiandae similique tempore. Corporis, dolores itaque minima nam nostrum nulla obcaecati odio
                    perferendis quasi quod velit voluptatem? A, adipisci alias aliquid asperiores corporis nemo nisi
                    quae quod repellat soluta voluptates? Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Adipisci aperiam architecto asperiores assumenda consectetur corporis dicta dolorum, eius expedita
                    itaque minus obcaecati officia perspiciatis praesentium quaerat qui repellat repellendus sapiente
                    sed sequi sint tempore ut vel, voluptatem, voluptates. Accusantium ad aliquam dignissimos ex
                    exercitationem laudantium quidem quo reiciendis similique, voluptatibus? Accusantium asperiores
                    blanditiis consequatur consequuntur cumque facere hic inventore laborum magnam omnis perspiciatis
                    quia tenetur, velit! A ad at atque consectetur consequuntur dolorum eius eveniet fugit iste iusto,
                    maiores nam, pariatur provident qui quibusdam ullam vel. Aperiam corporis doloribus expedita illo,
                    laudantium nostrum odio officiis reprehenderit sit, veniam vitae voluptatibus.</p>
            </div>
        </div>
    </section>
    <div class=" items-center ">
        <footer class="text-white transition duration-500 ease-in-out transform bg-black ">
            <div class="flex flex-col flex-wrap justify-center p-5 md:flex-row">
                <span class="inline-flex justify-center w-full mx-auto mt-2 mr-2 sm:ml-auto sm:mt-0">
                  <a class="text-blue-500 hover:text-black">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-blue-500 hover:text-black">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                      </path>
                    </svg>
                  </a>
                  <a class="ml-3 text-blue-500 hover:text-black">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-blue-500 hover:text-black">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                      <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                      </path>
                      <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                  </a>
                </span>
            </div>

        </footer>
    </div>

</div>




