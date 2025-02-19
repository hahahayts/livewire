<div class="content-center">
    <div class="form">
        <h3 class="text-xl text-center pb-3 font-semibold">Welcome to Pet<span class="text-teal-700">Care.ph</span></h3>
        <hr class="border-gray-300">

        <h2 class="text-2xl">Create an Account</h2>
        <p class="text-sm">Enter the following details to create an account.</p>

       <form wire:submit='register' >

          <div class="inputs">
            <label for="email">Email address</label>
             <input type="text" name="email" wire:model='email' 
             class="@error('email') border-red-500 @enderror"
             >
             <span>@error('email') <span class="error">{{ $message }}</span> @enderror 
            </span>
          </div>

          <div class="inputs">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" wire:model='firstname'
            class="@error('firstname') border-red-500 @enderror"
            >
            <span>@error('firstname') <span class="error">{{ $message }}</span> @enderror 
          </span>
          </div>

          <div class="inputs">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" wire:model='lastname'
            class="@error('lastname') border-red-500 @enderror"
            >
            <span>@error('lastname') <span class="error">{{ $message }}</span> @enderror 
          </span>
          </div>

          <div class="inputs">
            <label for="password" >Password</label>
          <input type="password" name="password" wire:model='password'
          class="@error('password') border-red-500 @enderror"
          >
          <span>@error('password') <span class="error">{{ $message }}</span> @enderror 
          </span>
          </div>

          <button type="submit" class="login-register-btn">Sign up</button>
       </form>

       <p class="text-sm text-center">Have an account? <a href="/login" wire:navigate class="hover:text-teal-700 ">Login</a></p>
    </div>
</div>
