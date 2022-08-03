<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Transaksi;
use App\Models\Donatur;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function viewdashboard()
    {
        $id_amil = auth()->user()->id_amil;
        $a = Transaksi::select(Transaksi::raw('sum(nominal)*5/100 as total_fee'))
            ->groupBy('id_program')
            ->where('status_pembayaran', 'Success')
            ->where('id_amil', auth()->user()->id_amil)->pluck('total_fee');

        // chart program total
        $result =  DB::select(DB::raw("select count(transaksi.id_program) as banyak_program , program.nama_program
         FROM transaksi LEFT JOIN program ON program.id_program = transaksi.id_program
         WHERE transaksi.id_amil = $id_amil
         GROUP BY transaksi.id_program "));



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

            //total_transaksi_nominal
            'total_transaksi_nominal' => Transaksi::select(Transaksi::raw('sum(nominal) as total_nominal'))
                ->where('id_amil', auth()->user()->id_amil)
                ->where('status_pembayaran', 'Success')->first(),
            'banyak_transaksi' => Transaksi::where('id_amil', auth()->user()->id_amil)->count(),

        ]);
    }
}
