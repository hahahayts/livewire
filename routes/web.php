<?php

use App\Http\Controllers\VerifyEmail as ControllersVerifyEmail;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\LoginPage;
use App\Livewire\Pages\SignUpPage;
use App\Livewire\Pages\AccountPage;
use App\Livewire\Pages\VerifyEmail;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function(){
    Route::get('/', HomePage::class)->name('landing-page');
    Route::get('/login', LoginPage::class)->name('login');
    Route::get('/register', SignUpPage::class)->name('register');
    Route::get('/verify-email/{id}', VerifyEmail::class)->name('verify-email');
    Route::get('verified/{id}', [ControllersVerifyEmail::class, 'verified'])->name('verified');

});

Route::middleware(['auth'])->group(function(){
    Route::get('/account', AccountPage::class)->name('account');
});