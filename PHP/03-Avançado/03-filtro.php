<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $int = 0;
    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("O número é válido");
      } else {
        echo("O número não está válido");
      }
    ?>
</body>
</html>