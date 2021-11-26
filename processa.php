<?php
//Processamento do cadastro de usuarios.
session_start();

include_once("conexaoCadastro.php");

global $pdo;

$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$chave = filter_input(INPUT_POST, 'chave', FILTER_SANITIZE_STRING);
$local = filter_input(INPUT_POST, 'local', FILTER_SANITIZE_STRING);

echo "Matricula: $matricula <br>";
echo "Nome: $nome <br>";
echo "Senha: $chave <br>";
echo "Site: $local <br>";

$result_usuario = "INSERT INTO usuario (matricula, nome, senha, site_fonte, created) VALUES ('$matricula', '$nome', '$chave', '$local', NOW())";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if(mysqli_insert_id($conexao)){
    $_SESSION['msg'] = "<p style='color:black; font-weight:bold;'>Usuário cadastrado com sucesso</p>";
    header("Location: cadastro.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: cadastro.php");
}