<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analise</title>
</head>
<body>
    <?php 
        $num_real = $_GET["num_real"] ?? 0;

        $parte_inteira = (int) $num_real;

        $parte_decimal = $num_real - $parte_inteira;

        echo "Número digitado: " . number_format($num_real, 3, ",", ".") . 
             "<br> Parte inteira: " . number_format($parte_inteira, 0, ",", ".") . 
             "<br> Parte decimal: " . number_format($parte_decimal, 3, ",", ".");
    ?>

    <p><a href="javascript:history.back()">Voltar</a></p>
</body>
</html>