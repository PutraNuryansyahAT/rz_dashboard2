@extends('layout.header')
@section('maincontent')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Donatur
        </h2>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <form action="/searchdonatur" method="get">
                @csrf
                <!-- search bar -->
                <div class="p-3 ">
                    <div class="relative">
                        <input class="block md:w-50 pl-20 mt-1 ml-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Type Here" name="searchdonatur" type="text" />
                        <button class="absolute inset-y-0 px-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-l-md active:bg-orange-200 hover:bg-orange-500 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" type="submit">
                            Search
                        </button>
                    </div>
                </div>
                <div class="w-full overflow-x-auto">
            </form>


            <!-- TABLE -->
            <table class="w-full whitespace-no-wrap ">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b  bg-gray-500  ">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">ID Donatur</th>
                        <th class="px-4 py-3">Nama Lengkap</th>
                        <th class="px-4 py-3">Hp</th>
                        <th class="px-4 py-3">Email</th>
                    </tr>
                </thead>

                <!-- isi tabel -->
                @foreach ( $donatur as $donaturs )
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-sm">
                        {{$loop -> iteration}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $donaturs->id }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $donaturs->nama}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $donaturs->nomorhp }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $donaturs->email }}
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