<?php

namespace App\Repositories\Auth\Login;

use Illuminate\Support\Facades\Auth;

class LoginRepository implements LoginInterface
{
    public function login(array $credentials)
    {
        if (Auth::attempt($credentials)) {
            return Auth::user();
        }

        return null;
    }

    public function logout()
    {
        Auth::logout();
    }
}
