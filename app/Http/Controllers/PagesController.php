<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function viewfaq()
    {
        return view('/dashboard.pages.faq', [
            "title" => "Tittle"
        ]);
    }

    public function viewfiqih()
    {
        return view('/dashboard.pages.fiqih', [
            "title" => "Fiqih"
        ]);
    }

    public function viewprofile()
    {
        return view('/dashboard.pages.profile', [
            "title" => "Profile"
        ]);
    }
}
