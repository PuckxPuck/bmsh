@extends('layouts.app')
@section('contents')
    <link rel="icon" href="{{ url('favicon.ico') }}">
    <div class="flex justify-center">
        <div x-data="{ payNowModal: false, uploadSlipModal: false, paymentSuccessModal: false, coursesModal: false }" class="w-[60%] justify-center">
            <section class="m-auto">
                <div class="flex justify-between">
                    <div class="card flex">
                        <div class="flex">
                            <div class="flex place-items-center">
                                <img class="rounded-full align-center" src="https://picsum.photos/100/100" />
                                <div class="px-5">
                                    <h1 class="text-1xl font-bold">
                                        Hussain Mohammed<br>
                                        Ibn Ahmed Bin Ibrahim
                                    </h1>
                                    <div class="flex place-items-center">
                                        <p class="text-gray-500 text-sm font-bold">BM001</p>
                                        <button class="btn text-gray-500 btn-ghost text-sm hover:bg-white">
                                            Edit Profile
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card flex shadow-[0_0_1rem_rgba(0,0,0,0.1)] lg:rounded-full justify-center items-center">
                        <div class="flex place-items-center px-3 ">
                            <img class="rounded-full align-center w-12 pl-3" src="{{ asset('img/info.png') }}" />
                            <div class="px-5">
                                <h1 class="text-md font-bold text-[#dc1c3b]">
                                    TIME TABLES HAVE CHANGED!
                                </h1>
                                <p class="text-md font-bold text-[#dc1c3b]">
                                    Grade 10 Islam is now 4-6pm
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="m-auto flex px-10 py-5 w-full mt-[105px]  lg:justify-center">
                <div class="lg:flex place-content-center space-x-10 lg:flex-row sm:flex-col sm:items-center">
                    {{-- Courses Card --}}
                    <div
                        class="card justify-between lg:w-[348px] lg:h-[570px] bg-base-100 shadow-[0_0_1rem_rgba(0,0,0,0.1)] rounded-[3rem]">
                        <div class="card-body flex justify-between">
                            <div class="flex item-center place-content-center place-items-center">
                                <img src="{{ asset('img/courses-logo.png') }}" class="w-[30.59px]" />
                                <h2 class="text-center ml-3 font-bold text-[30.59px] ">Courses</h2>
                            </div>
                            <div class="grid gap-4 grid-cols-2 grid-row-flow px-10">
                                <div class="flex justify-center">
                                    <img src="{{ asset('img/physics-Group 1142.png') }}" class="w-[74.92px]" />
                                </div>
                                <div class="flex justify-center">
                                    <img src="{{ asset('img/physics-Group 1142.png') }}" class="w-[74.92px]" />
                                </div>
                                <div class="flex justify-center">
                                    <img src="{{ asset('img/physics-Group 1142.png') }}" class="w-[74.92px]" />
                                </div>
                                <div class="flex justify-center">
                                    <img src="{{ asset('img/physics-Group 1142.png') }}" class="w-[74.92px]" />
                                </div>
                            </div>
                            <div>
                                <div class="px-5 text-center">
                                    <p class="text-center text-[23px]">
                                        4/10 Courses<br>
                                        selected for Gr10
                                    </p>
                                </div>
                                <div class="flex place-content-center place-items-center">
                                    <a @click="coursesModal = true"
                                        class="mt-6 flex btn rounded-full hover:text-white hover:bg-[#6c3484] bg-white text-[#6c3484] border-[#6c3484] w-[190px]">
                                        All Courses
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Attandance Card --}}
                    {{-- <div
                        class="card lg:w-[348px] lg:h-[570px] bg-base-100 shadow-[0_0_1rem_rgba(0,0,0,0.1)] rounded-[3rem]">
                        <div class="card-body flex justify-between">
                            <div class="flex place-content-center place-items-center">
                                <img src="{{ asset('img/attendance-logo.png') }}" class="w-[30.59px]" />
                                <h2 class="text-center ml-3 font-bold text-[30.59px] ">Attendance</h2>
                            </div>
                            <div class="flex place-content-center place-items-center my-9">
                                <img src="{{ asset('img/attendance.png') }}" class="" />
                            </div>
                            <div>
                                <div class="px-5 text-center">
                                    <p class="text-[23px]">
                                        Total Lessons attended this month
                                    </p>
                                </div>
                                <div class="flex place-content-center place-items-center">
                                    @click="payNowModal = !payNowModal"
                                    <a
                                        class="mt-5 flex btn rounded-full hover:text-white hover:bg-[#6c3484] bg-white text-[#6c3484] border-[#6c3484] w-[190px]">
                                        Detailed Attendance
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- Payment Card --}}
                    <div
                        class="card lg:w-[348px] lg:h-[570px] bg-base-100 shadow-[0_0_1rem_rgba(0,0,0,0.1)] rounded-[3rem]">
                        <div class="card-body flex justify-between">
                            <div class="flex place-content-center place-items-center">
                                <img src="{{ asset('img/payment-logo.png') }}" class="w-[30.59px]" />
                                <h2 class="text-center ml-3 font-bold text-[30.59px] ">Payment</h2>
                            </div>
                            <div class="flex place-content-center place-items-center my-10">
                                <img src="{{ asset('img/Group-6698.png') }}" class="w-[172.31px]" />
                            </div>
                            <div>
                                <div class="px-5 text-center">
                                    <h1 class="text-[29px] font-bold text-[#04ac94]">
                                        1196 Rf.
                                    </h1>
                                    <p class="text-[23px]">
                                        is pending for Sept
                                    </p>
                                </div>
                                <div class="flex place-content-center place-items-center justify-self-end">
                                    <a @click="payNowModal = !payNowModal"
                                        class="mt-5 flex btn rounded-full hover:text-white hover:bg-[#6c3484] bg-white text-[#6c3484] border-[#6c3484] w-[190px]">
                                        Pay Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="mt-8 w-full">
            <section class="m-auto flex w-full lg:h-[723.8px] lg:justify-center lg:items-center">
                <div class="flex flex-col">
                    {{-- Heading --}}
                    <div class="flex justify-center">
                        <h1 class="text-[60px] font-bold">How to Join Classes</h1>
                    </div>

                    {{-- img section --}}

                    <div class="grid grid-cols-2 items-center mt-5">
                        <div>
                            <img src="{{ asset('img/htj-01.png') }}" class="w-[403.46px]" />
                        </div>

                        <div>
                            <p class="text-[23px]">
                                Finding things a bit confusing? Just follow our step by step guide on how to join classes
                                and we'll have you up and running in no time!
                            </p>
                            <div class="flex ">
                                <a @click="payNowModal = !payNowModal"
                                    class="mt-5 flex btn rounded-full hover:text-white hover:bg-[#6c3484] bg-white text-[#6c3484] border-[#6c3484] w-[190px]">
                                    Learn How
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <hr class="mt-8 w-full">
            <section class="mt-[105px] mx-auto w-full">
                {{-- Heading --}}
                <div class="flex justify-center">
                    <h1 class="text-[60px] font-bold">Your Schedule for this Week</h1>
                </div>
                <div class="grid content-between grid-cols-3">
                    @foreach (['Sun', 'Mon', 'Tue', 'Wed', 'Thu'] as $key => $day)
                        <div class="card shadow-[0_0_1rem_rgba(0,0,0,0.1)] rounded-[3rem] mx-5 my-5 lg:w-[303px] lg:h-auto">
                            <div class="card-body pb-10">
                                <div class="flex space-x-4 justify-between items-center">
                                    <h1 class="font-bold lg:text-[29px]">{{ $day }}</h1>
                                    <p class="text-gray-500 lg:text-[16px]">Sep {{ $key + 1 }}</p>
                                    <div class="avatar-group lg:-space-x-3">
                                        <div class="avatar">
                                            <div class="lg:w-[30.23px]">
                                                <img src="{{ asset('img/Physics_AL-logo.png') }}" />
                                            </div>
                                        </div>
                                        <div class="avatar">
                                            <div class="lg:w-[30.23px]">
                                                <img src="{{ asset('img/Maths_AL-logo.png') }}" />
                                            </div>
                                        </div>
                                        <div class="avatar">
                                            <div class="lg:w-[30.23px]">
                                                <img src="{{ asset('img/Dhivehi_AL-logo.png') }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-1">
                                <div class="overflow-x-hidden">
                                @foreach (['Physics' => 'Newtons Laws', 'Maths' => 'Basics of Geometry', 'Dhivehi' => 'Grammar & Eloquence'] as $subject => $lesson)
                                    <div class="grid grid-cols-3 my-3 w-full ">
                                        <div class="text-start col-span-2">
                                            <h1 class="text-md font-bold">
                                                {{ $subject }}
                                            </h1>
                                            <p class="text-[13px] text-gray-500">
                                                {{ $lesson }}
                                            </p>
                                        </div>
                                        <div class="text-end col-span-1">
                                            <p class="text-[13px] text-gray-500">
                                                04:30 PM
                                            </p>
                                            <p class="text-[13px] text-gray-500">
                                                05:30 PM
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            @include('modals.payNow')
            @include('modals.uploadSlip')
            @include('modals.paymentSuccess')
            @include('modals.courses')
        </div>
    </div>
@endsection
