<?php

require_once('retornarota.php');

$rota = retornaRota();
$rota = $rota .".php";

//Verifica se arquivo existe.
if(file_exists($rota)){
    $arquivoexiste = true;
}else{
    $arquivoexiste = false;
}

//Se econtrar a página, exibe, caso contrário, redireciona para a pág 404.php personalizada.
if($arquivoexiste){
    header("location: $rota");
}else{
    header("location: 404.php");
}


//Veriica se a rota existe.
if (validaRota() == false){
    $resultadoRota = "Rota não existe";
    //echo $resultadoRota."<br>";
}else{
    $resultadoRota = "Rota exite";
    //echo $resultadoRota."<br>";
}

?>


<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <title>Site simples em PHP - Estilizado com BootStrap</title>-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <!-- Bootstrap -->-->
<!--    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">-->
<!--</head>-->
<!---->
<!--<body>-->
<!--    --> <?php //require_once("menu.php"); ?>
<!---->
<!--    <div>-->
<!--        --><?php
//        require_once('verificapagina.php');
//        //require_once($_GET["pagina"]);
//        ?>
<!--    </div>-->
<!---->
<!--    --><?php //require_once("rodape.php"); ?>
<!---->
<!--    <script src="/bootstrap/js/jquery.js"></script>-->
<!--    <script src="/bootstrap/js/bootstrap.min.js"></script>-->
<!--</body>-->
<!--</html>-->
<!---->

