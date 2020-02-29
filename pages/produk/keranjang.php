<?php
$id = $_SESSION['user']['id_pelanggan'];
if (isset($_POST['bayar'])) {
    $foto = $_FILES['foto']['name'];
    $peach = explode('.', $foto);
    $format = end($peach);
    $namefoto = date('YmdHis') . '.' . $format;
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "./admin/assets/img/$namefoto");

    mysqli_query($koneksi, "UPDATE tbl_transaksi SET foto_pembayaran = '$namefoto', status_transaksi = '1'");

    echo "<script>alert('Pembayaran sedang dalam pengecekan')</script>";
    echo "<script>location='index.php?keranjang'</script>";
}

?>
<div class="container mt-5 mb-5">
    <div class="row mb-4">
        <div class="col-xl-12">
            <div class="section_title text-center">
                <h3>DAFTAR PRODUK ORDER</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama produk</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Bukti Pembayaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $datapending = mysqli_query($koneksi, "SELECT * FROM tbl_transaksi WHERE pelanggan_id = '$id'") ?>
                                        <?php while ($rows = mysqli_fetch_assoc($datapending)) { ?>
                                            <?php $dataproduk = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk = '$rows[produk_id]'") ?>
                                            <?php while ($row = mysqli_fetch_assoc($dataproduk)) { ?>
                                                <tr>
                                                    <td><?= $row['nama_produk'] ?></td>
                                                    <td><?= $rows['harga_transaksi'] ?></td>
                                                    <td>
                                                        <?php if ($rows['status_transaksi'] == 0) { ?>
                                                            Pending
                                                        <?php } else if ($rows['status_transaksi'] == 1) { ?>
                                                            Pengecekan pembayaran
                                                        <?php } else if ($rows['status_transaksi'] == 2) { ?>
                                                            Produk sedang dikirim
                                                        <?php } else if ($rows['status_transaksi'] == 3) { ?>
                                                            Produk diterima
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($rows['status_transaksi'] == 0) { ?>
                                                            kirim pembayaran: <strong>BCA: 6878768xx / AN: Hamdi</strong>
                                                            <form action="" method="post" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <input type="hidden" name="id" required value="<?= $rows['id_transaksi'] ?>" class="form-control">
                                                                            <input type="file" name="foto" required class="form-control">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <button class="btn btn-block btn-primary" type="submit" name="bayar">Bayar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        <?php } else { ?>
                                                            Sudh melakukan pembayaran
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- instagram_area end  -->