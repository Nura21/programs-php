<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="output.php" method="post">
        <tr>
            <td> 
                <label for="namaWilayah">
                    Nama Wilayah : 
                </label>
                <select name="namaWilayah" id="namaWilayah">
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Banten">Banten</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                </select>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <label for="jumlahPositif">Jumlah Positif : </label>
                <input type="text" name="jumlahPositif" id="jumlahPositif" required>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <label for="jumlahDirawat">Jumlah Dirawat : </label>
                <input type="text" name="jumlahDirawat" id="jumlahDirawat" required>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <label for="jumlahSembuh">Jumlah Sembuh : </label>
                <input type="text" name="jumlahSembuh" id="jumlahSembuh" required>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <label for="jumlahMeninggal">Jumlah Meninggal : </label>
                <input type="text" name="jumlahMeninggal" id="jumlahMeninggal" required>
            </td>
        </tr>
        <br>
        <tr>
            <label for="namaOperator">Nama Operator : </label>
            <input type="text" name="namaOperator" id="namaOperator" value="Muhammad Irfansyahfalah" required>
        </tr>
        <br>
        <tr>
            <label for="nimMahasiswa">NIM Mahasiswa : </label>
            <input type="text" name="nimMahasiswa" id="nimMahasiswa" value="181011402208" required>
        </tr>
        <br>
        <tr>
            <td>
                <button type="submit" name="submit">Submit</button>
            </td>
        </tr>
    </form>
</body>
</html>