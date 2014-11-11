<?php
session_start();

$usuario = "admin";
$senha = 123;

if($usuario == "admin" and $senha == 123){
    $_SESSION['logado'] = 1;
    echo "Usuário Logado!!!";
}else{
    $_SESSION['logado'] = 0;
    echo "Usuário e/ou Senha Inválida!!!";
}
