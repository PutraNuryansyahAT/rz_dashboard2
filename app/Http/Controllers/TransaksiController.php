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
        return view('/dashboard.transaksi', [
            "title" => "Transaksi",
            'transaksi' => Transaksi::where('affiliate', auth()->user()->id)->get(),
            'program' => Program::all(),
            'donatur' => Donatur::all()
            // 'donaturauto' => Donatur::select('nama_lengkap', 'id_donatur')->where('nama_lengkap', 'LIKE', "%{$query}%")
        ]);
    }

    function fetch(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = Donatur::select('nama_lengkap', 'id_donatur')->where('nama_lengkap', 'LIKE', "%{$query}%")->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">';
            foreach ($data as $row) {
                $output .= '
                <li><a class="dropdown-item" href="#">' . $row->nama_lengkap . '</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

    public function viewsearchtransaksi(Request $request)
    {
        return view('/dashboard.transaksi', [
            "title" => "Transaksi",
            'transaksi' => Transaksi::wherebetween('tgldonasi', [$request->myDate1, $request->myDate2])
                ->orwhere('donatur', $request->namadonatur)
                ->orwhere('program', $request->program)
                ->orwhere('statuspembyaran', $request->status)
                ->where('affiliate',  auth()->user()->id)->get(),
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
