<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pesanan</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="indexadmin.css" rel="stylesheet">
    <style type="text/css">
	    body{
    		background-color: #D3D3D3;
    	}
    </style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="index.php"><font size="3">Home</font></a></li>
			<li><a href="daftaruser.php"><font size="3">Daftar User</font></a></li>
			<li><a href="daftarpesanan.php"><font size="3">Daftar Pesanan</font></a></li>
			<li><a href="./../logout.php"><font size="3">Logout</font></a></li>
		</ul>
	</nav>
	<?php
		require_once("./../config.php");
		$sql = "SELECT * FROM produk, pemesanan WHERE produk.id_produk=pemesanan.ID_Pemesanan";
		echo "<h2><center>DAFTAR PESANAN</center></h2>";
		echo " 
		<div class='datapesanan'>
			<table border='2' width='100%'>
				<tr>
					<th><center>ID Produk</center></th>
					<th><center>ID Jenis Produk</center></th>
					<th><center>Nama Produk</center></th>
					<th><center>Jumlah</center></th>
					<th><center>Harga</center></th>
					<th><center>Foto</center></th>
					<th><center>ID Pemesanan</center></th>
					<th><center>Jenis Pembayaran</center></th>
					<th><center>Nomor Rekening</center></th>
					<th><center>Bank</center></th>
					<th><center>Nama Pemilik Rekening</center></th>
				</tr>";
				$result = $dbconnect->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo "
						<tr>
							<td>".$row["id_produk"]."</td>
							<td>".$row["id_jenisproduk"]."</td>
							<td>".$row["nama_produk"]."</td>
							<td>".$row["jumlah"]."</td>
							<td>".$row["harga"]."</td>
							<td>".$row["foto"]."</td>
							<td>".$row["ID_Pemesanan"]."</td>
							<td>".$row["Jenis_Pembayaran"]."</td>
							<td>".$row["Nomor_Rekening"]."</td>
							<td>".$row["Bank"]."</td>
							<td>".$row["Nama_Pemilik_Rekening"]."</td>
						</tr>";
					}
				}
		echo"		
			</table>
		</div>";
	?>
</body>
</html>