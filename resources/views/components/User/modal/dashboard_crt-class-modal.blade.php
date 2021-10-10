<div id="crt_classroom_modal"
     class="h-screen w-screen z-50 hidden fixed  bg-orange-50  inset-0  items-center px-5 py-12 lg:px-20">
    <div class="w-full px-5 mx-auto border bg-white  rounded-lg shadow-xl lg:px-0 text-blueGray-500 lg:w-1/2"
         aria-hidden="false" aria-describedby="modalDescription" role="dialog">
        <div class="flex items-center justify-end px-6 py-4 ">
            <button id="crt_classroom_close_btn"
                    class="p-1 transition-colors duration-300 transform rounded-md hover:bg-opacity-25 hover:text-red-600 focus:outline-none"
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
        <div class="flex flex-col  w-full mx-auto text-left lg:px-20 lg:text-center">
            <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font">Create
                Classroom </h2>
            <h1 class="text-2xl font-semibold leading-none tracking-tighter text-black title-font"> A
                Changing The World, One Classroom At A Time </h1>
        </div>
        <form
            id="crt_classroom_form"
            method="post" action="{{route('user.classroom.store')}}"
            class="flex flex-col w-full mx-auto mb-8 lg:px-20 md:mt-0">
            @csrf
            <div class="relative mt-4">
                <label for="name" class="text-base leading-7 font-medium text-sm text-blueGray-500">Classroom
                    Name</label>
                <input
                    autocomplete="false"
                    required
                    type="text" name="class_nm" placeholder="Classroom Name"
                    class="w-full px-4 py-3 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            </div>
            <div class="relative mt-4">
                <label for="password" class="text-base leading-7 font-medium text-sm text-blueGray-500">Classroom
                    Password</label>

                <div class="flex items-center">
                    <input
                        id="classroom_password_input"
                        autocomplete="false"
                        required
                        type="text" name="password" placeholder="Classroom Password"
                        class="w-full px-4 py-3 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">

                    <span
                        id="randomPassGenerator_btn"
                        class="uppercase relative -ml-10 p-2 mt-2  flex items-center border border-yellow-600 text-yellow-600 max-w-max shadow-sm hover:shadow-lg rounded-full w-8 h-8 ">
				<svg width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"
                     style="transform: rotate(360deg);"><path
                        d="M26 18A10 10 0 1 1 16 8h6.182l-3.584 3.585L20 13l6-6l-6-6l-1.402 1.414L22.185 6H16a12 12 0 1 0 12 12z"
                        fill="currentColor"></path></svg>
				</span>

                </div>
            </div>
            <button
                class="w-full my-6 mt-4 px-16 py-3 mr-2 text-base font-medium text-white transition duration-300 ease-in-out transform bg-orange-500 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-orange-400 ">
                Create Classroom
            </button>
            <p class="mx-auto mt-3 text-xs text-blueGray-500"> Long caption text under input..</p>
        </form>
    </div>
</div>
