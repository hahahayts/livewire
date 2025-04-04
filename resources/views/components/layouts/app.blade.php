<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
        @livewireStyles

    </head>
    <body class="bg-slate-200">
        @if (request()->routeIs('verify-email'))
        <livewire:pages.verify-email />  
        
        @elseif (request()->routeIs('verified'))    
        <livewire:pages.verified />

        @elseif (request()->routeIs('show.email.success'))    
        <livewire:show-email-success />
        @else
        <header class="py-4 px-2">
            <nav class="mr-2">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-5">
                    <a href="/" wire:navigate class="logo btn text-2xl font-semibold">Pet<span class="text-teal-500">Care.ph</span></a>
                        <a href=""  class="btn hover:bg-teal-700/10 duration-100">Find a Sitter</a>
                        <a href=""  class="btn hover:bg-teal-700/10 duration-100">Pet Store</a>
                     </div>
                     <div class="flex gap-6 items-center">
                        <a href="" class="btn hover:bg-teal-700/10 duration-100">Become a Sitter</a>
                       @auth
                       <div class=" flex items-center">
                        <div x-data=" { expanded: false }">
                            <span x-on:click="expanded = ! expanded" >
                                <i class="bi bi-person-circle text-4xl text-gray-400"></i>
                            </span>
                            {{-- start side bar --}}
                                <div x-show='expanded' class="absolute min-h-screen w-full left-0 top-0 z-50  bg-gray-400/80 ">
                                   <div class="absolute min-h-screen min-w-[300px] bg-slate-200 shadow-lg right-0 p-3 px-4 animate-slide-left">
                                    <div x-on:click= ' expanded = ! expanded' class="flex justify-end">
                                        <span><i class="bi bi-x text-3xl font-semibold"></i></span>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-3 my-5">
                                            <div>
                                                <span x-on:click="expanded = ! expanded" >
                                                    <i class="bi bi-person-circle text-4xl text-gray-400"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <span>{{auth()->user()->firstname}}</span>
                                                <span>{{auth()->user()->lastname}}</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-5 mt-3">
                                        <a href="">Messages</a>
                                        <a href="">Bookings</a>
                                        <a href="">Favourites</a>
                                        <a href="">Pets</a>
                                        <a href="">Help</a>
                                        <a href="">Acount</a>
                                        <a href="">@livewire('logout-button') </a>
                                        </div>    
                                  </div>
                                   </div>
                                </div>

                                {{-- end of side bar --}}
                        </div>
                       
                       </div>
                       @else
                       <a href="/login" wire:navigate class="btn bg-teal-700/10 hover:bg-teal-700/20 duration-100">Log in </a>
                       <a href="/register" wire:navigate class="btn bg-teal-700/80 hover:bg-teal-700 text-white/90 duration-100">Sign up</a>
                       @endauth
                     </div>
                </div>
                @auth
                @livewire('auth-nav')
            @endauth
            </nav>     
        </header> 
        <main>
            {{ $slot }}   
        </main>
         @endif
        @livewireScripts
    </body>
</html>
