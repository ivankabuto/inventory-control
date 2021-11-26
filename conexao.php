<?php

session_start();

//Criar a conexao
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "test";

global $pdo;

try{
    $pdo = new PDO("mysql:dbname=".$dbname."; host=".$servidor, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "ERRO: " .$e->getMessage();
    exit;
}

?>