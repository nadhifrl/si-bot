@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Verifikasi Tiket</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Verifikasi</li>
            </ol>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="text-center">
                        <tr>

                            <th>No</th>
                            <th>Gambar</th>
                            <th>Bank</th>
                            <th>Nama Rekening</th>
                            <th>Nomor Rekening</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($verifikasi as $item)
                        <tr>
                            <td>{{( $loop->iteration)}}</td>
                            <td><img src="{{asset('uploads/'.$item->gambar)}}" width="50px" height="50px"></td>
                            <td>{{$item->bank}}</td>

                            <td>{{str_limit($item->namarekeningpengirim, 20, '...')}}</td>
                            <td>{{$item->nomorrekening}}</td>
                            @if(!empty($verifikasi))
                            <td>
                                <a href="{{route('sarana.edit',$item->id)}}">
                                    <button type="submit" class="btn btn-success">Detail</button>
                                </a>
                                <a href="{{route('verifikasi.edit',$item->id)}}" class="btn btn-primary">Verifikasi</a>
                                <!-- <form action="{{route('verifikasi.update',$item->id)}}" enctype="multipart/form-data" class="d-inline" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button type="submit" class="btn btn-primary " name="status">Verifikasi</button>
                                </form> -->
                            </td>
                            @endif
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