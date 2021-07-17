<?php 
    require 'functions.php';//mengambil data koneksi,query,result
    $mahasiswa = query("SELECT * FROM mhs");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nrp</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>    
        <?php $i=1; ?>
        <?php //while($fetchData=mysqli_fetch_assoc($result)) :
            foreach($mahasiswa as $mhs):
        ?>
        <tr>
            <td>
                <!--Tidak menggunakan id,gunakan i-->
                <?php //echo $fetchData["id"]; 
                    echo $i;
                ?></td>
            <td>
            <!--data id disini adalah $mhs["id"] ke file hapus
                kemudian data dilempar melalui url
            -->
                <a href="ubah.php?id=<?php echo $mhs["id"]; ?>">Edit</a> |
                <a href="hapus.php?id=<?php echo $mhs["id"]; ?>" onclick="return confirm('Yakin?');">Delete</a>
            </td>
            <td>
                <?php echo $mhs["nama"]; ?>
            </td>
            <!--fetchData hanyalah variabel biasa-->
            <td>
                <?php echo $mhs["nrp"]; ?>
            </td>
            <td>
                <?php echo $mhs["email"]; ?>
            </td>
            <td>
                <?php echo $mhs["jurusan"]; ?>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <a href="login.php">Logout</a>
</body>
</html>