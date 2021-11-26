<?php
session_start();
include_once("conexaoNF.php");
//require 'conexao.php';
//require 'Usuario.class.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>VM NF Principal</title>
    
    <form method="POST" action="index.php">  
    <label>
      <input type="submit" value="Tela Inicial" id="botaosair"> 
    </label> 
  </form>

</head>

<body>
<h2>Saída de Produtos</h2>   
    <form method="post" action="processaSaida.php" class="formulario">
        <label> Tipo de Saída: <select name="motivo" class="camposNF" required>             
            <option value = "Transferencia">Transferencia Site</option>
            <option value = "TrocaColaborador">Troca Colaborador</option>
            <option value = "Defeito">Defeito</option>
        </select>
        </label>
        <label> Produto: 
            <input type="text" name="produtosaida" class="campos" required>
        </label>
        <label> Quantidade: 
            <input type="text" name ="quantidade" class="campobusca" required>
        </label>
        <label> Remetente: <select name="remetente" class="camposNF" required> 
            <option value = "ARP">ARP</option>
            <option value = "CG">CG</option>
            <option value = "ES1">ES1</option>
            <option value = "EST">EST</option>
            <option value = "GV">GV</option>
            <option value = "JN">JN</option>
            <option value = "JP">JP</option>
            <option value = "MOC1">MOC1</option>
            <option value = "MOC3">MOC3</option>
            <option value = "MSS">MSS</option>
            <option value = "ORION">ORION</option>
            <option value = "RJ">RJ</option>
            <option value = "SP1">SP1</option>
            <option value = "SP2">SP2</option>
            <option value = "SP5">SP5</option>
        </select>
        </label>
        <label> Destinatário: <select name="destinatario" class="camposNF" required> 
            <option value = "ARP">ARP</option>
            <option value = "CG">CG</option>
            <option value = "ES1">ES1</option>
            <option value = "EST">EST</option>
            <option value = "GV">GV</option>
            <option value = "JN">JN</option>
            <option value = "JP">JP</option>
            <option value = "MOC1">MOC1</option>
            <option value = "MOC3">MOC3</option>
            <option value = "MSS">MSS</option>
            <option value = "ORION">ORION</option>
            <option value = "RJ">RJ</option>
            <option value = "SP1">SP1</option>
            <option value = "SP2">SP2</option>
            <option value = "SP5">SP5</option>
            <option value = "Colaborador">Colaborador</option>
            <option value = "Defeito">Defeito</option>
        </select>
        </label>
        <label> Valor em Moedas 
            <input type="text" name="moedasvalor" class="campos" required>
        </label>
        <label> Matricula 
            <input type="text" name="matriculacolaborador" class="campos">
        </label>
        <label> Numero NF Saída
            <input type="text" name="numeroNF" class="campos">
        </label>
        
        <label>
            <input type="submit" value="Cadastrar a Saída" class="campobotao btn">
        </label>
    </form>
</body>