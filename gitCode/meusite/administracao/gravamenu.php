<?php
//require_once('verificapagina.php');
require_once "../conexao.php";
$conexao = conecta();
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="../ckeditor.js"></script>

    <title>Administração do Site Simples do Curso Code Education - [Empresa]</title>

    <br>

</head>

<body>


<?php

//Pego os dados da página corrente.
$id = $_POST['id_menu'];
$sql = "Update tbl_menu";
$sql .= " Set nome_menu='". $_POST['nome_menu'] ."', hint_menu='". $_POST['hint_menu'] ."'";
$sql .= " where id_menu= :id";

$stmt = $conexao->prepare($sql);
$stmt->bindValue("id", $id);
$stmt->execute();

?>

<SCRIPT LANGUAGE="JavaScript" TY
$stmt = $conexao->prepare($sql);
$stmt->bindValue("idPE="text/javascript">
    alert ("Dados gravados com sucesso!!!")
</SCRIPT>


<?php
header('location: http://localhost/meusite/administracao/home.php');

?>


<br>
<a href="javascript:history.back(1)">Voltar</a>


</body>

<footer>

</footer>

</html>
