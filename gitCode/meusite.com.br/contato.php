<?php
require_once('verificapagina.php');
require_once "conexao.php";

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

<form name="contato" method="post" action="enviarfaleconosco.php">

    <fieldset>
        <legend>Dados:</legend>
        <label>Nome:</label>
        <br>
        <input type="text" name="nome" id="nome" width="" placeholder="Digite seu nome…">
        <br>
        <br>

        <label>e-mail:</label>
        <br>
        <input type="text" name="email" id="email" placeholder="Digite seu e-mail…">
        <br>
        <br>

        <label>Assunto:</label>
        <br>
        <input type="text" name="assunto" id="assunto" placeholder="Digite o assunto…">
        <br>
        <br>

        <label>Mensagem:</label>
        <br>
        <textarea rows="5" name="mensagem" id="mensagem"></textarea>
        <br>
        <br>

        <button type="submit" class="btn">Enviar</button>
    </fieldset>

</form>

<?php require_once("rodape.php"); ?>