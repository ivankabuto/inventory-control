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
    $buscasaida = filter_input(INPUT_POST, 'buscasaida', FILTER_SANITIZE_STRING);
    $buscaprodutos = filter_input(INPUT_POST, 'buscaprodutos', FILTER_SANITIZE_STRING);
    $buscaremetente = filter_input(INPUT_POST, 'buscaremetente', FILTER_SANITIZE_STRING);
    $buscadestinatario = filter_input(INPUT_POST, 'buscadestinatario', FILTER_SANITIZE_STRING);
    $buscamoedas = filter_input(INPUT_POST, 'buscamoedas', FILTER_SANITIZE_STRING);
    $buscamatricula = filter_input(INPUT_POST, 'buscamatricula', FILTER_SANITIZE_STRING);
    $buscanf = filter_input(INPUT_POST, 'buscanf', FILTER_SANITIZE_STRING);
    $buscadata = filter_input(INPUT_POST, 'buscadata', FILTER_SANITIZE_STRING);


    if ($botaopesquisar && $buscasaida != "") {
        $result_saida = "SELECT * FROM saidaproduto WHERE Motivo LIKE '$buscasaida'";
        $resultado_saida = mysqli_query($conn, $result_saida);
        while ($row_buscasaida = mysqli_fetch_assoc($resultado_saida)) {
            echo "Tipo de Saída: " . $row_buscasaida['Motivo'] . "<br>";
            echo "Produto: " . $row_buscasaida['Produto'] . "<br>";
            echo "Quantidade de Itens: " . $row_buscasaida['QtdItens'] . "<br>";
            echo "Remetente: " . $row_buscasaida['Regiao'] . "<br>";
            echo "Destinatário: " . $row_buscasaida['Destinatario'] . "<br>";
            echo "Valor em Moedas: " . $row_buscasaida['ValorMoedas'] . "<br>";
            echo "Matrícula do Colaborador: " . $row_buscasaida['Matricula'] . "<br>";
            echo "Numero da NF de Saída: " . $row_buscasaida['NumeroNF'] . "<br><hr>";
            echo "Data: " . $row_buscasaida['Created'] . "<br><hr>";
        }
    } else if ($botaopesquisar && $buscaprodutos != "") {
        $result_produto = "SELECT * FROM saidaproduto WHERE Produto LIKE '$buscaprodutos'";
        $resultado_produto = mysqli_query($conn, $result_produto);
        while ($row_buscaprodutos = mysqli_fetch_assoc($resultado_produto)) {
            echo "Tipo de Saída: " . $row_buscaprodutos['Motivo'] . "<br>";
            echo "Produto: " . $row_buscaprodutos['Produto'] . "<br>";
            echo "Quantidade de Itens: " . $row_buscaprodutos['QtdItens'] . "<br>";
            echo "Remetente: " . $row_buscaprodutos['Regiao'] . "<br>";
            echo "Destinatário: " . $row_buscaprodutos['Destinatario'] . "<br>";
            echo "Valor em Moedas: " . $row_buscaprodutos['ValorMoedas'] . "<br>";
            echo "Matrícula do Colaborador: " . $row_buscaprodutos['Matricula'] . "<br>";
            echo "Numero da NF de Saída: " . $row_buscaprodutos['NumeroNF'] . "<br><hr>";
            echo "Data: " . $row_buscaprodutos['Created'] . "<br><hr>";
        }
    } else if ($botaopesquisar && $buscaremetente != "") {
        $result_remetente = "SELECT * FROM saidaproduto WHERE Remetente LIKE '$buscaremetente'";
        $resultado_remetente = mysqli_query($conn, $result_remetente);
        while ($row_buscaremetente = mysqli_fetch_assoc($resultado_remetente)) {
            echo "Tipo de Saída: " . $row_buscaremetente['Motivo'] . "<br>";
            echo "Produto: " . $row_buscaremetente['Produto'] . "<br>";
            echo "Quantidade de Itens: " . $row_buscaremetente['QtdItens'] . "<br>";
            echo "Remetente: " . $row_buscaremetente['Regiao'] . "<br>";
            echo "Destinatário: " . $row_buscaremetente['Destinatario'] . "<br>";
            echo "Valor em Moedas: " . $row_buscaremetente['ValorMoedas'] . "<br>";
            echo "Matrícula do Colaborador: " . $row_buscaremetente['Matricula'] . "<br>";
            echo "Numero da NF de Saída: " . $row_buscaremetente['NumeroNF'] . "<br><hr>";
            echo "Data: " . $row_buscaremetente['Created'] . "<br><hr>";
        }
    } else if ($botaopesquisar && $buscadestinatario != "") {
        echo $buscadestinatario;
        $result_destinatario = "SELECT * FROM saidaproduto WHERE Destinatario LIKE '$buscadestinatario'";
        $resultado_destinatario = mysqli_query($conn, $result_destinatario);
        while ($row_destinatario = mysqli_fetch_assoc($resultado_destinatario)) {
            echo "Tipo de Saída: " . $row_destinatario['Motivo'] . "<br>";
            echo "Produto: " . $row_destinatario['Produto'] . "<br>";
            echo "Quantidade de Itens: " . $row_destinatario['QtdItens'] . "<br>";
            echo "Remetente: " . $row_destinatario['Regiao'] . "<br>";
            echo "Destinatário: " . $row_destinatario['Destinatario'] . "<br>";
            echo "Valor em Moedas: " . $row_destinatario['ValorMoedas'] . "<br>";
            echo "Matrícula do Colaborador: " . $row_destinatario['Matricula'] . "<br>";
            echo "Numero da NF de Saída: " . $row_destinatario['NumeroNF'] . "<br><hr>";
            echo "Data: " . $row_destinatario['Created'] . "<br><hr>";
        }
    } else if ($botaopesquisar && $buscamoedas != "") {
        $result_moedas = "SELECT * FROM saidaproduto WHERE ValorMoedas LIKE '$buscamoedas'";
        $resultado_moedas = mysqli_query($conn, $result_moedas);
        while ($row_moedas = mysqli_fetch_assoc($resultado_moedas)) {
            echo "Tipo de Saída: " . $row_moedas['Motivo'] . "<br>";
            echo "Produto: " . $row_moedas['Produto'] . "<br>";
            echo "Quantidade de Itens: " . $row_moedas['QtdItens'] . "<br>";
            echo "Remetente: " . $row_moedas['Regiao'] . "<br>";
            echo "Destinatário: " . $row_moedas['Destinatario'] . "<br>";
            echo "Valor em Moedas: " . $row_moedas['ValorMoedas'] . "<br>";
            echo "Matrícula do Colaborador: " . $row_moedas['Matricula'] . "<br>";
            echo "Numero da NF de Saída: " . $row_moedas['NumeroNF'] . "<br><hr>";
            echo "Data: " . $row_moedas['Created'] . "<br><hr>";
        }
    } else if ($botaopesquisar && $buscamatricula != "") {
        $result_matricula = "SELECT * FROM saidaproduto WHERE Matricula LIKE '$buscamatricula'";
        $resultado_matricula = mysqli_query($conn, $result_matricula);
        while ($row_matricula = mysqli_fetch_assoc($resultado_matricula)) {
            echo "Tipo de Saída: " . $row_matricula['Motivo'] . "<br>";
            echo "Produto: " . $row_matricula['Produto'] . "<br>";
            echo "Quantidade de Itens: " . $row_matricula['QtdItens'] . "<br>";
            echo "Remetente: " . $row_matricula['Regiao'] . "<br>";
            echo "Destinatário: " . $row_matricula['Destinatario'] . "<br>";
            echo "Valor em Moedas: " . $row_matricula['ValorMoedas'] . "<br>";
            echo "Matrícula do Colaborador: " . $row_matricula['Matricula'] . "<br>";
            echo "Numero da NF de Saída: " . $row_matricula['NumeroNF'] . "<br><hr>";
            echo "Data: " . $row_matricula['Created'] . "<br><hr>";
        }
    } else if ($botaopesquisar && $buscanf != "") {
        $result_nf = "SELECT * FROM saidaproduto WHERE NumeroNF LIKE '$buscanf'";
        $resultado_nf = mysqli_query($conn, $result_nf);
        while ($row_pesquisanf = mysqli_fetch_assoc($resultado_nf)) {
            echo "Tipo de Saída: " . $row_pesquisanf['Motivo'] . "<br>";
            echo "Produto: " . $row_pesquisanf['Produto'] . "<br>";
            echo "Quantidade de Itens: " . $row_pesquisanf['QtdItens'] . "<br>";
            echo "Remetente: " . $row_pesquisanf['Regiao'] . "<br>";
            echo "Destinatário: " . $row_pesquisanf['Destinatario'] . "<br>";
            echo "Valor em Moedas: " . $row_pesquisanf['ValorMoedas'] . "<br>";
            echo "Matrícula do Colaborador: " . $row_pesquisanf['Matricula'] . "<br>";
            echo "Numero da NF de Saída: " . $row_pesquisanf['NumeroNF'] . "<br><hr>";
            echo "Data: " . $row_pesquisanf['Created'] . "<br><hr>";
        }
    } else if ($botaopesquisar && $buscadata != "") {
        $result_data = "SELECT * FROM saidaproduto WHERE Created LIKE '$buscadata'";
        $resultado_data = mysqli_query($conn, $result_data);
        while ($row_data = mysqli_fetch_assoc($resultado_data)) {
            echo "Tipo de Saída: " . $row_data['Motivo'] . "<br>";
            echo "Produto: " . $row_data['Produto'] . "<br>";
            echo "Quantidade de Itens: " . $row_data['QtdItens'] . "<br>";
            echo "Remetente: " . $row_data['Regiao'] . "<br>";
            echo "Destinatário: " . $row_data['Destinatario'] . "<br>";
            echo "Valor em Moedas: " . $row_data['ValorMoedas'] . "<br>";
            echo "Matrícula do Colaborador: " . $row_data['Matricula'] . "<br>";
            echo "Numero da NF de Saída: " . $row_data['NumeroNF'] . "<br><hr>";
            echo "Data: " . $row_data['Created'] . "<br><hr>";
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