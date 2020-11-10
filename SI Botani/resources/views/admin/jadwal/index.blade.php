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
          <th>No</th>
          <th>Jadwal</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($jadwal as $item)
                <tr>
                    <td>{{($loop->iteration)}}</td>
                    <td>
                        {{$item->jadwal}}
                    </td>
                    <td>
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
