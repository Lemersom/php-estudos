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
    ?>
</body>
</html>