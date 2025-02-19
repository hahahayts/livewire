<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Livewire\Attributes\Validate; 
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SignUpPage extends Component
{
    #[Validate('required|email|unique:users,email')]
    public $email = '';

    #[Validate('required')]
    public $firstname = '';

    #[Validate('required')]
    public $lastname = '';

    #[Validate('required|min:6')]
    public $password = '';

    public function mount(){
        if(Auth::check()) return redirect('account');
    }

    public function register(){
       $validatedData = $this->validate();

      $user =  User::create([
            'firstname' => $validatedData['firstname'],
            'lastname' => $validatedData['lastname'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        Auth::login($user);
        return redirect('/account')->with('success', 'Registration successful!'); 
    }


    public function render()
    {
        return view('livewire.pages.sign-up-page');
    }
}
