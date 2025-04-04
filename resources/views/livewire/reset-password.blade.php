<div>
    <div class="content-center">
        <div class="form ">
            <h1 class="text-3xl font-semibold text-center my-2 text-teal-500">Reset Password</h1>
            <h3 class="text-lg my-2 text-center font-semibold text-gray-700">We will send a link to your email to change your password.</h3>
            <form  wire:submit='resetPassword' class="space-y-5 py-3">
                <input
                 wire:model='password'
                type="password"
                placeholder="Password"
                class="@error('email') border-red-500 @enderror"
                >
                @error('password') <span class="error">{{ $message }}</span> @enderror 
                <input
                 wire:model='confirmPassword'
                type="password"
                placeholder="Confirm password"
                class="w-full @error('confirmPassword') border-red-500 @enderror"
                >
             @error('confirmPassword') <span class="error">{{ $message }}</span> @enderror 
    
    
                <button type="submit" class="w-full inline-block mx-auto btn border-teal-500 border ">
    
                    <span wire:loading.delay>Saving...</span>
                    <span wire:loading.class='hidden'>Save new Password</span>
                </button>
            </form>
        </div>
    </div>
    
</div>
