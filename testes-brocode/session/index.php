<?php
    //iniciando a session
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>Session</h1>

    <!--
    Session é uma variavel superglobal que guarda as informações de um usuario, essas informações serão usadas em multiplas páginas
    Um usuario tem uma session-id atribuida a ele, e como exemplo temos as credenciais de login
    -->

    <h2>Tela de Login</h2>
    <form action="index.php" method="post">
        <label for="user">Usuario: </label>
        <input type="text" name="user" id="user"> <br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha"> <br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php 
    //se apertar o botao de login
    if(isset($_POST["login"])){
                //se usuario e senha não estiverem vazios
        if(!empty($_POST["user"]) && !empty($_POST["senha"])){

                                   //usar um filtro aqui em projetos
            $_SESSION["usuario"] = $_POST["user"];
            $_SESSION["senha"] = $_POST["senha"];

            //para ir até a página home
            header("Location: home.php");
        }
        else{
            echo "Usuário ou Senha estão faltando <br>";
        }
    }
?>