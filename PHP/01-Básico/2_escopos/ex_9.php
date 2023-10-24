<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global - adição</title>
</head>
<body>
    <?php
    $a = "15";
    $b = "20";

    function adicao () {
        global $a, $b;
        $b = $a + $b;
    }

    adicao ();
    echo $b;

    ?>
</body>
</html>