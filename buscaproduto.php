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
<h2>Buscar Entrada</h2>    
    <form class="formulario" method="POST" action="pesquisarNF.php">
        <label> Nº NF:  
            <input type="text" class="camposNF" name="pesquisarNF">
        </label>
        <label> Nº OC:  
            <input type="text" class="camposNF" name="pesquisarOC">
        </label>
        <label> Item Loja: 
            <input type="text" class="campobusca" name="pesquisarItem">
        </label>
        <label> Site: <select class="camposNF" name="pesquisarLocal">
            <option value = "">-</option> 
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
        <label> Data de Cadastro:  
            <input type="date" class="camposNF" name="pesquisarData">
        </label>
        <label>
            <input type="submit" value="Buscar a NF" class="campobotaoNF btn" name="botaopesquisar">
        </label>
</form>

<h2>Buscar Saída</h2>    
    <form class="formulario" method="POST" action="pesquisarSaida.php">
    <label> Tipo de Saída: <select name="buscasaida" class="camposNF">
            <option value = "">-</option>             
            <option value = "Transferencia">Transferencia Site</option>
            <option value = "TrocaColaborador">Troca Colaborador</option>
            <option value = "Defeito">Defeito</option>
        </select>
        </label>
        <label> Produto:  
            <input type="text" class="camposNF" name="buscaprodutos">
        </label>
        <label> Remetente: <select class="camposNF" name="buscaremetente">
            <option value = "">-</option>
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
        <label> Destinatario: <select class="camposNF" name="buscadestinatario">
            <option value = "">-</option> 
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
        <label> Valor em Moedas: 
            <input type="text" class="campobusca" name="buscamoedas">
        </label>
        <label> Matrícula: 
            <input type="text" class="campobusca" name="buscamatricula">
        </label>
        <label> Numero da NF de Saída: 
            <input type="text" class="campobusca" name="buscanf">
        </label>
        <label> Data de Cadastro:  
            <input type="date" class="camposNF" name="buscadata">
        </label>
        <label>
            <input type="submit" value="Buscar a NF" class="campobotaoNF btn" name="botaopesquisar">
        </label>
</form>
</body>