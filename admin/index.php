<?php
session_start();
include './config/koneksi.php';
if (isset($_SESSION['auth'])) {
  $id = $_SESSION['auth']['id_admin'];
  $query = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE id_admin = '$id'");
  $datarow = mysqli_fetch_assoc($query);

  if (isset($_POST['saveprofile'])) {
    $password1 = $_POST['password'];
    $password2 = $_POST['password2'];
    if ($password1 === $password2) {
      if (!empty($_FILES['foto']['name'])) {
        if (file_exists("./assets/img/" . $datarow['foto_admin'])) {
          unlink("./assets/img/" . $datarow['foto_admin']);
        }
        $foto = $_FILES['foto']['name'];
        $peach = explode('.', $foto);
        $format = end($peach);
        $namefoto = date('YmdHis') . '.' . $format;
        $lokasi = $_FILES['foto']['tmp_name'];
        move_uploaded_file($lokasi, "./assets/img/$namefoto");

        $nama = $_POST['nama'];
        $pass = password_hash($password1, PASSWORD_DEFAULT);
        $queryupdate = mysqli_query($koneksi, "UPDATE tbl_admin SET nama_admin = '$nama', password_admin = '$pass', foto_admin = '$namefoto'");

        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<script>location='index.php'</script>";
      } else {
        $nama = $_POST['nama'];
        $pass = password_hash($password1, PASSWORD_DEFAULT);
        $queryupdate = mysqli_query($koneksi, "UPDATE tbl_admin SET nama_admin = '$nama', password_admin = '$pass'");
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<script>location='index.php'</script>";
      }
    } else {
      echo "<script>alert('Password tidak sama')</script>";
      echo "<script>location='index.php'</script>";
    }
  }
?>
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
    <link rel="stylesheet" href="assets/vendors/lightbox2/css/lightbox.css">
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
          } else if (isset($_GET['logout'])) {
            include "./pages/logout/index.php";
          } else if (isset($_GET['hapuspelanggan'])) {
            include "./pages/kelolapelanggan/hapusdata.php";
          } else if (isset($_GET['ubahpelanggan'])) {
            include "./pages/kelolapelanggan/ubahdata.php";
          } else if (isset($_GET['produk'])) {
            include "./pages/produk/index.php";
          } else if (isset($_GET['hapusproduk'])) {
            include "./pages/produk/hapusproduk.php";
          } else if (isset($_GET['ubahproduk'])) {
            include "./pages/produk/ubahproduk.php";
          } else if (isset($_GET['furniture'])) {
            include "./pages/furniture/index.php";
          } else if (isset($_GET['ubahfurniture'])) {
            include "./pages/furniture/ubahfurniture.php";
          } else if (isset($_GET['hapusfurniture'])) {
            include "./pages/furniture/hapusfurniture.php";
          } else if (isset($_GET['transaksi_pending'])) {
            include "./pages/transaksi/pending/index.php";
          } else if (isset($_GET['transaksi_pembayaran'])) {
            include "./pages/transaksi/pembayaran/index.php";
          } else if (isset($_GET['transaksi_detail'])) {
            include "./pages/transaksi/detail/detail.php";
          } else if (isset($_GET['transaksi_success'])) {
            include "./pages/transaksi/pembayaran/success.php";
          } else if (isset($_GET['transaksi_verifikasi'])) {
            include "./pages/transaksi/verifikasi/index.php";
          } else if (isset($_GET['produk_diterima'])) {
            include "./pages/transaksi/produk_terima/index.php";
          } else {
            include "./pages/dashboard/index.php";
          }
          ?>
          <!-- Footer -->
          <!-- Modal -->
          <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="profileLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="profileLabel">Edit Profile</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="nama">Nama admin</label>
                      <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama admin" required value="<?= $datarow['nama_admin'] ?>">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col">
                          <label for="password1">Password</label>
                          <input type="password" class="form-control" name="password" id="password1" placeholder="Password" required>
                        </div>
                        <div class="col">
                          <label for="password2">Masukan Password kembali</label>
                          <input type="password" class="form-control" name="password2" id="password2" placeholder="Password kambali" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="foto">Foto Admin</label>
                      <a class="example-image-link" href="assets/img/<?= $datarow['foto_admin'] ?>" data-lightbox="<?= $datarow['nama_admin'] ?>" data-title="<?= strip_tags($datarow['nama_admin']) ?>">
                        <img class="thumb-image col" src="assets/img/<?= $datarow['foto_admin'] ?>" alt="<?= $datarow['nama_admin'] ?>" />
                      </a>
                      <input type="file" name="foto" class="form-control mt-3" id="foto">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="saveprofile" class="btn btn-primary">Edit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
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
    <script src="assets/vendors/lightbox2/js/lightbox.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script>
      $(document).ready(function() {
        $('#example').DataTable();
        ClassicEditor
          .create(document.querySelector('#ckeditor'))
          .catch(error => {
            console.error(error);
          });
      });
    </script>
  </body>

  </html>
<?php
} else {
  include "pages/login/index.php";
}
?>