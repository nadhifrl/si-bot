@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Laporan Pemesanan</h1>
            <ol class="breadcrumb mb-4" style="margin-top:30px">
                <li class="breadcrumb-item active">History Pemesanan</li>
            </ol>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">

                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tanggal Pembelian</th>
                            <th scope="col">Jumlah Tiket</th>
                            <th scope="col">Total Pembayaran</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemesanan as $item)
                        <tr>
                            <th>{{( $loop->iteration)}}</th>
                            <td>{{str_limit($item->name, 10, '...')}}</td>
                            <td>{{str_limit($item->namapemesan, 10, '...')}}</td>
                            <td>{{str_limit($item->nomortelepon, 6, '...')}}</td>
                            <td>{{str_limit($item->alamat, 6, '...')}}</td>
                            <td>{{$item->tanggalpembelian}}</td>
                            <td>{{$item->jumlahtiket}}</td>
                            <td>{{$item->totalharga}}</td>
                            <td>{{$item->status}}</td>
                            <td>

                                <a href="{{route('laporanpemesanan.show',$item->id)}}">
                                    <button type="submit" class="btn btn-success">Detail</button>
                                </a>
                            </td>


                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
</div>
</main>
</div>

@endsection