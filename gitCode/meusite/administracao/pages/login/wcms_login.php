<?php

if( !empty($_POST) && isset($_POST['_login_form']) ){
    $where = ['usuario' => $_POST['usuario'],
              'senha' => sha1($_POST['senha'])
             ];

    $result = wcms_db_select('usuarios', ['*'], $where);

    if( $result ){
        $_SESSION['usuario_dados'] = $result[0];
		
        //header("Location: " . WCMS_ADMIN_URL . '/index.php');

        if(isset($result) and $result['href_menu'] <> ''):
            header('location: http://localhost/meusite/administracao/'.$result['href_menu'].'.php' );
        else:
            //header("Status: 404 Not Found");
            return require_once(WCMS_ADMIN_URL . "404.php");
        endif;

    }else{
        header("Location: " . WCMS_ADMIN_URL . '/login.php');
    }

}
