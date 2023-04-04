<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset e Empty</title>
</head>
<body>
    <h1>Funções Isset e Empty</h1>
    <p>isset() retorna TRUE se a variavel está declarada e não nula</p>
    <p>empty() retorna TRUE se a variavel não está declarada, é falsa, nula ou ""</p>

    <hr>

    <?php 
        /*
        isset pode ser usado nos sites de estudo que aparecem warning de variavel não definida

        exemplo:
        if(isset($_POST["Enviar"])){
            $nome = $_POST["nome"];
        }

        com esse código a atribuição da variavel só vai acontecer ao clicar o botão de submit, logo não aparecerá os warnings

        IR PARA testes-freecodecamp/checkbox.php para exemplo
        */


        // --- isset ---
        echo "Usando isset: <br>";
        $user1 = "Usuário1";

        if(isset($user1)){
            echo "Variavel user1 foi declarada";
        }else{
            echo "Variavel user1 não foi declarada";
        }

        echo "<br>";

        $user2 = null;

        if(isset($user2)){
            echo "Variavel user2 foi declarada";
        }else{
            echo "Variavel user2 não foi declarada";
        }

        echo "<br>";

        //sem declarar

        if(isset($user3)){
            echo "Variavel user3 foi declarada";
        }else{
            echo "Variavel user3 não foi declarada";
        }

        echo "<br>";

        $user4 = "";

        if(isset($user4)){
            echo "Variavel user4 foi declarada";
        }else{
            echo "Variavel user4 não foi declarada";
        }



        // --- empty ---
        echo "<br><br>Usando empty:<br>";

        if(empty($user1)){
            echo "Variavel user1 está vazia";
        }else{
            echo "Variavel user1 não está vazia";
        }

        echo "<br>";

        if(empty($user2)){
            echo "Variavel user2 está vazia";
        }else{
            echo "Variavel user2 não está vazia";
        }

        echo "<br>";

        if(empty($user3)){
            echo "Variavel user3 está vazia";
        }else{
            echo "Variavel user3 não está vazia";
        }

        echo "<br>";

        if(empty($user4)){
            echo "Variavel user4 está vazia";
        }else{
            echo "Variavel user4 não está vazia";
        }
    ?>
</body>
</html>