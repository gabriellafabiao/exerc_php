<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global</title>
</head>
<body>
    <?php
    $x = 5; // global

    function meuTeste () {
        //usar x dentro desta função irá gerar um erro 
        echo "<p> A variável x dentro da função é: </p>";
    }
    meuTeste ();

    echo"<p>Avariável x fora da função é: $x </p>";

    ?>
</body>
</html>