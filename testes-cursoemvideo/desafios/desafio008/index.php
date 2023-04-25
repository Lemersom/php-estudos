<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz</title>
</head>
<body>
    <h1>Raiz de um número</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="num">Número: </label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Calcular Raizes" name="calcular">
    </form>
</body>
</html>
<?php 
    if(isset($_GET["calcular"])){
        $num = $_GET["num"];

        $raiz_quad = $num ** (1/2);
        $raiz_cubi = $num ** (1/3);
    
        echo "<h1>Resultado Final</h2>";
        echo "<p>Analisando o número {$num}:</p>";
        echo "<ul>
              <li>Raiz quadrada: {$raiz_quad}
              <li>Raiz cúbica: {$raiz_cubi}
              </ul>";
    }
?>