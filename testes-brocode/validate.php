<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate</title>
</head>
<body>
    <h1>Validate Inputs (filtrando)</h1>
    <p>Para impedir que o usuario escreva códigos maliciosos no formulário (cross-site scripting) é necessário filtrar os inputs</p>

    <form action="validate.php" method="post">
        <label for="user">Usuário: </label>
        <input type="text" name="user" id="user">
        <label for="idade">Idade: </label>
        <input type="text" name="idade" id="idade">
        <label for="email">Email: </label>
        <input type="text" name="email" id="email">

        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>
<script>
    console.log("Vírus");
</script>

<?php 
    if(isset($_POST["login"])){

        $idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if(empty($idade)){
            echo "<br>Idade não atendeu os requisitos de validação / validate";
        }
        else{
            echo "<br>Você tem $idade anos";
        }

        if(empty($email)){
            echo "<br>Email não atendeu os requisitos de validação / validate";
        }
        else{
            echo "<br>Seu email é $email";
        }
    }

    /*
    Sanitize vai limpar os chars que devem ser filtrados e manter os outros
    Validate vai retornar uma string vazia se não atender aos requisitos
    */
?>