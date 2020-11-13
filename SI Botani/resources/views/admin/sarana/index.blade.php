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
                       <a href="{{ route('sarana.create') }}" class="btn btn-info">Tambah Sarana</a>
                    </div>
                    <br>
                    <br>
                     <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Gambar</th>
          <th>Deskripsi</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
             @foreach ($sarana as $item)
            <tr>
                <td>{{( $loop->iteration)}}</td>
                <td>{{$item->judul}}</td>
                <td><img src="{{asset('uploads/'.$item->gambar)}}" width="50px" height="50px" ></td>
                <td>{{str_limit($item->body, 10, '...')}}</td>
                <td>
                    <a href="{{route('sarana.show',$item->id)}}" class="btn btn-success">Detail</a>
                    <a href="{{route('sarana.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                    <a href="javascript:void(0)" onclick="$(this).find('form').submit()" class="btn btn-danger">
                    <span class="fa fa-trash"></span>
                                <form action="{{ route('sarana.destroy',$item->id) }}" method="POST">
                                     @csrf
                                     @method('DELETE')
                                </form>



                                {{-- <form action="{{ route('sarana.destroy',$item->id) }}" method="post" class="d-inline">
                                     @method('delete')
                                     @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> --}}
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
