<?php include('../bootstrap.php');?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>RMA Sistemas</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bootstrap/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../bootstrap/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-info">

                    <div class="panel-body">
                    <div class="panel-heading" align="center">
                    <!--<div class="os" align="center">
                        <img src="assets/images/logo_rma.jpg">
                    </div>-->
                    </div>
                        <form role="form" method="POST" action="logar.php">
                        <!--action="logar.php"-->

                            <div class="form-group">
                                <input type="text" maxlength="45" class="form-control" placeholder="Usuário" name="usuario" id="usuario" type="text" required autofocus value="">
                            </div>

                            <div class="form-group">
                                <input class="form-control" maxlength="45" placeholder="Senha" name="senha" id="senha" type="password" required value="">
                            </div>

                            <input type="hidden" value="1" name="_login_form">
                            
                            <div class="checkbox">

                                <label>
                                    <!--<input name="lembrarme" id="lembrarme" type="checkbox"> Lembrar usuario e senha </label>-->
                                </label>
                            </div>                               
                            <button class="btn btn-lg btn-primary btn-block" type="submit">ACESSAR</button>
                        </form>
                        <!--<a href="#" data-toggle="modal" data-target="#recuperaEmail"><h5>Esqueceu a senha?</h5></a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bootstrap/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../bootstrap/js/sb-admin-2.js"></script>

    <? include ('../include/modal.php'); ?>

</body>

</html>
