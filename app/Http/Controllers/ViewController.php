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

    public function viewaffiliate()
    {
        return view('/dashboard.affiliate', [
            "title" => "Affiliate"
        ]);
    }
}
