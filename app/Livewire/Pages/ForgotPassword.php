<?php

namespace App\Livewire\Pages;

use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\Attributes\Validate; 


class ForgotPassword extends Component
{
   
    #[Validate('required|email')]
    public $email = '';


    public function sendEmail(){
         $this->validate();

         Mail::to($this->email)->send(new ForgotPasswordMail($this->email));

        return redirect('/email-sent') ;

    }
    public function render()
    {
        return view('livewire.pages.forgot-password');
    }
}
