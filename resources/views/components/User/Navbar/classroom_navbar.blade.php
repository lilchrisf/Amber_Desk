<div class=" shadow-md relative z-40 ">
    <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
        <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: false }"
                 class="flex flex-col px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="flex flex-row  items-center justify-between p-4">

                    <x-User.logo.logo_normal/>

                    <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline"
                            @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                  clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>

                </div>


                <style>
                    @import url(https://pro.fontawesome.com/releases/v5.10.0/css/all.css);
                    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;800&display=swap');
                    body {
                        font-family: 'Poppins', sans-serif;
                    }
                    .hover\:w-full:hover {
                        width: 100%;
                    }
                    .group:hover .group-hover\:w-full {
                        width: 100%;
                    }
                    .group:hover .group-hover\:inline-block {
                        display: inline-block;
                    }
                    .group:hover .group-hover\:flex-grow {
                        flex-grow: 1;
                    }
                </style>

                <div class=" flex items-center  justify-center ">
                    <div class="w-full max-w-md mx-auto">

                        <div class="px-7 bg-white ">
                            <div class="flex">
                                <div class="flex-auto duration-300 transition hover:w-full group">
                                    <a href="#" class="flex items-center justify-center text-center mx-auto px-4 py-2 duration-300 group-hover:w-full text-indigo-500">
                        <span class="block px-1 py-1 group-hover:bg-indigo-100 rounded-full group-hover:flex-grow">
                            <i class="far fa-home text-2xl pt-1"></i><span class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Home</span>
                        </span>
                                    </a>
                                </div>
                                <div class="flex-auto hover:w-full group">
                                    <a href="#" class="flex items-center justify-center text-center mx-auto px-4 py-2 group-hover:w-full text-indigo-500">
                        <span class="block px-1 py-1 group-hover:bg-indigo-100 rounded-full group-hover:flex-grow">
                            <i class="far fa-compass text-2xl pt-1"></i><span class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Classwork</span>
                        </span>
                                    </a>
                                </div>
                                <div class="flex-auto hover:w-full group">
                                    <a href="#" class="flex items-center justify-center text-center mx-auto px-4 py-2 group-hover:w-full text-indigo-500">
                        <span class="block px-1 py-1 group-hover:bg-indigo-100 rounded-full group-hover:flex-grow">
                            <i class="far fa-search text-2xl pt-1"></i><span class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Student</span>
                        </span>
                                    </a>
                                </div>
                                <div class="flex-auto hover:w-full group">
                                    <a href="#" class="flex items-center justify-center text-center mx-auto px-4 py-2 group-hover:w-full text-indigo-500">
                        <span class="block px-1 py-1 group-hover:bg-indigo-100 rounded-full group-hover:flex-grow">
                            <i class="far fa-cog text-2xl pt-1"></i><span class="hidden group-hover:inline-block ml-3 align-bottom pb-1">Settings</span>
                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

