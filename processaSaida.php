<link rel="stylesheet" href="style/resultados.css">

<div class="caixa">
<p>
Saída Cadastrada com Sucesso!
</p>


<?php

include_once("conexaoNF.php");

$motivo = filter_input(INPUT_POST, 'motivo', FILTER_SANITIZE_STRING);
$produtosaida = filter_input(INPUT_POST, 'produtosaida', FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);
$remetente = filter_input(INPUT_POST, 'remetente', FILTER_SANITIZE_STRING);
$destinatario = filter_input(INPUT_POST, 'destinatario', FILTER_SANITIZE_STRING);
$moedasvalor = filter_input(INPUT_POST, 'moedasvalor', FILTER_SANITIZE_STRING);
$matriculacolaborador = filter_input(INPUT_POST, 'matriculacolaborador', FILTER_SANITIZE_STRING);
$numeroNF = filter_input(INPUT_POST, 'numeroNF', FILTER_SANITIZE_STRING);

echo "Processo: $motivo <br>";
echo "Produto: $produtosaida <br>";
echo "Quantidade: $quantidade <br>";
echo "Remetente: $remetente <br>";
echo "Destinatario: $destinatario <br>";
echo "Valor em Moedas: $moedasvalor <br>";
echo "Matrícula do Colaborador: $matriculacolaborador <br>";
echo "Numero da NF de Saída: $numeroNF <br>";


$result_cadastronf = "INSERT INTO saidaproduto 
(Motivo, Produto, QtdItens, Regiao, Destinatario, ValorMoedas, Matricula, NumeroNF, Created) VALUES 
('$motivo', '$produtosaida', '$quantidade', '$remetente', '$destinatario', '$moedasvalor', '$matriculacolaborador', '$numeroNF', NOW())";
$resultado_cadastronf = mysqli_query($connNF, $result_cadastronf);



?>

<form method="POST" action="index.php" class="login">
        <label>
            <input type="submit" value="Voltar" id="botaosair">
        </label>
        </form>

</div>