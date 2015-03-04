<?php
require_once('verificapagina.php');
require_once "conexao.php";
?>
<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Site Simples do Curso Code Education</title>
    <!--<form action="pesquisa.php" method="post">-->
    <form class="form-horizontal" role="form" method="POST" action="pesquisa.php">

        <div class="form-group">
            <label for="pesquisa" class="col-sm-1 control-label">Pesquisar:</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="Pesquisar">
            </div>

            <div class="col-sm-4">
                <button type="submit" name="edit_form_home" class="btn btn-success">Pesquisar</button>
            </div>

            <div class="col-sm-4">
                <a href="http://localhost/meusite/administracao/login.php" class="btn btn-large btn-warning">Acesso Área Administrativa</a>
            </div>

        </div>
   </form>

</head>

<body>
    <form name="contato" class="form-horizontal" role="form" method="post" action="enviarfaleconosco.php">

        <div class="form-group">
            <div class="col-sm-4">
                <legend for="legenda" class="col-sm-1 control-label">Dados:</legend>
            </div>
        </div>

        <div class="form-group">
            <label for="nome" class="col-sm-1 control-label">Nome:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="nome" name="nome" width=""  placeholder="Digite seu Nome...">
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-1 control-label">E-Mail:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="email" name="email" width=""  placeholder="Digite seu e-mail...">
            </div>
        </div>

        <div class="form-group">
            <label for="assunto" class="col-sm-1 control-label">Assunto:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="assunto" name="assunto" width=""  placeholder="Digite o assunto...">
            </div>
        </div>
        
        <div class="form-group">
            <label for="mensagem" class="col-sm-1 control-label">Mensagem:</label>
            <div class="col-sm-4">
              <textarea class="form-control" rows="5" name="mensagem" placeholder="Digite aqui sua mensagem..."></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-4">
                <button type="submit" name="edit_form_home" class="btn btn-info">Enviar</button>
            </div>
        </div>

    </form>
</body>

<footer>
    <?php require_once("rodape.php"); ?>
</footer>

</html>