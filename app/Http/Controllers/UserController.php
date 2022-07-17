<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function login()
    {
        return view('/auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
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

    public function update(Request $request)
    {
        $a = auth()->user()->email;
        $rules = [
            'name' => 'required|max:25',
            'alamat' => 'required|max:255',
            'nomorhp' => 'required|digits_between:3,15',
            'cabang' => 'required',
            'namabank' => 'nullable',
            'norekening' => 'nullable',
            'atasnama' => 'nullable',
            'suratpernyataan' => 'nullable',
            'ktp' => 'nullable',

        ];
        if ($request->email != $a) {
            $rules['email'] = 'required|email:dns|unique:users';
        }
        $validatedData = $request->validate($rules);

        auth()->user()->update($validatedData);
        auth()->user()->save();
        $request->session()->flash('success', 'Update Success');
        return redirect('/settings');
        // return back()->with('message', 'Sudah Berhasil Update');
    }
}
