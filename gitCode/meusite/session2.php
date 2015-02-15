<?php
session_start();

if(isset($_SESSION["logado"]) and $_SESSION["logado"] == 1){
    echo "Acessei a área restrita!!!";
}else{
    echo "Você não tem permissão para acessar a área restrita!";
}

