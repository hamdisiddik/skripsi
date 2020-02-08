<?php
if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE email_admin = '$email'");
	$rows = mysqli_num_rows($query);
	$row = mysqli_fetch_assoc($query);
	if ($rows == 1) {
		if (password_verify($password, $row['password_admin'])) {
			$_SESSION['auth'] = $row;
			echo "<script>alert('Password anda benar')</script>";
			echo "<script>location='index.php'</script>";
		} else {
			echo "<script>alert('Password anda salah')</script>";
		}
	} else {
		echo "<script>alert('Email tidak terdaftar')</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="assets/vendors/iconfonts/typicons/src/font/typicons.css">
	<link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
	<link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="assets/css/shared/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
				<div class="row w-100">
					<div class="col-lg-4 mx-auto">
						<div class="auto-form-wrapper">
							<form action="" method="post">
								<div class="form-group">
									<label class="label">Email</label>
									<div class="input-group">
										<input type="email" name="email" class="form-control" placeholder="Email" required autocomplete="off" autofocus>
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="mdi mdi-check-circle-outline"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="label">Password</label>
									<div class="input-group">
										<input type="password" name="password" class="form-control" placeholder="*********" required autocomplete="off">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="mdi mdi-check-circle-outline"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<button type="submit" name="login" class="btn btn-primary submit-btn btn-block">Login</button>
								</div>
								<div class="text-block text-center my-3">
									<span class="text-small font-weight-semibold">
										<a href="register.html" class="text-black text-small">Lupa password ?</a>
									</span>
								</div>
							</form>
						</div>
						<p class="footer-text text-center mt-3 text-white">copyright © <?= date('Y') ?> Hamdi Siddik.</p>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="assets/vendors/js/vendor.bundle.base.js"></script>
	<script src="assets/vendors/js/vendor.bundle.addons.js"></script>
	<!-- endinject -->
	<!-- inject:js -->
	<script src="assets/js/shared/off-canvas.js"></script>
	<script src="assets/js/shared/misc.js"></script>
	<!-- endinject -->
</body>

</html>