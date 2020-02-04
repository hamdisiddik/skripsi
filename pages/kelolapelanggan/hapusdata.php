<?php
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tbl_data_pelanggan WHERE id_pelanggan = '$id'");
echo "<script>alert('Data berhasil hapus')</script>";
echo "<script>location='index.php?kelolapelanggan'</script>";
