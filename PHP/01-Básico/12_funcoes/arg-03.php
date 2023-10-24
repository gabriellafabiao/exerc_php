<?php declare(strict_types=1); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function setHeight(int $minheight = 50) { 
        echo "A altura é : $minheight <br>";
      }
      
      setHeight(350);
      setHeight();
      setHeight(135);
      setHeight(80);
      ?>
</body>
</html>