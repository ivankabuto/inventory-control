<?php
session_start();
include_once("conexaoNF.php");
//require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <link rel="stylesheet" href="style/resultados.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>VM NF Principal</title>

</head>
<body>
    <header> 
            <img src="wmlogo.jpg" alt="logo-wm" id="imglogo">    
        <div>
            <?php

            ?>
        </div>      
        <form method="POST" action="login.php" class="login">
            <img src="aeclogo.jpg" alt="logo-aec" id="imglogoaec"/>
        <label>            
            <input type="submit" value="Sair" id="botaosair">
        </label>

        </form>
      
        <form method="POST" action="analitico.php" class="login">  
            <label>
               <input type="submit" value="Analitico & Relatórios" id="botaosair"> 
            </label> 
        </form>

        <form method="POST" action="cadastroproduto.php" class="login">  
            <label>
               <input type="submit" value="Entrada Produto" id="botaosair"> 
            </label> 
        </form>

        <form method="POST" action="saidaproduto.php" class="login">  
            <label>
               <input type="submit" value="Saída de Produto" id="botaosair"> 
            </label> 
        </form>

        <form method="POST" action="buscaproduto.php" class="login">  
            <label>
               <input type="submit" value="Buscas" id="botaosair"> 
            </label> 
        </form>

        <form method="POST" action="lista.php" class="login">  
            <label>
               <input type="submit" value="Lista de Produtos" id="botaosair"> 
            </label> 
        </form>


            
               
    </header>
    


</body>
</html>