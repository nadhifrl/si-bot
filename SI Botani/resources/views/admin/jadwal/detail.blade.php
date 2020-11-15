@extends('layouts.admin')

@section('content')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Jadwal</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Detail Info</li>
                    </ol>


                <div class="col-xl-5 col-lg-5" ">
           <textarea  cols="40" rows="5">{{$jadwal->jadwal}}</textarea>
      <a href="{{route('jadwal.index')}}" class="btn btn-info" style="margin-top: 20px">Kembali</a>
             </div>
            </div>

    </div>


            </main>
</div>

@endsection
