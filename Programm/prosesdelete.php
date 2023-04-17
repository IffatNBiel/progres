<?php
include "connect.php";
$id=$_GET["id_produk"];
$query="delete from produk where id_produk='$id'";

$go= mysqli_query($connect,$query);
header("location:stok_barang.php");

?>