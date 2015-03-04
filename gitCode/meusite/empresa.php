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

<?php
//Imprime o menu.
$conexao = conecta();
$sql = "Select * from tbl_menu";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$rotasValidas = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rotasValidas as $rota){
    if ($rota['href_menu'] != 'sair'):
        ?>
        <a href=<?= $rota['href_menu'] ?>><?= $rota['nome_menu'] . "<br>" ?></a>
    <?php endif;
}
?>

</body>

<footer>
<?php

//Pego os dados da página corrente.
$id = 2;
$sql = "Select * from tbl_menu where id_menu= :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("id", $id);
$stmt->execute();
$pagina = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h1> <?php echo $pagina['nome_menu']."!!!"; ?> </h1>
<p><?php echo $pagina['hint_menu']  ?></p>


<?php require_once("rodape.php"); ?>


</footer>

</html>
