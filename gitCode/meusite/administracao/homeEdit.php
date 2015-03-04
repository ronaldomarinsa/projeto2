<?php
session_start();

require_once('verificapagina.php');
require_once "../conexao.php";

$conexao = conecta();

//Pego os dados da página corrente.
$id = $_GET['id'];

//Verifica se foi executado o logout.
if($id == 7){
    header('location: http://localhost/meusite/administracao/logout.php');
}

$sql = "Select * from tbl_menu where id_menu= :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("id", $id);
$stmt->execute();
$pagina = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!-- Bootstrap core CSS -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

    <title>Administração do Site Simples do Curso Code Education - <?= "[ ". $pagina['nome_menu'] . " ]"; ?> </title>

    <br>

</head>


<body>

    <form class="form-horizontal" role="form" method="POST" action="gravamenu.php">
        
        <input name="id_menu" type="hidden" id="id_menu" value="<? echo $pagina['id_menu']; ?>">

        <div class="form-group">
            <label for="titulo" class="col-sm-2 control-label"><?= "[ Edição do Menu ". $pagina['nome_menu'] . " ]"; ?></label>
        </div>

        <div class="form-group">
            <label for="nome_menu" class="col-sm-2 control-label">Nome Menu</label>
        </div>
        
        <div class="form-group">
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nome_menu" name="nome_menu" required value="<?= $pagina['nome_menu']; ?>">
            </div>
        </div>


        <div class="form-group">
            <label for="hint_menu" class="col-sm-2 control-label">Conteúdo do Menu</label>
        </div>

        <div class="form-group">
            <div class="col-sm-8">
              <textarea class="ckeditor" name="hint_menu"><?= $pagina['hint_menu']; ?></textarea>
            </div>
        </div>

        <br>

        <table style="width:79%">
            <tr>
                <td>
                    <button type="submit" name="gravar" id="gravar" class="btn btn-success">Gravar</button> 
                </td>
                <td>
                </td>
                <td>
                    <div class="col-sm-2">
                        <button type="submit" name="voltar_form" class="btn btn-warning btn-block" onclick="javascript:history.back(-1)">Voltar</button>
                    </div>
                </td>
            </tr>
        </table>

    </form>

</body>

<footer>
    <?php require_once("../rodape.php"); ?>
</footer>

</html>
