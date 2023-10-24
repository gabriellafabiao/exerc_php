<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = "50";
    $b = "10";

    function teste (){
        global $a, $b;
        $b = $a * $b;
    }
    teste();
    echo "total: $b";
    ?>
</body>
</html>