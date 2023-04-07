<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobais</title>
</head>
<body>
    <h1>SuperGlobais</h1>

    <!--o <pre> é util para estudos usando var_dump(), arrumando a visualização de arrays, o var_dump() não estará em produtos finais-->

    <pre>
        <?php              //time() quantos segundos o cookie vai durar            
            setcookie("dia-da-semana", "Terça", time() + 3600);

            session_start();
            $_SESSION["teste"] = "SESSION funcionando";


            echo "<h2>Superglobal GET</h2>";
            var_dump($_GET); //?nome=John&idade=40  (Query String) na barra de pesquisa

            echo "<h2>Superglobal POST</h2>";
            var_dump($_POST);

            echo "<h2>Superglobal REQUEST</h2>";
            var_dump($_REQUEST);

            echo "<h2>Superglobal COOKIE</h2>";
            var_dump($_COOKIE);

            echo "<h2>Superglobal SESSION</h2>";
            var_dump($_SESSION);

            echo "<h2>Superglobal ENV</h2>"; //enviroment
            var_dump($_ENV);
            /*
            foreach(getenv() as $c => $v){
                echo "<br>$c -> $v";
            }
            */

            echo "<h2>Superglobal SERVER</h2>";
            var_dump($_SERVER);

            echo "<h2>Superglobal GLOBALS</h2>";
            var_dump($GLOBALS); //mostra todas as superglobais
        ?>
    </pre>
</body>
</html>