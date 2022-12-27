<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\EndUser\Auth\LoginRequest;
use App\Http\Requests\EndUser\Auth\RegisterRequest;
use App\Http\Interfaces\EndUser\EndUserAuthInterface;

class EndUserAuthController extends Controller
{
    private $authInterface;

    public function __construct(EndUserAuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }



    public function loginPage()
    {
        return $this->authInterface->loginPage();
    }

    public function registerPage()
    {
        return $this->authInterface->registerPage();
    }

    public function login(LoginRequest $request)
    {
        return $this->authInterface->login($request);
    }

    public function register(RegisterRequest $request)
    {
        return $this->authInterface->register($request);
    }

    public function logout()
    {
        return $this->authInterface->logout();
    }
}
