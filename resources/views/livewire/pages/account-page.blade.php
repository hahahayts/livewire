<section class="w-3/4 mx-auto flex gap-3  space-x-3 py-5" >
    <div class="flex flex-col gap-5">
        <div class="py-4 px-3 shadow-lg overflow-hidden">
            <div class="h-[200px]  bg-teal-600 rounded-lg py-3">
            <h5 class="text-center text-white">{{auth()->user()->firstname}} {{auth()->user()->lastname}}</h5> 
            
             {{-- absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 --}}
             <div class="flex justify-center  mt-8">
                <div class=" flex justify-center bg-gray-400 rounded-full object-cover w-[200px] h-[200px] overflow-hidden">
                    <span class="overflow-hidden ">
                    <i class="bi bi-person-circle text-[10rem] mb-5  text-white/80 "></i>
                    </span>
                    </div>
             </div>
            </div>
           
            <div class="flex justify-center mt-5 pt-12 pb-8 border-b border-black">
                <button class="text-teal-600 pt-7 " >Edit Profile</button>
            </div>

            <div class="flex flex-col space-y-5 pt-7 px-2">
                <div class="flex justify-between">
                    <p class="font-semibold">Balance</p>
                    <p>?</p>
                </div>

                <h3 class="text-2xl font-semibold text-center">$0</h3>

                <a href="" class="text-teal-600">Request Payment</a>
            </div>
        </div>
        <div class=" shadow-lg overflow-hidden ">
            <h3 class="py-3 text-center"> Personal Details</h3>
            <hr class="bg-gray-400">
            <div class="flex flex-col gap-5 px-3 py-5 border-b border-gray-400">
                <h3 class="font-semibold">Keep Your Details Updated</h3>
                <p class="text-gray-500">You can edit and update your personal details, such as your name, mobile number, address, email address and emergency contact details.</p>
                <a href="" class="text-teal-600">Update Details</a>
            </div>
            <div class="flex flex-col gap-5 px-3 py-5 ">
                <h3 class="font-semibold">Become a Sitter</h3>
                <p  class="text-gray-500" >Got some spare time and want more furry friends in your life. Give pet sitting a go and offer daytime, overnight services or both!</p>      
                    <a href="" class="text-teal-600">Link Accounts</a>     
            </div>
        </div>   
        <div class=" shadow-lg overflow-hidden ">
            <h3 class="py-3 text-center">Saved Sitters</h3>
            <hr class="bg-gray-400">
            <div class="flex flex-col gap-5 px-3 py-5 border-b border-gray-400">
                <h3 class="font-semibold">Your Favourite Sitters</h3>
                <p class="text-gray-500">You can add saved Sitters by clicking on the heart next to their profile picture. This makes it easier to view their profiles, without needing to search!</p>
            </div>
        </div>   
    </div>


    <div class="flex flex-col gap-5"> 
        <div class="py-4 shadow-lg overflow-hidden ">
            <h3 class="py-3 text-center"> Get Started on Mad PetCare.ph</h3>
            <hr class="bg-gray-400">
            <div class="flex flex-col gap-5 px-3 py-5 border-b border-gray-400">
                <h3 class="font-semibold">Find Local, Trusted Pet Sitters</h3>
                <p class="text-gray-500">Hit the link below to search for vetted Pet Sitters in your area.</p>
                <a href="" class="text-teal-600">Find a Sitter</a>
            </div>
            <div class="flex flex-col gap-5 px-3 py-5 ">
                <h3 class="font-semibold">Become a Sitter</h3>
                <p  class="text-gray-500" >Got some spare time and want more furry friends in your life. Give pet sitting a go and offer daytime, overnight services or both!</p>

                <div class="flex justify-between px-3 ">
                    <a href="" class="text-teal-600">Apply Now</a>
                    <a href="" class="text-teal-600">More Information</a>
                </div>
            </div>
        </div>   
        <div class="py-4 shadow-lg overflow-hidden ">
            <h3 class="py-3 text-center"> Pets</h3>
            <hr class="bg-gray-400">
            <div class="flex flex-col gap-5 px-3 py-5 ">
                <h3 class="font-semibold">Tell Us About Your Pets</h3>
                <p class="text-gray-500">Let us know more about your pets by adding them one by one.</p>
                <p class="text-gray-500">You can update your pet details at any time.
                </p>
                <a href="" class="text-teal-600">Find a Sitter</a>
            </div>
          
        </div>   
        <div class="py-4 shadow-lg overflow-hidden ">
            <h3 class="py-3 text-center"> Settings</h3>
            <hr class="bg-gray-400">
            <div class="flex flex-col gap-5 px-3 py-5 ">
                <h3 class="font-semibold">Notifications</h3>
                <p class="text-gray-500">We send SMS messages for booking-related notifications. You can select the notifications you would like to receive.</p>
                <a href="" class="text-teal-600">Update Settings</a>
            </div>
            
        </div>   
    </div>

    <div class="flex flex-col gap-5">

        <div class="py-4 px-3 shadow-lg overflow-hidden">
           <h1>Mad Paws Credit</h1>
           
            <div class="flex flex-col space-y-5 pt-7 px-2">
                <div class="flex justify-between">
                    <p class="font-semibold">Discount</p>
                    <p>?</p>
                </div>

                <h3 class="text-2xl font-semibold text-center">$0</h3>

                <a href="" class="text-teal-600">Redeem Credit</a>
            </div>
        </div>

        <div class=" shadow-lg overflow-hidden ">
            <h3 class="py-3 text-center"> Rebook a Sitter</h3>
            <hr class="bg-gray-400">
            <div class="flex flex-col gap-5 px-3 py-5 border-b border-gray-400">
                <h3 class="font-semibold">Book again with a previous Sitter
                </h3>
                <p class="text-gray-500">Rebook quickly and easily with a Sitter you've used before.
                </p>
            </div>   
            
        </div>  

     
    </div>
    
</section>
