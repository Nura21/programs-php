
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php 
    if(isset($_POST['submit']) || isset($_POST['namaWilayah']) || isset($_POST['jumlahPositif']) || isset($_POST['jumlahDirawat']) || isset($_POST['jumlahSembuh']) || isset($_POST['jumlahMeninggal']) || isset($_POST['namaOperator']) || isset($_POST['nimMahasiswa']) ){ 
        $namaWilayah = $_POST['namaWilayah'];
            $jumlahPositif = $_POST['jumlahPositif'];
            $jumlahDirawat = $_POST['jumlahDirawat'];
            $jumlahSembuh = $_POST['jumlahSembuh'];
            $jumlahMeninggal = $_POST['jumlahMeninggal'];
            $namaOperator = $_POST['namaOperator'];
            $nimMahasiswa = $_POST['nimMahasiswa'];

            $array=[$namaWilayah,$jumlahPositif,$jumlahDirawat,$jumlahSembuh,$jumlahMeninggal,$namaOperator,$nimMahasiswa];
            
            $myFile = fopen("data.txt","w") or die("Unable to open file!");
            fwrite($myFile,$array[1]);
            fwrite($myFile,$array[2]);
            fwrite($myFile,$array[3]);
            fwrite($myFile,$array[4]);
            
            fclose($myFile);    
    ?>
        <div align="center">
            Data Pemantaun Covid19 Wilayah <?php echo $_POST['namaWilayah']; ?>   
        </div>
        <br>
        <div align="center">

            Per <?php
            date_default_timezone_set('Asia/Jakarta'); 
            echo date("d m Y h:i:s"); ?>
        </div>
        <br>
        <div align="center">
            <?php echo $_POST['namaOperator']."/".$_POST['nimMahasiswa']; ?>
        </div>
        <br>
        <table border="1" align="center">
            <tr>
                <td>Positif</td>
                <td>Dirawat</td>
                <td>Sembuh</td>
                <td>Meninggal</td>
            </tr>
            <tr>
                <td><?php echo $_POST['jumlahPositif']; ?></td>
                <td><?php echo $_POST['jumlahDirawat']; ?></td>
                <td><?php echo $_POST['jumlahSembuh']; ?></td>
                <td><?php echo $_POST['jumlahMeninggal']; ?></td>
            </tr>
        </table>
    <?php } ?>   
    </p>
</body>
</html>