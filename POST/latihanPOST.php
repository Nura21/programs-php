<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <!--Jika nama atau submit sudah pernah diisi atau diklik 
        Maka tampilkan tulisan 
    -->
    <?php if(isset($_POST["submit"]) || isset($_POST["name"])) : ?>
        <h1>Selamat datang <?php echo $_POST["name"]; ?></h1>
    <?php endif; ?>
</body>
</html>