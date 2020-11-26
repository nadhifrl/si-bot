@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Laporan Pembelian Tiket</h1>
            <ol class="breadcrumb mb-4" style="margin-top:30px">
                <li class="breadcrumb-item active">History Pembayaran</li>
            </ol>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">

                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Bank</th>
                            <th scope="col">Nama Rekening</th>
                            <th scope="col">Nomor Rekening</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembayaran as $item)
                        <tr>
                            <td>{{( $loop->iteration)}}</td>
                            <td>{{$item->name}}</td>
                            <td><img src="{{asset('uploads/'.$item->gambar)}}" width="50px" height="50px"></td>
                            <td>{{$item->bank}}</td>

                            <td>{{str_limit($item->namarekeningpengirim, 10, '...')}}</td>
                            <td>{{$item->nomorrekening}}</td>
                            <td>{{$item->status}}</td>

                            <td>

                                <a href="{{route('laporanpembayaran.show',$item->id)}}">
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