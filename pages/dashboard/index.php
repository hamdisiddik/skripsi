<?php
$queryPending = mysqli_query($koneksi, "SELECT * FROM tbl_transaksi WHERE status_transaksi = '0'");
$dataPending = mysqli_num_rows($queryPending);
$queryPembayaran = mysqli_query($koneksi, "SELECT * FROM tbl_transaksi WHERE status_transaksi = '1'");
$dataPembayaran = mysqli_num_rows($queryPembayaran);
$queryDiverifikasi = mysqli_query($koneksi, "SELECT * FROM tbl_transaksi WHERE status_transaksi = '2'");
$dataDiverifikasi = mysqli_num_rows($queryDiverifikasi);
$produkditerima = mysqli_query($koneksi, "SELECT * FROM tbl_transaksi WHERE status_transaksi = '3'");
$dataproduk = mysqli_num_rows($produkditerima);

?>
<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <h3 class="mb-0 font-weight-semibold"><?= $dataPending ?></h3>
                                    <h5 class="mb-0 font-weight-medium text-primary">Transaksi Pending</h5>
                                </div>
                                <div class="wrapper my-auto ml-auto ml-lg-4">
                                    <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <h3 class="mb-0 font-weight-semibold"><?= $dataPembayaran ?></h3>
                                    <h5 class="mb-0 font-weight-medium text-primary">Transaksi Pembayaran</h5>
                                </div>
                                <div class="wrapper my-auto ml-auto ml-lg-4">
                                    <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <h3 class="mb-0 font-weight-semibold"><?= $dataDiverifikasi ?></h3>
                                    <h5 class="mb-0 font-weight-medium text-primary">Transaksi diverifikasi</h5>
                                </div>
                                <div class="wrapper my-auto ml-auto ml-lg-4">
                                    <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <h3 class="mb-0 font-weight-semibold"><?= $dataproduk ?></h3>
                                    <h5 class="mb-0 font-weight-medium text-primary">Produk diterima</h5>
                                </div>
                                <div class="wrapper my-auto ml-auto ml-lg-4">
                                    <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>