<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $valor = "-67";
   $resultado = "";

   if ($valor > 0 ){
    $resultado = "Valor Positivo ";
   }elseif ($valor < 0) {
    $resultado = "Valor Negativo";
   } else {
    $resultado = "Igual a zero";
   }
   
   echo $resultado;

   ?>
</body>
</html>