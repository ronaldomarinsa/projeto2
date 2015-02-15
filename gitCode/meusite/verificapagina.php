<?php
// Define uma lista com os arquivos que poderão ser chamados na URL
$permitidos = array('home.php', 'produtos.php', 'contato.php', 'empresa.php', 'enviarfaleconosco.php', 'index.php', 'menu.php', 'rodape.php','servicos.php');

// Verifica se a variável $_GET['pagina'] existe E se ela faz parte da lista de arquivos permitidos
If (isset($_GET['pagina']) AND (array_search($_GET['pagina'], $permitidos) !== false)) {
    // Pega o valor da variável $_GET['pagina']
    $arquivo = $_GET['pagina'];
    require_once($arquivo); // Inclui o arquivo
} else {
    // Se não existir variável $_GET ou ela não estiver na lista de permissões, define um valor padrão
    //$arquivo ="home.php";
    //header("HTTP/1.0 404 Not Found");
    //header("Status: 404 Not Found");
    //return "404";
    //http_response_code(404);
    //header("Location: 404.php");
}
//require_once($arquivo); // Inclui o arquivo
?>