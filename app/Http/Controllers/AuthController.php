<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login()
    {
        return view('/auth.login', [
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
            //dilakukan regenearte untk menghalangi atau menutup celah yang kemungkinan terjadi
        }
        return back()->with('loginError', 'Login Failed');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function changepass()
    {
        return view(
            '/auth.changepass',
            [
                "title" => "changepassword",
            ]
        );
    }
    public function reqchangepass(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => ['required', 'min:5', 'max:10', 'unique:user,password'],
            'confirm_passowrd' => 'required',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }

        if (!$request->new_password == $request->confirm_passowrd) {
            return back()->with("error", "New and Confirm Password Doesn't match!");
        }

        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("success", "Password changed successfully!");
    }
}
