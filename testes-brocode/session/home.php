<?php 
    //tambem precisa inicar a session aqui
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Session</h1>
    <h2>Dados que vieram da página de login por SESSION:</h2>

    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>

<?php
    echo "<br>Usuario: {$_SESSION["usuario"]} <br>
    Senha: {$_SESSION["senha"]}";

    if(isset($_POST["logout"])){
        session_destroy();  //destruir a session atual (destroi os dados)
        header("Location: index.php"); //voltar para a tela de login
    }
?>