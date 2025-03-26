<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

class VerifyEmail extends Controller
{
   public function verified(Request $request){
        $user = User::find($request->id);
        $user->email_verified_at = now();
        $user->save();

       Auth::login($user);
       session()->regenerate();

        return redirect()->route('account');
    }
}
