@extends('layouts.admin')
@section('content')
 <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Sarana</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Menambahkan</li>
                    </ol>
                     <div class="box-header">
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
    <form action="{{route('sarana.store')}}" enctype="multipart/form-data" method="POST">
        @method('POST')
        @csrf
        <div class="form-group">
          <label>Judul</label>
          <input type="text" class="form-control" name="judul" placeholder="Judul" required>
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" class="form-control" name="gambar" required>
        </div>

        <div class="form-group">
          <label>Informasi Sarana</label>
           <textarea name="body"  placeholder="Place some text here"
                style="width: 100%; height: 200px;  line-height: 18px; border: 1px solid #dddddd;" required>
          </textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Tambah Artikel</button>
          <a href="{{route('sarana.index')}}" class="btn btn-danger">Kembali</a>
        </div>

      </form>
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
  <!-- /.box -->
  @endsection

