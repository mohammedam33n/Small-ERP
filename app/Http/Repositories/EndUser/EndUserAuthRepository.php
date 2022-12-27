<?php

namespace App\Http\Repositories\EndUser;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Interfaces\EndUser\EndUserAuthInterface;

class EndUserAuthRepository implements EndUserAuthInterface
{

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function registerPage()
    {
        return view('endUser.auth.register');
    }

    public function loginPage()
    {
        return view('endUser.auth.login');
    }

    public function login($request)
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::guard()->attempt($credentials)) {
            return redirect(route('home'));
        } else {
            Alert::error('Error', "Your Credentials Don't match our data !");
            return back();
        }
    }

    public function register($request)
    {
        $user = $this->user::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);
        Auth::login($user);

        Alert::success('Register', 'Great! You have Successfully loggedin');
        return redirect((route('home')));
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();

        Alert::success('Logout', 'Logout Successfully');
        return redirect((route('home')));
    }
}
