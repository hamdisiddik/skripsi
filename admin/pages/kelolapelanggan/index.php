<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Kelola User</h4>
            </div>
        </div>
    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title pb-2">
                        Data Pelanggan
                        <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-plus"></i>
                        </button>
                    </h2>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Telpon</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $data = mysqli_query($koneksi, "SELECT * FROM tbl_data_pelanggan"); ?>
                                <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                                    <tr>
                                        <td><?= $row['nama_pelanggan'] ?></td>
                                        <td><?= $row['email_pelanggan'] ?></td>
                                        <td><?= $row['alamat_pelanggan'] ?></td>
                                        <td><?= $row['telpon_pelanggan'] ?></td>
                                        <td><?= $row['jenis_kelamin'] ?></td>
                                        <td>
                                            <a href="index.php?hapuspelanggan&id=<?= $row['id_pelanggan'] ?>" class="btn btn-outline-danger" onclick="confirm('Apa anda yakin ?')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <a href="index.php?ubahpelanggan&id=<?= $row['id_pelanggan'] ?>" class="btn btn-outline-warning">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['save'])) {
    $telpon = $_POST['telpon'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $enkripsi_pass = password_hash($password1, PASSWORD_DEFAULT);

    if ($password1 == $password2) {
        if (strlen($telpon) > 12) {
            echo "<script>alert('Nomer telpon lebih dari 12 karakter')</script>";
            echo "<script>location='index.php?kelolapelanggan'</script>";
        } else {
            mysqli_query($koneksi, "INSERT INTO tbl_data_pelanggan(email_pelanggan, password_pelanggan, nama_pelanggan, alamat_pelanggan, telpon_pelanggan) VALUES('$email','$enkripsi_pass', '$nama', '$alamat', '$telpon')");
            echo "<script>alert('Data berhasil ditambahkan')</script>";
            echo "<script>location='index.php?kelolapelanggan'</script>";
        }
    } else {
        echo "<script>alert('Password tidak sama')</script>";
        echo "<script>location='index.php?kelolapelanggan'</script>";
    }
}
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama Pelanggan</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Pelanggan" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Pelanggan</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Pelanggan" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Pelanggan</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Pelanggan" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="telpon">Telpon Pelanggan</label>
                        <input type="number" name="telpon" class="form-control" id="telpon" placeholder="Telpon Pelanggan" required autocomplete="off" minlength="12">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="password1">Password</label>
                                <input type="password" name="password1" class="form-control" id="password1" required autocomplete="off" minlength="6">
                            </div>
                            <div class="col">
                                <label for="password2">Ulangi Password</label>
                                <input type="password" name="password2" class="form-control" id="password2" required autocomplete="off" minlength="6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="save" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>