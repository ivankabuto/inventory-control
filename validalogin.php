<?php

if(isset($_POST['matricula']) && !empty($_POST['matricula']) && 
isset($_POST['senha']) && !empty($_POST['senha'])){
    
    require 'conexao.php';
    require 'Usuario.class.php';

$u = new Usuario();

    $matricula = addslashes($_POST['matricula']);
    $senha = addslashes($_POST['senha']); 
    $kto = "oi";

    
    if($u->login($matricula, $senha) == true){
        if(isset($_SESSION['idUser'])){
            header("Location: index.php");
        }
        else{
            header("Location: login.php");
        }
    }
    else{
        header("Location: login.php");
    }
}
else{
    header("Location: login.php");
}

?>