<?php

namespace App\Http\Interfaces\EndUser;

interface EndUserAuthInterface
{
    public function loginPage();
    public function registerPage();
    public function login($request);
    public function register($request);
    public function logout();
}
