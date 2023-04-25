<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
</head>
<body>
    <h1>Média Aritméticas</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="valor1">Valor 1: </label>
        <input type="number" name="valor1" id="valor1">
        <label for="peso1">Peso 1: </label>
        <input type="number" name="peso1" id="peso1">
        <label for="valor2">Valor 2: </label>
        <input type="number" name="valor2" id="valor2">
        <label for="peso2">Peso 2: </label>
        <input type="number" name="peso2" id="peso2">
        <input type="submit" value="Calcular Médias" name="calcular">
    </form>
</body>
</html>
<?php 
    if(isset($_GET["calcular"])){
        $valor1 = $_GET["valor1"];
        $peso1 = $_GET["peso1"];
        $valor2 = $_GET["valor2"];
        $peso2 = $_GET["peso2"];

        $media_simples = ($valor1 + $valor2) / 2;
        $media_ponderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
    
        echo "<h1>Calculo das Médias</h2>";
        echo "<p>Analisando os valores {$valor1} e {$valor2}:</p>";
        echo "<ul>
              <li>Média Simples = {$media_simples}
              <li>Média ponderada com os pesos {$peso1} e {$peso2} = {$media_ponderada}
              </ul>";
    }
?>