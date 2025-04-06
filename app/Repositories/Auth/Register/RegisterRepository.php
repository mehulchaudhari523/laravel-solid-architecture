<?php

namespace App\Repositories\Auth\Register;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterRepository implements RegisterInterface
{
    public function register(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
