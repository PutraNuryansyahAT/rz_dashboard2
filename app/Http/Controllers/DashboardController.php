<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Transaksi;
use App\Models\Donatur;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function viewdashboard()
    {
        $a = Transaksi::select(Transaksi::raw('sum(nominal)*5/100 as total_fee'))
            ->groupBy('id_program')
            ->where('status_pembayaran', 'Success')
            ->where('id_amil', auth()->user()->id_amil)->pluck('total_fee');


        $bulan = Transaksi::select('');

        // $title = Program::select('program')->pluck('program');

        // $total_fee = Program::select('total_fee')->pluck('total_fee');
        // compact('total_transaksi', 'title', 'total_fee')

        return view('/dashboard.dashboard', [
            "title" => "Dashboard",

            'dashboard' => Transaksi::select('program.nama_program', Transaksi::raw('sum(nominal) as total_transaksi'), Transaksi::raw('sum(nominal)*5/100 as total_fee'))
                ->rightjoin('program', 'program.id_program', '=', 'transaksi.id_program')
                ->groupBy('program.nama_program')
                ->where('status_pembayaran', 'Success')
                ->where('id_amil', auth()->user()->id_amil)
                ->get(),
            'total_fee_transaksi' => $a->sum(),
            //total donatur
            'total_donatur' => Donatur::where('id_amil', auth()->user()->id_amil)->count(),

            // 'total_transaksi_berhasil' => Transaksi::where('id_amil', auth()->user()->id_amil)
            //     ->where('status_pembayaran', 'Success')
            //     ->count(),

            //total_transaksi_nominal

            'total_transaksi_nominal' => Transaksi::select(Transaksi::raw('sum(nominal) as total_nominal'))
                ->where('id_amil', auth()->user()->id_amil)
                ->where('status_pembayaran', 'Success')->first(),
            'banyak_transaksi' => Transaksi::where('id_amil', auth()->user()->id_amil)->count(),
        ]);
    }
}
