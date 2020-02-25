<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Kelola Produk</h4>
            </div>
        </div>
    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title pb-2">
                        Data Produk
                        <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-plus"></i>
                        </button>
                    </h2>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Deskripsi Produk</th>
                                    <th>Foto Produk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $data = mysqli_query($koneksi, "SELECT * FROM tbl_produk"); ?>
                                <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                                    <tr>
                                        <td><?= $row['nama_produk'] ?></td>
                                        <td>
                                            <?php
                                            if (empty($row['harga_produk'])) {
                                                echo "Harga Kosong";
                                            } else {
                                                echo "Rp. " . number_format($row['harga_produk']);
                                            }
                                            ?>
                                        </td>
                                        <td><?= substr($row['deskripsi_produk'], 0, 50) ?></td>
                                        <td>
                                            <a class="example-image-link" href="assets/img/<?= $row['foto_produk'] ?>" data-lightbox="<?= $row['nama_produk'] ?>" data-title="<?= strip_tags($row['deskripsi_produk']) ?>"><img style="width: 100px; height: 100px" src="assets/img/<?= $row['foto_produk'] ?>" alt="<?= $row['nama_produk'] ?>" /></a>
                                        </td>
                                        <td>
                                            <a href="index.php?hapusproduk&id=<?= $row['id_produk'] ?>" class="btn btn-outline-danger" onclick="confirm('Apa anda yakin ?')"><i class="fa fa-trash"></i></a>
                                            <a href="index.php?ubahproduk&id=<?= $row['id_produk'] ?>" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                                            <a href="index.php?furniture&id=<?= $row['id_produk'] ?>" class="btn btn-outline-info">
                                                <i class="fas fa-eye"></i>
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
    $foto = $_FILES['foto']['name'];
    $peach = explode('.', $foto);
    $format = end($peach);
    $namefoto = date('YmdHis') . '.' . $format;
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "./assets/img/$namefoto");

    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($koneksi, "INSERT INTO tbl_produk VALUES('', '$nama','$deskripsi', '', '$namefoto')");
    echo "<script>alert('Data berhasil ditambahkan')</script>";
    echo "<script>location='index.php?produk'</script>";
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
                        <label for="nama">Nama Produk</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama produk" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Deskripsi Produk</label>
                        <textarea name="deskripsi" id="ckeditor" placeholder="deskirpsi produk"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto Produk</label>
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