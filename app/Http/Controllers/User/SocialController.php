<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
class SocialController extends Controller {

    public function socialLogin($social) {

        return Socialite::driver($social)->redirect();
    }

    public function handleProviderCallback($social) {
        $userSocial = Socialite::driver($social)->user();
        $user = User::where(['email' => $userSocial->getEmail()])->first();
        if ($user) {
            Auth::login($user);
            return Redirect::to('https://wikipoli.gq/');
        } else {
            $input = ([
                'email' => $userSocial->email,
                'full_name' => $userSocial->name,
                'status_id' => 1,
                'username' => str_singular($userSocial->name),
                'password' => Hash::make($userSocial->email),
                'email_verified_at' => Carbon::now()
            ]);

            $new_user = User::create($input);
            Auth::login($new_user);


           return Redirect::to('https://wikipoli.gq/');
        }
    }

}
