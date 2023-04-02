<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
</head>
<body>
    <h1>Números Aleatórios</h1>

    <?php 
        $num = mt_rand(0, 100);

        echo "<p>Gerando um número aleatório entre 0 e 100</p>";
        echo "<p>O valor gerado foi: $num</p>";

        /*
        Usando php
        rand() - 1951 Linear Congrential Generator
        mt_rand() - 1997 Mersenne Twister

        a partir da versao 7.1 rand() usa mt_rand(), mas mesmo assim recomendado usar mt_rand()

        random_int() gera numeros aleatorios criptograficamente seguros, gerar hashs, senhas, tudo relacionado a segurança
        */
    ?>

    <button onclick="javascript:document.location.reload()">Gerar número</button>
</body>
</html>