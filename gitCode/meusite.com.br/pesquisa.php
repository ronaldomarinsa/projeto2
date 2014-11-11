<?php
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
$stringPesquisa = filter_input(INPUT_POST,'pesquisa', FILTER_SANITIZE_STRING);
if( isset($stringPesquisa) AND $stringPesquisa <> null ) {
    $pdo = conecta();
    $sql = "SELECT * FROM tbl_menu WHERE hint_menu LIKE _utf8 '%$stringPesquisa%' COLLATE utf8_unicode_ci";
    $stmt = $pdo->prepare( $sql );
    $stmt->execute();
    $conteudoEncontrado = $stmt->fetchAll( PDO::FETCH_OBJ );
    if( !empty( $conteudoEncontrado ) ) {
        echo '<ul>';
        foreach( $conteudoEncontrado as $conteudo) :
            echo '<li><b>' .utf8_encode( $conteudo->nome_menu ).'</b><br />';
            echo $conteudo->hint_menu . '<a href="/'.$conteudo->href_menu .' "> Leia mais...</a> </li><br />';
        endforeach;
        echo '</ul>';
    }else{
        echo '<p class="erroPesquisa">Nenhum dado encontrado. Palavra utilizada na pesquisa: <b>"'.$stringPesquisa.'"</b></p>';
    }
}else{
    echo '<p class="erroPesquisa">Favor informar a palavra a ser pesquisada</p>';
}
?>

</body>

<footer>
<?php require_once("rodape.php"); ?>

    <div id="link"><a href="home">Home</a>|<a href="javascript:history.back(1)">Voltar</a></div>
</footer>

</html>