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
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" >
            <div class="container">
            <div style="font-family: Brush Script MT"> <a class="navbar-brand js-scroll-trigger" href="/pengunjung" ><img src="img/Logo-Botani-1.png" width="80px" height:"80px" style="margin-left:-70px"></a></div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto" >
                    <li class="nav-item" ><a class="nav-link js-scroll-trigger" href="">Profil</a></li>
                        <li class="nav-item" ><a class="nav-link js-scroll-trigger" href="/mana">Informasi dan Sarana</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="">Beli Tiket</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="">Detail Tiket</a></li>
                        <li class="sidebar-nav-item">
        <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                     {{ __('Sign out') }}
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
       
        <!-- Projects-->
        <section class="profil-section" >
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-6 mx-auto">
                        <div class="card bg-white">
                            <div class="card-header mb-0"><h5 class="text-center font-weight-bold text-primary">Your Profile<span class="font-weight-bold text-primary"> Account</span></h5></div>
                                <div class="card-body">
                        <form>
                            <div class="form-group font-weight-bold text-primary">
                                <label>Username</label>
                                <label class="form-control form-group font-weight-bold text-primary ">{{$user->name}}</label>
                            </div>
                            <div class="form-group font-weight-bold text-primary">
                                <label>Email</label>
                                <label class="form-control form-group font-weight-bold text-primary "> {{$user->email}}</label>
                            </div>
                            <div class="form-group font-weight-bold text-primary">
                                <label>Alamat</label>
                                <label class="form-control form-group font-weight-bold text-primary ">{{$user->alamat}}</label>
                            </div>
                            <div class="form-group font-weight-bold text-primary">
                                <label>Nomor Telepon</label>
                                <label class="form-control form-group font-weight-bold text-primary ">{{$user->nomortelepon}}</label>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
       

        
        <!-- Footer-->
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="coba/js/scripts.js"></script>
    </body>
</html>

