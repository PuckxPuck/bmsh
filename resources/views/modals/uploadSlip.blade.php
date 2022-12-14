<div class="modal" x-bind:style="uploadSlipModal && { 'pointer-events':'auto', 'visibility':'visible', 'opacity':1 }" x-transition>
    <div class="modal-box rounded-[3rem] text-center" @mousedown.outside="uploadSlipModal = false">
        <h3 class="font-bold text-xl mb-4">To complete your payment</h3>
        <h3 class="font text-xl mb-4 mt-10">Please transfer</h3>
        <input type="text" class="hidden" value="7702000101" id="accountNO">
        <button class="btn btn-ghost hover:bg-white text-4xl font-bold" onclick="copyText('accountNO')">
            7702000101
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6 ml-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
            </svg>
        </button>
        <h1 class="font-bold text-7xl my-10">1196 RF.</h1>
        <a @click="uploadSlipModal = false; paymentSuccessModal = true" class="mt-10 mb-5 btn rounded-full hover:text-[#6c3484] hover:bg-white bg-white text-[#6c3484] border-[#6c3484] w-[250px]">
            Upload Receipt
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
            </svg>
        </a>
    </div>
</div>
