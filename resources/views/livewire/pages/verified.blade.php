<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-lg py-10 px-7 rounded-lg text-center">
        <div class="mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-blue-500 mb-4 w-16 h-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </div>
        
        <h1 class="text-4xl font-bold text-gray-800 mb-4 leading-tight">
            You're Now Verified
        </h1>
        
        <div class="mt-8 mb-6">
            <p class="text-gray-500 px-4 text-lg">
                Your account has been successfully verified. 
                Proceed to your dashboard.
            </p>
        </div>

        <div class="mt-6">
            <a 
                href="/account" 
                wire:navigate 
                class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition-colors duration-300 inline-block"
            >
                Go to Dashboard
            </a>
        </div>
    </div>
</div>