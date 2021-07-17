<?php 
    //pengecekan login
    /**
     * Jika tombol submit sudah ditekan,jika username dan password sama dengan sekian
     */
    if(isset($_POST["submit"])){
        if($_POST["username"] == "nura" && $_POST["password"] == "qwerty"){
            header("Location: usual_admin2.php");
            exit;
        }else{
            $error = true;

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<body>
    <h1>Login ADMIN</h1>
    <?php if(isset($error)){?>
        <p style="color: red; font-style=italic">Username / Password Salah!</p>
    <?php }?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
                <!--Untuk menghubungkan label dengan id,harus menggunakan sama-sama username-->
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>    
        </form>
    </ul>
</body>
</html>