<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate; 


class ResetPassword extends Component
{

    public $user;

    #[Validate('required|min:6')]
    public $password = '';

    #[Validate('same:password')]
    public $confirmPassword = '';

    public function mount($token){
            $this->user = User::where('remember_token', $token)->first();
    }

    public function resetPassword(){
        $this->validate();

        $this->user->password = bcrypt($this->password);
        $this->user->save();

        Auth::login($this->user);

        return redirect('account');
    }

    public function render()
    {
        return view('livewire.reset-password');
    }
}
