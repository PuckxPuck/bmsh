<div class="modal" x-bind:style="coursesModal && { 'pointer-events':'auto', 'visibility':'visible', 'opacity':1 }" x-transition>
    <div class="modal-box rounded-[3rem] text-center" @mousedown.outside="coursesModal = false">
        <h3 class="font-bold text-4xl mb-4">Add courses</h3>
        <hr>
        <div class="px-10">
            @foreach (['Physics'=>'Grade 10','Maths'=>'Grade 10','Dhivehi'=>'Grade 10'] as $subject=>$grade)
            <div class="grid grid-cols-3 my-5 w-100">
                <div class="text-end">
                    <img src="{{ asset('img/'.$subject.'_AL-logo.png') }}"/>
                </div>
                <div class="text-start">
                    <h1 class="text-md font-bold">
                        {{ $subject }}
                    </h1>
                    <p class="text-sm text-gray-500">
                        {{ $grade }}
                    </p>
                </div>
                <div class="col-end-5 grid grid-cols-2 items-center">
                    <div>
                        <p class="text-lg font-bold">
                            $ 299
                        </p>
                    </div>
                    
                    <div class="col-end-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#dc1c3b" class="w-6 h-6 ms-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
        </div>
        <hr>
        <div class="my-10 grid grid-cols-2 content-center items-center">
            <p>This month's total is</p>
            <h1 class="font-bold text-xl">$ 1196</h1>
        </div>
        <hr>
        <button class="btn btn-ghost hover:bg-white mt-5" @click="payNowModal = false">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Add More Courses
        </button>
        <a  @click="payNowModal = false; uploadSlipModal = true" class="mt-5 btn rounded-full text-white bg-[#6c3484] hover:bg-white hover:text-[#6c3484] hover:border-[#6c3484] w-[250px]">
            Pay Now
        </a>
    </div>
</div>
