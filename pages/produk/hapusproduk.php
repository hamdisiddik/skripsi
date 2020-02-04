<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk = '$id'");
$row = mysqli_fetch_assoc($query);
$foto = $row['foto_produk'];

if (file_exists("./assets/img/$foto")) {
    unlink("./assets/img/$foto");
}
mysqli_query($koneksi, "DELETE FROM tbl_produk WHERE id_produk = '$id'");

echo "<script>alert('Data berhasil hapus')</script>";
echo "<script>location='index.php?produk'</script>";
