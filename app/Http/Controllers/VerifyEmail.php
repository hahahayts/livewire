<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth ;

class VerifyEmail extends Controller
{
   public function verified($token){
        $user = User::where('remember_token', $token)->first();
        $user->email_verified_at = now();
        $user->save();

       Auth::login($user);
       session()->regenerate();

        return redirect()->route('verified');
    }
}
