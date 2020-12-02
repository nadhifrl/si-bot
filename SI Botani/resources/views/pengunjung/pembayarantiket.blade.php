<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Si-Bot</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="coba/css/styles.css" rel="stylesheet" />

    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 8px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <div style="font-family: Brush Script MT"> <a class="navbar-brand js-scroll-trigger" href="/pengunjung"><img src="img/Logo-Botani-1.png" width="80px" height:"80px" style="margin-left:-70px"></a></div>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/informasi">Informasi dan Sarana</a></li>
                    <div class="dropdown">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger">Tiket</a></li>
                        <div class="dropdown-content">
                            <a href="{{route('pemesanantiket.index')}}">Pemesanan Tiket</a>
                            <hr>
                            <a href="{{route('pembayarantiket.index')}}">Pembayaran Tiket</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="nav-item nav-link js-scroll-trigger">Detail Tiket</li>
                        <div class="dropdown-content">
                            <a href="{{route('detailpemesanantiket.index')}}">Detail Pemesanan Tiket</a>
                            <hr>
                            <a href="{{route('detailpembayarantiket.index')}}">Detail Pembayaran Tiket</a>
                        </div>
                    </div>
                    <li class="sidebar-nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->

    <!-- About-->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase"><a href="#tiket"> Pembayaran TIket</a></h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5"></h2>
            </div>
        </div>
    </header>
    <!-- Projects-->

    <!-- Signup-->

    <section class="projects-section bg-black" id="tiket">
        @if(!empty($pembayarantiket))
        <div class="container">
            <div class="row justify-content-center no-gutters  ">
                <div class="col-md-1 col-lg-8 mx-auto">
                    <div class="card bg-white">
                        <div class="card-header mb-0">
                            <h5 class="text-center font-weight-bold text-primary">Tiket Pesanan</h5>
                        </div>
                        <div class="card-body">
                            <form style="margin-left:10px;margin-top:10px">
                                @if (session('status'))
                                <div class="alert alert-danger">
                                    {{ session('status')}}
                                </div>
                                @endif
                                <div class="form-group  col-md-11">
                                    <label>Nama</label>
                                    <label class=" form-control form-group">{{$pembayarantiket->namapemesan}}</label>
                                </div>
                                <div class="form-group  col-md-4">
                                    <label>Nomor Telepon</label>
                                    <label class="form-control form-group ">{{$pembayarantiket->nomortelepon}}</label>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Alamat</label>
                                    <textarea class="form-control form-group  " readonly>{{$pembayarantiket->alamat}}</textarea>
                                </div>
                                <div class="form-group col-md-5">
                                    <label>Tanggal Pemakaian Tiket</label>
                                    <label class="form-control form-group ">{{$pembayarantiket->tanggalpembelian}}</label>
                                </div>
                                <table class="table form-group col-md-9" style="margin-left: 15px;">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Jumlah Tiket</th>
                                            <th scope="col">Total Pembayaran</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$pembayarantiket->jumlahtiket}}</td>
                                            <td>Rp. {{number_format($pembayarantiket->totalharga, 0, ',', '.')}}</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </form>

                            <button type="submit" class="btn btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:25px">Batalkan Pesanan</button>


                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin membatalkan pesanan anda?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('pembayarantiket.destroy',$pembayarantiket->id) }}" method="post" class="form-group">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-primary">IYA</button>
                                            </form>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">TIDAK</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row justify-content-center no-gutters  " style="margin-top:40px;">
            <form action="{{route('pembayarantiket.store',$pembayarantiket->id)}}" enctype="multipart/form-data" method="POST">
                @method('POST')
                @csrf
                <div class="col-md-1 col-lg-6 mx-auto">
                    <div class="card bg-white">
                        <div class="card-header mb-0">
                            <h5 class="text-center font-weight-bold text-primary">Melakukan Pembayaran</h5>
                        </div>
                        <div class="card-body">
                            <form style="margin-left:30px;margin-top:10px">
                                <div class="row align-items-end" style="margin-left:10px;">
                                    <div class="col-md-11" style="margin-top:10px">
                                        <!-- <label>ID</label> -->
                                        <input type="text" class="form-control" name="pemesanantiket_id" value="{{$pembayarantiket->id}}" required hidden>
                                    </div>
                                    <div class=" col-md-6">
                                        <label>Bank Tujuan</label>
                                        <br>
                                        <select name="bank">
                                            <option value='Mandiri-Si Bot-1430005516248'>Mandiri-Si Bot-1430005516248</option>
                                            <option value='BCA-Si Bot-408999872778'>BCA-Si Bot-408999872778</option>
                                        </select>
                                    </div>
                                    <div class="col-md-11" style="margin-top:10px">
                                        <label>Nama Rekening Pengirim</label>
                                        <input type="text" class="form-control" name="namarekeningpengirim" required>
                                    </div>
                                    <div class=" col-md-6" style="margin-top:10px">
                                        <label>No. Rekening Pengirim</label>
                                        <input type="number" class="form-control" name="nomorrekening" required>
                                    </div>
                                    <div class="col-md-10" style="margin-top:15px">
                                        <label>Gambar</label>
                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" required>
                                        @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div style="margin-top:20px;margin-left:15px">
                                        <button type="submit" class="btn btn-primary">Bayar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @endif
    </section>




    <!-- Footer-->
    <section class="signup-section text-center" id="signup">
        <h1 class="text-white mb-10" style="font-size:70px">INFO TENTANG KAMI</h1>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Alamat</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">Jalan Mujahir, Sukorambi, Krajan, Sukorambi, Kec. Sukorambi, Kabupaten Jember, Jawa Timur 68151</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="mailto:info@tamanbotanisukorambi.com">info@tamanbotanisukorambi.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Telepon</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">0851-0070-7600</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container">Copyright © Your Website 2020</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="coba/js/scripts.js"></script>
</body>

</html>