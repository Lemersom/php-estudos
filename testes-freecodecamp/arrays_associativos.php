<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Associativos</title>
</head>
<body>
    <h1>Arrays Associativos</h1>
    <p>Alunos: John, Paul, George, Ringo</p>

    <form action="arrays_associativos.php" method="get">
        <input type="text" name="aluno">
        <input type="submit" value="Enviar">
    </form>

    <?php 
        $alunos_notas = ["John"=>"9", "Paul"=>"10", "George"=>"6", "Ringo"=>"4"];

        $alunos_notas["Ringo"] = "3";

        echo "O aluno " . $_GET["aluno"] . " possui a nota: " . $alunos_notas[$_GET["aluno"]];

        foreach($alunos_notas as $key => $value){
            echo "<br> {$key} = {$value}";
        }

        /*
        array_pop($array) remove o ultimo elemento
        array_shift($array) remove o primeiro elemento
        
        $keys = array_keys($array) armazena as keys do array
        $values = array_values($array) armazena os values do array
        exemplo do foreach de keys:
            foreach($keys as $key){
            echo "<br> {$key}";
        }
        exemplo do foreach de values:
            foreach($values as $value){
            echo "<br> {$value}";
        }

        $invertido = array_flip($array) inverte as keys e values de lugar
        $reverso = array_reverse($array) inverte a ordem

        echo count($array) conta um array
        */
    ?>
</body>
</html>