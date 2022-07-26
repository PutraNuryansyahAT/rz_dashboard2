<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Program;
use App\Models\Donatur;
use Illuminate\Http\Request;


class TransaksiController extends Controller
{
    public function viewtransaksi()

    {
        //query builder




        // $donatur = $query->where('donatur', 5);
        return view('/dashboard.transaksi', [
            "title" => "Transaksi",
            'transaksi' => Transaksi::where('affiliate', auth()->user()->id)->paginate(8),
            'program' => Program::all(),
            'donatur' => Donatur::all()
            // 'donaturauto' => Donatur::select('nama_lengkap', 'id_donatur')->where('nama_lengkap', 'LIKE', "%{$query}%")
        ]);
    }

    public function autocomplete(Request $request)
    {
        $data = Program::select("id as value", "namaprogram as label")
            ->where('namaprogram', 'LIKE', '%' . $request->get('search') . '%')
            ->get();

        return response()->json($data);
    }

    public function viewsearchtransaksi(Request $request)
    {
        $query = Transaksi::query();


        if ($request->filled('myDate1') or  $request->filled('myDate2')) {
            $query = $query->wherebetween('tgldonasi', [$request->myDate1, $request->myDate2]);
        }
        if ($request->filled('valueprogram')) {
            $query = $query->where('program', $request->valueprogram);
        }
        if ($request->input('donatur') != "--Pilih Donatur--") {
            $query = $query->where('donatur', $request->donatur);
        }
        if ($request->filled('status')) {
            $query = $query->where('statuspembyaran', $request->status);
        }
        return view('/dashboard.transaksi', [
            "title" => "Transaksi",
            'transaksi' => $query
                ->where('affiliate', auth()->user()->id)->paginate(2)->appends($request->all()),

            'program' => Program::all(),
            'donatur' => Donatur::all()
        ]);
    }
}
