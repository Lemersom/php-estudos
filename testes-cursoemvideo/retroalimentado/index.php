<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários Retroalimentados</title>
</head>
<body>
    <?php 
        /*
        em action no formulario, poderia ser substituido por:
                                    <?= $_SERVER['PHP_SELF'] ?>  ou
                                    <?php $_SERVER["PHP_SELF"] ?>
        */

        //Declarando as variaveis
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>

    <h1>Formulário Retroalimentados</h1>

                  <!--Importante para a retroalimentação-->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">Valor 1: </label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>">
        <label for="v2">Valor 2: </label>
        <input type="number" name="v2" id="v2" value="<?=$valor2?>">
        <input type="submit" value="Somar" name="somar">
    </form>

    <section id="resultado">
            <h2>Resultado da Soma:</h2>

            <?php 
                /*daria para usar o isset() para só mostrar o resultado depois de clicar no submit*/
                $soma = $valor1 + $valor2;
                echo "$valor1 + $valor2 = $soma";
            ?>

    </section>
</body>
</html>