<?php

namespace App\Livewire\Frontend\Auth;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;
    // public $captcha = null;

    public function render()
    {
        return view('livewire.frontend.auth.login');
    }

    public function login()
    {
        // dd([
        //     'email' => $this->email,
        //     'password' => $this->password,
        //     'remember' => $this->remember,
        // ]);
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|string',
            // 'captcha' => config('captcha.active') ? 'required' : '',
        ]);

        if (Auth::guard('user')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            request()->session()->regenerate();

            session()->flash('success', __('Logged in successfully'));

            return to_route('website.dashboard');
        }

        $this->addError('email', 'The provided credentials do not match our records');
    }

    // public function updatedCaptcha($token)
    // {
    //     $response = Http::post(
    //         'https://www.google.com/recaptcha/api/siteverify?secret=' .
    //             config('captcha.sitekey') .
    //             '&response=' . $token
    //     );

    //     $success = $response->json()['success'];

    //     if ($success) {
    //         $this->captcha = true;
    //     }
    // }
}
