<link rel="stylesheet" href="style/resultados.css">

<div class="caixa">
<p>
KIT Cadastrada com Sucesso!
</p>

<?php

include_once("conexaoNF.php");

$numeroNF = filter_input(INPUT_POST, 'numeroNF', FILTER_SANITIZE_STRING);
$ocNF = filter_input(INPUT_POST, 'ocNF', FILTER_SANITIZE_STRING);
$itemNF = filter_input(INPUT_POST, 'itemNF', FILTER_SANITIZE_STRING);
$qtdNF = filter_input(INPUT_POST, 'qtdNF', FILTER_SANITIZE_STRING);
$reg = filter_input(INPUT_POST, 'reg', FILTER_SANITIZE_STRING);
$arquivoNF = filter_input(INPUT_POST, 'arquivoNF', FILTER_SANITIZE_STRING);
$rqNF = filter_input(INPUT_POST, 'rqNF', FILTER_SANITIZE_STRING);

echo "Numero da NF: $numeroNF <br>";
echo "Ordem de Compra: $ocNF <br>";
echo "Requisição: $rqNF <br>";
echo "Item NF: $itemNF <br>";
echo "Quantidade de Itens: $qtdNF <br>";
echo "Site: $reg <br>";
echo "Arquivo anexo: $arquivoNF <br>"; 

$result_cadastronf = "INSERT INTO cadastronf (NumeroNF, NumeroOC, Requisicao, Produto, QtdItens, Regiao, Anexo, created) VALUES ('$numeroNF', '$ocNF', '$rqNF', '$itemNF', '$qtdNF', '$reg', '$arquivoNF', NOW())";
$resultado_cadastronf = mysqli_query($connNF, $result_cadastronf);

?>

<form method="POST" action="index.php" class="login">
        <label>
            <input type="submit" value="Voltar" id="botaosair">
        </label>
        </form>

</div>