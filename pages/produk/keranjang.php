<?php
$idpelanggan = $_SESSION['user']['id_pelanggan'];
$trx = mysqli_query($koneksi, "SELECT * FROM tbl_transaksi WHERE pelanggan_id = '$idpelanggan'");
$trxdata = mysqli_fetch_assoc($trx);
$idproduk = $trxdata['produk_id'];
$produk = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk = '$idproduk'");
$rowproduk = mysqli_fetch_assoc($produk);
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
                <div class="card-header">
                    <h3 class="text-center">
                        <a href="index.php?produk" class="btn btn-primary float-left">Kembali</a>
                        <?= $row['nama_produk'] ?>
                    </h3>
                </div>
                <div class="card-body">
                    <a class="example-image-link" href="admin/assets/img/<?= $row['foto_produk'] ?>" data-lightbox="<?= $row['nama_produk'] ?>" data-title="<?= strip_tags($row['deskripsi_produk']) ?>"><img class="col-md-12" style="height: 360px" src="admin/assets/img/<?= $row['foto_produk'] ?>" alt="<?= $row['nama_produk'] ?>" /></a>
                    <div class="card-body">
                        <div class="row mt-3">
                            <?php $query = mysqli_query($koneksi, "SELECT * FROM tbl_furniture WHERE produk_id = '$id'") ?>
                            <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                                <div class="col-md-4">
                                    <div class="card" style="width: 18rem;">
                                        <a class="example-image-link" href="admin/assets/img/<?= $row['foto_furniture'] ?>" data-lightbox="<?= $row['nama_furniture'] ?>" data-title="<?= strip_tags($row['deskripsi_furniture']) ?>"><img style="width: 286px; height: 282px" src="admin/assets/img/<?= $row['foto_furniture'] ?>" alt="<?= $row['nama_furniture'] ?>" /></a>
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $row['nama_furniture'] ?></h5>
                                            <p class="card-text">
                                                <strong>Deskripsi Produk</strong>
                                                <?= $row['deskripsi_furniture'] ?>
                                            </p>
                                            <p>Harga: <strong>Rp. <?= number_format($row['harga_furniture']) ?></strong></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- instagram_area end  -->