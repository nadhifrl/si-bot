@extends('layouts.admin')

@section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Sarana</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Detail Info</li>
                    </ol>

      <div class="row align-items-center no-gutters mb-4 mb-lg-5" style="margin-top: 70px">
                <div class="col-xl-5 col-lg-7">
                    <img class="img-fluid mb-3 mb-lg-0" src="{{asset('uploads/'.$sarana->gambar)}}" alt="" />
                    <a href="{{route('sarana.index')}}" class="btn btn-info" style="margin-top: 20px">Kembali</a>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div style="margin-left:20px;margin-top:-180px">
                        <h1>{{$sarana->judul}}</h1>
                        <hr>
                        <textarea >{{$sarana->body}}</textarea>
                    </div>
                </div>
            </div>

    </div>
            </main>
</div>

@endsection
