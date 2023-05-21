<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $username, $password;

    public function render()
    {
        return view('livewire.auth.login')->layout('master.login');
    }

    public function login() {
        $this->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => ':attribute tidak boleh kosong',
                'password.required' => ':attribute tidak boleh kosong',
            ]
        );

        if(Auth::attempt(['username' => $this->username, 'password' => $this->password])){
            $this->reset();
            session()->regenerate();
            return redirect()->route('dashboard');
        }
    }
}
