<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
</head>
<body>
    <?php 
        $sal_min = 1380;
    ?>
    <h1>Salário</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="salario">Salário(R$):</label>
        <input type="number" name="salario" id="salario" step="0.01">
        <p>Considerando um salário mínimo de R$ <?= number_format($sal_min, 2, ",", ".") ?></p>
        <input type="submit" value="Calcular" name="calcular">
    </form>
</body>
</html>
<?php 
    if(isset($_GET["calcular"])){
        $sal = $_GET["salario"];

        $restante = $sal;
        $cont = 0;
        while($restante >= $sal_min){
            $cont++;
            $restante -= $sal_min;
        } 
        /*
            $tot = intdiv($sal, sal_min);
            $restante = $sal % $sal_min;
        */
    
        echo "<h1>Resultado Final</h2>";
        echo "<p>Quem recebe um salário de R$ " . number_format($sal, 2, ",", ".") . " ganha {$cont} salários mínimos + R$ " . number_format($restante, 2, ",", ".") . "</p>";
    }
?>