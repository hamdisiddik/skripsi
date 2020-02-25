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
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.html">HOME</a></li>
                                            <li><a class="active" href="index.html">Daftar Produk</a></li>
                                            <li><a class="active" href="index.html">Pesanan Produk</a></li>
                                            <li><a class="active" href="index.html">Login</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <?php if (isset($_SESSION['user'])) { ?>
                                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                    <div class="say_hello">
                                        <a href="#">Say Hello</a>
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

        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-xl-12">
                    <div class="section_title text-center">
                        <h3>DAFAR PRODUK KAMI</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single_insta">
                        <a href="#"><img src="assets/img/instragram/1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_insta">
                        <a href="#"><img src="assets/img/instragram/2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_insta">
                        <a href="#"><img src="assets/img/instragram/3.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- instagram_area end  -->

        <!-- works_area-start  -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70 text-center">
                        <h3>Pekerjaan Kita</h3>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-lg-7 col-md-6">
                    <div class="thumb">
                        <img src="assets/img/works/1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="work_info pl-68">
                        <h3>Ruang Tamu Balok Putih</h3>
                        <p>Balok bangunan merupakan struktur melintang yang menopang beban horizontal. Balok dalam bangunan sangat penting untuk menjaga stabilitas terhadap gaya kesamping,Balok sederhana bertumpu pada kolom diujung-ujungnya, dengan satu ujung bebas berotasi dan tidak memiliki momen tahan. Seperti struktur statis lainnya, nilai dari semua reaksi,pergeseran dan momen untuk balok sederhana adalah tidak tergantung bentuk penampang dan materialnya ukuran ruang tamu ini 3meter x 3meter 3x3</p>
                        <a href="project_details.html" class="boxed-btn3-line">Details</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-lg-5 col-md-6">
                    <div class="work_info">
                        <h3>Art Gallery Design</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit duis sed odio sit amet </p>
                        <a href="project_details.html" class="boxed-btn3-line">Details</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="thumb">
                        <img src="assets/img/works/2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-lg-7 col-md-6">
                    <div class="thumb">
                        <img src="assets/img/works/3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="work_info pl-68">
                        <h3>Art Gallery Design</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit duis sed odio sit amet </p>
                        <a href="project_details.html" class="boxed-btn3-line">Details</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-lg-5 col-md-6">
                    <div class="work_info">
                        <h3>Office Space</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit duis sed odio sit amet </p>
                        <a href="project_details.html" class="boxed-btn3-line">Details</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="thumb">
                        <img src="assets/img/works/4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ works_area-end  -->

    <!-- creative_mind_area start  -->
    <div class="creative_mind_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center">
                <div class="col-xl-6 col-md-12 col-lg-6">
                    <div class="creativ_thumb">
                        <img src="assets/img/creative_mind/1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-md-12 col-lg-5">
                    <div class="creative_info">
                        <div class="section_title">
                            <h3>Professional and <br>
                                creative mind</h3>
                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, <br> nec sagittis sem nibh id elit duis sed odio sit amet.</p>
                        </div>
                        <div class="progressBars">
                            <div class="single_bar">
                                <h4>Architecture</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>60%</span></div>
                                </div>
                            </div>
                            <div class="single_bar">
                                <h4>3D Design</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>65%</span></div>
                                </div>
                            </div>
                            <div class="single_bar">
                                <h4>Interior</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>80%</span></div>
                                </div>
                            </div>
                        </div>

                        <a href="about.html" class="boxed-btn3-line">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- creative_mind_area end  -->

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
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/scrollIt.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <!-- <script src="assets/js/gijgo.min.js"></script> -->
    <script src="assets/js/slick.min.js"></script>



    <!--contact js-->
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/mail-script.js"></script>


    <script src="assets/js/main.js"></script>
    <script>
        function collision($div1, $div2) {
            var x1 = $div1.offset().left;
            var w1 = 40;
            var r1 = x1 + w1;
            var x2 = $div2.offset().left;
            var w2 = 40;
            var r2 = x2 + w2;

            if (r1 < x2 || x1 > r2)
                return false;
            return true;
        }
        // Fetch Url value 
        var getQueryString = function(parameter) {
            var href = window.location.href;
            var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
            var string = reg.exec(href);
            return string ? string[1] : null;
        };
        // End url 
        // // slider call
        $('#slider').slider({
            range: true,
            min: 20,
            max: 200,
            step: 1,
            values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
                getQueryString('maxval') : 200
            ],

            slide: function(event, ui) {

                $('.ui-slider-handle:eq(0) .price-range-min').html(ui.values[0] + 'K');
                $('.ui-slider-handle:eq(1) .price-range-max').html(ui.values[1] + 'K');
                $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);

                // get values of min and max
                $("#minval").val(ui.values[0]);
                $("#maxval").val(ui.values[1]);

                if (ui.values[0] == ui.values[1]) {
                    $('.price-range-both i').css('display', 'none');
                } else {
                    $('.price-range-both i').css('display', 'inline');
                }

                if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                    $('.price-range-min, .price-range-max').css('opacity', '0');
                    $('.price-range-both').css('display', 'block');
                } else {
                    $('.price-range-min, .price-range-max').css('opacity', '1');
                    $('.price-range-both').css('display', 'none');
                }

            }
        });

        $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
            ' - </i>' + $('#slider').slider('values', 1) + '</span>');

        $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
            'k</span>');

        $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
            'k</span>');
    </script>
</body>

</html>