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

    public function mount(){
        if(Auth::check()) return redirect('account');
    }

    public function login(){

        $this->validate();

        if(Auth::attempt(['email' => $this->email, 'password'=> $this->password])){
            session()->regenerate();
            
            return redirect()->to('/account'); 
        }else {
            $this->addError('email', 'Invalid email or password.');
        }
    }


    public function render()
    {
        return view('livewire.pages.login-page');
    }
}
