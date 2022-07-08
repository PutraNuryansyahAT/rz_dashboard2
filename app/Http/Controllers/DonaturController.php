<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donatur;

class DonaturController extends Controller
{
    public function viewdonatur()
    {
        return view('/dashboard.donatur', [
            "title" => "Donatur",
            'donatur' => Donatur::where('affliate', auth()->user()->id)->get()
        ]);
    }
}
