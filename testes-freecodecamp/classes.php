<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>

    <h1>Classes e Objetos</h1>
    
    <?php 
        class Aluno{
            public $nome;
            public $sobrenome;
            public $idade;

            private $media; //private

            //constructor:
            function __construct($pNome, $pSobrenome, $pIdade, $pMedia){
                $this->nome = $pNome; //this referencia o objeto criado
                $this->sobrenome = $pSobrenome;
                $this->idade = $pIdade;
                $this->media = $pMedia; //posso mudar aqui para
            }                           //$this->setMedia($pMedia);

            function analisarMedia(){
                if($this->media >= 6.0){
                    return "true"; //no echo seria 1
                }else{
                    return "false"; //no echo nao apareceria
                }                   //string apenas para o teste
            }

            //funções get e set
            public function getMedia(){
                return $this->media;
            }
            public function setMedia($novaMedia){
                $this->media = $novaMedia;
            }

        }

        //Exemplo de Herança:
        class Musico extends Aluno {
            public $instrumento;
            public $banda;

            function __construct($nome, $sobrenome, $idade, $media, $instrumento, $banda) {
                $this->nome = $nome;
                $this->sobrenome = $sobrenome;
                $this->idade = $idade;
                $this->setMedia($media);//tem que ser assim por causa do private
                $this->instrumento = $instrumento;
                $this->banda = $banda;
            }

            function tocarMusica(){
                echo "<br>Tocando uma música<br>";
            }
        }



        /* Sem usar o constructor
        $pessoa1 = new Pessoa;
        $pessoa1->nome = "Paul";
        $pessoa1->sobrenome = "McCartney";
        $pessoa1->idade = 80;
        
        $pessoa2 = new Pessoa;
        $pessoa2->nome = "John";
        $pessoa2->sobrenome = "Lennon";
        $pessoa2->idade = 40;
        */

        //usando constructor
        $pessoa1 = new Aluno("Paul", "McCartney", 80, 8.0);
        $pessoa2 = new Aluno("John", "Lennon", 40, 7.5);

        //pessoa2->idade = 80;   como mudar variaveis publicas


        echo "$pessoa1->nome $pessoa1->sobrenome, $pessoa1->idade anos<br>";
        echo "$pessoa2->nome $pessoa2->sobrenome, $pessoa2->idade anos<br>";
        echo "<br>";

        $pessoa2->setMedia(5.5);

        echo "Média de $pessoa1->nome é igual a " . $pessoa1->getMedia() . "<br>Passou = " . $pessoa1->analisarMedia();
        echo "<br>Média de $pessoa2->nome é igual a " . $pessoa2->getMedia() . "<br>Passou = " . $pessoa2->analisarMedia();

        
        //herança
        echo "<br><br><br>Exemplo de Herança:<br><br>";
        $musico1 = new Musico("George", "Harrison",58, 6.0, "Guitarra", "The Beatles");
        
        echo "$musico1->nome $musico1->sobrenome, $musico1->idade anos<br>";
        echo "Média de $musico1->nome é igual a " . $musico1->getMedia() . "<br>Passou = " . $musico1->analisarMedia();
        echo "<br><br>O músico $musico1->nome toca $musico1->instrumento na banda $musico1->banda";
        
        $musico1->tocarMusica();
    ?>

</body>
</html>