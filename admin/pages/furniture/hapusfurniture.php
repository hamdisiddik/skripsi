<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_furniture WHERE id_furniture = '$id'");
$row = mysqli_fetch_assoc($query);
$foto = $row['foto_furniture'];
$idproduk = $row['produk_id'];
$harga = $row['harga_furniture'];
$idproduk = $_GET['idproduk'];

if (file_exists("./assets/img/$foto")) {
    unlink("./assets/img/$foto");
}
mysqli_query($koneksi, "DELETE FROM tbl_furniture WHERE id_furniture = '$id'");

$produk = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk = '$idproduk'");
$dataproduk = mysqli_fetch_assoc($produk);
$hargaproduk = $dataproduk['harga_produk'];
$totalharga = $hargaproduk - $harga;

mysqli_query($koneksi, "UPDATE tbl_produk SET harga_produk = '$totalharga' WHERE id_produk = '$idproduk'");

echo "<script>alert('Data berhasil hapus')</script>";
echo "<script>location='index.php?furniture&id=$idproduk'</script>";
