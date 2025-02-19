<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutButton extends Component
{

    public function logout(){
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        
        $this->dispatch('userLoggedOut'); // 🔥 Notify layout to change back

        return redirect('/login');
    }
    public function render()
    {
        return view('livewire.logout-button');
    }
}
