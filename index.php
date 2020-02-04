<?php include './config/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skripsi</title>
  <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
  <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/css/ionicons.css">
  <link rel="stylesheet" href="assets/vendors/iconfonts/typicons/src/font/typicons.css">
  <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="assets/css/shared/style.css">
  <link rel="stylesheet" href="assets/css/demo_1/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- header -->
    <?php include "./pages/templates/header.php"; ?>
    <div class="container-fluid page-body-wrapper">
      <!-- sidebar -->
      <?php include "./pages/templates/sidebar.php"; ?>
      <!-- Content -->
      <div class="main-panel">
        <?php
        if (isset($_GET['kelolapelanggan'])) {
          include "./pages/kelolapelanggan/index.php";
        } else if (isset($_GET['hapuspelanggan'])) {
          include "./pages/kelolapelanggan/hapusdata.php";
        } else if (isset($_GET['ubahpelanggan'])) {
          include "./pages/kelolapelanggan/ubahdata.php";
        } else if (isset($_GET['produk'])) {
          include "./pages/produk/index.php";
        } else if (isset($_GET['hapusproduk'])) {
          include "./pages/produk/hapusproduk.php";
        } else if (isset($_GET['furniture'])) {
          include "./pages/furniture/index.php";
        } else if (isset($_GET['hapusfurniture'])) {
          include "./pages/furniture/hapusfurniture.php";
        } else if (isset($_GET['transaksi'])) {
          include "./pages/transaksi/pending/index.php";
        } else if (isset($_GET['transaksi_detail'])) {
          include "./pages/transaksi/pending/detail.php";
        } else {
          include "./pages/dashboard/index.php";
        }
        ?>
        <!-- Footer -->
        <?php include "./pages/templates/footer.php"; ?>
      </div>
    </div>
  </div>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
  <script src="assets/js/shared/off-canvas.js"></script>
  <script src="assets/js/shared/misc.js"></script>
  <script src="assets/js/demo_1/dashboard.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
      ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
          console.error(error);
        });
    });
  </script>
</body>

</html>