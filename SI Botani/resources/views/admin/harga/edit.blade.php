@extends('layouts.admin')
@push('customcss')
<link rel="stylesheet" href="{{ asset('developer/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endpush
@section('content')
<!-- Default box -->



<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Harga Tiket</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Mengedit</li>
            </ol>
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <form action="{{route('harga.update',$harga->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>Harga Tiket</label>
                        <input type="text" class="form-control" name="harga" placeholder="Isi Harga Tiket" value="{!! $harga->harga !!}" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('harga.index') }}" class="btn btn-danger">Batal</a>
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