<link rel="stylesheet" href="style/resultados.css">

<div class="caixa">
    <p>
        Resultado:
    </p>

    <?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "test";

    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $botaopesquisar = filter_input(INPUT_POST, 'botaopesquisar', FILTER_SANITIZE_STRING);
    $pesquisarNF = filter_input(INPUT_POST, 'pesquisarNF', FILTER_SANITIZE_STRING);
    $pesquisarOC = filter_input(INPUT_POST, 'pesquisarOC', FILTER_SANITIZE_STRING);
    $pesquisarItem = filter_input(INPUT_POST, 'pesquisarItem', FILTER_SANITIZE_STRING);
    $pesquisarLocal = filter_input(INPUT_POST, 'pesquisarLocal', FILTER_SANITIZE_STRING);
    $pesquisarData = filter_input(INPUT_POST, 'pesquisarData', FILTER_SANITIZE_STRING);

    if ($botaopesquisar && $pesquisarNF != "") {
        $result_NF = "SELECT * FROM cadastroNF WHERE numeroNF LIKE '$pesquisarNF'";
        $resultado_NF = mysqli_query($conn, $result_NF);
        while ($row_pesquisanf = mysqli_fetch_assoc($resultado_NF)) {
            echo "ID: " . $row_pesquisanf['id'] . "<br>";
            echo "Numero NF: " . $row_pesquisanf['numeroNF'] . "<br>";
            echo "Numero OC: " . $row_pesquisanf['NumeroOC'] . "<br>";
            echo "Item: " . $row_pesquisanf['Produto'] . "<br>";
            echo "Quantidade: " . $row_pesquisanf['QtdItens'] . "<br>";
            echo "Site: " . $row_pesquisanf['Regiao'] . "<br>";
            echo "Data de Entrada: " . $row_pesquisanf['created'] . "<br>";
            echo "Anexo: " . $row_pesquisanf['Anexo'] . "<br><hr>";
        }
    } else if ($botaopesquisar && $pesquisarOC != "") {
        $result_OC = "SELECT * FROM cadastroNF WHERE numeroOC LIKE '$pesquisarOC'";
        $resultado_OC = mysqli_query($conn, $result_OC);
        while ($row_pesquisaoc = mysqli_fetch_assoc($resultado_OC)) {
            echo "ID: " . $row_pesquisaoc['id'] . "<br>";
            echo "Numero NF: " . $row_pesquisaoc['numeroNF'] . "<br>";
            echo "Numero OC: " . $row_pesquisaoc['NumeroOC'] . "<br>";
            echo "Item: " . $row_pesquisaoc['Produto'] . "<br>";
            echo "Quantidade: " . $row_pesquisaoc['QtdItens'] . "<br>";
            echo "Site: " . $row_pesquisaoc['Regiao'] . "<br>";
            echo "Data de Entrada: " . $row_pesquisaoc['created'] . "<br>";
            echo "Anexo: " . $row_pesquisaoc['Anexo'] . "<br><hr>";
        }
    } else if ($botaopesquisar && $pesquisarItem != "") {
        $result_Item = "SELECT * FROM cadastroNF WHERE Produto LIKE '%$pesquisarItem%'";
        $resultado_Item = mysqli_query($conn, $result_Item);
        while ($row_pesquisaitem = mysqli_fetch_assoc($resultado_Item)) {
            echo "ID: " . $row_pesquisaitem['id'] . "<br>";
            echo "Numero NF: " . $row_pesquisaitem['numeroNF'] . "<br>";
            echo "Numero OC: " . $row_pesquisaitem['NumeroOC'] . "<br>";
            echo "Item: " . $row_pesquisaitem['Produto'] . "<br>";
            echo "Quantidade: " . $row_pesquisaitem['QtdItens'] . "<br>";
            echo "Site: " . $row_pesquisaitem['Regiao'] . "<br>";
            echo "Data de Entrada: " . $row_pesquisaitem['created'] . "<br>";
            echo "Anexo: " . $row_pesquisaitem['Anexo'] . "<br><hr>";
        }
    } else if ($botaopesquisar && $pesquisarData != "") {
        $result_Data = "SELECT * FROM cadastroNF WHERE created LIKE '$pesquisarData'";
        $resultado_Data = mysqli_query($conn, $result_Data);
        while ($row_pesquisaData = mysqli_fetch_assoc($resultado_Data)) {
            echo "ID: " . $row_pesquisaData['id'] . "<br>";
            echo "Numero NF: " . $row_pesquisaData['numeroNF'] . "<br>";
            echo "Numero OC: " . $row_pesquisaData['NumeroOC'] . "<br>";
            echo "Item: " . $row_pesquisaData['Produto'] . "<br>";
            echo "Quantidade: " . $row_pesquisaData['QtdItens'] . "<br>";
            echo "Site: " . $row_pesquisaData['Regiao'] . "<br>";
            echo "Data de Entrada: " . $row_pesquisaData['created'] . "<br>";
            echo "Anexo: " . $row_pesquisaData['Anexo'] . "<br><hr>";
        }
    } else if ($botaopesquisar && $pesquisarLocal != "") {
        $result_Local = "SELECT * FROM cadastroNF WHERE Regiao LIKE '$pesquisarLocal'";
        $resultado_Local = mysqli_query($conn, $result_Local);
        while ($row_pesquisaLocal = mysqli_fetch_assoc($resultado_Local)) {
            echo "ID: " . $row_pesquisaLocal['id'] . "<br>";
            echo "Numero NF: " . $row_pesquisaLocal['numeroNF'] . "<br>";
            echo "Numero OC: " . $row_pesquisaLocal['NumeroOC'] . "<br>";
            echo "Item: " . $row_pesquisaLocal['Produto'] . "<br>";
            echo "Quantidade: " . $row_pesquisaLocal['QtdItens'] . "<br>";
            echo "Site: " . $row_pesquisaLocal['Regiao'] . "<br>";
            echo "Data de Entrada: " . $row_pesquisaLocal['created'] . "<br>";
            echo "Anexo: " . $row_pesquisaLocal['Anexo'] . "<br><hr>";
        }
    } else {
        echo "erro";
    }

    ?>

    <form method="POST" action="buscaproduto.php" class="login">
        <label>
            <input type="submit" value="Voltar" id="botaosair">
        </label>
    </form>

</div>