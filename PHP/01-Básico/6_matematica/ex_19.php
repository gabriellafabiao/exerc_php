<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h4>PI</h4>";
    echo (PI()); // VALOR DE PI
    echo "<br>";

    echo "<h4>MIN E MAX</h4>";
    echo (min(0,1,2,3,4,56)); // BUSCA O MENOR NÚMERO
    echo "<br>";
    echo (max(0,1,2,3,4,56)); // BUSCA O MAIOR NÚMERO 
    
    echo "<h4>POSITIVO</h4>"; // TRANSFORMA UM NÚMERO NEGATIVO EM POSITIVO 
    echo (abs(-10));
    echo "<br>";

    echo "<h4>RAIZ QUADRADA</h4>"; // MOSTRA A RAIZ QUADRADA
    echo (sqrt(64));
    echo "<br>";

    echo "<h4>ROUND</h4>"; // 
    echo(round(0.60) . "<br>");
    echo(round(0.50) . "<br>");
    echo(round(0.49) . "<br>");
    echo(round(-4.40) . "<br>");
    echo(round(-4.60) . "<br>");

    echo "<h4>NÚMERO ALEATÓRIO</h4>"; // 
    echo(rand(). "<br>"); // número aleatório
    echo(rand(10,100)); // número aleatório de 10,100
    ?>
</body>
</html>