<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class TestController extends Controller
{

    public function redirectTOProvider($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function handleProvider($provider){
        $user = Socialite::driver($provider)->stateless()->user();
        dd($user);
    }
}
