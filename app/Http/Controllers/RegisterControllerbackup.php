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
            'amil' => Amil::all(),
            'title' => 'Registrasi'
        ]);
    }

    public function store(Request $request)
    {

        // $cekamil = Amil::select('aktiv')->where('id_amil', $request->id_amil)->first();

        // if ($cekamil->aktiv == 1) 

        $validatedDatauser = $request->validate([
            'id_amil' => 'required|unique:user',
            'username' => 'required|max:25|unique:user',
            'password' => ['required', 'min:5', 'max:10'],
            'aktiv' => 'required'
        ]);
        $validatedDataAmil = $request->validate([
            'id_amil' => 'required|unique:data_amil',
            'no_ktp' => 'required|unique:data_amil',
            'email' => 'required|email:dns|unique:data_amil',
            'nama_lengkap' => 'required|max:255',
            'alamat' => 'required|max:255',
            'nomor_hp' => 'required|numeric|digits_between:3,15',
            'nama_bank' => 'nullable',
            'no_rekening' => 'nullable',
            'atas_nama' => 'nullable',
            'surat_pernyataan' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ktp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $validatedDatauser['password'] = Hash::make($validatedDatauser['password']);


        Amil::create($validatedDataAmil);

        if ($request->file('surat_pernyataan')) {
            $validatedData['surat_pernyataan'] = $request->file('surat_pernyataan')->store('surat_pernyataan');
        }
        if ($request->file('ktp')) {
            $validatedData['ktp'] = $request->file('ktp')->store('ktp');
        }

        $request->session()->flash('success', 'Registration Successfull!! Please Login');
        return redirect('/');


        return back()->with('registError', 'Akun Amil Tidak Aktiv');
    }
}
