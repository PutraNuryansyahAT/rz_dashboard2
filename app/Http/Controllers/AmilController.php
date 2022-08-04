<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Amil;
use Carbon\Carbon;

class AmilController extends Controller
{
    public $timestamps = false;

    public function viewsetting()
    {
        return view('/dashboard.setting', [
            "title" => "Setting",
            "Data_amil" => Amil::where('id', auth()->user()->id_amil)->first()
        ]);
    }

    public function viewinput()
    {
        return view('/auth.insertamil', [
            "title" => "Registrasi Amil",
        ]);
    }

    public function update(Request $request)
    {
        // ddd($request);

        $date = Carbon::now();
        $a = $request->email;
        $amil = Amil::where('id', auth()->user()->id_amil);
        $rules = [
            'nama_lengkap' => 'required|max:255',
            'alamat' => 'required|max:255',
            'nomor_hp' => 'required|digits_between:3,15',
            'nama_bank' => 'nullable',
            'no_rekening' => 'nullable',
            'atas_nama' => 'nullable',
            'surat_pernyataan' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ktp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];

        if ($request->email != $a) {
            $rules['email'] = 'required|email:dns|unique:data_amil';
        }
        $validatedData = $request->validate($rules);
        $validatedData['updated_at'] =  $date;

        if ($request->file('surat_pernyataan')) {
            $validatedData['surat_pernyataan'] = $request->file('surat_pernyataan')->store('surat_pernyataan');
        }
        if ($request->file('ktp')) {
            $validatedData['ktp'] = $request->file('ktp')->store('ktp');
        }

        $amil->update($validatedData);

        $request->session()->flash('success', 'Update Success');
        return redirect('/settings');
    }

    public function store(Request $request)
    {

        $id = IdGenerator::generate(['table' => 'data_amil', 'length' => 6, 'prefix' => date('ymmddss'), 'reset_on_prefix_change' => true]);

        $validatedDataamil = $request->validate([
            'no_ktp' => 'required|numeric|unique:data_amil',
            'email' => 'required|email:dns|unique:data_amil',
            'nama_lengkap' => 'required|max:255',
            'alamat' => 'required|max:255',
            'nomor_hp' => 'required|numeric|digits_between:3,15',
            'cabang_rumahzakat' => 'required|max:255',
            'surat_pernyataan' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ktp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'aktiv' => 'required|max:1',

        ]);
        $validatedDatauser = $request->validate([
            'username' => 'required|max:25|unique:user',
            'password' => ['required', 'min:5', 'max:10'],
            'aktiv' => 'required'
        ]);

        if (!$request->password == $request->confirm_password) {
            return back()->with("registError", "New and Confirm Password Doesn't match!");
        }
        if ($request->file('surat_pernyataan')) {
            $validatedDataamil['surat_pernyataan'] = $request->file('surat_pernyataan')->store('surat_pernyataan');
        }
        if ($request->file('ktp')) {
            $validatedDataamil['ktp'] = $request->file('ktp')->store('ktp');
        }

        $validatedDataamil['id'] = $id;
        $validatedDatauser['id_amil'] = $id;
        $validatedDatauser['password'] = Hash::make($validatedDatauser['password']);
        Amil::insert($validatedDataamil);
        User::insert($validatedDatauser);

        return redirect('/')->with('success', 'Akun Anda akan segera diproses, silahkan menunggu tanggapan gmail');
    }



    public function download($filename)
    {
        $path = storage_path('app/public/' . $filename);

        return response()->download($path);
    }
}
