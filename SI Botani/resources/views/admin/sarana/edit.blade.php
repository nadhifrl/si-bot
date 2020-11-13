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
        <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{$sarana->judul}}" required>
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" class="form-control" name="gambar" >
        </div>

        <div class="form-group">
          <label>Informasi Sarana</label>
           <textarea name="body"  placeholder="Place some text here"
                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>
          {!! $sarana->body !!}
            </textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Edit Sarana</button>
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
  @push('customdatatables')
  <script src="{{asset('developer/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      //CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
  </script>
  @endpush
