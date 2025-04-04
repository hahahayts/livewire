<div class="content-center">
    <div class="form ">
        <h1 class="text-3xl font-semibold text-center my-2 text-teal-500">Password Recovery</h1>
        <h3 class="text-lg my-2 text-center font-semibold text-gray-700">We will send a link to your email to change your password.</h3>
        <form  wire:submit='sendEmail'>
            <input wire:model='email' type="text" placeholder="Enter your email"             class="@error('email') border-red-500 @enderror"
            >
            <span>@error('email') <span class="error">{{ $message }}</span> @enderror 


            <button type="submit" class="w-full inline-block mx-auto btn border-teal-500 border ">

                <span wire:loading.delay>Sending...</span>
                <span wire:loading.class='hidden'>Send</span>
            </button>
        </form>
    </div>
</div>
