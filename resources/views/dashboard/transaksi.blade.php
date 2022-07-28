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
                    Tanggal Donasi :
                    <input type="date" name="myDate1" class="form-input">
                    -
                    <input type="date" name="myDate2" class="form-input">
                </div>
                <!-- Nama Donatur bar -->
                <div class="p-3 ">
                    <label class="text-sm">
                        <select class="block w-64 mt-1 text-sm  form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple " name="donatur">
                            <option class="text-gray-500">--Pilih Donatur--</option>
                            @foreach ($donatur as $donaturs )
                            <option value='{{$donaturs->id_donatur }}'>{{$donaturs->id_donatur }} - {{ $donaturs->nama }}</option>
                            @endforeach
                        </select>
                    </label>
                    <div class="relative">
                        <label class="block text-sm">
                            <input class="block w-70 mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" placeholder="--Ketik Program--" type="text" name="namaprogram" id="search" />
                            <input type="hidden" id="valBox" name="valueprogram" />
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
                    <br>
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
                        <th class="px-4 py-3">@sortablelink('date_transaksi','Tgl Transaksi') </th>
                        <th class="px-4 py-3">Donatur</th>
                        <th class="px-4 py-3">Atas Nama</th>
                        <th class="px-4 py-3">Hp</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Program</th>
                        <th class="px-4 py-3">Nominal</th>
                        <th class="px-4 py-3">Affiliator </th>
                        <th class="px-4 py-3">Metode Pembayaran</th>
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
                        {{ $transaksis->date_transaksi }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->id_donatur}} -

                        @foreach ($donatur as $donaturs )
                        @if($donaturs->id_donatur == $transaksis->id_donatur)

                        {{ $donaturs->nama }}

                        @endif

                        @endforeach
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->atasnama }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->no_hp }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->email }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->id_program}} -
                        @foreach ($program as $programs )
                        @if($programs->id_program == $transaksis->id_program)

                        {{ $programs->nama_program }}

                        @endif

                        @endforeach
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->nominal}},00
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->id_amil }} -
                        @foreach ($amil as $amils )
                        @if($amils->id_amil == $transaksis->id_amil)
                        {{ $amils->nama_lengkap }}

                        @endif

                        @endforeach
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->metode_pembayaran}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $transaksis->status_pembayaran}}
                    </td>

                    @endforeach
                </tr>

            </table>

        </div>
        <br>
        {{ $transaksi->links('layout.layoutpagenation') }}

        <!-- showing list -->

        <div>

        </div>

    </div>


</main>
@endsection