<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function viewfaq()
    {
        return view('/pages.faq', [
            "title" => "Tittle"
        ]);
    }

    public function viewfiqih()
    {
        return view('/pages.fiqih', [
            "title" => "Fiqih"
        ]);
    }

    public function viewprofile()
    {
        return view('/pages.profile', [
            "title" => "Profile"
        ]);
    }
}
