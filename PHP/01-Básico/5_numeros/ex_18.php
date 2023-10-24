<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 10;
    var_dump(is_int($a)); // inteiro -> true

    echo "<br>";

    $a = 10.9;
    var_dump(is_float($a)); // decimal -> true

    echo "<br>";
    $a = "10" + 47.6;
    var_dump(is_int($a)); // inteiro com soma -> true
    ?>
</body>
</html>