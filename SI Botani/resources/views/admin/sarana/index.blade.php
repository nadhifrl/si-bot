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
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                    <td></td>
                    <td></td>
                    <td><img src="" width="50px" height="50px" ></td>
                    <td>
                        <a href="" class="btn btn-info">Edit</a>

                        <a href="" class="btn btn-danger">
                          <span class="fa fa-trash"></span>
                                <form action="" method="POST">

                                     @method('DELETE')
                                </form>
                         </td>
                </tr>


        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
                </div>
            </div>
        </div>

@endsection
