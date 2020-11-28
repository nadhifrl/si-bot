@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Lonjakan Pengunjung</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Lonjakan Pengunjung</li>
            </ol>
            <div class="row">
                <div class="col-xl-12" style="margin-left: auto; margin-right:auto">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="h5 mb-0 font-weight-bold text-capitalize text-gray-800">Bulan {{date('F', strtotime($month))}}</div>
                            <div class="text font-weight-bold text-success mt-3 text-uppercase mb-1">Total : {{$count}}</div>
                        </div>

                    </div>

                </div>
                <div class="col-xl-12" style="margin-left: auto; margin-right:auto">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="h5 mb-0 font-weight-bold text-capitalize text-gray-800">Bulan {{date('F', strtotime($month1))}}</div>
                            <div class="text font-weight-bold text-success mt-3 text-uppercase mb-1">Total : {{$count1}}</div>
                            Lonjakan Pengunjung
                        </div>

                    </div>

                </div>
                <div class="col-xl-12" style="margin-left: auto; margin-right:auto">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="h5 mb-0 font-weight-bold text-capitalize text-gray-800">Bulan {{date('F', strtotime($month2))}}</div>
                            <div class="text font-weight-bold text-success mt-3 text-uppercase mb-1">Total : {{$count2}}</div>
                            Lonjakan Pengunjung
                        </div>

                    </div>

                </div>
            </div>
        </div>
</div>

@endsection

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('lonjakan', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Lonjakan Pengunjung Tahun 2020'
        },
        xAxis: {
            categories: [
                //     'Januari',
                //     'Febuari',
                //     'Maret',
                //     'April',
                //     'Mai',
                //     'Juni',
                //     'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Pengunjung Membeli Tiket'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding: 0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Pembelian Tiket',
            data: [49.9, 71.5, 106.4, 129.2, 144.0]
        }]
    });
</script>
@endsection