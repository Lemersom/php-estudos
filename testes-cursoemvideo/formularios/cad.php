<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            /*
            $_GET $_POST $_COOKIES
            a junção desses tres é $_REQUEST
            var_dump($_GET);
            */
            $first_name = $_GET["nome-input"] ?? "sem nome";
            $last_name = $_GET["sobrenome-input"] ?? "sem sobrenome";
            //nome e sobrenome vem do formulario
            /*explicando o ??
            se abrir primeiro o .php nao vai ter nada vindo de formulario
            o ?? é um operador de coalescência nula, caso nao vier nada, vai ser o que esta depois, mas é melhor apresentar um erro*/

            echo "<p>Dados recebidos<br>Nome: $first_name<br>Sobrenome: $last_name</p>";
        ?>
        <p><a href="javascript:history.back()">Voltar para a página anterior</a></p>
    </main>
</body>
</html>