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
        $query =  Transaksi::query();
        // $donatur = $query->where('donatur', 5);
        return view('/dashboard.transaksi', [
            "title" => "Transaksi",
            'transaksi' => $query->where('affiliate', auth()->user()->id)->get(),
            'program' => Program::all(),
            'donatur' => Donatur::all()
            // 'donaturauto' => Donatur::select('nama_lengkap', 'id_donatur')->where('nama_lengkap', 'LIKE', "%{$query}%")
        ]);
    }

    public function autocomplete(Request $request)
    {
        $data = donatur::select("id_donatur as value", "nama_lengkap as label")
            ->where('nama_lengkap', 'LIKE', '%' . $request->get('search') . '%')
            ->get();

        return response()->json($data);
    }

    public function viewsearchtransaksi(Request $request)
    {
        $query = Transaksi::query();

        if ($request->filled('myDate1') or  $request->filled('myDate2')) {
            $query = $query->wherebetween('tgldonasi', [$request->myDate1, $request->myDate2]);
        }
        if ($request->filled('namadonatur')) {
            $query = $query->where('donatur', $request->namadonatur);
        }
        if ($request->input('program') != "--Program--") {
            $query = $query->where('program', $request->program);
        }
        if ($request->filled('status')) {
            $query = $query = $query->where('statuspembyaran', $request->status);
        }
        return view('/dashboard.transaksi', [
            "title" => "Transaksi",
            'transaksi' => $query
                ->where('affiliate', auth()->user()->id)->get(),
            'program' => Program::all(),
            'donatur' => Donatur::all()
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
