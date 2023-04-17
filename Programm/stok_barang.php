<?php
include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabel Stok Barang</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		form {
			display: none;
		}

		form label, form input {
			display: block;
			margin-bottom: 10px;
		}

		form input[type="submit"] {
			margin-top: 10px;
			background-color: #4CAF50;
			color: white;
			padding: 8px 16px;
			border: none;
			cursor: pointer;
		}
	</style>
</head>
<body>

	<h2>Stok Barang</h2>

	<table>
		<thead>
			<tr>
				<th>ID Produk</th>
				<th>Nama produk</th>
				<th>Id_varian</th>
				<th>ukuran</th>
				<th>harga</th>
                <th>deskripsi</th>
				<th>stok</th>
				<th>status</th>
                <th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$query="select * from produk";
			$go=mysqli_query($connect,$query);
			if(mysqli_num_rows($go)>0){
				while($row=mysqli_fetch_assoc($go)){
			?>
			<tr>
                        <td> <?php echo $row["id_produk"]?></td>
                        <td> <?php echo $row["nama_produk"]?></td>
                        <td> <?php echo $row["id_varian"]?></td>
                        <td> <?php echo $row["ukuran"]?></td>
						<td> <?php echo $row["harga"]?></td>
						<td> <?php echo $row["deskripsi"]?></td>
						<td> <?php echo $row["stok"]?></td>
						<td> <?php echo $row["status"]?></td>
                        <td>
                            <a href="formedit.php?id_produk=<?php echo$row['id_produk']; ?>">> 
                            Edit</a>
                        </td><td>
                            <a href="prosesdelete.php?id_produk=<?php echo$row['id_produk']; ?>">
                            Delete</a>
                        </td>
                    </tr>
			<?php		
				}
			}
			else{
				echo "belum ada isinya";
			}

			?>

		</tbody>
	</table>
    <br>
	<a href="formtambahbarang.php" class="badge badge-success bg-danger">tambah barang</a>
	<form action="tambahbarang.php" method="post">
		<label for="nama_produk">Nama Produk:</label>
		<input type="text" id="id" name="nama_produk" >

		<label for="id_varian">id varian:</label>
		<input type="text" id="name" name="id_varian" >

		<label for="ukuran">ukuran:</label>
		<input type="text" id="quantity" name="ukuran" >

		<label for="harga">harga:</label>
		<input type="number" id="id" name="harga" >

		<label for="deskripsi">deskripsi:</label>
		<input type="text" id="id" name="deskripsi" >

		<label for="stok">stok:</label>
		<input type="number" id="id" name="stok" >

		<label for="status">status:</label>
		<input type="text" id="id" name="status" >
		
	
		<button type="submit" name="tambah_stok">Tambah Stok</button>
	</form>
	</body>
</html>