<?php
session_start();

If(isset($_SESSION['logado']) and $_SESSION['logado'] == 1){
    $texto1 = "[ Área Administrativa do Site ]"."<br>";
    $texto2 = "Seja bem-vindo Sr.: ". $_SESSION['usuario']."<br>";
    $texto3 = "Deseja editar o conteúdo de qual página abaixo: ";
    
}else{
    echo "Usuário não tem acesso a área administrativa!!!";
    header('location: http://localhost/meusite/administracao/login.php');
}

require_once('verificapagina.php');
require_once "../conexao.php";
?>

<!-- Bootstrap core CSS -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área Administrativa - Site Simples do Curso Code Education</title>
    <form class="form-horizontal" role="form" method="POST">

        <div class="form-group">
            <label for="texto1" class="col-sm-3 control-label"><?= $texto1; ?></label>
        </div>

        <div class="form-group">
            <label for="texto2" class="col-sm-3 control-label"><?= $texto2; ?></label>
        </div>

        <div class="form-group">
            <label for="texto3" class="col-sm-4 control-label"><?= $texto3; ?></label>
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

        if($rota['href_menu'] <> 'home' and $rota['href_menu'] <> 'contato' ) {
            ?>
            <a href=<?= 'homeEdit.php?id='. $rota['id_menu'] ?>><?= $rota['nome_menu'] . "<br>" ?></a>
            
        <?php
        }elseif($rota['href_menu'] == 'contato'){
            //não imprime, pois a pág contato não tem conteúdo a ser editado.
        }else{
            ?>
            <a href=<?= $rota['href_menu'] . "Edit.php?id=". $rota['id_menu'] ?>><?= $rota['nome_menu'] . "<br>" ?></a>
        <?php
        }
    } 
    ?>

</body>

<footer>
    <?php  require_once("../rodape.php"); ?>
</footer>
</html>