<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Transaksi Produk</h4>
            </div>
        </div>
    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title pb-2">
                        Data Transaksi
                    </h2>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Nama Pelanggan</th>
                                    <th>Nama Produk</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Harga Transaksi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $data = mysqli_query($koneksi, "SELECT tbl_transaksi.*, tbl_data_pelanggan.nama_pelanggan, tbl_produk.nama_produk FROM tbl_transaksi JOIN tbl_data_pelanggan ON tbl_data_pelanggan.id_pelanggan = tbl_transaksi.pelanggan_id JOIN tbl_produk ON tbl_produk.id_produk = tbl_transaksi.produk_id WHERE status_transaksi = '0'"); ?>
                                <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                                    <tr>
                                        <td><?= $row['nama_pelanggan'] ?></td>
                                        <td><?= $row['nama_produk'] ?></td>
                                        <td><?= $row['tanggal_transaksi'] ?></td>
                                        <td><?= $row['harga_transaksi'] ?></td>
                                        <td>
                                            <a href="index.php?transaksi_detail&id=<?= $row['id_transaksi'] ?>" class="btn btn-info">Detail</a>
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