<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"Hoje é" . date("Y/m/d") ."<br>";
    echo "Hoje é". date("Y.m.d") ."<br>";
    echo "Hoje é". date("Y-m-d") ."<br>";
    echo "Hoje é". date("l");
    ?>
    <br><br>
    <!-- ano automático de direitos autorais -->
    &copy; 2015-<?php echo date ("Y");?>
    <br><br>
    <!-- formato de 24 horas -->
    <?php
    echo "O horario é:" .date("h:i:sa");
    ?>
    <br><br>
    <!-- retorna o carimbo de data/hora -->
    <?php
    $d=mktime(11, 14, 54, 18, 10, 2023);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
    ?>
</body>
</html>