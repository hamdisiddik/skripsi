<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_transaksi JOIN tbl_data_pelanggan ON tbl_data_pelanggan.id_pelanggan = tbl_transaksi.pelanggan_id JOIN tbl_produk ON tbl_produk.id_produk = tbl_transaksi.produk_id WHERE id_transaksi = '$id'");
$row = mysqli_fetch_assoc($query);
?>
<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Detail Transaksi
                    <?php
                    if ($row['status_transaksi'] == 0) {
                        echo "Pending";
                    } else if ($row['status_transaksi'] == 1) {
                        echo "Pembayaran Masuk";
                    } else if ($row['status_transaksi'] == 2) {
                        echo "Pembayaran Terverifikasi";
                    } else if ($row['status_transaksi'] == 3) {
                        echo "Barang diterima";
                    }
                    ?>
                </h4>
            </div>
        </div>
    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title pb-2">
                        Data Transaksi <?= $row['nama_pelanggan'] ?>
                        <div class="float-right">Tanggal Transaksi: <?= $row['tanggal_transaksi'] ?></div>
                    </h2>
                    <small>Harga Transaksi: <strong>Rp. <?= number_format($row['harga_transaksi']) ?></strong></small><br>
                    <small>Alamat Pelanggan: <mark><?= $row['alamat_pelanggan'] ?></mark></small><br>
                    <small>Telpon Pelanggan: <mark><?= $row['telpon_pelanggan'] ?></mark></small><br>
                    <div class="row text-center">
                        <div class="col-md-<?= $row['foto_pembayaran'] ? '6' : '12' ?>">
                            <h4>Foto Produk <?= $row['nama_produk'] ?></h4>
                            <a class="example-image-link" href="assets/img/<?= $row['foto_produk'] ?>" data-lightbox="<?= $row['nama_produk'] ?>" data-title="<?= strip_tags($row['deskripsi_produk']) ?>">
                                <img class="col-md-12" src="assets/img/<?= $row['foto_produk'] ?>" alt="<?= $row['nama_produk'] ?>" />
                            </a>
                        </div>
                        <?php if ($row['foto_pembayaran']) { ?>
                            <div class="col-md-6">
                                <h4>Bukti Pembayaran</h4>
                                <a class="example-image-link" href="assets/img/<?= $row['foto_pembayaran'] ?>" data-lightbox="<?= $row['nama_pelanggan'] ?>" data-title="<?= "Foto Pembayaran " . $row['nama_pelanggan'] ?>">
                                    <img class="col-md-12" src="assets/img/<?= $row['foto_pembayaran'] ?>" alt="<?= $row['nama_pelanggan'] ?>" />
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <h4 class="mt-3 text-center">Furniture Produk</h4>
                    <div class="row mt-3">
                        <?php $idproduk = $row['id_produk']; ?>
                        <?php $data = mysqli_query($koneksi, "SELECT * FROM tbl_furniture WHERE produk_id = '$idproduk'") ?>
                        <?php while ($item = mysqli_fetch_assoc($data)) { ?>
                            <div class="col-md-3 text-center">
                                <a class="example-image-link" href="assets/img/<?= $item['foto_furniture'] ?>" data-lightbox="<?= $item['nama_furniture'] ?>" data-title="<?= strip_tags($item['deskripsi_furniture']) ?>">
                                    <img class="col-md-12" src="assets/img/<?= $item['foto_furniture'] ?>" alt="<?= $item['nama_furniture'] ?>" />
                                </a>
                                <strong class="mt-3"><?= $item['nama_furniture'] ?></strong>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>