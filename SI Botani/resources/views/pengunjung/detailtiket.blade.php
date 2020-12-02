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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('detailtiket.index')}}">Detail Tiket</a></li>
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
                <h1 class="mx-auto my-0 text-uppercase"><a href="#tiket">Detail Tiket</a></h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5"></h2>
            </div>
        </div>
    </header>
    <!-- Projects-->

    <!-- Signup-->
    <section class="projects-section bg-white" id="tiket">

        <!-- <table class="table col-lg-11" style="margin-left: 60px;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Pembelian</th>
                    <th scope="col">Jumlah Tiket</th>
                    <th scope="col">Total Pembayaran</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detailtiket as $item)
                <tr>
                    <th>{{( $loop->iteration)}}</th>
                    <td>{{$item->status}}</td>
                    <td><a href="{{route('lihatdatatiket.show',$item->id)}}">Lihat Data</a>
                        @if($item->status == 'Sukses')
                        <p class="d-inline">|</p>
                        <div style=" margin-top: 5px;" class="d-inline">
                            <a href="{{route('cetaktiket.show',$item->id)}}" target="_blank"><i class="fas fa-print"></i> Cetak Data</a>
                        </div>
                        @endif
                    </td>


                </tr>
                @endforeach
            </tbody>

        </table> -->
        <table class="table col-lg-11" style="margin-left: 60px;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Bank</th>
                    <th scope="col">Nama Rekening</th>
                    <th scope="col">Nomor Rekening</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detailtiket as $item)
                <tr>
                    <td>{{( $loop->iteration)}}</td>
                    <td style="margin-right:auto"><img src="{{asset('uploads/'.$item->gambar)}}" width="50px" height="50px"></td>
                    <td>{{$item->bank}}</td>

                    <td>{{str_limit($item->namarekeningpengirim, 20, '...')}}</td>
                    <td>{{str_limit($item->nomorrekening, 10, '...')}}</td>
                    <td>{{$item->status}}</td>



                    <td><a href="{{route('lihatdatatiket.show',$item->pemesanantiket_id)}}">Lihat Data</a>
                        @if($item->status == 'Sukses')
                        <p class="d-inline">|</p>
                        <div style=" margin-top: 5px;" class="d-inline">
                            <a href="{{route('cetaktiket.show',$item->pemesanantiket_id)}}" target="_blank"><i class="fas fa-print"></i> Cetak Data</a>
                        </div>
                        @endif
                    </td>


                </tr>
                @endforeach
            </tbody>

        </table>


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
    <script src="coba/js/jquery.js"></script>
    <script type="text/javascript">
        $("#volume").keyup(function() {
            total = $("#volume").val() * $("#harga").val();
            $("#jumlah").val(total);
        });

        $("#harga").keyup(function() {
            total = $("#volume").val() * $("#harga").val();
            $("#jumlah").val(total);
        });
    </script>
</body>

</html>