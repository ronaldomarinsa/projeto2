<?php
require_once('verificapagina.php');
require_once "conexao.php";
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Site Simples do Curso Code Education</title>

    <form action="pesquisa.php" method="post">
        Pesquisar: <input type="text" placeholder="Pesquisar" name="pesquisa" id="pesquisa">
        <input type="submit" value="Pesquisar">
    </form>
    <br>

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
    ?>
    <a href=<?= $rota['href_menu'] ?>><?= $rota['nome_menu']."<br>" ?></a>
<?php
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
