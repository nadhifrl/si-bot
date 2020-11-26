@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Verifikasi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Detail Tiket Pesanan</li>
            </ol>
            <!-- <div class="container">
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
                                        <label class=" form-control form-group">{{$pemesanan->name}}</label>
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
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->
            <div class="col-md-1 col-lg-8 mx-auto" style="margin-top:50px">
                <div class="card bg-white">
                    <div class="card-header mb-0">
                        <h5 class="text-center font-weight-bold text-primary">Detail Pembayaran Tiket</h5>
                    </div>
                    <div class="card-body">
                        <form style="margin-left:30px;margin-top:10px">
                            <div class="row align-items-end" style="margin-left:10px;">
                                <div class="col-md-11" style="margin-top:10px">
                                    <!-- <label>ID</label> -->
                                    <input type="text" class="form-control" name="pemesanantiket_id" value="" required hidden>
                                </div>
                                <div class=" col-md-7">
                                    <label>Bank Tujuan</label>
                                    <label type="text" class="form-control" name="namarekeningpengirim" required>{{$pembayaran->bank}}</label>
                                </div>
                                <div class="col-md-11" style="margin-top:10px">
                                    <label>Nama Rekening Pengirim</label>
                                    <label type="text" class="form-control" name="namarekeningpengirim" required>{{$pembayaran->namarekeningpengirim}}</label>
                                </div>
                                <div class=" col-md-6" style="margin-top:10px">
                                    <label>No. Rekening Pengirim</label>
                                    <label type="text" class="form-control" name="namarekeningpengirim" required>{{$pembayaran->nomorrekening}}</label>
                                </div>
                                <div class="col-md-10" style="margin-top:15px">
                                    <label>Gambar</label>
                                    <img class="img-fluid mb-5 mb-lg-0" src="{{asset('uploads/'.$pembayaran->gambar)}}" alt="" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div style="margin-left:30px">
                <a href="{{route('verifikasi.index')}}" class="btn btn-info" style="margin-top: 30px">Kembali</a>
            </div>
        </div>
        <br>
</div>


</main>
</div>

@endsection