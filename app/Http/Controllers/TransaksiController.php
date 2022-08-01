<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Program;
use App\Models\Donatur;
use App\Models\Amil;
use Illuminate\Http\Request;


class TransaksiController extends Controller
{
    public function viewtransaksi()

    {
        //query builder




        // $donatur = $query->where('donatur', 5);
        return view('/dashboard.transaksi', [
            "title" => "Transaksi",
            'transaksi' => Transaksi::where('id_amil', auth()->user()->id_amil)
                ->sortable()
                ->paginate(8),
            'program' => Program::all(),
            'donatur' => Donatur::all(),
            'amil' => Amil::all(),
            // 'donaturauto' => Donatur::select('nama_lengkap', 'id_donatur')->where('nama_lengkap', 'LIKE', "%{$query}%")
        ]);
    }

    public function autocomplete(Request $request)
    {
        $data = Program::select("id_program as value", "nama_program as label")
            ->where('nama_program', 'LIKE', '%' . $request->get('search') . '%')
            ->get();

        return response()->json($data);
    }

    public function viewsearchtransaksi(Request $request)
    {
        $query = Transaksi::query();

        if ($request->filled('myDate1') or  $request->filled('myDate2')) {
            $query = $query->wherebetween('date_transaksi', [$request->myDate1, $request->myDate2]);
        }
        if ($request->filled('valueprogram')) {
            $query = $query->where('id_program', $request->valueprogram);
        }
        if ($request->filled('search')) {
            $query = $query->where('id_donatur', $request->search)
                ->orwhere('no_hp', 'LIKE', '%' . $request->search . '%')
                ->orwhere('email', 'LIKE', '%' . $request->search . '%')
                ->orwhere('atasnama', 'LIKE', '%' . $request->search . '%');
        }
        if ($request->filled('status')) {
            $query = $query->where('status_pembayaran', $request->status);
        }
        return view('/dashboard.transaksi', [
            "title" => "Transaksi",
            'transaksi' => $query
                ->where('id_amil', auth()->user()->id_amil)->sortable()->paginate(5)->appends($request->all()),
            'program' => Program::all(),
            'donatur' => Donatur::all(),
            'amil' => Amil::all(),
        ]);
    }
}
