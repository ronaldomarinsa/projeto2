<?php
require_once('verificapagina.php');
require_once "conexao.php";
?>

<form action="pesquisa.php" method="post">
    Pesquisar: <input type="text" placeholder="Pesquisar" name="pesquisa" id="pesquisa">
    <input type="submit" value="Pesquisar">
</form>


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



//Pego os dados da página corrente.
$id = 1;
$sql = "Select * from tbl_menu where id_menu= :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("id", $id);
$stmt->execute();
$pagina = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h1> <?php echo $pagina['nome_menu']."!!!"; ?> </h1>
<p><?php echo $pagina['hint_menu']  ?></p>

<?php require_once("rodape.php"); ?>