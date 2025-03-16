<?php

use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\LoginPage;
use App\Livewire\Pages\SignUpPage;
use App\Livewire\Pages\AccountPage;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function(){
    Route::get('/', HomePage::class)->name('landing-page');
    Route::get('/login', LoginPage::class)->name('login')->name('login');
    Route::get('/register', SignUpPage::class)->name('register');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/account', AccountPage::class)->name('account');
});