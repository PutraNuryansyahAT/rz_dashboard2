@extends('layout.header')
@section('maincontent')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Transaksi
        </h2>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs p-5">
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

                    <div class="relative">
                        <label class="block text-sm">
                            <input class="block w-70 mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="--Nama Donatur--" type="text" name="nama" id="search" />
                            <input type="hidden" id="valBox" name="namadonatur" />
                        </label>
                        <script type="text/javascript">
                            var path = "{{ route('autocomplete') }}";
                            $("#search").autocomplete({
                                source: function(request, response) {
                                    $.ajax({
                                        url: path,
                                        type: 'GET',
                                        dataType: "json",
                                        data: {
                                            search: request.term
                                        },
                                        success: function(data) {
                                            response(data);
                                        }
                                    });
                                },
                                select: function(event, ui) {
                                    $('#search').val(ui.item.label);
                                    $('#valBox').val(ui.item.value);
                                    console.log(ui.item);
                                    return false;
                                }
                            });
                        </script>

                    </div>

                    <label class="text-sm">
                        <select class="block w-64 mt-1 text-sm  form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple " name="program">
                            <option class="text-gray-500">--Program--</option>
                            @foreach ($program as $programs )
                            <option value='{{$programs->id }}'> {{ $programs->namaprogram  }}</option>
                            @endforeach
                        </select>
                    </label>
                    <button class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-md active:bg-orange-500 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" type="submit">
                        Search
                    </button>
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
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            <div class="flex-1 flex justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Previous </a>
                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Next </a>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Showing
                        <span class="font-medium">1</span>
                        to
                        <span class="font-medium">10</span>
                        of
                        <span class="font-medium">97</span>
                        results
                    </p>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Previous</span>
                            <!-- Heroicon name: solid/chevron-left -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                        <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 1 </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 2 </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium"> 3 </a>
                        <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700"> ... </span>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium"> 8 </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 9 </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 10 </a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Next</span>
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <div>

        </div>

    </div>


</main>
@endsection