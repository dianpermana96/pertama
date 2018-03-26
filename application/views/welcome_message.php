<!DOCTYPE html>
<html>
<head>
	<title>--</title>
</head>
<body>
	<center><h1>---</h1></center>
	<center><?php echo anchor('Welcome/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->email ?></td>
			<td>
			      <?php echo anchor('Welcome/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('Welcome/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>