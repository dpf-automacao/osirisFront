<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
	<title>Painel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<fieldset>
  	    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">
        </script>
        <script type="text/javascript">
         // Load the Visualization API and the corechart package.
         google.charts.load('current', {'packages':['corechart']});
         // Set a callback to run when the Google Visualization API is loaded.
         google.charts.setOnLoadCallback(drawChart);
         // Callback that creates and populates a data table,
         // instantiates the pie chart, passes in the data and
         // draws it.
         function drawChart() {
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Miner', 295],
          ['Siscaer', 35],
          ['Sittel', 54],
          ['Siproquim', 707],
          ['Rapina', 0]
        ]);
        // Set chart options
        var options = {
            'title': 'Total de Bugs por Projeto','width':600,'height':200,
            legend: {
                textStyle: {
                    fontSize: 18
                }
            }
            
        };
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        }
       </script>
       <table align="center" style="width: 1000px;">
        <tr>
            <td><div><img id="logo_pf" src="img/logo.png" alt="Logo da PF" width=60%/>
            </div></td>
            <td><div><h1><p>Metricas Projetos PF</p></h1>
            </div></td>
            <td><div id="chart_div">
            </div>
            </td>
        </tr>
        </table>
      </fieldset>	
      </head>
      <hr>
 <body>
<!-- <div class='container'>	 Cabeçalho da Listagem -->
	 <div align='center'>
     <script type="text/javascript">
       google.charts.load('current', {'packages':['bar']});
       google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sprint corrente', 'Total', 'Interno', 'Externo'],
          ['Miner', 41, 28, 7],
          ['Siscaer', 19, 0, 0],
          ['Sittel', 18, 0, 0],
          ['Siproquim', 29, 0, 0],
          ['Rapina', 0, 0, 0]
        ]);
        var options = {
          chart: {
            title: 'Ocorrências por Sprint',
            subtitle: 'Bugs - Dados do Mantis: 2018',
          },
          hAxis: { 
              textStyle: {
                  fontSize: 18
              }
          }
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <div id="columnchart_material" style="width: 800px; height: 350px;"></div>
  </body>
<div id="footer" padding="0"><hr><!--Rodapé da Pagina-->
	<div id="" align="center">
		<address id="recurso_de_teste-copyright">
		<address id="version"><p> Desenvolvido por <a href="https://qadpf.000webhostapp.com/" title="Sistema de Monitoramento de Projetos"> QA - DPF </a> &reg; 2018 Time de QA <img id="logo_stefanini" src="img/logo_stefanini.png" alt="Logo da Stefanini" pla width=8%/> </a>
		<address id="webmaster-contact-information"> Contato <a href="mailto:fabricio.4135@gmail.com" title="Entre em contato com o webmaster via e-mail."> Administrador </a> para sugestões </address></p></a>
	</div>	
</div>
</html>