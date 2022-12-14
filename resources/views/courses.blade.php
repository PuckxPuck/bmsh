@extends('layouts.app')
@section('contents')
<section class=" flex flex-col mt-[105px] mx-auto px-10 w-[60%] justify-center" x-data="{ coursesModal:false }">

    <h1 class="font-bold lg:text-[92px] mb-10 ml-5 self-center">Your Courses</h1>

    <h1 class="font-bold lg:text-[29px] text-gray-500 mb-10 ml-5">Grade 10</h1>
    <div class=" flex flex-wrap justify-center mb-5">
        <div class="flex">
            <img src="{{ asset('img/Physics.png') }}" class="w-[131px]"/>
        </div>
        <div class="flex">
            <img src="{{ asset('img/Maths.png') }}" class="w-[131px]"/>
        </div>
        <div class="flex">
            <img src="{{ asset('img/Dhivehi.png') }}" class="w-[131px]"/>
        </div>
    </div>
    <a @click="coursesModal = true" class="mt-5 flex btn rounded-full hover:text-white hover:bg-[#6c3484] bg-white text-[#6c3484] border-[#6c3484] w-[250px] self-center">
        Add or Remove Courses
    </a>
    @include('modals.courses')
</section>
@endsection
