<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aantomia de uma Divisão</title>
</head>
<body>
    <h1>Anatomia de uma divisão</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="dividendo">Dividendo: </label>
        <input type="number" name="dividendo" id="dividendo">
        <label for="divisor">Divisor: </label>
        <input type="number" name="divisor" id="divisor">
        <input type="submit" value="Analisar" name="analisar">
    </form>
</body>
</html>
<?php 
    if(isset($_GET["analisar"])){
        $dividendo = $_GET["dividendo"];
        $divisor = $_GET["divisor"];

        $resto = $dividendo % $divisor;
        $cociente = (int) ($dividendo / $divisor);

        echo "<p>Dividendo: {$dividendo}<br>Divisor: {$divisor}<br>Resto: {$resto}<br>Cociente: {$cociente}</p>";
    }
?>