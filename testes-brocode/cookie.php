<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h1>Cookie</h1>

    <!--
    Cookies são informações do usuario armazenadas no navegador web
        Principalmente usado para: anuncios, preferencias do navegador e outros dados que não são sensiveis
    -->

    <?php 
        setcookie("fav_fruta", "laranja", time() + (86400 * 2), "/");
                 //key, value, tempo para expiração, caminho do arquivo        
                               //86400 seg = 1 dia (vezes 2 será dois dias)

        setcookie("fav_bebida", "suco", time() + 86400, "/");
        setcookie("fav_doce", "chocolate", time() + (86400 * 3), "/");

        //Deletando um Cookie    time() - 0
        setcookie("fav_fruta", "laranja", time() - 0, "/");

        foreach($_COOKIE as $key => $value){
            echo "$key = $value <br>";
        }

        if(isset($_COOKIE["fav_bebida"])){
                                       //usar {} pode ajudar
            echo "<br>Tome um pouco de {$_COOKIE["fav_bebida"]} <br>";
        }
        else{
            echo "<br>Sua bebida favorita não está nos cookies<br>";
        }

        /*
        para visualizar os cookies: inspecionar->application->cookies
        */
    ?>
</body>
</html>