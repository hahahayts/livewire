<?php

use App\Http\Controllers\VerifyEmail as ControllersVerifyEmail;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\LoginPage;
use App\Livewire\Pages\SignUpPage;
use App\Livewire\Pages\AccountPage;
use App\Livewire\Pages\ForgotPassword;
use App\Livewire\Pages\Verified;
use App\Livewire\Pages\VerifyEmail;
use App\Livewire\ResetPassword;
use App\Livewire\ShowEmailSuccess;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function(){
    Route::get('/', HomePage::class)->name('landing-page');
    Route::get('/login', LoginPage::class)->name('login');
    Route::get('/register', SignUpPage::class)->name('register');

    // Verify email
    Route::get('/verify-email/{token}', VerifyEmail::class)->name('verify-email');
    Route::get('verify/{token}', [ControllersVerifyEmail::class, 'verified'])->name('verify');

    // forgot password
    Route::get('/forgot-password',ForgotPassword::class)->name('forgot-password');

    // show email success
    Route::get('/email-sent', ShowEmailSuccess::class)->name('show.email.success');
    
    // recover password
    Route::get('/password-reset/{token}',ResetPassword::class)->name('recover.passwrod');


});

Route::middleware(['auth'])->group(function(){
    Route::get('/verified', Verified::class)->name('verified');
    Route::get('/account', AccountPage::class)->name('account');
});