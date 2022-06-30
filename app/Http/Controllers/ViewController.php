<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class    ViewController extends Controller
{
    public function viewhome()
    {
        return view('/dashboard.index', [
            "title" => "Home"
        ]);
    }

    public function viewsetting()
    {
        return view('/dashboard.setting', [
            "title" => "Setting"
        ]);
    }

    public function viewfaq()
    {
        return view('/dashboard.faq', [
            "title" => "Tittle"
        ]);
    }

    public function viewfiqih()
    {
        return view('/dashboard.fiqih', [
            "title" => "Fiqih"
        ]);
    }

    public function viewprofile()
    {
        return view('/dashboard.profile', [
            "title" => "Profile"
        ]);
    }

    public function viewtransaksi()
    {
        return view('/dashboard.transaksi', [
            "title" => "Transaksi"
        ]);
    }
}
