<html>
  <head>
  <form method="POST" action="index.php">  
    <label>
      <input type="submit" value="Tela Inicial" id="botaosair"> 
    </label> 
  </form>

  <form method="POST" action="analitico.php">  
    <label>
      <input type="submit" value="Voltar" id="botaosair"> 
    </label> 
  </form>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Site', 'Quantidade de Itens'],
          <?php 
          include 'conexaoNF.php';
          $sqlgrafico = "SELECT Regiao, SUM(QtdItens) AS total from saidaproduto WHERE Motivo = 'Defeito' GROUP BY Regiao ORDER BY total ASC";
          $consulta = mysqli_query($connNF, $sqlgrafico);

          while ($dados = mysqli_fetch_array($consulta)){

            $Regiao = $dados['Regiao'];
            $QtdItens = $dados['total']; ?>
          
          
          ['<?php echo $Regiao;?>', '<?php echo $QtdItens; ?>'],

          <?php } ?>
        ]);

        var options = {
          chart: {
            title: 'Controle de Estoque',
            subtitle: 'Quantidade de Defeitos x Site',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 1000px; height: 500px;"></div>
  </body>

  
</html>