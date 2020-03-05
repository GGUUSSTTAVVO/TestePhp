<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
<?php
    $nome = "gustavo";
?>

    <h1><?php echo $nome; ?> </h1>

    <!-- condicionais-->
    <?php
        $idade = 19;
        if($idade > 17){
            echo "pode levar";
        }else{
            echo "não vai levar";
        }

    ?>

    <!--exercicios de if e else -->

  
    <p>Exercicio de condicionais</p>
    <p>1 - verificar se uma pessoa  deve votar ou não,ou se ela tem voto facultativo</p>

    <?php
    $idade2 =40;
    if($idade2 >= 18 && $idade2 <= 70 ){
        echo "precisa votar";
        
    }else if ($idade2 < 16){
        echo "não pode votar";
    
    }else{
        echo "não é obrigado votar";
    }
    ?>
    <p> exercicios de condeicionais - switch</p>
    <p>Verificar  se uma é 0 p retorno, voce informou o valor0 ou se a variavel
    é 1 retonar , voce informou o valor1 ou se a variavel é qualquer outro nmero e retornar o valor informado</p>
    
    <?php

        switch($escolhaNumero){
        case:"0"
            echo "o valor inforamdo " .$escolhaNumero;
            break;
        case:"1"
           echo "o valor informado $escolhaNumero";
            break;        
        default:
            echo "o valor informado $escolhaNumero";
            break;        
        }
    ?>

    <hr>
    <h1>Arrays</h1>
    <?php
           $animais = ["cachorro","gato","girafa","elefante"]
        <pre>
           var_dump($animais);
        </pre>
    ?>  

<hr>
<h1>arrays asscociativo</h1>

<?php
    $ususario =[
     "email" => "gu32015@yahhii"
        "senha" =>"rtestgdtg"
     ]

?>
   <?php

$arr = [0,1,2,3,4,5,6,7,8,9,10];
$tabuadaDe = 3;

foreach ( $arr as $item ) {

    echo $item * $tabuadaDe . "<br>";

}
DESAFIO: CRIAR A TABELA DE TABUADA DE 0 A 10
?>

<?php
    $arraySimples = [0,1,2,3,"quatro","cinco"];
    var_dump($arraySimples);

    $arrayAssociativo = ["nome" => "Fulano", "sobrenome" => "da Silva", "idade" => 33];
    var_dump($arrayAssociativo);
    ?>



</body>
</html>