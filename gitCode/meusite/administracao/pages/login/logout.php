<?php

if ( isset($_SESSION['usuario_dados']) ) {
    unset($_SESSION['usuario_dados']);
}

header("Location: " . WCMS_ADMIN_URL . "/login.php");