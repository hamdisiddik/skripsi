<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk = '$id'");
$row = mysqli_fetch_assoc($query);
$foto = $row['foto_produk'];
$query2 = mysqli_query($koneksi, "SELECT * FROM tbl_furniture WHERE produk_id = '$id'");

if (file_exists("./assets/img/$foto")) {
    unlink("./assets/img/$foto");
}
mysqli_query($koneksi, "DELETE FROM tbl_produk WHERE id_produk = '$id'");

while ($row = mysqli_fetch_assoc($query2)) {
    $datafoto = $row['foto_furniture'];
    if (file_exists("./assets/img/$datafoto")) {
        unlink("./assets/img/$datafoto");
    }
}
mysqli_query($koneksi, "DELETE FROM tbl_furniture WHERE produk_id = '$id'");

echo "<script>alert('Data berhasil hapus')</script>";
echo "<script>location='index.php?produk'</script>";
