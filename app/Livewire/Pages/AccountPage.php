<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AccountPage extends Component
{

    // public function mount(){
    //     if(!Auth::check()) return redirect('/account');
    // }

    public function render()
    {
        return view('livewire.pages.account-page');
    }
}
