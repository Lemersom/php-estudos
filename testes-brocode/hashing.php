<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing</title>
</head>
<body>
    <h1>Hashing</h1>

    <!--
    Hashing: transformar dados sensivos(senhas) em letras, numeros, simbolos... atravez de processos matematicos
    Similar à Criptografia
    Esconde o dado original de terceiros(hackers)
    Se for preciso salvar a senha no banco de dados, o que será guardado será o hash
    -->

</body>
</html>

<?php 
    $senha = "thebeatles123";

                        //senha   algoritmo de hash
    $hash = password_hash($senha, PASSWORD_DEFAULT);

    //no php PASSWORD_DEFAULT usa o algoritmo bcrypt

    echo $senha;
    echo "<br>";
    echo $hash;


    echo "<br><br>Teste passando a senha incorreta para o verify:<br>";
     //para verificar se o hash é dessa senha
    if(password_verify("rollingstones123", $hash)){
        echo "Você está LOGADO";
    }
    else{
        echo "Senha INCORRETA";
    }

    echo "<br><br>Teste passando a senha correta para o verify:<br>";
    if(password_verify("thebeatles123", $hash)){
        echo "Você está LOGADO";
    }
    else{
        echo "Senha incorreta";
    }
?>