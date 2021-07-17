<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variable Static</h1>
    <?php
        function test(){
            Static $a=0;
            echo "Nilai a :";
            echo $a;
            echo "<br>";
            $a++;
        }

        test();
        test();
        test();
        test();
        test();
    ?>
</body>
</html>