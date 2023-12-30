<?php

namespace App\Livewire\Backend\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

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
        // dd([
        //     'email' => $this->email,
        //     'password' => $this->password,
        //     'remember' => $this->remember,
        // ]);
        $this->validate([
            'email' => 'required',
            'password' => 'required|string',
            // 'captcha' => config('captcha.active') ? 'required' : '',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            request()->session()->regenerate();

            session()->flash('success', __('Logged in successfully'));

            return to_route('admin.dashboard');
        }

        $this->addError('email', 'The provided credentials do not match our records');
    }
}
