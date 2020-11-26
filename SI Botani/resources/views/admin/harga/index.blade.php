@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Harga Tiket</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Harga Tiket</li>
            </ol>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Harga Tiket</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($harga as $item)
                        <tr>
                            <td>
                                Rp. {{$item->harga}}
                            </td>
                            <td>
                                <a href="{{ route('harga.edit',$item->id) }}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
</div>
</div>
</div>

@endsection