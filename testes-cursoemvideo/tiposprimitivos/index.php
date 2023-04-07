<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php 
        $hexadecimal = 0x1A;
        $binario = 0b1011;
        $octal = 010;

        echo "<p>valor da variavel hexadecimal: $hexadecimal</p>";
        echo "<p>valor da variavel binario: $binario</p>";
        echo "<p>valor da variavel octal: $octal</p>";

        $valor = 3e2; // 3 * 10**2

        echo "<p>Valor de 3e2: $valor</p>";

        $v = 300;
        $v1 = true;
        $v2 = "variavel string";
        var_dump($v);
        echo "<br>";
        var_dump($v1);
        echo "<br>";
        var_dump($v2);

        /* 
        Anotação tipo primitivo:
        0x = hexadecimal  0b = binario  0 = octal

        0x1A é considerado um int

        3e2 é 3 vezes (10 elevado ao quadrado), considerado float
        5e3 é 5 * 10**3

        coerção:
        é considerado float mas pode forçar virar int com $num= (int) 3e2;

        uma string em float $var = (float) "980";


        boleano:
        no echo true é 1 e false é vazio
        */
    ?>
</body>
</html>