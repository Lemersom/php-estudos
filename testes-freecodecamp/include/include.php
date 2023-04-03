<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    
    <?php include "header.html" ?>

    <h1>Teste usando include de php</h1>

    <?php
        echo "Include 1:<br>";
        $nome = "Paul";
        $idade = 78;
        include "arqIncluido1.php";


        echo "<br>Include 2:<br>";
        include "arqIncluido2.php";
        echo "<br>Cidade: $cidade"; //var do outro arquivo
        echo "<br>Função helloUser: ";
        helloUser($nome); //função do outro arquivo
    ?>

    <?php include "footer.html" ?>
</body>
</html>