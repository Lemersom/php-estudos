<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <h1>Server</h1>
    
    <!--
    SERVER é uma variavel superglobal que armazena headers, paths e localizações de scripts
    As entradas nesse array são feitas pelo servidor web
    Mostra quase tudo que é preciso saber sobre o ambiente da pagina atual
    -->
                    <!--htmlspecialchars usado para evitar cross-site scripting-->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <br>
</body>
</html>

<?php
    /*
    foreach ($_SERVER as $key => $value){
        echo "{$key} = {$value} <br>";
    }*/

    //keys importantes: PHP_SELF e REQUEST_METHOD

    //PHP_SELF é a localização dessa página(do nome do arquivo) 

    /*REQUEST_METHOD é se é get ou post, existem outras formas de fazer submit, então ao invez de usar o isset() no submit, pode-se usar o isset() no REQUEST_METHOD*/

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "REQUEST_METHOD Usando POST";
    }
?>