<?php
session_start();
include "admin/config/koneksi.php";
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Desain interior</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="admin/assets/vendors/lightbox2/css/lightbox.css">
</head>

<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="assets/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.php">HOME</a></li>
                                            <li><a class="active" href="index.php?produk">Daftar Produk</a></li>
                                            <?php if (isset($_SESSION['user'])) { ?>
                                                <li><a class="active" href="#">Pesanan Produk</a></li>
                                            <?php } ?>
                                            <li>
                                                <?php if (isset($_SESSION['user'])) { ?>
                                                    <a class="active" href="index.php?logout">Logout</a>
                                                <?php } else { ?>
                                                    <a class="active" href="pages/login/index.php">Login</a>
                                                <?php } ?>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <?php if (isset($_SESSION['user'])) { ?>
                                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                    <div class="say_hello">
                                        <a href="#"><?= $_SESSION['user']['nama_pelanggan'] ?></a>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-md-9">
                            <div class="slider_text">
                                <h3>Solusi Desain untuk Rumah anda</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider_area_end -->

        <?php
        if (isset($_GET['produk'])) {
            include "pages/produk/index.php";
        } else if (isset($_GET['detail-produk'])) {
            include "pages/produk/detail.php";
        } else if (isset($_GET['pesan-produk'])) {
            include "pages/produk/pesan.php";
        } else if (isset($_GET['logout'])) {
            include "pages/login/logout.php";
        } else if (isset($_GET['keranjang'])) {
            include "pages/produk/keranjang.php";
        } else {
            include "pages/home/index.php";
        }
        ?>

        <!-- testimonial_area  -->
        <div class="testimonial_area overlay ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_active owl-carousel">
                            <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                    <div class="quote">
                                        <img src="assets/img/svg_icon/quote.svg" alt="">
                                    </div>
                                    <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                        sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. <br>
                                        Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                            <img src="assets/img/case/testmonial.png" alt="">
                                        </div>
                                        <h3>Robert Thomson</h3>
                                        <span>Business Owner</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                    <div class="quote">
                                        <img src="assets/img/svg_icon/quote.svg" alt="">
                                    </div>
                                    <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                        sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. <br>
                                        Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                            <img src="assets/img/case/testmonial.png" alt="">
                                        </div>
                                        <h3>Robert Thomson</h3>
                                        <span>Business Owner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <!-- footer start -->
    <footer class="footer">
        <div class="query_area">
            <div class="container">
                <div class="bottom_border">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="query_text">
                                <h3>Ingin mendesain rumah atau permintaan? Katakan saja? <br>
                                    <a href="#">Email kami</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="query_number">
                                <h3>0877-7674-3033</h3>
                                <p><a href="#">Hamdisiddik29@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- <script src="assets/js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="admin/assets/vendors/lightbox2/js/lightbox.js"></script>
</body>

</html>