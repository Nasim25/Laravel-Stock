<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginLivewire extends Component
{
    public $form = [
        'email'   => '',
        'password'=> '',
    ];
    public function login()
    {
        $this->validate([
            'form.email'    => 'required|email',
            'form.password' => 'required',
        ]);

        Auth::attempt($this->form);
        return redirect(route('home'));
        
    }
    public function render()
    {
        return view('livewire.login-livewire');
    }
}
