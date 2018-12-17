<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
	<title>Painel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
<!-- Grafico do centro da pagina -->
	 <div align='center'>
 <?php

 $row = 1;
if (($handle = fopen("sonar.csv", "r")) !== FALSE) {
   
    echo '<div class="tg-wrap"><table class="tg">';
   
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        $num = count($data);
        if ($row == 1) {
            echo '<thead class="tg-f36v"><tr>';
        }else{
            echo '<tr>';
        }
       
        for ($c=0; $c < $num; $c++) {
            //echo $data[$c] . "<br />\n";
            if(empty($data[$c])) {
               $value = "&nbsp;";
            }else{
               $value = $data[$c];
            }
            if ($row == 1) {
                echo '<th class="tg-ht85">'.$value.'</th>';
            }else{
                echo '<td class="tg-zirv">'.$value.'</td>';
            }
        }
       
        if ($row == 1) {
            echo '</tr></thead><tbody>';
        }else{
            echo '</tr>';
        }
        $row++;
    }
   
    echo '</tbody></table></div>';
    fclose($handle);
} 
  
?>  
<!--Rodapé da Pagina-->     
  </body>
<div id="footer" padding="0"><hr>
	<div id="" align="center">
		<address id="recurso_de_teste-copyright">
		<address id="version"><p> Desenvolvido por <a href="https://qadpf.000webhostapp.com/" title="Sistema de Monitoramento de Projetos"> QA - DPF </a> &reg; 2018 Time de QA <img id="logo_stefanini" src="img/logo_stefanini.png" alt="Logo da Stefanini" pla width=8%/> </a>
		<address id="webmaster-contact-information"> Contato <a href="mailto:fabricio.4135@gmail.com" title="Entre em contato com o webmaster via e-mail."> Administrador </a> para sugestões </address></p></a>
	</div>	
</div>
</html>