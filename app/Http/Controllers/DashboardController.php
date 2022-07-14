<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function viewdashboard()
    {

        // $namaprogram = Program::select('namaprogram')->get();
        // $namaprogram = Program::select('program.namaprogram', Transaksi::raw('sum(nominal) as total_transaksi'), Transaksi::raw('sum(nominal)*5/100 as total_fee'))
        //     ->leftjoin('transaksi', 'transaksi.program', '=', 'program.id')
        //     ->groupBy('program.namaprogram')
        //     ->where('statuspembyaran', 'Success')
        //     ->where('affiliate', auth()->user()->id)
        //     ->get();

        // $title = Program::select('namaprogram')->pluck('program');

        return view('/dashboard.dashboard', [
            "title" => "Dashboard",
            'dashboard' => Transaksi::select('program.namaprogram', Transaksi::raw('sum(nominal) as total_transaksi'), Transaksi::raw('sum(nominal)*5/100 as total_fee'))
                ->rightjoin('program', 'program.id', '=', 'transaksi.program')
                ->groupBy('program.namaprogram')
                ->where('statuspembyaran', 'Success')
                ->where('affiliate', auth()->user()->id)
                ->get()
        ]);
    }
}
