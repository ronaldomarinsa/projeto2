<?php


//function somar($x, $y){
//    echo "Preparando para executar a soma: <br>";
//    return $x + $y . "<br />";
//}
//
//function multiplicar($x, $y){
//    echo $x * $y . "<br />";
//}

//$resultado =  somar(10,50);
//echo $resultado;

/*
function exemplo($x){
    echo $x . "<br>";
}
*/


//$nome = "Ronaldo";
//$sobrenome = "Marins";
//
//$exibe = function ($x) use($nome, $sobrenome){
//            echo $x .' - '. $nome .' '. $sobrenome . "<br>";
//        };
//
//$array = [1,2,5,6,8,9,60,90,145,567];
//
//array_walk($array, $exibe);

echo '<h2>Passagem de valores na função anônima por referência</h2>';

$nome = "Wesley";
$arr     = [1,2,3,4,5,6,7,8,9];

echo 'Valor nome ANTES de entrar na função: ' .$nome .'<br />';
$exibe = function( $x ) use( &$nome ) {
    $nome = 'Ronaldo Marins';
    echo 'x = ' . $x .' - Nome= '. $nome . '<br />';
};

array_walk( $arr, $exibe );

echo 'Valor nome APOS de entrar na função: ' .$nome .'<br />';

