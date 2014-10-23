<?php

function retornaRota(){
    $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $path = str_replace("/","",$rota['path']);
    return $path;

}

function validaRota(){
    $rotas = ['contato','empresa','enviarfaleconosco','home','index','produtos','servicos'];
    $lret = false;

    foreach($rotas as $rota){
        If($rota == retornaRota()){
            $lret = true;
        }
    }

    return $lret;
}

?>
