<?php

use App\Http\Controllers\VerifyEmail as ControllersVerifyEmail;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\LoginPage;
use App\Livewire\Pages\SignUpPage;
use App\Livewire\Pages\AccountPage;
use App\Livewire\Pages\Verified;
use App\Livewire\Pages\VerifyEmail;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function(){
    Route::get('/', HomePage::class)->name('landing-page');
    Route::get('/login', LoginPage::class)->name('login');
    Route::get('/register', SignUpPage::class)->name('register');
    Route::get('/verify-email/{token}', VerifyEmail::class)->name('verify-email');
    Route::get('verify/{token}', [ControllersVerifyEmail::class, 'verified'])->name('verify');

});

Route::middleware(['auth'])->group(function(){
    Route::get('/verified', Verified::class)->name('verified');
    Route::get('/account', AccountPage::class)->name('account');
});