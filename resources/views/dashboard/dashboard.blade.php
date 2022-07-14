@extends('layout.header')
@section('maincontent')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Dashboard
        </h2>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <table class="w-full whitespace-no-wrap ">

                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b  bg-gray-500  ">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Program</th>
                        <th class="px-4 py-3">Total Transaksi</th>
                        <th class="px-4 py-3">Total Fee</th>
                    </tr>
                </thead>
                @foreach ( $dashboard as $dashboards )
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-sm">
                        {{$loop -> iteration}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $dashboards->namaprogram}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $dashboards->total_transaksi}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $dashboards->total_fee }}
                    </td>

                    @endforeach
                </tr>



            </table>



        </div>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div id="grafik">

            </div>


        </div>
</main>



@endsection