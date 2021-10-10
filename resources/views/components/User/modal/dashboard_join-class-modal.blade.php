<div id="join_classroom_modal"
     class="h-screen w-screen z-50 hidden fixed  bg-white bg-opacity-90 inset-0  items-center px-5 py-12 lg:px-20">
    <div class="w-full px-5 mx-auto border rounded-lg shadow-xl lg:px-0 text-blueGray-500 lg:w-1/2"
         aria-hidden="false" aria-describedby="modalDescription" role="dialog">
        <div class="flex items-center justify-end px-6 py-4 ">
            <button id="join_classroom_close_btn"
                    class="p-1 transition-colors duration-200 transform rounded-md hover:bg-opacity-25 hover:bg-blueGray-600 focus:outline-none"
                    type="button" aria-label="Close" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x"
                     width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="9"></circle>
                    <path d="M10 10l4 4m0 -4l-4 4"></path>
                </svg>
            </button>
        </div>
        <div class="flex flex-col w-full mx-auto text-left lg:px-20 lg:text-center">
            <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font">Join
                Classroom </h2>
            <h1 class="text-2xl font-semibold leading-none tracking-tighter text-black title-font"> A
                headline to switch your visitors into users. </h1>
        </div>
        <div class="flex flex-col w-full mx-auto mb-8 lg:px-20 md:mt-0">
            <div class="relative mt-4">
                <label for="name" class="text-base leading-7 text-blueGray-500">Name</label>
                <input type="name" id="name" name="name" placeholder="name"
                       class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            </div>
            <div class="relative mt-4">
                <label for="name" class="text-base leading-7 text-blueGray-500">Name</label>
                <input type="email" id="email" name="email" placeholder="name"
                       class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            </div>
            <div class="flex my-6 mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox ">
                    <span class="ml-2 text-blueGray-500">Subscribe me </span>
                </label>
            </div>
            <button
                class="w-full px-16 py-2 mr-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 ">
                Button
            </button>
            <p class="mx-auto mt-3 text-xs text-blueGray-500"> Long caption text under input..</p>
        </div>
    </div>
</div>
