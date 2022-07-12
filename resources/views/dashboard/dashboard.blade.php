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
                @foreach ( $program as $programs )
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-sm">
                        {{$loop -> iteration}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $programs->program }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $programs->total_transaksi}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $programs->total_fee }}
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

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var total_transaksi = <?php echo json_encode($total_transaksi) ?>;
    var total_fee = <?php echo json_encode($total_fee) ?>;

    var judul = <?php echo json_encode($title) ?>;

    Highcharts.chart('grafik', {
        title: {
            text: "Grafik Total Transaksi"
        },
        xAxis: {
            categories: judul
        },
        yAxis: {
            title: {
                text: "Nominal Transaksi"
            }
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Total Tranaski',
            data: total_transaksi
        }, {
            name: 'Total Fee',
            data: total_fee
        }],

    });
</script>

@endsection