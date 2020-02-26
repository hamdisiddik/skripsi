<?php
include "../../admin/config/koneksi.php";
include "../../admin/config/function.php";
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Login</title>
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
	if (isset($_POST['buttonlogin'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = mysqli_query($koneksi, "SELECT * FROM tbl_data_pelanggan WHERE email_pelanggan = '$email'");
		$row = mysqli_fetch_assoc($query);
		if ($row) {
			if (password_verify($password, $row['password_pelanggan'])) {
				$_SESSION['user'] = $row;
				echo "<script>alert('Password benar')</script>";
				header("location: " . base_url('login') . "/hamdi");
			} else {
				echo "<script>alert('Password salah')</script>";
				echo "<script>location='index.php'</script>";
			}
		} else {
			echo "<script>alert('Email tidak terdaftar')</script>";
			echo "<script>location='index.php'</script>";
		}
	}
	?>
	<section class="w3l-forms-23">
		<div class="forms23-block-hny">
			<div class="wrapper">
				<h1>Login</h1>
				<div class="d-grid forms23-grids">
					<div class="form23">
						<div class="main-bg">
							<h6 class="sec-one">Welcome Back</h6>
							<div class="speci-login first-look">
								<img src="../../assets/login/images/user.png" alt="" class="img-responsive">
							</div>
						</div>
						<div class="bottom-content">
							<form action="" method="post">
								<input type="email" name="email" class="input-form" placeholder="Your Email" required="required" />
								<input type="password" name="password" class="input-form" placeholder="Your Password" required="required" />
								<button name="buttonlogin" type="submit" class="loginhny-btn btn">Login</button>
							</form>
							<p>Daftar Akun ? <a href="../daftar/index.php">Daftar!</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //login-section -->
</body>

</html>