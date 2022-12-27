<?php

namespace App\Http\Repositories\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Interfaces\Admin\AuthInterface;

class AuthRepository implements AuthInterface
{

    public function loginPage()
    {
        return view('admin.auth.login');
    }

    public function login($request)
    {

        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect(route('admin.home'));
        }

        Alert::error('Error', "Your Credentials Don't match our data !");
        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Session::flush();
        Auth::guard('admin')->logout();

        Alert::success('Logout', 'Logout Successfully');
        return redirect((route('admin.loginPage')));
    }
}
