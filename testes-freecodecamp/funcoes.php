<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Funções</h1>
    <p>Hello User usando funções</p>

    <form action="funcoes.php" method="get">
        <input type="text" name="user">
        <input type="submit" value="Enviar">
    </form>

    <?php 
        function helloUser($nome){
            echo "Hello $nome";
        }

        $user = $_GET["user"];

        helloUser($user);
    ?>
</body>
</html>