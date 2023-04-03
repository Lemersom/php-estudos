<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form action="calculadora.php" method="post">
        <label for="num1">Num1: </label>
        <input type="number" name="num1" id="num1">
        <label for="num2">Num2: </label>
        <input type="number" name="num2" id="num2">
        <label for="operacao">Operação: </label>
        <input type="text" name="operacao" id="operacao" placeholder="+   -   *   /">

        <input type="submit" value="Enviar">
    </form>
    <hr>

    <?php 
        function soma($n1, $n2){
            return $n1 + $n2;
        }
        function sub($n1, $n2){
            return $n1 - $n2;
        }
        function multi($n1, $n2){
            return $n1 * $n2;
        }
        function divi($n1, $n2){
            return $n1 / $n2;
        }

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["operacao"];

        if($op == "+"){
            echo "<br>Resultado = " . soma($num1, $num2);
        } elseif($op == "-"){
            echo "<br>Resultado = " . sub($num1, $num2);
        } elseif($op == "*"){
            echo "<br>Resultado = " . multi($num1, $num2);
        } elseif($op == "/"){
            echo "<br>Resultado = " . divi($num1, $num2);
        }
    ?>
</body>
</html>