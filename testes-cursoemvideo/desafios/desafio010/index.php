<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Idade</title>
</head>
<body>
    <h1>Calculando a idade</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="ano_nasc">Ano de nascimento: </label>
        <input type="number" name="ano_nasc" id="ano_nasc">
        <label for="ano_calc">Ano para calcular idade (atualmente estamos em <?= date("Y")?>):</label>
        <input type="number" name="ano_calc" id="ano_calc">
        <input type="submit" value="Calcular" name="calcular">
    </form>
</body>
</html>
<?php 
    if(isset($_GET["calcular"])){
        $ano_nasc = $_GET["ano_nasc"];
        $ano_calc = $_GET["ano_calc"];
    
        $idade = $ano_calc - $ano_nasc;

        echo "<h1>Resultado</h2>";
        echo "<p>Quem nasceu em {$ano_nasc} vai ter {$idade} anos em {$ano_calc}</p>";
    }
?>