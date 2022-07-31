<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Amil;
use Illuminate\Support\Facades\Storage;

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

    public function update(Request $request)
    {
        // ddd($request);
        $a = $request->email;

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

        if ($request->file('surat_pernyataan')) {
            $validatedData['surat_pernyataan'] = $request->file('surat_pernyataan')->store('surat_pernyataan');
        }
        if ($request->file('ktp')) {
            $validatedData['ktp'] = $request->file('ktp')->store('ktp');
        }

        Amil::where('id_amil', auth()->user()->id_amil)->update($validatedData);

        $request->session()->flash('success', 'Update Success');
        return redirect('/settings');
    }

    public function download($filename)
    {
        $path = storage_path('app/public/' . $filename);

        return response()->download($path);
    }
}
