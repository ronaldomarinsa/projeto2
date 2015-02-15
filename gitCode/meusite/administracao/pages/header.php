<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="RMASistema" content="">

    <title>RMA Sistemas</title>

    <!-- Bootstrap Core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS-->
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- DataTables CSS-->
    <link href="assets/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Jquery UI CSS-->
    <link href="assets/css/jquery-ui.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>



<body>

    <div id="wrapper">

		<!-- barra superior -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">RMA Sistemas</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">RMA Sistemas</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?= do_action('logout'); ?>"><i class="fa fa-power-off fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
           <!-- /barra superior-->

           <!-- menu -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--<li class="sidebar-search">
                            <div class="disableSelect custom-search-form">
                                <input type="text" class="form-control" placeholder="Pesquisar">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li>-->
                        <li>
                            <a class="active" href="<?= do_action('index'); ?>"><i class="fa fa-desktop fa-fw"></i> Resumo</a>
                        </li>

                        <!-- MENU ATUALIZAÇÔES -->

                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Atualizações <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= do_action('grupofornecedores'); ?>">Cadastro Grupo de Fornec.</a>
                                </li>
                                <li>
                                    <a href="<?= do_action('fornecedores'); ?>">Cadastro de Fornecedores</a>
                                </li>
                                <li>
                                    <a href="<?= do_action('bancos'); ?>">Cadastro de Banco</a>
                                </li>
                            </ul>
                        </li>

                        <!-- MENU CONSULTAS -->

                        <li>
                            <a href="#"><i class="fa fa-folder-open fa-fw"></i> Consultas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= do_action('consult_grupofornecedores') ?>">Consulta de Grupo de Fornec.</a>
                                </li>
                                <li>
                                    <a href="#">Consulta de Fornecedores</a>
                                </li>
                                <li>
                                    <a href="#">Consulta de Banco</a>
                                </li>
                            </ul>
                        </li>

                        <!-- MENU RELATÓRIOS -->

                        <li>
                            <a href="#"><i class="fa  fa-file-text  fa-fw"></i> Relatórios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= do_action('media'); ?>"> Relatório de Fornecedores</a>
                                </li>
                            </ul>
                        </li>

                        <!-- MENU DIVERSOS -->

                        <li>
                            <a href="#"><i class="fa fa-plus fa-fw"></i> Diversos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= do_action('usuarios'); ?>">Cadastro de Usuários</a>
                                </li>
                            </ul>
                        </li>   
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		<!-- Page Content -->
        <div id="page-wrapper">

