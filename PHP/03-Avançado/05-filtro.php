<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $int = 122;
    $min = 1;
    $max = 200;

    if (filter_var($int, FILTER_VALIDATE_INT, array ("options" => array ("min_range" => $int, "max_range" => $int)))) {
        echo ("O valor da variável está dentro da faixa legal");
    } else {
        echo ("O valor da variável está dentro da faixa legal");
    }
    ?>
</body>
</html>