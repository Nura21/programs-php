<?php //konek ke database 
    //urutan connect database , 
    //nama host,username mysql,password,namadb
    $conn=mysqli_connect("localhost","nura","","belajar_php_mahasiswa");

    //Ambil data dari table mhs
    //koneksi ke database
    //2 parameter
    //query mengambil semua data
    $query="SELECT * FROM mhs";
    
    //cara mengetahui query benar atau tidak
    $result=mysqli_query($conn,$query);

    //cara mengetahui apa isi dari result,dan benar atau tidak querynya
    //var_dump($result);
    //Another way to know the mysql error or not
    if(!$result){
        echo mysqli_error($conn);
    }else{
        //another way to see or fetch the data sql from object result

        //mysqli_fetch_row()
        //mysql_fetch_assoc()
        //mysqli_fetch_array()
        //mysqli_fetch_object()

       // $fetchData=mysqli_fetch_row($result);
        
        //
        
        //$fetchData=mysqli_fetch_assoc($result);
        //Jangan dipake cara di bawah iini
        //$fetchData=mysqli_fetch_array($result);
        //var_dump($fetchData["nrp"]);
        //var_dump($fetchData["nama"]);

        //The right way to fetch the data

       // while($fetchData=mysqli_fetch_assoc($result)){
       //     var_dump($fetchData);
       //     echo "<br>";
       // }
    }

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
        <?php while($fetchData=mysqli_fetch_assoc($result)) :?>
        <tr>
            <td>
                <!--Tidak menggunakan id,gunakan i-->
                <?php //echo $fetchData["id"]; 
                    echo $i;
                ?></td>
            <td>
                <a href="">Edit</a> |
                <a href="">Delete</a>
            </td>
            <td>
                <?php echo $fetchData["nrp"]; ?>
            </td>
            <td>
                <?php echo $fetchData["nama"]; ?>
            </td>
            <td>
                <?php echo $fetchData["email"]; ?>
            </td>
            <td>
                <?php echo $fetchData["jurusan"]; ?>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
    <a href="login.php">Logout</a>
</body>
</html>