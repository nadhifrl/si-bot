@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Memverifikasi Data Pembayaran Tiket</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Verifikasi</li>
            </ol>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="text-center">
                        <tr>

                            <th>No</th>
                            <th>Nama Pengunjung</th>
                            <th>Gambar</th>
                            <th>Bank</th>
                            <th>Nama Rekening</th>
                            <th>Nomor Rekening</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($verifikasi as $item)
                        <tr>
                            <td>{{( $loop->iteration)}}</td>
                            <td>{{$item->name}}</td>
                            <td><img src="{{asset('uploads/'.$item->gambar)}}" width="50px" height="50px"></td>
                            <td>{{$item->bank}}</td>

                            <td>{{str_limit($item->namarekeningpengirim, 10, '...')}}</td>
                            <td>{{$item->nomorrekening}}</td>
                            <td>{{$item->status}}</td>

                            <td>

                                <a href="{{route('verifikasi.show',$item->id)}}">
                                    <button type="submit" class="btn btn-success">Detail</button>
                                </a>
                                @if($item->status == 'Proses')
                                <a href="{{route('verifikasi.edit',$item->id)}}" class="btn btn-primary">Verifikasi</a>
                                @endif
                                <!-- <form action="{{route('verifikasi.update',$item->id)}}" enctype="multipart/form-data" class="d-inline" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button type="submit" class="btn btn-primary " name="status">Verifikasi</button>
                                </form> -->
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
</div>
</div>
</div>

@endsection