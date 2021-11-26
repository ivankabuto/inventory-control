<?php
session_start();
include_once("conexaoNF.php");
?>
<!DOCTYPE html>
<html-lang="pt-br">
    <head>

    <form method="POST" action="index.php">  
    <label>
      <input type="submit" value="Tela Inicial" id="botaosair"> 
    </label> 
  </form>
  
        <meta charset="utf-8">
        <title>Lista VM</title>
    </head>
    <body>
    <h1>Lista de Produto e NF</h1>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    //Receber o numero da pagina
    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

    //Setar a quantidade de itens por pagina
    //$pagina = 2;
    $qnt_result_pg = 100;

    //calcular o inicio visualização
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

    $result_cadastronf = "SELECT * FROM cadastronf LIMIT $inicio, $qnt_result_pg";
    $resultado_cadastronf = mysqli_query($connNF, $result_cadastronf);

    while($row_cadastronf = mysqli_fetch_assoc($resultado_cadastronf)){
        echo "ID: " . $row_cadastronf['id'] . "<br>";
        echo "Numero NF: " . $row_cadastronf['numeroNF'] . "<br>";
        echo "Numero OC: " . $row_cadastronf['NumeroOC'] . "<br>";
        echo "Item: " . $row_cadastronf['Produto'] . "<br>";
        echo "Quantidade: " . $row_cadastronf['QtdItens'] . "<br>";
        echo "Site: " . $row_cadastronf['Regiao'] . "<br>";
        echo "Data de Entrada: " . $row_cadastronf['created'] . "<br>";
        echo "Anexo: " . $row_cadastronf['Anexo'] . "<br><hr>";
    }

    //Paginação - Somar a quantidade de usuarios
    $result_pg = "SELECT COUNT(id) AS num_result FROM cadastronf";
    $resultado_pg = mysqli_query($connNF, $result_pg);
    $row_pg = mysqli_fetch_assoc($resultado_pg);
        //echo $row_pg['num_result'];
    //Quantidade de pagina
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

    //Limitar os links antes e depois
    $max_links = 2;
    echo "<a href='lista.php?pagina=1'>Primeira Pagina </a>";
    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
        if($pag_ant >= 1){
        echo "<a href='lista.php?pagina=$pag_ant'> $pag_ant </a>"; 
        }
    }
    echo "$pagina";
    echo "<a href='lista.php?pagina=$quantidade_pg'>Ultima Pagina </a>";

    ?>
    </body>
</html-lang>
