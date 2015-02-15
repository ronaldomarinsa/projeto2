<?php

if( isset($_SESSION['usuario_dados']) ){
    $usuario_dados = $_SESSION['usuario_dados'];

    $where = ['usuario' => $usuario_dados->usuario, 'senha' => $usuario_dados->senha];
    $result = wcms_db_select('usuarios', ['*'], $where);

    if( ! $result ){
        unset($_SESSION['usuario_dados']);
        header("Location: " . WCMS_ADMIN_URL . '/login.php');
    }
}else{
    header("Location: " . WCMS_ADMIN_URL . '/login.php');
}