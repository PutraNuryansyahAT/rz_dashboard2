<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Amil;

class RegisterController extends Controller
{
    public function register()
    {
        return view('/auth.register', [
            'amil' => Amil::all()
        ]);
    }

    public function store(Request $request)
    {

        $cekamil = Amil::select('aktiv')->where('id_amil', $request->id_amil)->first();

        if (empty($cekamil->aktiv)) {
            return back()->with('registError', '"ID amil tidak ditemukan"');
        }
        if ($cekamil->aktiv == 1) {
            $validatedData = $request->validate([
                'id_amil' => 'required|unique:user',
                'username' => 'required|max:25|unique:user',
                'password' => ['required', 'min:5', 'max:10'],
                'aktiv' => 'required'
            ]);
            $validatedData['password'] = Hash::make($validatedData['password']);
            User::insert($validatedData);
            $request->session()->flash('success', 'Registration Successfull!! Please Login');
            return redirect('/');
        } else {
            return back()->with('registError', 'Akun Amil Tidak Aktiv');
        }
    }
}
