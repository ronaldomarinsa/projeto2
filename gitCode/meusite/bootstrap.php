<?php
session_start();
date_default_timezone_set('America/Recife');

ini_set('default_charset', 'utf-8');


//define('WCMS_BASE_DIR', dirname(dirname(__FILE__)) . '/wcms');
define('WCMS_BASE_DIR', __DIR__ );
define('WCMS_SITE_DIR', WCMS_BASE_DIR );
define('WCMS_ADMIN_DIR', WCMS_BASE_DIR );
define('WCMS_UPLOAD_DIR', WCMS_SITE_DIR );

define('WCMS_BASE_URL', 'http://localhost/meusite');
define('WCMS_SITE_URL', WCMS_BASE_URL);
define('WCMS_ADMIN_URL', WCMS_BASE_URL . '/administracao' );
define('WCMS_UPLOAD_URL', WCMS_SITE_URL .'/administracao' );

define('WCMS_PROJECT_NAME', 'Site Simples CodeEducation');

include( WCMS_ADMIN_DIR . '/api/database_api.php');
//include( WCMS_ADMIN_DIR . '/api/usuarios_api.php');


include( WCMS_ADMIN_DIR . '/include/utils.php');
include( WCMS_ADMIN_DIR . '/include/validacoes.php');
include( WCMS_ADMIN_DIR . '/database/conn.php');

