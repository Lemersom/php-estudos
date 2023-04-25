<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preços</title>
</head>
<body>
    <h1>Reajustador de Preços</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="preco">Preço do produto (R$): </label>
        <input type="number" name="preco" id="preco">
        <label for="percent">Percentual de reajuste: </label>
        <input type="range" name="percent" value="0" id="percent" min="0" max="100" onload="mostrar_valor(this.value)" onchange="mostrar_valor(this.value)">
        <span id="slider_valor"></span>
        <input type="submit" value="Calcular" name="calcular">
    </form>
</body>
</html>
<script>
    function mostrar_valor(valor){
        document.getElementById('slider_valor').innerHTML = valor + "%"
    }
</script>
<?php 
    
    if(isset($_GET["calcular"])){
        $preco = $_GET["preco"];
        $percent = $_GET["percent"];

        $preco_novo = $preco + $preco * ($percent / 100);

        echo "<h2>Resultado do Reajuste</h2>";
        echo "<p>O produto que custava R$ " . number_format($preco, 2, ",", ".") . " vai passar a custar " . number_format($preco_novo, 2, ",", ".") . " com o aumento de {$percent}%.</p>";
    }
    
?>