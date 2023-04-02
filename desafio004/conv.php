<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado da Conversão</h1>
    <?php 
        $dataInicio = date("m-d-Y", strtotime("-7 days")); //7 dias atras
        $dataFim = date("m-d-Y"); //dia de hoje
        //usar sequencia mdY por causa da api do banco central

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $dataInicio .'\'&@dataFinalCotacao=\''. $dataFim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        /*ao colocar as variaveis, prestar atenção em colocar aspas simples para fechar e o ponto para concatenar */

        $dados = json_decode(file_get_contents($url), true);
        //true para colocar dentro de um array
        //false para colocar dentro de um objeto

        //var_dump($dados); //usar para ver o caminho, como esta a estrutura

        echo "<hr>";

        $real = $_GET["real_input"] ?? 0;
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $dolar = $real / $cotacao;
        
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a ". numfmt_format_currency($padrao, $dolar, "USD") . " com cotação atual de " . numfmt_format_currency($padrao, $cotacao, "USD") . "</p>";
        
    ?>

    <p>Cotação obtida no site do <a href="https://www.bcb.gov.br/" target="_blank" rel="external">Banco Central do Brasil</a></p>

    <p><a href="javascript:history.back()">Voltar</a></p>
</body>
</html>