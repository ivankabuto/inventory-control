<html>
  <head>
  <form method="POST" action="index.php">  
    <label>
      <input type="submit" value="Tela Inicial" id="botaosair"> 
    </label> 
  </form>

  <form method="POST" action="analiticosite.php">  
    <label>
      <input type="submit" value="Entradas por Site" id="botaosair"> 
    </label> 
  </form>

  <form method="POST" action="analiticodefeito.php">  
    <label>
      <input type="submit" value="Defeitos por Site" id="botaosair"> 
    </label> 
  </form>

  <form method="POST" action="analiticocoin.php">  
    <label>
      <input type="submit" value="Coins x Site" id="botaosair"> 
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
          $sqlgrafico = "SELECT A.Regiao, A.total - (IF (B.total2 IS NULL, 0, B.total2)) AS total FROM (SELECT Regiao, SUM(QtdItens) AS total from cadastronf GROUP BY Regiao) AS A LEFT JOIN (SELECT Regiao, SUM(QtdItens) AS total2 from saidaproduto GROUP BY Regiao) AS B ON A.Regiao = B.Regiao ORDER BY total ASC;";
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
            subtitle: 'Quantidade de Produtos x Site',
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