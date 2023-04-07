<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Constantes</title>
</head>
<body>
    <?php 
        $variavel = "variavel com cifrão";
        const CONSTANTE = "constante com const";

        echo "<p>teste de variavel: $variavel</p>";
        echo "<p>teste de constante: " . CONSTANTE . "</p>";

        /*
        Regras:
        Variaveis sempre começam com o simbolo $
        O segundo pode ser letra ou o simbolo underline _
        Aceita a-z A-Z 0-9 e _
        Aceita caracteres ASCII a partir de 128
        Pode colocar acento (não recomendado)
        É case-senditive. maiusculo e minusculo tem diferença
        Nomes especiais como $this nao podem ser usados

        Recomendações:
        variaveis letras minusculas
        constantes letras maiusculas
        para metodo e atributo usar camelCase
        para nomear constantes usar SNAKE_CASE
        */
    ?>
</body>
</html>

