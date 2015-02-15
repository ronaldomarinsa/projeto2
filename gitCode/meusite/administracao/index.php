<?php

ob_start();

$action = strip_tags( filter_input(INPUT_GET, 'action') );

include('../bootstrap.php');

include(WCMS_ADMIN_DIR . '/administracao/pages/login/check_login.php');

include(WCMS_ADMIN_DIR . '/administracao/pages/header.php');

switch ($action) {
    case 'login':
        include(WCMS_ADMIN_DIR . '/administracao/pages/login/wcms_login.php');
        break;
    case 'logout':
        include(WCMS_ADMIN_DIR . '/administracao/pages/login/logout.php');
        break;

    //Usuarios

    case 'usuarios':
        include(WCMS_ADMIN_DIR . '/administracao/pages/usuarios/usuarios.php');
        break;
    case 'edit_usuarios':
        include(WCMS_ADMIN_DIR . '/administracao/pages/usuarios/edit_usuarios.php');
        break;
    case 'save_usuarios':
        include(WCMS_ADMIN_DIR . '/administracao/pages/usuarios/save.php');
        break;
    case 'delete_usuarios':
        include(WCMS_ADMIN_DIR . '/administracao/pages/usuarios/delete_usuarios.php');
        break;
    
    default:
        include(WCMS_ADMIN_DIR . '/administracao/pages/index/index.php');
        break;
}

include(WCMS_ADMIN_DIR . '/administracao/pages/footer.php');

ob_end_flush();

