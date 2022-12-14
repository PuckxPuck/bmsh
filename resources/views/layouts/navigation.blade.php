<header>
    <nav class="fixed top-0 left-0 w-full z-[999] bg-white border-gray-200 px-4 lg:px-6 py-2.5 drop-shadow-md">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <div>
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('img/bm-logo.png') }}" class="w-[30vw] md:w-1/2 pt-2 hover:scale-110 transition-all duration-300" alt="Brightminds Logo" />
                </a>
            </div>
            <div class="flex items-center lg:order-2 font-semibold justify-end">
                <div class="flex items-center w-2/3">
                    <h4 class="font-normal text-sm mr-5 align-middle">Hussain Mohammed Ibn Ahmed Bin Ibrahim</h4>
                    <img class="h-10 rounded-full border border-gray-100 shadow-sm" src="https://picsum.photos/100/100" />
                </div>

                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu" aria-expanded="false" id="menu-button">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu">
                <ul class="flex flex-col mt-4 font-semibold lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{ route('home') }}" class="rounded relative inline-flex group items-center justify-center py-2 pr-4 pl-3 cursor-pointer">
                            <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-[#732F90] rounded-3xl group-hover:w-full group-hover:h-full group-hover:scale-105"></span>
                            <span class="relative group-hover:text-white group-hover:scale-110 group-hover:transition-all ease-out duration-300 group-hover:mx-3">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('courses') }}" class="rounded relative inline-flex group items-center justify-center py-2 pr-4 pl-3 cursor-pointer">
                            <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-[#A9218E] rounded-3xl group-hover:w-full group-hover:h-full group-hover:scale-105"></span>
                            <span class="relative group-hover:text-white group-hover:scale-110 group-hover:transition-all ease-out duration-300 group-hover:mx-3">Your Courses</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('attendance') }}" class="rounded relative inline-flex group items-center justify-center py-2 pr-4 pl-3 cursor-pointer">
                            <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-[#A9218E] rounded-3xl group-hover:w-full group-hover:h-full group-hover:scale-105"></span>
                            <span class="relative group-hover:text-white group-hover:scale-110 group-hover:transition-all ease-out duration-300 group-hover:mx-3">Your Attendance</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('how') }}" class="rounded relative inline-flex group items-center justify-center py-2 pr-4 pl-3 cursor-pointer">
                            <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-[#A9218E] rounded-3xl group-hover:w-full group-hover:h-full group-hover:scale-105"></span>
                            <span class="relative group-hover:text-white group-hover:scale-110 group-hover:transition-all ease-out duration-300 group-hover:mx-3">How to join classes</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
