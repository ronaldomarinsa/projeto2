<?php

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rota = substr($dados_url['path'],1,strlen($dados_url['path']));

//Valida rota, e se for verdaira e permitida, vai para o arquivo solicitado sem a extensão do PHP.
rotas($rota);

//Verifica se o arquivo existe.
arqExiste($rota);



function rotas( $param) {

    $rotasValidas = ['contato','empresa','enviarfaleconosco','home','index','produtos','servicos'];

    if( in_array( $param, $rotasValidas)):
        return require_once($param.".php");
    elseif ( $param == ""):
        return require_once('home.php');
    else:
        //header("Status: 404 Not Found");
        return require_once("404.php");
    endif;
}


function arqExiste($param){

    $lRetorno = false;

    //Verifica se o $param veio diferente de vazio.
    if (trim($param) != ""){
        $nomearq = $param .".php";

        if (file_exists($nomearq)){
            $lRetorno = true;
        }
    }

    return $lRetorno;
}

?>




<?php
/*
require_once('retornarota.php');

$rota = retornaRota();
if($rota != "") {
    $rota = $rota. ".php";
}else{
    $rota = "home.php";
}
$result = file_exists($rota);
echo  $result;die;

//Verifica se arquivo existe.
if (file_exists($rota)) {
    $arquivoexiste = true;
} else {
    $arquivoexiste = false;
}

//Se econtrar a página, exibe, caso contrário, redireciona para a pág 404.php personalizada.
if ($arquivoexiste) {
    header("location: $rota");
} else {
    header("location: 404.php");
}


//Veriica se a rota existe.
if (validaRota() == false) {
    $resultadoRota = "Rota não existe";
    //echo $resultadoRota."<br>";
} else {

    $resultadoRota = "Rota exite";
    //echo $resultadoRota."<br>";
}

*/
?>
