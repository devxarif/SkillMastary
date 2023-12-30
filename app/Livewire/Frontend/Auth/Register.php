<?php

namespace App\Livewire\Frontend\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class Register extends Component
{

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $type = 'student';
    public $captcha = null;

    public function render()
    {
        return view('livewire.frontend.auth.register');
    }

    public function register(){
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string',
            'type' => 'required|string|in:student,instructor',
            'captcha' => config('captcha.active') ? 'required' : '',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'type' => $this->type,
            'password' => bcrypt($this->password),
        ]);

        Auth::guard('user')->login($user);

        session()->flash('success', __('Registered successfully'));

        return to_route('website.dashboard');
    }

    public function updatedCaptcha($token)
    {
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' .config('captcha.sitekey') .'&response=' . $token);

        $success = $response->json()['success'];

        if ($success) {
            $this->captcha = true;
        }
    }
}
