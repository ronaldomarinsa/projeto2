<!DOCTYPE html>
<html>
<head>
    <title>Site simples em PHP - Estilizado com BootStrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
    <?php require_once("menu.php"); ?>

    <div>
        <?php
        require_once('verificapagina.php');
        //require_once($_GET["pagina"]);
        ?>
    </div>

    <!--<h1>home!!</h1>
    <p>Carregou o home</p> -->

    <?php require_once("rodape.php"); ?>

    <script src="/bootstrap/js/jquery.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


<!--
<HTML>
    <HEAD>
        <TITLE> Site simples em PHP </TITLE>
    </HEAD>

    <BODY>

        < ?php require_once("menu.php"); ?>

        <h1>home!!</h1>
        <p>Carregou o home</p>

        < ?php require_once("rodape.php"); ?>

    </BODY>
</HTML>
-->