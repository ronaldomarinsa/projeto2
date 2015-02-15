<?php
require_once "conexao.php";

$sql = "Select * from tbl_menu";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$rotasValidas = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rotasValidas as $rota){
    echo $rota['id_menu']." - ". $rota['nome_menu']."<br>";
}

?>

<!--
<div>
    <ul>
        <li><a href="home">Home</a> </li>
        <li><a href="empresa">Empresa</a> </li>
        <li><a href="produtos">Produtos</a> </li>
        <li><a href="servicos">Serviços</a> </li>
        <li><a href="contato">Contato</a> </li>
    </ul>
</div>
-->

