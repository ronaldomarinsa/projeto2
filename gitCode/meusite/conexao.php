<?php
  
  /* 
  class Conexao {
   
      public static $instance;
   
      private function __construct() {
          //
      }
   
      public static function getInstance() {
          if (!isset(self::$instance)) {
              self::$instance = new PDO('mysql:host=localhost;dbname=meusite', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
              self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
          }
   
          return self::$instance;
      }
   
  }
   
  ?>
*/




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


/*
define('DBNAME', 'meusite');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBHOST', 'localhost');

try{
    $conn = new PDO(
        'mysql:host=' . DBHOST . ';dbname=' . DBNAME, DBUSER, DBPASS
    );  
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage() . "<br />";
    die();
}

function conecta() {
    global $conn;

    return $conn;
}
*/




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

