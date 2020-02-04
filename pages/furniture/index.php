<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Kelola Furniture</h4>
            </div>
        </div>
    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title pb-2">
                        Data Furniture
                        <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-plus"></i>
                        </button>
                    </h2>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Nama Furniture</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Furniture</th>
                                    <th>Deskripsi Furniture</th>
                                    <th>Foto Furniture</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $data = mysqli_query($koneksi, "SELECT tbl_furniture.*, tbl_produk.nama_produk FROM tbl_furniture JOIN tbl_produk ON tbl_furniture.produk_id = tbl_produk.id_produk"); ?>
                                <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                                    <tr>
                                        <td><?= $row['nama_furniture'] ?></td>
                                        <td><?= $row['nama_produk'] ?></td>
                                        <td>Rp. <?= number_format($row['harga_furniture']) ?></td>
                                        <td><?= $row['deskripsi_furniture'] ?></td>
                                        <td>
                                            <img src="assets/img/<?= $row['foto_furniture'] ?>" alt="" style="width: 100px; height: 100px">
                                        </td>
                                        <td>
                                            <a href="index.php?hapusfurniture&id=<?= $row['id_furniture'] ?>" class="btn btn-outline-danger" onclick="confirm('Apa anda yakin ?')"><i class="fa fa-trash"></i></a>
                                            <button class="btn btn-outline-warning"><i class="fa fa-edit"></i></button>
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
    $foto = $_FILES['foto']['name'];
    $peach = explode('.', $foto);
    $format = end($peach);
    $namefoto = date('YmdHis') . '.' . $format;
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "./assets/img/$namefoto");

    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($koneksi, "INSERT INTO tbl_furniture VALUES('','$produk','$nama','$deskripsi', '$harga', '$namefoto')");

    $query = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk = '$produk'");
    $row = mysqli_fetch_assoc($query);
    $hargaproduk = $row['harga_produk'];
    $totalharga = $hargaproduk + $harga;

    mysqli_query($koneksi, "UPDATE tbl_produk SET harga_produk = '$totalharga' WHERE id_produk = '$produk'");

    echo "<script>alert('Data berhasil ditambahkan')</script>";
    echo "<script>location='index.php?furniture'</script>";
}
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama Furniture</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Furniture" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="nama">Type Produk</label>
                        <select name="produk" id="produk" class="form-control">
                            <?php $query = mysqli_query($koneksi, "SELECT * FROM tbl_produk"); ?>
                            <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                                <option value="<?= $row['id_produk'] ?>"><?= $row['nama_produk'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Furniture</label>
                        <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga Furniture" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Deskripsi Furniture</label>
                        <textarea name="deskripsi" id="alamat" class="form-control" placeholder="Deskripsi Furniture" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto Furniture</label>
                        <input type="file" name="foto" class="form-control" id="foto" placeholder="Nama Pelanggan">
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