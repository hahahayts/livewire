<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Validate; 
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginPage extends Component
{

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:6')]
    public $password = '';

    public $email_verified_at = '';

    public function mount(){
        if(Auth::check()) return redirect('account');
    }

    public function login()
    {
        $this->validate();
    
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();
    
            // Now that authentication is successful, safely get the user
            $user = Auth::user();
    
            if (!$user->email_verified_at) {
                Auth::logout(); // Log out the user if email is not verified
                return redirect('/verify-email/'.$user->id)->with('error', 'Email not verified!');
                // $this->addError('email', 'Email not verified!');
                // return;

            }
    
            return redirect()->to('/account'); 
        } else {
            $this->addError('email', 'Invalid email or password.');
        }
    }
    


    public function render()
    {
        return view('livewire.pages.login-page');
    }
}
