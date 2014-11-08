<?php


/**
 * File: conexao.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 08/07/14
 * Time: 22:48
 * Project: estudo_php
 * Copyright: 2014
 */
const HOST = 'localhost';
const USER = 'root';
const PASSWORD = '';
const DB = 'meusite';

function conecta()
{
    $dns = "mysql:host=" . HOST . ";dbname=" . DB;
    try {
        $conn = new PDO( $dns, USER, PASSWORD );
        //setando informações de erro
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $conn;
    }
    catch( \PDOException $e ) {
        die( 'Erro código: ' . $e->getCode() . ": " .$e->getMessage() );
    }
}





//function conexaoDB()
//{
//    try {
//        $config = include "config.php";
//
//        if(! isset($config['db'])){
//            throw new \InvalidArgumentException("Configuração do banco de dados não existe!");
//        }
//
//        $host = (isset($config['db']['host'])) ? $config['db']['host'] : null;
//        $dbname = (isset($config['db']['dbname'])) ? $config['db']['dbname'] : null;
//        $user = (isset($config['db']['user'])) ? $config['db']['user'] : null;
//        $password = (isset($config['db']['password'])) ? $config['db']['password'] : null;
//
//        return new \PDO("mysql:host={$host};dbname={$dbname}, $user, $password");
//
//    } catch (\PDOException $e) {
//
//        echo $e->getMessage() . "\n";
//        echo $e->getTraceAsString() . "\n";
//    }
//
//}









//
//$sql = "Select * from clientes";
//$stmt = $conexao->prepare($sql);
//$stmt->execute();
//$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//foreach($clientes as $cliente){
//    echo $cliente['id']." - ". $cliente['nome'] ." - ". $cliente['email'] ."<br>";
//}
//


//$id = 2;
//$sql = "Select * from clientes where id= :id";
//$stmt = $conexao->prepare($sql);
//$stmt->bindValue("id", $id);
//$stmt->execute();
//$clientes = $stmt->fetch(PDO::FETCH_ASSOC);
//
//print_r($clientes);

