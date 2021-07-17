<html>
<head>
	<title>BUKU TAMU</title>
</head>
<body>
 
	<h2>DATA BUKU TAMU</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA TAMU</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['idTamu'];
	$data = mysqli_query($koneksi,"SELECT * FROM bukuTamu where idTamu='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi.php">
			<table>
				<tr>			
					<td>Tanggal</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['idTamu']; ?>">
						<input type="text" name="tanggal" value="<?php echo $d['tanggalTamu']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['namaTamu']; ?>"></td>
				</tr>
				<tr>
					<td>Instansi</td>
					<td><input type="text" name="instansi" value="<?php echo $d['instansiTamu']; ?>"></td>
				</tr>
                <tr>
				    <td>Keperluan</td>
				    <td><input type="text" name="keperluan" value="<?php echo $d['keperluanTamu']; ?>"></td>
			    </tr>
                <tr>
				    <td>Kesan Pesan</td>
				    <td><input type="text" name="kesanpesan" value="<?php echo $d['kesanpesanTamu']; ?>"></td>
			    </tr>
                <tr>
					<td>Tandatangan</td>
					<td><input type="text" name="ttd" value="<?php echo $d['ttdTamu']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>