<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cetak Tiket</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('coba/css/styles.css')}}" rel="stylesheet" />

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

<body>
    <section class="projects-section bg-black" id="profil">
        <div class="container">
            <!-- Featured Project Row-->

            <!-- Project One Row-->
            <div class="row justify-content-center no-gutters ">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="card bg-white">
                        <div class="card-header mb-0">
                            <h5 class="text-center font-weight-bold text-primary">CETAK TIKET</span></h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group font-weight-bold text-primary">
                                    <label>Kode Tiket</label>
                                    <label class="form-control form-group font-weight-bold ">BO032M{{$detailtiket->id}}</label>
                                </div>
                                <div class="form-group font-weight-bold text-primary">
                                    <label>Nama</label>
                                    <label class="form-control form-group font-weight-bold ">{{$detailtiket->namapemesan}}</label>
                                </div>
                                <div class="form-group font-weight-bold text-primary">
                                    <label>Nomor Telepon</label>
                                    <label class="form-control form-group font-weight-bold  ">{{$detailtiket->nomortelepon}}</label>
                                </div>
                                <div class="form-group font-weight-bold text-primary">
                                    <label>Alamat</label>
                                    <textarea class="form-control form-group font-weight-bold  " readonly>{{$detailtiket->alamat}}</textarea>
                                </div>
                                <div class="form-group font-weight-bold text-primary">
                                    <label>Tanggal Pemakaian Tiket</label>
                                    <label class="form-control form-group font-weight-bold  ">{{$detailtiket->tanggalpembelian}}</label>
                                </div>
                                <div class="form-group font-weight-bold text-primary">
                                    <label>Jumlah Tiket</label>
                                    <label class="form-control form-group font-weight-bold  ">{{$detailtiket->jumlahtiket}}</label>
                                </div>
                                <div class="form-group font-weight-bold text-primary">
                                    <label>Total Pembayaran</label>
                                    <label class="form-control form-group font-weight-bold  ">{{$detailtiket->totalharga}}</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Two Row-->

    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('coba/js/scripts.js')}}"></script>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>