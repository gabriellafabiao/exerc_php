<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>local</title>
</head>
<body>
    <?php
    function meuTeste () {
        $x = 5; // local
        echo"<p> A variável x está dentro da função: $x </p>"; 
    }
    meuTeste ();
    // usar o x fora da função irá gerar um erro
    echo "<p> A variável x fora da função é: </p>"
    ?>
</body>
</html>