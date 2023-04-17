<?php
include "connect.php";

$id_produk=$_GET["id_produk"];
$query="select*from produk where id_produk='$id_produk'";
$go=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($go);

?>

<form action="prosesedit.php?id_produk=<?php echo $_GET["id_produk"];?>" method="post">
		<label for="nama_produk">Nama Produk:</label>
		<input type="text" id="id" name="nama_produk"placeholder="<?php echo $row['nama_produk'];?>" value="<?php echo $row['nama_produk'];?>" >

		<label for="id_varian">id varian:</label>
		<input type="text" id="name" name="id_varian"placeholder="<?php echo $row['id_varian'];?>" value="<?php echo $row['id_varian'];?>" >

		<label for="ukuran">ukuran:</label>
		<input type="text" id="quantity" name="ukuran"placeholder="<?php echo $row['ukuran'];?>" value="<?php echo $row['ukuran'];?>" >

		<label for="harga">harga:</label>
		<input type="number" id="id" name="harga"placeholder="<?php echo $row['harga'];?>" value="<?php echo $row['harga'];?>" >

		<label for="deskripsi">deskripsi:</label>
		<input type="text" id="id" name="deskripsi"placeholder="<?php echo $row['deskripsi'];?>" value="<?php echo $row['deskripsi'];?>" >

		<label for="stok">stok:</label>
		<input type="number" id="id" name="stok" placeholder="<?php echo $row['stok'];?>" value="<?php echo $row['stok'];?>">

		<label for="status">status:</label>
		<input type="text" id="id" name="status"placeholder="<?php echo $row['status'];?>" value="<?php echo $row['status'];?>" >
        
		
	
		<button type="submit" name="tambah_stok">Tambah Stok</button>
	</form>