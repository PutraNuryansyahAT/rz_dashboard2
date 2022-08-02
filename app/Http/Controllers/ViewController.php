<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amil;

class    ViewController extends Controller
{
    public function viewhome()
    {
        return view('/dashboard.index', [
            "title" => "Home"
        ]);
    }



    public function viewaffiliate()
    {
        return view('/dashboard.affiliate', [
            "title" => "Link Affiliator"
        ]);
    }
}
