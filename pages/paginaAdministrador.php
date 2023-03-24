<?php
use function PHPSTORM_META\type;
if(isset($_POST['submit']))
{
    $data = $_POST['dataRelatorio'];
    include_once('../conexaoBD.php');
    
    
    $ruinsPratoPrincipal = 0;
    $regularesPratoPrincipal = 0;
    $bonsPratoPrincipal = 0;
    $excelentesPratoPrincipal = 0;

    $ruinsAcompanhamento = 0;
    $regularesAcompanhamento = 0;
    $bonsAcompanhamento = 0;
    $excelentesAcompanhamento = 0;

    $ruinsGuarnicao = 0;
    $regularesGuarnicao = 0;
    $bonsGuarnicao = 0;
    $excelentesGuarnicao = 0;

    $ruinsSalada = 0;
    $regularesSalada = 0;
    $bonsSalada = 0;
    $excelentesSalada = 0;

    $ruinsSobremesa = 0;
    $regularesSobremesa = 0;
    $bonsSobremesa = 0;
    $excelentesSobremesa = 0;

    $ruinsOpiniao = 0;
    $regularesOpiniao = 0;
    $bonsOpiniao = 0;
    $excelentesOpiniao = 0;

    $ruinsTempoFila = 0;
    $regularesTempoFila = 0;
    $bonsTempoFila = 0;
    $excelentesTempoFila = 0;

    $result = mysqli_query($conexao, "SELECT * from avaliacao WHERE data = '$data'");
    //print_r($result);
    $i = 0; 
    while($linha = mysqli_fetch_object($result))
    {
        $avaliacaoPratoPrincipal = $linha->pratoPrincipal;
        if($avaliacaoPratoPrincipal == 'RUIM')
        {
            $ruinsPratoPrincipal++;
        }
        elseif($avaliacaoPratoPrincipal == 'REGULAR')
        {
            $regularesPratoPrincipal++;
        }
        elseif($avaliacaoPratoPrincipal == 'BOM')
        {
            $bonsPratoPrincipal++;
        }
        else
        {
            $excelentesPratoPrincipal++;
        }

        $avalicaoAcompanhamento = $linha->acompanhamento;

        if($avalicaoAcompanhamento == 'RUIM')
        {
            $ruinsAcompanhamento++;
        }
        elseif($avalicaoAcompanhamento == 'REGULAR')
        {
            $regularesAcompanhamento++;
        }
        elseif($avalicaoAcompanhamento == 'BOM')
        {
            $bonsAcompanhamento++;
        }
        else
        {
            $excelentesAcompanhamento++;
        }

        $avaliacaoGuarnicao = $linha->guarnicao;

        if($avaliacaoGuarnicao == 'RUIM')
        {
            $ruinsGuarnicao++;
        }
        elseif($avaliacaoGuarnicao == 'REGULAR')
        {
            $regularesGuarnicao++;
        }
        elseif($avaliacaoGuarnicao == 'BOM')
        {
            $bonsGuarnicao++;
        }
        else
        {
            $excelentesGuarnicao++;
        }

        $avaliacaoSalada = $linha->salada;

        if($avaliacaoSalada == 'RUIM')
        {
            $ruinsSalada++;
        }
        elseif($avaliacaoSalada == 'REGULAR')
        {
            $regularesSalada++;
        }
        elseif($avaliacaoSalada == 'BOM')
        {
            $bonsSalada++;
        }
        else
        {
            $excelentesSalada++;
        }

        $avaliacaoSobremesa = $linha->sobremesa;

        if($avaliacaoSobremesa == 'RUIM')
        {
            $ruinsSobremesa++;
        }
        elseif($avaliacaoSobremesa == 'REGULAR')
        {
            $regularesSobremesa++;
        }
        elseif($avaliacaoSobremesa == 'BOM')
        {
            $bonsSobremesa++;
        }
        else
        {
            $excelentesSobremesa++;
        }

        $avaliacaoOpiniaoValorRefeicao = $linha->opiniaoValorRefeicao;

        if($avaliacaoOpiniaoValorRefeicao == 'RUIM')
        {
            $ruinsOpiniao++;
        }
        elseif($avaliacaoOpiniaoValorRefeicao == 'REGULAR')
        {
            $regularesOpiniao++;
        }
        elseif($avaliacaoOpiniaoValorRefeicao == 'BOM')
        {
            $bonsOpiniao++;
        }
        else
        {
            $excelentesOpiniao++;
        }

        $avaliacaoTempoFila = $linha->tempoFila;

        if($avaliacaoTempoFila == 'RUIM')
        {
            $ruinsTempoFila++;
        }
        elseif($avaliacaoTempoFila == 'REGULAR')
        {
            $regularesTempoFila++;
        }
        elseif($avaliacaoTempoFila == 'BOM')
        {
            $bonsTempoFila++;
        }
        else
        {
            $excelentesTempoFila++;
        }
        $i = $i + 1;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/administrador.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA DE ADMINISTRADOR</title>
</head>
<body>
    <header class="cabecalho">
        <img id="logoUnifesspa" src="../img/LOGO UNIFESSPA.png" alt="logo Unifesspa">
        <h3>PÁGINA DE ADMINISTRADOR</h3>
    </header>
    <form action="paginaAdministrador.php" method="post">
      <div id="entradaDados">
        <label id="dataRelatorio" for="dataRelatorio">DATA PARA RELATÓRIO</label>
        <input id="dataRelatorio" name="dataRelatorio" type="date" class="campoInput">
      </div>
      <input type="submit" name="submit" id="submit" value="RELATÓRIO" class="botao">
    </form>

     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var dataPratoPrincipal = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['RUIM',     <?php echo $ruinsPratoPrincipal ?>],
          ['REGULAR',      <?php echo $regularesPratoPrincipal ?>],
          ['BOM',  <?php echo $bonsPratoPrincipal ?>],
          ['EXCELENTE', <?php echo $excelentesPratoPrincipal ?>],
        ]);

        var optionsPratoPrincipal = {
          title: 'PRATO PRINCIPAL'
        };

        var chartPratoPrincipal = new google.visualization.PieChart(document.getElementById('graficoPratoPrincipal'));

        chartPratoPrincipal.draw(dataPratoPrincipal, optionsPratoPrincipal);


        //GRAFICO ACOMPANHAMENTO
        var dataAcompanhamento = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['RUIM',     <?php echo $ruinsAcompanhamento ?>],
          ['REGULAR',      <?php echo $regularesAcompanhamento ?>],
          ['BOM',  <?php echo $bonsAcompanhamento ?>],
          ['EXCELENTE', <?php echo $excelentesAcompanhamento ?>],
        ]);

        var optionsAcompanhamento = {
          title: 'ACOMPANHAMENTO'
        };

        var chartAcompanhamento = new google.visualization.PieChart(document.getElementById('graficoAcompanhamento'));

        chartAcompanhamento.draw(dataAcompanhamento, optionsAcompanhamento);


        //GRAFICO GUARNICAO
        var dataGuarnicao = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['RUIM',     <?php echo $ruinsGuarnicao ?>],
          ['REGULAR',      <?php echo $regularesGuarnicao ?>],
          ['BOM',  <?php echo $bonsGuarnicao ?>],
          ['EXCELENTE', <?php echo $excelentesGuarnicao ?>],
        ]);

        var optionsGuarnicao = {
          title: 'GUARNIÇÃO'
        };

        var chartGuarnicao = new google.visualization.PieChart(document.getElementById('graficoGuarnicao'));

        chartGuarnicao.draw(dataGuarnicao, optionsGuarnicao);

        //GRAFICO SALADA
        var dataSalada = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['RUIM',     <?php echo $ruinsSalada ?>],
          ['REGULAR',      <?php echo $regularesSalada ?>],
          ['BOM',  <?php echo $bonsSalada ?>],
          ['EXCELENTE', <?php echo $excelentesSalada ?>],
        ]);

        var optionsSalada = {
          title: 'SALADA'
        };

        var chartSalada = new google.visualization.PieChart(document.getElementById('graficoSalada'));

        chartSalada.draw(dataSalada, optionsSalada);


         //GRAFICO SOBREMESA
         var dataSobremesa = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['RUIM',     <?php echo $ruinsSobremesa ?>],
          ['REGULAR',      <?php echo $regularesSobremesa ?>],
          ['BOM',  <?php echo $bonsSobremesa ?>],
          ['EXCELENTE', <?php echo $excelentesSobremesa ?>],
        ]);

        var optionsSobremesa = {
          title: 'SOBREMESA'
        };

        var chartSobremesa = new google.visualization.PieChart(document.getElementById('graficoSobremesa'));

        chartSobremesa.draw(dataSobremesa, optionsSobremesa);


          //GRAFICO OPINIÃO VALOR JUSTO 
          var dataOpiniao = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['RUIM',     <?php echo $ruinsOpiniao ?>],
          ['REGULAR',      <?php echo $regularesOpiniao ?>],
          ['BOM',  <?php echo $bonsOpiniao ?>],
          ['EXCELENTE', <?php echo $excelentesOpiniao ?>],
        ]);

        var optionsOpiniao = {
          title: 'OPINIÃO DE VALOR DA REFEIÇÃO'
        };

        var chartOpiniao = new google.visualization.PieChart(document.getElementById('graficoOpiniaoValorRefeicao'));

        chartOpiniao.draw(dataOpiniao, optionsOpiniao);

        //GRAFICO TEMPO FILA
        var dataTempoFila = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['RUIM',     <?php echo $ruinsTempoFila ?>],
          ['REGULAR',      <?php echo $regularesTempoFila ?>],
          ['BOM',  <?php echo $bonsTempoFila ?>],
          ['EXCELENTE', <?php echo $excelentesTempoFila ?>],
        ]);

        var optionsTempoFila = {
          title: 'TEMPO FILA'
        };

        var chartTempoFila = new google.visualization.PieChart(document.getElementById('graficoTempoFila'));

        chartTempoFila.draw(dataTempoFila, optionsTempoFila);
      }
    </script>
<div class="container-graficos">
    <div id="graficoPratoPrincipal" class="graficos"></div>
    <div id="graficoAcompanhamento" class="graficos"></div>
    <div id="graficoGuarnicao" class="graficos"></div>
    <div id="graficoSalada" class="graficos"></div>
    <div id="graficoSobremesa" class="graficos"></div>
    <div id="graficoOpiniaoValorRefeicao" class="graficos"></div>
    <div id="graficoTempoFila" class="graficos"></div>
</div>
</body>
</html>