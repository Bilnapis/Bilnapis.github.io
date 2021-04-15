<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Anumainterior</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="<?= base_url('assets/') ?>font-awesome/css/font-awesome.min.css"> -->

    <style>
        body {
            background-color: #333333;
        }

        .btn-primary {
            background-color: #65350f;
            border-color: #65350f;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #79471f;
            background-color: #79471f;
        }

        .btn-primary:focus,
        .btn-primary.focus {
            color: #fff;
            background-color: #79471f;
            background-color: #79471f;
            box-shadow: 0 0 0 0.2rem rgba(254, 216, 84, 0.5);
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            color: #fff;
            background-color: #79471f;
            background-color: #79471f;
        }

        .btn-primary:not(:disabled):not(.disabled):active,
        .btn-primary:not(:disabled):not(.disabled).active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #79471f;
            background-color: #79471f;
        }

        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(254, 216, 84, 0.5);
        }

        .text-primary {
            color: #cc9966 !important;
        }

        #mainNav .navbar-nav .nav-item .nav-link.active,
        #mainNav .navbar-nav .nav-item .nav-link:hover {
            color: #cf8e5d;
        }

        #portfolio .portfolio-item .portfolio-link .portfolio-hover {
            display: flex;
            position: absolute;
            width: 100%;
            height: 100%;
            background: #c96c;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity ease-in-out 0.25s;
        }

        /* Animation Text */
        /* 
        .ml11 {
            font-weight: 700;
            font-size: 3.5em;
        } */

        .ml11 .text-wrapper {
            position: relative;
            display: inline-block;
            padding-top: 0.1em;
            padding-right: 0.05em;
            padding-bottom: 0.15em;
        }

        .ml11 .line {
            opacity: 0;
            position: absolute;
            left: 0;
            height: 100%;
            width: 3px;
            background-color: #fff;
            transform-origin: 0 50%;
        }

        .ml11 .line1 {
            top: 0;
            left: 0;
        }

        .ml11 .letter {
            display: inline-block;
            line-height: 1em;
        }

        .card {
            padding: 2vh;
            height: 90vh;
            max-height: 500px;
        }

        .map {
            height: 30rem;
        }

        @media (max-width: 992px) {
            .map {
                /* height: 90%; */
            }
        }

        .map iframe {
            pointer-events: none;
        }

        .map iframe {
            height: 100%;
            width: 100%;
            border: 0;
        }

        @import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Product</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Testimonial</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Address & Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome to Our Shop !</div>
            <div class="masthead-heading text-uppercase ml3">Your Room, Your Taste</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
    </header>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase" style="color: white;">Services</h2>
                <h3 class="section-subheading text-muted" style="color: #f5f5f5 ;">Mengapa Harus Belanja di Anuma Jaya Interior Semarang?</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3" style="color: white;">Kualitas Terbaik</h4>
                    <p class="text-muted" style="color: #f5f5f5 ;">Pilihan bahan terbaik adalah hal utama bagi kami. Memberikan garansi panjang juga merupakan bukti kualitas dari Anumajaya Interior Semarang.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-coins fa-stack-1x fa-inverse"></i>
                        <!-- <i class="fas fa-laptop fa-stack-1x fa-inverse"></i> -->
                    </span>
                    <h4 class="my-3" style="color: white;">Harga Terjangkau</h4>
                    <p class="text-muted">Anuma Jaya Interior Semarang memeberikan kualitas produk yang bagus, dengan pilihan yang terbaik yang sesuai dengan harga yang didapatkan. Anda akan merasa worth it untuk pemesanan Anuma Jaya Interior Semarang.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-puzzle-piece fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3" style="color: white;">Custom Design</h4>
                    <p class="text-muted">Sesuai dengan tagline kita "Your room, your taste", ciptakan suasana ruang seperti yang Anda inginkan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product-->
    <section class="page-section" id="portfolio" style="background-color: #21252 ;">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase" style="color: white;">Product</h2>
                <h3 class="section-subheading text-muted">Interior Menarik Menanti Anda</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url('assets/'); ?>assets/img/product/bedset-mrs.seffin/pic1-square.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption" style="background-color: #21252 ;">
                            <div class="portfolio-caption-heading" style="background-color: #21252 ;">Bedset Mrs. Seffin</div>
                            <div class="portfolio-caption-subheading text-muted" style="background-color: #21252;">Bedroom</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url('assets/'); ?>assets/img/product/living-room.mrs.prisca/pic1-square.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Living Room Mrs. Prisca</div>
                            <div class="portfolio-caption-subheading text-muted">Living Room</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url('assets/'); ?>assets/img/product/master-bedroom-mrs.maya/pic2-square.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="font-size: 1.35rem;">Master Bedroom Mrs. Maya</div>
                            <div class="portfolio-caption-subheading text-muted">Bedroom</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url('assets/'); ?>assets/img/product/pt.indo-solution/pic1-square.jpeg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="font-size: 1.35rem;">PT. Indo Energy Solution</div>
                            <div class="portfolio-caption-subheading text-muted">Office</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url('assets/'); ?>assets/img/product/walking-closet-mr.arif/pic1-square.png" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Walking Closet Mr. Arif</div>
                            <div class="portfolio-caption-subheading text-muted">Bedroom Set</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url('assets/'); ?>assets/img/product/ortize-cafe/pic1-square.jpeg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Ortize Cafe</div>
                            <div class="portfolio-caption-subheading text-muted">Cafe</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url('assets/'); ?>assets\img\product\alula's-bedroom\pic1-square.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" style="font-size: 1.35rem;">Alula's Bedroom</div>
                            <div class="portfolio-caption-subheading text-muted">Bedroom</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url('assets/'); ?>assets/img/product/pt-ies/pic1-square.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Office Set PT. IES</div>
                            <div class="portfolio-caption-subheading text-muted">Ruangan HRD PT. IES</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url('assets/'); ?>assets/img/product/sekat-mrs.rosa/pic1-square.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Sekat Mrs. Rosa</div>
                            <div class="portfolio-caption-subheading text-muted">Partisi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni-->
    <section class="page-section" style="background-color: #21252 ;" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase" style="color:white;">What They Say About Us</h2>
                <h3 class="section-subheading text-muted">Mereka sudah membuktikannya</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>assets/img/testimoni/mr-riffi.jpeg" alt="" />
                            <h4 style="margin-bottom: 5%;">Mr. Riffi</h4>
                            <p class="text-muted">"Top banget pelayanan dari Anuma Interior. Gak nyesel saya menggunakan jasa Anuma Interior."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>assets/img/testimoni/mrs-puji-wulan.jpeg" alt="" />
                            <h4 style="margin-bottom: 5%;">Mrs. Puji Wulan</h4>
                            <p class="text-muted">"Akhirnya saya bisa mewujudkan desain interior impianku. Semua itu berkat Anuma Interior. Makasih banget Anuma Interior."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>assets/img/testimoni/mrs-tri.jpeg" alt="" />
                            <h4 style=" margin-bottom: 5%;">Mrs. Tri</h4>
                            <p class="text-muted">"Baru pertama kali nyoba menggunakan pelayanan Anuma Interior langsung bikin jatuh hati. Puas banget dengan pelayananya."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <h2 class="section-heading text-uppercase mt-5" style="color:white;">Address</h2>
            <h3 class="section-subheading text-muted ">Temukan Kami</h3>
        </div>
    </section>


    <!-- Contact-->
    <section id="contact">
        <div class="map" style="margin-top: 0;">
            <div class="text-center">
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.8958366223105!2d110.38267051477347!3d-7.021528894928141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDEnMTcuNSJTIDExMMKwMjMnMDUuNSJF!5e0!3m2!1sen!2sid!4v1616577711350!5m2!1sen!2sid"></iframe>
            <br />
            <small>
                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.8958366223105!2d110.38267051477347!3d-7.021528894928141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDEnMTcuNSJTIDExMMKwMjMnMDUuNSJF!5e0!3m2!1sen!2sid!4v1616577711350!5m2!1sen!2sid"></a>
            </small>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="https://wa.wizard.id/8f2677"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/anumajaya/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://vt.tiktok.com/ZSJ2drMRh/"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('assets/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Bedset Mrs. Seffin</h2>
                                <p class="item-intro text-muted">Bedroom</p>
                                <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-fluid d-block mx-auto" src="<?= base_url('assets/'); ?>assets/img/product/bedset-mrs.seffin/pic1~2.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid d-block mx-auto" src="<?= base_url('assets/'); ?>assets/img/product/bedset-mrs.seffin/pic1.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!-- <img class="img-fluid d-block mx-auto" src="<?= base_url('assets/'); ?>assets/img/product/bedset-mrs.seffin/pic1~2.jpeg" alt="" /> -->
                                <p>Dengan ukuran kamar yang sempit (3x3), tidak membatasi explore gaya si pemilik ruangan. Kesan black and white tetap menjadi favorit kalangan remaja masa kini.</p>
                                <ul class="list-inline">
                                    <li>Client: Mrs. Seffin</li>
                                    <li>Category: Bedroom</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('assets/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Living Room Mrs. Prisca</h2>
                                <p class="item-intro text-muted">Living Room</p>
                                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-fluid d-block mx-auto" src="<?= base_url('assets/'); ?>assets/img/product/living-room.mrs.prisca/pic1.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid d-block mx-auto" src="<?= base_url('assets/'); ?>assets/img/product/living-room.mrs.prisca/pic2.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="" />
                                <p>Ruangan yang sempit tidak membatasi penataan yang elegan dan gagah untuk ruang tamu Anda. Warna abu-abu dipadupadankan dengan gold akan membuat ruang kecil menjadi mewah.</p>
                                <ul class="list-inline">
                                    <li>Client: Mrs. Prisca</li>
                                    <li>Category: Living Room</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('assets/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Master Bedroom <br>Mrs. Maya</h2>
                                <p class="item-intro text-muted">Bedroom</p>
                                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/master-bedroom-mrs.maya/pic1.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/master-bedroom-mrs.maya/pic2~2.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/master-bedroom-mrs.maya/pic3~2.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="" />
                                <p>Master bedroom tentunya sangat mendominasi kepribadian pemilik. Gaya master bedroom mengkombinasi tone alami warna kayu dipadupadankan dengan brown miror ditambah dengan LED warm white membua kesan ruang jauh lebih mewah dan nyaman.</p>
                                <ul class="list-inline">
                                    <li>Client: Mrs. Maya</li>
                                    <li>Category: Bedroom</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('assets/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">PT. Indo Energy Solution</h2>
                                <p class="item-intro text-muted">Office</p>
                                <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/pt.indo-solution/pic1.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/pt.indo-solution/pic2.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/pt.indo-solution/pic3.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/pt.indo-solution/pic4.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt="" />
                                <p>Pemilihan interior set untuk kantor sangatlah penting. Selain agar sesuai dengan konsep kantornya, pemilihan interior ini dapat membuat orang yg bekerja menjadi nyaman.</p>
                                <ul class="list-inline">
                                    <li>Client: PT. Indo Solution</li>
                                    <li>Category: Office</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('assets/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Walking Closet Mr. Arif</h2>
                                <p class="item-intro text-muted">Bedroom Set</p>
                                <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/walking-closet-mr.arif/pic1.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/walking-closet-mr.arif/pic2.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/walking-closet-mr.arif/pic3.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/walking-closet-mr.arif/pic4.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/walking-closet-mr.arif/pic5.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators5" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="" />
                                <p>Untuk ruangan master bedroom yang besar biasanya pemanfaatannya adalah dengan mengisi interior walking closet. Dengan demikian ruangan master bedroom tidak terlalu kosong dan terkesan lebih rapi.</p>
                                <ul class="list-inline">
                                    <li>Client: Mr. Arif</li>
                                    <li>Category: Bedroom Set</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('assets/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Ortize Cafe</h2>
                                <p class="item-intro text-muted">Cafe</p>
                                <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/ortize-cafe/pic1-square.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/ortize-cafe/pic2-square.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/ortize-cafe/pic3-square.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/ortize-cafe/pic4-square.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/ortize-cafe/pic5-square.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators6" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators6" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                <p>Pembuatan interior cafe merupakan point penting saat akan mendirikan sebuah cafe, karena interior design lah yang sangat mencerminkan dan mendominasi cafe tersebut</p>
                                <ul class="list-inline">
                                    <li>Client: Ortize Cafe</li>
                                    <li>Category: Cafe</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 7-->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('assets/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Alula's Bedroom</h2>
                                <p class="item-intro text-muted">Bedroom</p>
                                <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/alula's-bedroom/pic1.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/alula's-bedroom/pic2.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators7" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators7" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                <p>Design interior untuk kamar anak perlu disesuaikan dengan karakter si kecil. Karena hal itulah yang mencerminkan kepribadian si kecil. Design unik dan lucu dapat menciptakan suasana happy bagi pemilik ruangan,dan tentunya membuat si kecil betah</p>
                                <ul class="list-inline">
                                    <li>Client: Alula</li>
                                    <li>Category: Bedroom</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 8-->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('assets/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Office Set PT. IES</h2>
                                <p class="item-intro text-muted">Ruangan HRD PT. IES</p>
                                <div id="carouselExampleIndicators8" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/pt-ies/pic1.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators8" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators8" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                <p>Office adalah rumah kedua bagi kita. Kesan sederhana namun mewah akan tampak ketika tekstur stone bertemu dnegan wood lalu kita tambah dengan pencahayaan yang hangat.</p>
                                <ul class="list-inline">
                                    <li>Client: PT. IES</li>
                                    <li>Category: Office</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 9-->
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="<?= base_url('assets/'); ?>assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Sekat Mrs. Rosa</h2>
                                <p class="item-intro text-muted">Partisi</p>
                                <div id="carouselExampleIndicators9" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?= base_url('assets/'); ?>assets/img/product/sekat-mrs.rosa/pic1.jpeg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators9" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators9" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                <p>Biasanya, untuk membatasi ruangan yang satu dengan ruangan yang lain, pemilik rumah mengaplikasikan sekat untuk membagi kedua ruangan tersebut. Selain untuk menghemat biaya, sekat ini juga dapat membuat ruangan tidak sempit atau terlihat lebih luas. Kami menawarkan berbagai macam design sekat, mulai dari CNC, sekat berongga, dll. Sekat milik Mrs. Rosa ini terlihat sangat minimalis dan mewah bukan ?</p>
                                <ul class="list-inline">
                                    <li>Client: Mrs. Rosa</li>
                                    <li>Category: Partisi</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="<?= base_url('assets/'); ?>assets/mail/jqBootstrapValidation.js"></script>
    <script src="<?= base_url('assets/'); ?>assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml3');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: false
            })
            .add({
                targets: '.ml3 .letter',
                opacity: [0, 1],
                easing: "easeInOutQuad",
                duration: 100,
                delay: (el, i) => 150 * (i + 1)
            });
    </script>
    <script>
        $('.carousel').carousel({
            interval: 0
        })


        var onMapMouseleaveHandler = function(event) {
            var that = $(this);
            that.on('click', onMapClickHandler);
            that.off('mouseleave', onMapMouseleaveHandler);
            that.find('iframe').css("pointer-events", "none");
        }
        var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
        $('.map').on('click', onMapClickHandler);
    </script>
</body>

</html>