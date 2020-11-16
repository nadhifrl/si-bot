@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Sarana</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Detail Info</li>
            </ol>


            <div class="col-xl-6 col-lg-6">
                <div>
                    <h1>{{$sarana->judul}}</h1>
                    <hr>

                    <img class="img-fluid mb-5 mb-lg-0" src="{{asset('uploads/'.$sarana->gambar)}}" alt="" />
                    <div class="col-xl-60 col-md-90 mx-auto" style="margin-top: 30px;">
                        <div class="container" style="margin-left: -23px;">
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-black-30 mb-0">{{$sarana->body}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="{{route('sarana.index')}}" class="btn btn-info" style="margin-top: 10px">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

</div>
</main>
</div>

@endsection