<?php
if (isset($_SESSION['user'])) {
    $idpelanggan = $_SESSION['user']['id_pelanggan'];
    $produkid = $_GET['id'];
    $harga = $_GET['harga'];
    $tanggal = date('Y-m-d H:i:s');
    $status = 0;

    mysqli_query($koneksi, "INSERT INTO tbl_transaksi(pelanggan_id, produk_id, harga_transaksi, tanggal_transaksi, status_transaksi) VALUES('$idpelanggan', '$produkid', '$harga', '$tanggal', '$status')");

    echo "<script>alert('Silahkan lakukan pembayaran')</script>";
    echo "<script>location='index.php?keranjang'</script>";
} else {
    echo "<script>alert('Silahkan Login terlebih dahulu')</script>";
    echo "<script>location='pages/login/index.php'</script>";
}
