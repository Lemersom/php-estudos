<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Manipulação de Strings</h1>

    <?php 
        //Diferença de Aspas duplas e simples

        $nome = "conteudo-var-nome";

        echo "Aspas Duplas: php \u{1F418}";
        echo "<br>";
        echo 'Aspas Simples: php \u{1F418}';
        echo "<br>";
        echo "Aspas Duplas: teste $nome";
        echo "<br>";
        echo 'Aspas Simples: teste $nome';
        echo "<br>";

        $testeDuplas = "php \u{1F418}";
        $testeSimples = 'php \u{1F418}';
        echo "Variavel Aspas Duplas: teste $testeDuplas";
        echo "<br>";
        echo "Variavel Aspas Simples: teste $testeSimples (no echo está com aspas duplas)";
        //Aspas simples não há a interpretação do conteudo

        //Concatenar:
        const ESTADO = "PR";
        echo "<p>Moro no " . ESTADO . "</p>";
        echo "Estamos no ano de " . date("Y");

        //Colocar aspas duplas na string usando sequencia de escape:
        $nome = "Rodrigo";
        $sobrenome = "Nogueira";
        echo "<p>$nome \"Minotauro\" $sobrenome</p>";

        //Heredoc:
        $cidade = "Cornelio";
        $ano = date("Y");

        echo <<< TESTE
            Heredoc: 
            Estou em $cidade
                    no ano de $ano
        TESTE;
        //em html nao muda, mas em texto segue as indentações

        echo "<br>";

        //Nowdoc:
        echo <<< 'TESTE'
            Nowdoc: 
            Estou em $cidade
                    no ano de $ano
        TESTE;


        /*
        Formatos de Strings
        -Double quoted (aspas duplas)
        -Single quoted (aspas simples)
        -Heredoc
        -Nowdoc

        Concatenar com o ponto . (double e single quoted)

        Sequencias de escape para usar em aspas duplas:
        \n   nova linha
        \t   tabulação horizontal
        \\   barra invertida(\)
        \$   mostrar sinal de cifrão
        \u{} codepoint unicode
        \"   mostrar aspas duplas   
        */
    ?>
</body>
</html>