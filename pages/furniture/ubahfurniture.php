<?php
$id = $_GET['id'];
$idurl = $_GET['idurl'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_furniture WHERE id_furniture = '$id'");
$row = mysqli_fetch_assoc($query);

if (isset($_POST['save'])) {
    if (!empty($_FILES['foto']['name'])) {
        if (file_exists("./assets/img/" . $row['foto_furniture'])) {
            unlink("./assets/img/" . $row['foto_furniture']);
        }
        $foto = $_FILES['foto']['name'];
        $peach = explode('.', $foto);
        $format = end($peach);
        $namefoto = date('YmdHis') . '.' . $format;
        $lokasi = $_FILES['foto']['tmp_name'];
        move_uploaded_file($lokasi, "./assets/img/$namefoto");

        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];

        mysqli_query($koneksi, "UPDATE tbl_furniture SET nama_furniture = '$nama', deskripsi_furniture = '$deskripsi', foto_furniture = '$namefoto'");
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<script>location='index.php?furniture&id=$idurl'</script>";
    } else {
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];

        mysqli_query($koneksi, "UPDATE tbl_furniture SET nama_furniture = '$nama', deskripsi_furniture = '$deskripsi'");
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<script>location='index.php?furniture&id=$idurl'</script>";
    }
}
?>

<div class="content-wrapper">
    <!-- Page Title Header Ends-->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    Ubah Data Pelanggan
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama furniture</label>
                            <input type="text" name="nama" class="form-control" id="nama" required autocomplete="off" value="<?= $row['nama_furniture'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Deskripsi furniture</label>
                            <textarea name="deskripsi" id="ckeditor" placeholder="deskirpsi furniture"><?= $row['deskripsi_furniture'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto furniture</label>
                            <a class="example-image-link" href="assets/img/<?= $row['foto_furniture'] ?>" data-lightbox="<?= $row['nama_furniture'] ?>" data-title="<?= strip_tags($row['deskripsi_furniture']) ?>">
                                <img style="width: 100%; height: 400px" src="assets/img/<?= $row['foto_furniture'] ?>" alt="<?= $row['nama_furniture'] ?>" />
                            </a>
                            <input type="file" name="foto" class="form-control mt-3" id="foto">
                        </div>
                        <div class="form-group float-right">
                            <a href="index.php?kelolapelanggan" class="btn btn-danger" data-dismiss="modal">Batal</a>
                            <button type="submit" name="save" class="btn btn-info">Ubah data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>