<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{

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
