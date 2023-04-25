<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
</head>
<body>
    <h1>Calculadora de Tempo</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="segundos">Total de segundos: </label>
        <input type="number" name="segundos" id="segundos">
        <input type="submit" value="Calcular" name="calcular">
    </form>
</body>
</html>
<?php 
    
    if(isset($_GET["calcular"])){
        $segundos = $_GET["segundos"];
        
        $semanas = 0;
        $dias = 0;
        $horas = 0;
        $minutos = 0;

        while($segundos > 0){
            if($segundos >= 604800){
                $semanas++;
                $segundos -= 604800;
            }
            else if($segundos >= 86400){
                $dias++;
                $segundos -= 86400;
            }
            else if($segundos >= 3600){
                $horas++;
                $segundos -= 3600;
            }
            else if($segundos >= 60){
                $minutos++;
                $segundos -= 60;
            }
            else{
                break;
            }
        }
        

        echo "<h2>Resultado</h2>";
        echo "Analisando, {$_GET["segundos"]} segundos equivalem a:";
        echo "<ul>
              <li> {$semanas} semanas
              <li> {$dias} dias
              <li> {$horas} horas
              <li> {$minutos} minutos
              <li> {$segundos} segundos
              </ul>";
    }
    
?>