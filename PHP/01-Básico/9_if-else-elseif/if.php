<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $t = date("H");

    if ($t < "20") {
      echo "Tenha um bom dia!";
    } else {
      echo "Tenha uma boa noite!";
    }
    ?>
</body>
</html>