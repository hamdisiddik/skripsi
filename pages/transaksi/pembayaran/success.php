<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "UPDATE tbl_transaksi SET status_transaksi = '2'");
echo "<script>alert('Data berhasil diverifikasi')</script>";
echo "<script>location='index.php?transaksi_pembayaran'</script>";
