<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function familyName ($fname) { //argumento -> Nome e sobrenome
        echo "$fname Fabião.<br>";
    }

    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
    echo "<br>";

    function NomeIdade ($nome, $idade) { //nome e idade 
        echo "$nome, $idade .<br>";
    }
    NomeIdade("gabi", "18");
    ?>
</body>
</html>