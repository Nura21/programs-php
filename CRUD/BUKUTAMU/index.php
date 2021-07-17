<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>BUKU TAMU</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>

	<h2>DATA BUKU TAMU</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH TAMU</a>
	<br/>
	<br/>
	<table class="table table table-bordered" border="1">
		<thead class="thead-dark">
			<tr>
			<th>No.</th>
			<th>Tanggal</th>
			<th>Nama </th>
			<th>Instansi</th>
			<th>Keperluan</th>
            <th>Kesan Pesan</th>
            <th>Tandatangan</th>
            <th>Opsi</th>
		</tr>
		</thead>
		<tbody>
			<?php 
		$batas=5;
		$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
		$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
		$previous = $halaman - 1;
		$next = $halaman + 1;
		//$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM bukuTamu");
		$jumlah_data = mysqli_num_rows($data);
		$total_halaman = ceil($jumlah_data/$batas);

		$dataTamu = mysqli_query($koneksi,"SELECT * FROM bukuTamu LIMIT $batas");
		$no=$halaman_awal+1;

		while($alias = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $alias['tanggalTamu']; ?></td>
				<td><?php echo $alias['namaTamu']; ?></td>
				<td><?php echo $alias['instansiTamu']; ?></td>
                <td><?php echo $alias['keperluanTamu']; ?></td>
                <td><?php echo $alias['kesanpesanTamu']; ?></td>
                <td><?php echo $alias['ttdTamu']; ?></td>
				<td>
					<a href="edit.php?idTamu=<?php echo $alias['idTamu']; ?>">EDIT</a>
					<a href="hapus.php?idTamu=<?php echo $alias['idTamu']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
		</tbody>
	</table>
</body>
</html>