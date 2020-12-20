@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Sarana</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Sarana</li>
      </ol>
      <div class="pull-right">
        <a href="{{ route('sarana.create') }}" class="btn btn-info">Tambah Informasi Sarana</a>
      </div>
      <br>
      <br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead class="text-center">
            <tr>

              <th>No</th>
              <th>Judul</th>
              <th>Gambar</th>
              <th>Informasi Sarana</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($sarana as $item)
            <tr>
              <td>{{( $loop->iteration)}}</td>
              <td>{{str_limit($item->judul, 20, '...')}}</td>
              <td><img src="{{asset('uploads/'.$item->gambar)}}" width="50px" height="50px"></td>
              <td>{{str_limit($item->body, 40, '...')}}</td>
              <td>
                <a href="{{route('sarana.show',$item->id)}}" class="btn btn-success">Detail</a>
                <a href="{{route('sarana.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                <!-- <a href="javascript:void(0)" onclick="$(this).find('form').submit()" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"> -->
                <button type="submit" class="btn btn btn-danger" data-toggle="modal" data-target="#exampleModal">Hapus</button>
                <!-- <form action="{{ route('sarana.destroy',$item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                  </form> -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapus data ini ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                      <div class="modal-footer">
                        <form action="{{ route('sarana.destroy',$item->id) }}" method="POST" class="d-inline">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-primary">IYA</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TIDAK</button>

                      </div>
                    </div>
                  </div>
                </div>

              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
</div>

@endsection