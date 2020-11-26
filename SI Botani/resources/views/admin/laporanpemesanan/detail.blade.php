@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">History Pemesanan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Detail Tiket Pesanan</li>
            </ol>
            <div class="container">
                <div class="row justify-content-center no-gutters  ">
                    <div class="col-md-1 col-lg-10 mx-auto">
                        <div class="card bg-white">
                            <div class="card-header mb-0">
                                <h5 class="text-center font-weight-bold text-primary">Detail Tiket Pesanan</h5>
                            </div>
                            <div class="card-body">
                                <form style="margin-left:10px;margin-top:10px">
                                    <div class="form-group  col-md-11">
                                        <label>Nama</label>
                                        <label class=" form-control form-group">{{$pemesanan->namapemesan}}</label>
                                    </div>
                                    <div class="form-group  col-md-4">
                                        <label>Nomor Telepon</label>
                                        <label class="form-control form-group ">{{$pemesanan->nomortelepon}}</label>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Alamat</label>
                                        <textarea class="form-control form-group  " readonly>{{$pemesanan->alamat}}</textarea>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label>Tanggal Pemakaian Tiket</label>
                                        <label class="form-control form-group ">{{$pemesanan->tanggalpembelian}}</label>
                                    </div>
                                    <table class="table form-group col-md-9" style="margin-left: 15px;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Jumlah Tiket</th>
                                                <th scope="col">Total Pembayaran</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$pemesanan->jumlahtiket}}</td>
                                                <td>Rp. {{number_format($pemesanan->totalharga, 0, ',', '.')}}</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <div style="margin-left:20px">
                                        <a href="{{route('laporanpemesanan.index')}}" class="btn btn-info">Kembali</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
</div>


</main>
</div>

@endsection