<div class="modal" x-bind:style="paymentSuccessModal && { 'pointer-events':'auto', 'visibility':'visible', 'opacity':1 }" x-transition>
    <div class="modal-box rounded-[3rem] max-w-3xl" @mousedown.outside="paymentSuccessModal = false">
        <div class="grid grid-cols-2">
            <div class="items-center">
                <img src="{{ asset('img/Group-6645.png') }}" class="w-100 mx-auto"/>
            </div>
            <div>
                <h1 class="text-6xl font-bold">
                    Payment<br>
                    Complete
                </h1>
                <p class="text-xl mt-4">
                    Here's to another month<br>
                    of learning<br>
                    and improving<br>
                    with Bright Minds
                </p>
            </div>
        </div>
        <hr class="my-5">
        <div class="grid grid-cols-2 place-items-center">
            <div class="text-center">
                <h1 class="text-xl">
                    How would you rate<br>
                    your experience with us?
                </h1>
            </div>
            <div class="flex place-items-center">
                @foreach (range(1,4) as $item)
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5" stroke="currentColor" class="w-10 h-10 my-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                @endforeach
            </div>
        </div>
    </div>
</div>
