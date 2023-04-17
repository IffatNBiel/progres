<?php
include "connect.php";

$nama_produk=$_POST["nama_produk"];
$id_varian=$_POST["id_varian"];
$ukuran=$_POST["ukuran"];
$harga=$_POST["harga"];
$deskripsi=$_POST["deskripsi"];
$stok=$_POST["stok"];
$status=$_POST["status"];
echo"$nama_produk";
$id_produk=$_GET["id_produk"];
$query="update produk set nama_produk='$nama_produk',id_varian='$id_varian',ukuran='$ukuran',harga='$harga',deskripsi='$deskripsi',stok='$stok',status='$status' where id_produk='$id_produk'";
$go=mysqli_query($connect,$query);
header("location:stok_barang.php");
?>