@extends('layouts.admin')
@push('customcss')
<link rel="stylesheet" href="{{ asset('developer/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endpush
@section('content')
<!-- Default box -->



<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Sarana</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Mengedit</li>
      </ol>
      <div class="box-header">
      </div>
      <!-- /.box-header -->
      <div class="box-body pad">
        <form action="{{route('sarana.update',$sarana->id)}}" enctype="multipart/form-data" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Judul" value="{{$sarana->judul}}">
            @error('judul')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label>Gambar </label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
            @error('gambar')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="form-group">
            <label>Informasi Sarana</label>
            <textarea name="body" class="@error('judul') is-invalid @enderror" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
          {!! $sarana->body !!}
            </textarea>
            @error('body')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
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
@push('customdatatables')
<script src="{{asset('developer/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script>
  $(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
@endpush