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
        $result1 =  DB::select(DB::raw("select count(transaksi.id_program) as banyak_program , program.nama_program
         FROM transaksi LEFT JOIN program ON program.id_program = transaksi.id_program
         WHERE transaksi.id_amil = $id_amil
         GROUP BY transaksi.id_program "));
        $prodig = "";
        foreach ($result1 as $val) {

            $prodig .= " ['" . $val->nama_program . "',    " . $val->banyak_program . " ],";
        }
        $diagramprog = $prodig;

        //chart metode program
        $result2 =  DB::select(DB::raw("select count(transaksi.metode_pembayaran) AS metodebayar, transaksi.metode_pembayaran 
        FROM transaksi 
        WHERE transaksi.id_amil = $id_amil 
        GROUP BY transaksi.metode_pembayaran"));
        $metode = "";
        foreach ($result2 as $val) {
            $metode .= "['" . $val->metode_pembayaran . "', " . $val->metodebayar . "],";
        }
        $diagrammetode = $metode;

        //chart fee dan total 
        $result3 = DB::select(DB::raw("SELECT SUM(transaksi.nominal) AS total_transaksi,SUM(transaksi.nominal)*0.05 AS total_fee, transaksi.date_transaksi FROM transaksi GROUP BY year(transaksi.date_transaksi)"));





        return view('/dashboard.dashboard', compact('diagramprog', 'diagrammetode'), [
            "title" => "Dashboard",

            'dashboard' => Transaksi::select('program.nama_program', Transaksi::raw('sum(nominal) as total_transaksi'), Transaksi::raw('sum(nominal)*0.05 as total_fee'))
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
