<?php
session_start();

//require_once('verificapagina.php');
require_once "../conexao.php";

//Pego os dados da página corrente.

if (isset($_POST['usuario']) and isset($_POST['senha'])){
    $usuario = $_POST['usuario'];
    //usando password hash (bcrypt).
    $senha   = password_hash($_POST['senha'], PASSWORD_DEFAULT);

}else{
    $usuario = null;
    $senha = null;
}

$conexao = conecta();

$sql = "Select * from tbl_usuarios where nome_usuario= :usuario";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':usuario', $usuario);
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

$hash = $resultado['senha_usuario'];


//Verifica se a senha daquele usuário é válida.
if (password_verify($_POST['senha'], $hash)) {
    $_SESSION['logado'] = 1;
    $_SESSION['usuario'] = $resultado['nome_usuario'];

    //Pego os dados da página corrente.
    $id = 1;
    $sql = "Select * from tbl_menu where id_menu= :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    $pagina = $stmt->fetch(PDO::FETCH_ASSOC);

    if(isset($pagina) and $pagina['href_menu'] <> ''):
        header('location: http://localhost/administracao/'.$pagina['href_menu'].'.php' );
    else:
        //header("Status: 404 Not Found");
        return require_once("404.php");
    endif;

    //header('location: http://localhost/administracao/home.php');
} else {
    $_SESSION['logado'] = 0;
    header('location: http://localhost/administracao/login.php');
}




