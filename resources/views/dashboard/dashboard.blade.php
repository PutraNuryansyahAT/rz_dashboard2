@extends('layout.header')

@section('maincontent')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // pie chart
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart1);

    function drawChart1() {

        var data = google.visualization.arrayToDataTable([
            ['Total Progam yang bertransaksi ', 'Program'],
            <?php echo $diagramprog ?>
        ]);

        var options = {
            title: 'Program'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
    // static chart
    google.charts.setOnLoadCallback(drawChart2);

    function drawChart2() {
        var data = google.visualization.arrayToDataTable([
            ['Tahun', 'Total Transaksi', 'Total Fee'],
            <?php echo $diagramfeetotal ?>
        ]);

        var options = {
            title: 'Statistik Pencapaian Amil',
            curveType: 'function',
            legend: {
                position: 'bottom'
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
    // Digaram chart
    google.charts.setOnLoadCallback(drawChart3);

    function drawChart3() {
        var data = google.visualization.arrayToDataTable([
            ['Metode Pembayaran', 'Jumlah'],
            <?php echo $diagrammetode ?>

        ]);
        var options = {
            title: "Metode Pembayaran3",

            bar: {
                groupWidth: "95%"
            },
            legend: {
                position: "none"
            },
        };

        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(data, options);
    }
</script>
</script>
<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Dashboard
        </h2>
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total Donatur
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{ $total_donatur }}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total Transaksi
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{ $banyak_transaksi}}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total Nominal Transaksi
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        Rp. {{ number_format($total_transaksi_nominal->total_nominal, 2, ',', '.');}}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total Fee Transaksi
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        Rp. {{ number_format($total_fee_transaksi, 2, ',', '.'); }}
                    </p>
                </div>
            </div>


        </div>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <form action="/search" method="get">
                <div class="p-3">
                    @csrf
                    Tanggal Donasi :
                    <input type="date" name="myDate1" placeholder="MM/DD/YYYY" onfocus="(this.type='date')" onblur="(this.type='text' )" class="form-input w-20">

                    -
                    <input type="date" name="myDate2" placeholder="MM/DD/YYYY" onfocus="(this.type='date')" onblur="(this.type='text' )" class="form-input w-20">
                    <button class="px-6 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-md active:bg-orange-500 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" type="submit">
                        Search
                    </button>
                </div>
            </form>
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
                        {{ $dashboards->nama_program}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        Rp.{{ number_format($dashboards->total_transaksi, 2, ',', '.');}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        Rp.{{ number_format($dashboards->total_fee, 2, ',', '.');}}
                    </td>

                    @endforeach
                </tr>
            </table>
        </div>
        <div class="w-full mb-8 overflow-hidden rounded-lg ">
            <div class="grid gap-6 mb-8 md:grid-cols-2">
                <!-- Pie Chart -->
                <div class="flex justify-center items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div id="piechart"></div>
                </div>
                <!-- Line Chart -->
                <div class="flex justify-center items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div id="curve_chart"></div>
                </div>

                <div class="flex justify-center items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div id="columnchart_values"></div>
                </div>

            </div>

        </div>
</main>
@endsection