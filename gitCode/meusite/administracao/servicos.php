<?php
require_once('verificapagina.php');
require_once "../conexao.php";
$conexao = conecta();

//Pego os dados da página corrente.
$id = 4;
$sql = "Select * from tbl_menu where id_menu= :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("id", $id);
$stmt->execute();
$pagina = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="../ckeditor.js"></script>

    <title>Administração do Site Simples do Curso Code Education - <?= "[ ". $pagina['nome_menu'] . " ]"; ?> </title>

    <br>

</head>

<body>


<form action="gravamenu.php" method="post" >
    <?php echo "[ Edição do Menu ". $pagina['nome_menu']. " ]"."<br><br>" ; ?>

    <!--<label>ID</label><br> -->
    <input name="id_menu" type="hidden" id="id_menu" value="<? echo $pagina['id_menu']; ?>">

    <label>Nome Menu</label><br>
    <textarea cols="80" id="nome_menu" name="nome_menu" rows="2">
        <?php echo ltrim($pagina['nome_menu']);  ?>
    </textarea>
    <br><br>

    <label>Conteúdo do Menu</label><br>
    <textarea cols="80" id="hint_menu" name="hint_menu" rows="6">
        <?php echo ltrim($pagina['hint_menu']);  ?>
    </textarea>
    <br>

    <table style="width:79%">
        <tr>
            <td>
                <input type="submit" value="Gravar" id="gravar" name="gravar">
            </td>
            <td>
            </td>
            <td>
                <a href="javascript:history.back(1)">Voltar</a></div>
                <!--<input type="submit" value="Voltar" id="voltar" name="voltar"> -->
            </td>
        </tr>
    </table>

</form>


<script>
    CKEDITOR.replace( 'nome_menu' );
</script>

<script>
    CKEDITOR.replace( 'hint_menu' );
</script>

</body>

<footer>

    <?php require_once("../rodape.php"); ?>

</footer>

</html>
