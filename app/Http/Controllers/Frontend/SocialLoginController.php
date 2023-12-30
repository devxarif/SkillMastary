<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;

class SocialLoginController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $socialiteUser = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            flashError($e->getMessage() ?? 'Something went wrong!');

            return redirect()->route('website.login');
        }

        $socialiteUserId = $socialiteUser->getId();
        $socialiteUserName = $socialiteUser->getName();
        $socialiteUseremail = $socialiteUser->getEmail();
        $socialiteUserAvatar = $socialiteUser->getAvatar();

        return [
            'id' => $socialiteUserId,
            'name' => $socialiteUserName,
            'email' => $socialiteUseremail,
            'avatar' => $socialiteUserAvatar,
        ];

        $user = User::where([
            'provider' => $provider,
            'provider_id' => $socialiteUserId,
        ])->first();

        if (! $user) {

            $validator = Validator::make(
                ['email' => $socialiteUseremail],
                ['email' => ['unique:users,email']],
                ['email.unique' => 'Couldn\'t login. Maybe you used a different login method?'],
            );

            if ($validator->fails()) {
                return redirect()->route('website.user.login')->withErrors($validator);
            }

            $user = User::updateOrCreate([
                'provider' => $provider,
                'provider_id' => $socialiteUserId,
            ], [
                'name' => $socialiteUserName,
                'email' => $socialiteUseremail,
                'name' => $socialiteUserName,
                'email' => $socialiteUseremail,
            ]);
        }

        Auth::guard('user')->login($user);

        return to_route('website.user.dashboard');
    }
}
