<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>

	<table style="margin:20px auto;" border="1">
		<tr>
			<th>ID</th>
			<th>Nama User</th>
			<th>Username</th>
			<th>Password</th>
		</tr>
		
		<?php 
		foreach($user_account as $u){ 
		?>
		<tr>
			<td><?php echo $u->id_user ?></td>
			<td><?php echo $u->nama_user ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id_user,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id_user,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>