<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $email = "john.doe@example.com";
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("O e-mail é válido");
      } else {
        echo("O e-mail não está válido");
      }
    ?>
</body>
</html>