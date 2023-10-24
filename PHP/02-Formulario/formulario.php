<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULÁRIO -> "POST"</h1> 
    <form action="formulario.php" method="post"> <!-- post -->
        <p>Name:<input type="text" name="name"></p><br>
        <p>E-mail:<input type="text" name="email"></p><br>

        <input type="submit">
    </form>
    <h4>BEM VINDO <br> <?php echo $_POST["name"]; ?><br></h4> 
    SEU E-MAIL É: <?php echo $_POST["email"]; ?>

    <!-- <h1>FORMULÁRIO -> "GET"</h1> 
    <form action="formulario.php" method="get">
        <p>Name:<input type="text" name="name"></p><br>
        <p>E-mail:<input type="text" name="email"></p><br>

        <input type="submit">
    </form>
    <h4>BEM VINDO <br> <?php echo $_GET["name"]; ?><br></h4> 
    SEU E-MAIL É: <?php echo $_GET["email"]; ?> -->

</body>
</html>