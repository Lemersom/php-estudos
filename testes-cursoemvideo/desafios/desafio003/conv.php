<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php 
        $valor = floatval($_GET["moeda_input"]);
        $cotacao = 5.07;
        $convertido = $valor / $cotacao;

        /*

        echo "R\$" . number_format($valor, 2, ",", ".") . " equivalem a US\$" . number_format($convertido, 2, ",", ".");
        
                        a     b   c    d
        number_format($valor, 2, ",", ".")

        a = valor que vai ser formatado
        b = casas decimais depois da virgula
        c = separador de decimal
        d = separador de milhar
        */

        //Formatação de moedas com internacionalização:
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $convertido, "USD");

        /*Biblioteca intl (Internalization PHP)
        alterar o $padrao para aparecer como funciona em outros paises

        numfmt_create("pt_PT", NumberFormatter::CURRENCY);
        numfmt_create("us", NumberFormatter::CURRENCY);
        numfmt_create("ru_RU", NumberFormatter::CURRENCY);

        para funcionar eu tive que procurar por intl no php.ini
        */
    ?>

    <p>Usando a cotação de US$ 5,07</p>
    <p><a href="javascript:history.back()">Voltar</a></p>
</body>
</html>