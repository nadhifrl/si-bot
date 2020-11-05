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
            <div style="font-family: Brush Script MT"> <a class="navbar-brand js-scroll-trigger" href="#projects" ><img src="img/Logo-Botani-1.png" width="80px" height:"80px" style="margin-left:-70px"></a></div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto" >
                    <li class="nav-item" ><a class="nav-link js-scroll-trigger" href="/profil">Profil</a></li>
                        <li class="nav-item" ><a class="nav-link js-scroll-trigger" href="">Informasi dan Sarana</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/tiket">Tiket</a></li>
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
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">taman botani</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5"></h2>
                    <a class="btn btn-primary js-scroll-trigger" href="/tiket">Beli Tiket</a>
                </div>
            </div>
        </header>
        <!-- About-->
       
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <!-- Featured Project Row-->
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="coba/assets/img/botani-sukorambi.jpg" alt="" /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Taman Botani Sukorambi</h4>
                            <p class="text-black-50 mb-0"> Taman rekreasi ini diberi nama Taman Botani Sukorambi dimana merupakan taman wisata alam terdekat dari kota Jember (sekitar 10 menit), dengan konsep Rekreasi sambil Belajar dengan luas sekitar 12 hektar, menyajikan aneka ragam koleksi tanaman, hewan, permainan dan wahana-wahana yang dapat dinikmati oleh pengunjung dari segala umur.</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="coba/assets/img/kumpulan.jpg" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white"><a href=""> Aneka Macam Wisata Yang Terdapat Di Taman Botani</a></h4>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.399715715947!2d113.66085758545013!3d-8.16242199412484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6938b73a5abf7%3A0x1f02ba93aedf2352!2sTaman%20Botani%20Sukorambi%20Jember!5e0!3m2!1sid!2sid!4v1604465488521!5m2!1sid!2sid" width="558" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white"><a href="https://goo.gl/maps/D7KcWq3RMt7kBqU69"> LOKASI TAMAN BOTANI SUKORAMBI</a></h4>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
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
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Your Website 2020</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="coba/js/scripts.js"></script>
    </body>
</html>

