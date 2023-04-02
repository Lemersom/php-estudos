<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor-php</title>
</head>
<body>
    <h1>Resultado: </h1>
    <?php 
        $numero = $_GET["numero_input"] ?? 0;
        $sucessor = $numero + 1;
        $antecessor = $numero - 1;

        echo "<p>O número $numero tem como sucessor $sucessor e como antecessor $antecessor</p>";
    ?>

    <p><a href="javascript:history.back()">Voltar para a página anterior</a></p>
</body>
</html>