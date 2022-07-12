<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function viewdashboard()
    {
        $total_transaksi = Program::select('total_transaksi')->pluck('total_transaksi');

        $title = Program::select('program')->pluck('program');

        $total_fee = Program::select('total_fee')->pluck('total_fee');

        return view('/dashboard.dashboard', compact('total_transaksi', 'title', 'total_fee'), [
            "title" => "Dashboard",
            'program' => Program::all()
        ]);
    }
}
