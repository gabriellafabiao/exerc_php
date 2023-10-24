<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $carro = array ("preto", "branco", "azul");
    echo count($carro) 
    ?>
    <br><br>
    <!-- Matrizes associativas -->
    <?php
    $idade = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "Peter tem" .$idade["Peter"]. "years old.";
    ?>
    <br><br>
    <!-- Matrizes Multidimensionais -->
    <?php
    $carros = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );
    echo $carros["0"]["0"].": Em estoque:" .$carros ["0"]["1"]."vendido:" . $carros ["0"]["2"]. "<br>";
    echo $carros["1"]["0"].": Em estoque:" .$carros ["1"]["1"]."vendido:" . $carros ["1"]["2"]. "<br>";
    echo $carros["2"]["0"].": Em estoque:" .$carros ["2"]["1"]."vendido:" . $carros ["2"]["2"]. "<br>";
    echo $carros["3"]["0"].": Em estoque:" .$carros ["3"]["1"]."vendido:" . $carros ["3"]["2"]. "<br>";
    ?>
    <br><br>
    <!-- Ordem crescente -->
    <?php
    $carros = array ("volvo", "BMW", "Toyota") ;
    sort($carros);

    $clenght = count($carros);
    for ($i = 0; $i < $clenght; $i++){
        echo $carros[$i];
        echo "<br>";
    }
    echo "<br><br>";
    // Ordem decrescente 
    $carros1 = array ("volvo", "BMW", "Toyota") ;
    rsort($carros1);

    $clenght = count($carros1);
    for ($i = 0; $i < $clenght; $i++){
        echo $carros1[$i];
        echo "<br>";
    }
    echo "<br><br>";

    // Ordem crescente de acordo com o valor
    $nomes = array ("volvo" => "35", "BMW" => "49", "Toyota" => "01") ;
    asort($nomes);

    foreach ($nomes as $x => $value) {
        echo "Key"."$x". ", Valor:" . $value;
        echo "<br>";
    }
    echo "<br><br>";
    
    // Ordem decrescente de acordo com o valor
    $nomes = array ("volvo" => "35", "BMW" => "49", "Toyota" => "01") ;
    arsort($nomes);

    foreach ($nomes as $x => $value) {
        echo "Key"."$x". ", Valor:" . $value;
        echo "<br>";
    }
    ?>
</body>
</html>