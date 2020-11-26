@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Verifikasi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Detail Tiket Pesanan</li>
            </ol>
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
                                    <h1 style="text-align: center;">Gambar</h1>
                                    <img class="img-fluid mb-5 mb-lg-0" style="margin-top:30px" src="{{asset('uploads/'.$pembayaran->gambar)}}" alt="" />
                                </div>
                                <div style="margin-left:30px">
                                    <a href="{{route('laporanpembayaran.index')}}" class="btn btn-info" style="margin-top: 20px">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <br>
</div>


</main>
</div>

@endsection