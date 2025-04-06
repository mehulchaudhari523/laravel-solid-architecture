<?php

namespace App\Repositories\Auth\Login;

interface LoginInterface
{
    public function login(array $credentials);
    public function logout();
}
