<?php
/**
 * File: fixture.php
 * Author: Ronaldo Marins Andrade
 * E-mail: ronaldo.microsiga@gmail.com
 * Language: PHP
 * Date: 02/11/2014
 * Time: 01:19
 * Project: meusite.com.br
 * Copyright: 2014
 */
require_once "conexao.php";

try{

    $sqlMenu = "CREATE TABLE IF NOT EXISTS `tbl_menu` (
                `id_menu` int(11) NOT NULL AUTO_INCREMENT,
                `nome_menu` varchar(60) NOT NULL,
                `href_menu` varchar(60) NOT NULL,
                `hint_menu` varchar(60) NOT NULL,
                `sit_cancelado` char(1) NOT NULL,
                PRIMARY KEY (`id_menu`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
    echo ( executaSQL( $sqlMenu, null ) ) ? 'Tabela tbl_menu criada com sucesso!'.chr(13).chr(10) : 'Erro ao tentar criar a tabela tbl_menu'.chr(13).chr(10);

    $sqlMenuInsert = "INSERT INTO `tbl_menu` (`id_menu`, `nome_menu`, `href_menu`, `hint_menu`, `sit_cancelado`) VALUES
                        (1, 'Home', 'home', 'Pagina inicial', 'N'),
                        (2, 'Empresa', 'empresa', 'Pagina empresa', 'N'),
                        (3, 'Produtos', 'produtos', 'Pagina dos produtos', 'N'),
                        (4, 'Servicos', 'servicos', 'Pagina dos servi&ccedil;os', 'N'),
                        (6, 'Contato', 'contato', 'Pagina de contato', 'N');";
                        (7, 'Sair', 'sair', 'sair', 'N');";
    echo ( executaSql( $sqlMenuInsert ) ) ? 'Inserts na tabela tbl_menu efetuado com sucesso! '.chr(13).chr(10) : 'Erro ao tentar inserir registro no tabela tbl_menu'.chr(13).chr(10);


    $sqlUsuario = "CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
                    `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
                    `nome_usuario` varchar(60) NOT NULL,
                    `cpf_usuario` varchar(11) NOT NULL,
                    `senha_usuario` varchar(80) NOT NULL,
                    `dat_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    `sit_cancelado` char(1) NOT NULL COMMENT '1=ativo, 2=inativo',
                    PRIMARY KEY (`id_usuario`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
    echo ( executaSql( $sqlUsuario ) ) ? 'Tabela tbl_usuarios criada com sucesso! '.chr(13).chr(10) : 'Erro ao tentar inserir registro no tabela tbl_usuarios'.chr(13).chr(10);


    $sqlUsuarioInsert = "INSERT INTO `tbl_usuarios` (`id_usuario`, `nome_usuario`, `cpf_usuario`, `senha_usuario`, `dat_cadastro`, `sit_cancelado`) VALUES
                        (1, 'admin', '21267811862', '".'$2y$10$eyt7.NhjDGUY69n3vitHLOlG1QE/bnejrU6gCu3XK9NHYQg7gUkRe'."', '2014-07-17 03:03:39', '1'),
                        (2, 'Ronaldo Marins' , '22045478246', '".'$2y$10$RXN0YSBzZW5oYSBmb2kgZuL0mVuEz/B80kfcZ0HIVGrCom53IZ3tS'."', '2014-07-20 14:33:11', '1'),
                        (3, 'Jose de la Riva Aguero' , '58803876405', '".'$2y$10$RXN0YSBzZW5oYSBmb2kgZuL0mVuEz/B80kfcZ0HIVGrCom53IZ3tS'."', '2014-07-20 14:34:40', '1'),
                        (4, 'Maria Pepa Gomes' , '50237033127', '".'$2y$10$RXN0YSBzZW5oYSBmb2kgZuL0mVuEz/B80kfcZ0HIVGrCom53IZ3tS'."', '2014-07-20 14:59:50', '1'),
                        (5, 'Guilherme Arantes' , '44661008103', '".'$2y$10$RXN0YSBzZW5oYSBmb2kgZuL0mVuEz/B80kfcZ0HIVGrCom53IZ3tS'."', '2014-07-20 15:05:25', '2'),
                        (6, 'Jose Maria da Silva' , '32332881581', '".'$2y$10$RXN0YSBzZW5oYSBmb2kgZuL0mVuEz/B80kfcZ0HIVGrCom53IZ3tS'."', '2014-07-20 15:07:02', '2'),
                        (7, 'Alberto Suares' , '54571020929', '".'$2y$10$RXN0YSBzZW5oYSBmb2kgZuL0mVuEz/B80kfcZ0HIVGrCom53IZ3tS'."', '2014-07-20 15:09:20', '2');";
    echo ( executaSql( $sqlUsuarioInsert ) ) ? 'Inserts na tabela tbl_usuarios efetuado com sucesso! '.chr(13).chr(10) : 'Erro ao tentar inserir registro no tabela tbl_usuarios'.chr(13).chr(10);

}
catch (Exception $e) {
    echo 'Erro: ' . $e->getMessage();
}

function executaSql( $sql )
{
    $pdo = conecta();
    $stmt = $pdo->prepare( $sql );
    $res = $stmt->execute();
    return ( $res ) ? true : false;
}
