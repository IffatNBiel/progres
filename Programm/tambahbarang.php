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
$query="insert into produk(nama_produk,	id_varian,ukuran,harga,deskripsi,stok,status)value('$nama_produk','$id_varian','$ukuran','$harga','$deskripsi','$stok','$status')";
$go=mysqli_query($connect,$query);
header("location:stok_barang.php");
?>