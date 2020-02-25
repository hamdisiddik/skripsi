<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_data_pelanggan WHERE id_pelanggan = '$id'");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telpon = $_POST['telpon'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE tbl_data_pelanggan SET
            email_pelanggan = '$email',
            nama_pelanggan = '$nama',
            alamat_pelanggan = '$alamat',
            telpon_pelanggan = '$telpon',
            jenis_kelamin = '$kelamin'
            WHERE id_pelanggan = '$id'
        ";
    mysqli_query($koneksi, $query);
    echo "<script>alert('data berhasil di ubah')</script>";
    echo "<script>location='index.php?kelolapelanggan'</script>";
}
?>

<div class="content-wrapper">
    <!-- Page Title Header Ends-->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    Ubah Data Pelanggan <b><?= $data['nama_pelanggan'] ?></b>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="nama">Nama Pelanggan</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Pelanggan" required autocomplete="off" value="<?= $data['nama_pelanggan'] ?>">
                                </div>
                                <div class="col">
                                    <label for="email">Email Pelanggan</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Pelanggan" required autocomplete="off" value="<?= $data['email_pelanggan'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="telpon">Telpon Pelanggan</label>
                                    <input type="number" name="telpon" class="form-control" id="telpon" placeholder="Telpon Pelanggan" required autocomplete="off" minlength="12" value="<?= $data['telpon_pelanggan'] ?>">
                                </div>
                                <div class="col">
                                    <label for="kelamin">Jenis Kelamin</label>
                                    <select name="kelamin" id="kelamin" class="form-control">
                                        <?php if ($data['jenis_kelamin'] == 'Laki - Laki') { ?>
                                            <option value="Laki - Laki" selected>Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        <?php } else { ?>
                                            <option value="Laki - Laki">Laki - Laki</option>
                                            <option value="Perempuan" selected>Perempuan</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Pelanggan</label>
                            <textarea name="alamat" id="alamat" class="form-control text-left" placeholder="Alamat Pelanggan" required><?= trim($data['alamat_pelanggan']) ?></textarea>
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