<div class="container mt-5 mb-5">
    <div class="row mb-4">
        <div class="col-xl-12">
            <div class="section_title text-center">
                <h3>DAFAR PRODUK KAMI</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <?php $query = mysqli_query($koneksi, "SELECT * FROM tbl_produk") ?>
        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <a class="example-image-link" href="admin/assets/img/<?= $row['foto_produk'] ?>" data-lightbox="<?= $row['nama_produk'] ?>" data-title="<?= strip_tags($row['deskripsi_produk']) ?>"><img style="width: 286px; height: 282px" src="admin/assets/img/<?= $row['foto_produk'] ?>" alt="<?= $row['nama_produk'] ?>" /></a>
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nama_produk'] ?></h5>
                        <p class="card-text">
                            <strong>Deskripsi Produk</strong>
                            <?= $row['deskripsi_produk'] ?>
                        </p>
                        <p>Harga: <strong>Rp. <?= number_format($row['harga_produk']) ?></strong></p>
                        <a href="index.php?pesan-produk&id=<?= $row['id_produk'] ?>&harga=<?= $row['harga_produk'] ?>" class="btn btn-primary">Pesan</a>
                        <a href="index.php?detail-produk&id=<?= $row['id_produk'] ?>" class="btn btn-info">Detail</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- instagram_area end  -->