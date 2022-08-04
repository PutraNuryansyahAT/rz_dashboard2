<?php

namespace App\Http\Controllers;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use App\Models\Amil;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AmilController extends Controller
{
    public $timestamps = false;

    public function viewsetting()
    {
        return view('/dashboard.setting', [
            "title" => "Setting",
            "Data_amil" => Amil::where('id_amil', auth()->user()->id_amil)->first()
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
        $amil = Amil::where('id_amil', auth()->user()->id_amil);
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




        $validatedData = $request->validate([
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

        if ($request->file('surat_pernyataan')) {
            $validatedData['surat_pernyataan'] = $request->file('surat_pernyataan')->store('surat_pernyataan');
        }
        if ($request->file('ktp')) {
            $validatedData['ktp'] = $request->file('ktp')->store('ktp');
        }

        $validatedData['id'] = $id;
        Amil::insert($validatedData);

        return redirect('/')->with('success', 'Id Amil akan diproses');
    }



    public function download($filename)
    {
        $path = storage_path('app/public/' . $filename);

        return response()->download($path);
    }
}
