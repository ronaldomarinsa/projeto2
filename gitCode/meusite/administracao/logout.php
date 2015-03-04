<?php

if ( isset($_SESSION['logado']) ) {
    unset($_SESSION['logado']);
    unset($_SESSION['usuario']);

}

header('location: http://localhost/meusite/administracao/login.php');