<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .error {color: #FF0000;}
    </style>
    <title>formulario</title>
</head>
<body>
    <?php
    // define variáveis ​​e define valores vazios
    $nomeE = $emailE = $websiteE = $generoE = "";
    $nome = $email = $website = $genero = $comentario = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nome"])) {
            $nomeE = "O nome é obrigatório";
        }else {
           $nome = test_input($_POST["nome"]); 
        }
        
        if (empty($_POST["email"])) {
            $emailE = "O email é obrigatório";
        }else {
           $email = test_input($_POST["email"]); 
        }

        if (empty($_POST["website"])) {
            $website = "";
        }else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["comentario"])) {
            $comentario = "";
        }else {
            $comentario = test_input($_POST["comentario"]);
        }
        
        if (empty($_POST["genero"])) {
            $generoE = "O Gênero é obrigatório";
        }else {
            $genero = test_input($_POST["genero"]);
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data; 
    }

    ?>
    <h1>FORMULÁRIO</h1>
    <p><span class="error">* obrigatório</span></p> <!-- mensagem de obrigatório -->
    <form action="form-2.php" method="post"> <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <p>Nome:</p><input type="text" name="nome">
        <span class="error">* <?php echo $nomeE;?></span>  <!-- pega a variável declarada no php (if) -->
        <p>E-mail:</p><input type="text" name= "email"> 
        <span class="error">* <?php echo $emailE;?></span>
        <p>Website:</p><input type="text" name="website">
        <p>Comentários</p><textarea name="comentario" rows="5" cols="40"></textarea>
        <br>
        <p>Gênero</p>
        <input  type="radio" name="genero" value="Feminino">Feminino
        <input type="radio" name="genero" value="Masculino">Masculino
        <input type="radio" name="genero" value="Outros">Outros
        <span class="error">* <?php echo $generoE;?></span>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    echo "<h2>DADOS</h2>";
    echo $nome;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $genero;
    echo "<br>";
    echo $comentario;
    echo "<br>";
    ?>

</body>
</html>