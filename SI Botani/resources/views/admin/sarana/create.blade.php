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
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Judul">
            @error('judul')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label>Gambar</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
            @error('gambar')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label>Informasi Sarana</label>
            <textarea name="body" class="@error('body') is-invalid @enderror" placeholder="Place some text here" style="width: 100%; height: 200px;  line-height: 18px; border: 1px solid #dddddd;">
            </textarea>
            @error('body')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Tambah Informasi Sarana</button>
            <a href="{{route('sarana.index')}}" class="btn btn-danger">Batal</a>
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