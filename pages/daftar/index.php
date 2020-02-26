<?php
include "../../admin/config/koneksi.php";
include "../../admin/config/function.php";
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Daftar</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Trendz Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" href="../../assets/login/css/style.css" type="text/css" media="all" />
</head>

<body>

    <?php
    if (isset($_POST['buttondaftar'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $tlp = $_POST['tlp'];
        $alamat = $_POST['alamat'];

        mysqli_query($koneksi, "INSERT INTO tbl_data_pelanggan(email_pelanggan, password_pelanggan, nama_pelanggan, alamat_pelanggan, telpon_pelanggan) VALUES('$email','$password', '$nama', '$alamat', '$tlp')");
        echo "<script>alert('Berhasil daftar silahakn login')</script>";
        header("location: " . base_url('login') . "/hamdi/pages/login");
    }
    ?>
    <section class="w3l-forms-23">
        <div class="forms23-block-hny">
            <div class="wrapper">
                <h1>Register</h1>
                <div class="d-grid forms23-grids">
                    <div class="form23">
                        <div class="main-bg">
                            <h6 class="sec-one">Daftar Pelanggan</h6>
                            <div class="speci-login first-look">
                                <img src="../../assets/login/images/user.png" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="bottom-content">
                            <form action="" method="post">
                                <input type="text" name="nama" class="input-form" placeholder="Nama pelanggan" required="required" />
                                <input type="email" name="email" class="input-form" placeholder="Email" required="required" />
                                <input type="password" name="password" class="input-form" placeholder="Password" class="input-form" required="required" />
                                <input type="number" name="tlp" class="input-form" placeholder="Telpon" class="input-form" required="required" />
                                <textarea name="alamat" class="input-form" placeholder="Alamat"></textarea>
                                <button name="buttondaftar" type="submit" class="loginhny-btn btn">Daftar</button>
                            </form>
                            <p>Kembali ke login ? <a href="../login/index.php">Login!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //login-section -->
</body>

</html>