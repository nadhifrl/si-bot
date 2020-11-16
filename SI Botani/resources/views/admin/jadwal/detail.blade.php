@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Jadwal</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Detail Info</li>
            </ol>
            <div class="col-xl-30 col-md-30 mx-auto" style="margin-top: 30px;">
                <div class="container" style="margin-left: -23px;">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-black-30 mb-0">{{$jadwal->jadwal}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-left:px">
                <a href="{{route('jadwal.index')}}" class="btn btn-info" style="margin-top: 20px">Kembali</a>
            </div>
        </div>

</div>


</main>
</div>

@endsection