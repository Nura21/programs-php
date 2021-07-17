<!DOCTYPE html>
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
	<h3>TAMBAH DATA TAMU</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
            <tr>			
				<td>Tanggal</td>
				<td><input type="datetime" name="tanggal"></td>
			</tr>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Instansi</td>
				<td><input type="text" name="instansi"></td>
			</tr>
			<tr>
				<td>Keperluan</td>
				<td><input type="text" name="keperluan"></td>
			</tr>
			<tr>
				<td>Kesan Pesan</td>
				<td><input type="text" name="kesanpesan"></td>
			</tr>
            <tr>			
				<td>Tandatangan</td>
				<td><input type="text" name="ttd"></td>
			</tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>		
		</table>
	</form>
</body>
</html>