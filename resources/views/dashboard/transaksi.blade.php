@extends('layout.header')
@section('maincontent')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Transaksi
        </h2>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <form action="/searchtransaksi" method="get">
                @csrf
                <!-- Date Bar -->
                <div class="p-3">
                    Periode Transaksi :
                    <input type="date" name="myDate1" class="form-input">
                    -
                    <input type="date" name="myDate2" class="form-input">
                </div>
                <!-- Nama Donatur bar -->
                <div class="p-3 ">
                    Nama Donatur
                    <div class="relative">
                        <label class="block text-sm">
                            <select class="block w-64 mt-1 text-sm ml-16 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple " name="namadonatur">
                                <option class="text-gray-500">--Nama Donatur--</option>
                                @foreach ($donatur as $donaturs )
                                <option value='{{$donaturs->id_donatur }}'> {{ $donaturs->nama_lengkap  }}</option>
                                @endforeach
                            </select>
                        </label>
                        <button class="absolute inset-y-0 px-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-l-md active:bg-orange-200 hover:bg-orange-500 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" type="submit">
                            Search
                        </button>
                    </div>
                    <label class="text-sm">
                        <select class="block w-64 mt-1 text-sm ml-16 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple " name="program">
                            <option class="text-gray-500">--Program--</option>
                            @foreach ($program as $programs )
                            <option value='{{$programs->id }}'> {{ $programs->namaprogram  }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                <div class="flex p-3 border rounded-md  bg-gray-200">
                    <label class=" inline-flex items-center text-gray-600 dark:text-gray-400">
                        <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="status" value="Success" />
                        <span class="ml-2">Success</span>
                    </label>
                    <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                        <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="status" value="Pending" />
                        <span class="ml-2">Pending</span>
                    </label>
                </div>
                <div class="w-full overflow-x-auto">
            </form>


            <!-- TABLE -->
            <table class="w-full whitespace-no-wrap ">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b  bg-gray-500  ">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Tgl Donasi</th>
                        <th class="px-4 py-3">Status Donatur</th>
                        <th class="px-4 py-3">Donatur</th>
                        <th class="px-4 py-3">Hp</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Atas Nama</th>
                        <th class="px-4 py-3">Program</th>
                        <th class="px-4 py-3">Nominal</th>
                        <th class="px-4 py-3">Affiliate</th>
                        <th class="px-4 py-3">Status Pembayaran</th>
                    </tr>
                </thead>

                <!-- isi tabel -->
                @foreach ( $transaksi as $transaksis )
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-sm">
                        {{$loop -> iteration}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->tgldonasi }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->statusdonasi}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->donatur}} -

                        @foreach ($donatur as $donaturs )
                        @if($donaturs->id_donatur == $transaksis->donatur)

                        {{ $donaturs->nama_lengkap }}

                        @endif

                        @endforeach
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->hp }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->email }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->atasnama }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->program}} -
                        @foreach ($program as $programs )
                        @if($programs->id == $transaksis->program)

                        {{ $programs->namaprogram }}

                        @endif

                        @endforeach
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->nominal}},00
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->affiliate }} - {{auth()->user()->name}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->statuspembyaran}}
                    </td>
                    @endforeach
                </tr>



            </table>
        </div>


        <!-- showing list -->

    </div>
    </div>
</main>
@endsection