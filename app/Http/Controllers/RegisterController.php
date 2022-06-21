<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('/auth.register');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:25',
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:10'],
        ]);

        User::create($validatedData);
    }
}
