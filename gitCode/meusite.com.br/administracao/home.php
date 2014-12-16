<?php
session_start();

If(isset($_SESSION['logado']) and $_SESSION['logado'] == 1){
    echo "[ Área Administrativa do Site ]"."<br>";
    echo "<br>";
    echo "Seja bem-vindo Sr.: ". $_SESSION['usuario']."<br>";
    echo "<br>";
    echo "<br>";
    echo "Deseja editar o conteúdo de qual página abaixo: ";
    echo "<br>";

}else{
    echo "Usuário não tem acesso a área administrativa!!!";
    header('location: http://localhost/administracao/login.php');
}

require_once('verificapagina.php');
require_once "../conexao.php";
?>


<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área Administrativa - Site Simples do Curso Code Education</title>
    <!--
    <form action="pesquisa.php" method="post">
        Pesquisar: <input type="text" placeholder="Pesquisar" name="pesquisa" id="pesquisa">
        <input type="submit" value="Pesquisar">
    </form>
    -->
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

    if($rota['href_menu'] <> 'home' and $rota['href_menu'] <> 'contato' ) {
        ?>
        <a href=<?= $rota['href_menu'] . ".php" ?>><?= $rota['nome_menu'] . "<br>" ?></a>
    <?php
    }elseif($rota['href_menu'] == 'contato'){
        //não imprime, pois a pág contato não tem conteúdo a ser editado.
    }else{
        ?>
        <a href=<?= $rota['href_menu'] . "Edit.php" ?>><?= $rota['nome_menu'] . "<br>" ?></a>
    <?php
    }
}
?>


</body>

<footer>
    <?php

    require_once("../rodape.php"); ?>

</footer>
</html>