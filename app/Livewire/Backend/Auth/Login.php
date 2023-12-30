<?php

namespace App\Livewire\Backend\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;

    public function render()
    {
        return view('livewire.backend.auth.login');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            request()->session()->regenerate();

            session()->flash('success', __('Logged in successfully'));

            return to_route('admin.dashboard');
        }

        $this->addError('email', 'The provided credentials do not match our records');
    }
}
