<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        $x = "5";
        $y = "10";

        function adicao () {
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        adicao();
        echo "<p> a valor é: $y </p>";
        ?>
    </body>
    </html>
</body>
</html>