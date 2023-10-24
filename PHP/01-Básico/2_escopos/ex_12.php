<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function meuTeste () {
        static $x = 1;
        echo $x;
        $x++;
    }
    meuTeste (); //1
    echo "<br>";
    meuTeste (); //2
    echo "<br>"; 
    meuTeste (); //3
    echo "<br>";
    meuTeste (); //4
    echo "<br>";
    meuTeste (); //5
    ?>
</body>
</html>