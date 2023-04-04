<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBox e Arrays</title>
</head>
<body>
    <h1>CheckBox e Arrays</h1>
    <form action="checkbox.php" method="post"> <!--post para nao mostrar na url-->
        <input type="checkbox" name="frutas[]" value="abacaxi" id="fruta1">
        <label for="fruta1">Abacaxi</label>
        <input type="checkbox" name="frutas[]" value="amora" id="fruta2">
        <label for="fruta2">Amora</label>
        <input type="checkbox" name="frutas[]" value="laranja" id="fruta3">
        <label for="fruta3">Laranja</label>

        <input type="submit" name="env_submit" value="Enviar">
    </form>

    <?php 
    //IR PARA testes-brocode/isset_empty.php para explicações
    
        if(isset($_POST["env_submit"])){
            $frutas = $_POST["frutas"];

            echo "<ul>";
            foreach($frutas as &$item){
                echo "<li>$item";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>