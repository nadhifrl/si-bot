@extends('layouts.admin')

@section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Jadwal</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Jadwal</li>
                    </ol>
                     <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th class="text-center">Jadwal</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($jadwal as $item)
                <tr>
                    <td>
                        {{str_limit($item->jadwal, 100, '...')}}
                    </td>
                    <td>
                    <a href="{{route('jadwal.show',$item->id)}}" class="btn btn-success">Detail</a>
                    <a href="{{ route('jadwal.edit',$item->id) }}" class="btn btn-info">Edit</a>
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
