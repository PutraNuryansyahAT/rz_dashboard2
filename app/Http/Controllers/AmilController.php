<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amil;

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
        $a = $request->email;

        $rules = [
            'nama_lengkap' => 'required|max:255',
            'alamat' => 'required|max:255',
            'nomor_hp' => 'required|digits_between:3,15',
            'nama_bank' => 'nullable',
            'no_rekening' => 'nullable',
            'atas_nama' => 'nullable',
            'surat_pernyataan' => 'nullable',
            'ktp' => 'nullable',
        ];
        if ($request->email != $a) {
            $rules['email'] = 'required|email:dns|unique:data_amil';
        }
        $validatedData = $request->validate($rules);

        Amil::where('id_amil', auth()->user()->id_amil)->update($validatedData);

        $request->session()->flash('success', 'Update Success');
        return redirect('/settings');
        // return back()->with('message', 'Sudah Berhasil Update');
    }
}
