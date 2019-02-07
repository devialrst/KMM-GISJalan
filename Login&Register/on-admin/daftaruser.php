<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar User</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="indexadmin.css" rel="stylesheet">
    <style type="text/css">
    	body{
    		background-color: #D3D3D3;
    	}
	    .datauser {
			width: 500px;
			padding: 3px;
			text-align: center;
			border-radius: 20px;
			margin-top: 10px;
			margin-left: 180px;
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
		$sql = "SELECT * FROM users WHERE level_user = 'member'";
		echo "
		<h2><center>DAFTAR USER</center></h2> 
		<div class='datauser'>
			
			<table border='2' width='1000px'>
				<tr>
					<th><center>Id User</center></th>
					<th><center>Nama </center></th>
					<th><center>Username</center></th>
					<th><center>Password</center></th>
					<th><center>Level</center></th>
					<th><center>Nomor HP</center></th>
					<th><center>Alamat</center></th>
				</tr>";
				$result = $dbconnect->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo "
						<tr>
							<td>".$row["id_user"]."</td>
							<td>".$row["nama"]."</td>
							<td>".$row["username"]."</td>
							<td>".$row["password"]."</td>
							<td>".$row["level_user"]."</td>
							<td>".$row["nope"]."</td>
							<td>".$row["alamat"]."</td>
						</tr>";
					}
				}
		echo"		
			</table>
		</div>";
	?>
</body>
</html>