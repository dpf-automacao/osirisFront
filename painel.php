<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
	<title>Painel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<fieldset>
  		<div align='center'>
	        <a href="https://qadpf.000webhostapp.com/" title="Metricas de Projetos"></a>
	        <!--img src='img/logo.png' alt='Gerenciador de Testes'  width="150" height="" ></a> -->
	        <h1><p>Painel de Projetos DPF</p></h1>
        </div>
    </fieldset><hr>		
</head>

<body>
	<div class='container'>	<!-- Cabeçalho da Listagem -->
		<div align='center'>
		
<img id="logo_pf" src="img/logo.png" alt="Logo da PF" width=17%/>		


<?php

// Endereço do site
$url = 'http://www.pf.gov.br/';

// Pegando dados do Site e colocando em uma String
$dadosSite = file_get_contents($url);

// Exibindo o retorno
//echo $dadosSite;


preg_match_all('/<title>(.+)<\/title>/', $dadosSite, $conteudo);
echo $conteudo[1][0];

//phpinfo();
$url = file_get_contents('http://issues.corp.stefanini.com/view_all_bug_page.php');
preg_match_all('/Visualizando(.+)/', $url, $conteudo);
$exibir = $conteudo[0][0];
$retirar = array('Casos',' (1 - 50 / ','','-->','<!--');
$exibir = str_replace($retirar, '', $exibir);
echo $exibir;

/*

$handle = fopen("mantis.csv", "r");
 
$row = 0;
while ($line = fgetcsv($handle, 1000, ",")) {
	if ($row++ == 0) {
		continue;
	}
	
	$people[] = [
		'Núm' => $line[0],
	/*	'Projeto' => $line[1],
		'Relator' => $line[2],
		'Atribuído a' => $line[3],
        'Prioridade' => $line[4],
        'Gravidade' => $line[5],
        'Freqüência' => $line[6],
        'Versão do Produto' => $line[7],
        'Categoria' => $line[8],
        'Data de Envio' => $line[9],
        'SO' => $line[10],
        'Versão SO' => $line[11],
        'Plataforma' => $line[12],
        'Visibilidade' => $line[13],
        'Resumo' => $line[14],
        'Estado' => $line[15],
        'Resolução' => $line[16],
        'Corrigido na Versão' => $line[17]
   
        
	];
}
 
print_r($people);
 
fclose($handle);
*/
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<div id="container"></div>
<input type="file" id="arquivo"/>


<script>
document.getElementById('arquivo').addEventListener('change', abrirArquivo, false);

var leitor = new FileReader();
var linhas;
var grafico = [];
var prov = [];
grafico.series = [];

function abrirArquivo(a) {
  var arquivo = a.target.files[0];
  if (!arquivo) {
    return;
  }
  leitor.readAsText(arquivo);
  
  }
  
  leitor.onload = function(e) {
    var conteudo = e.target.result;
    lerDados(conteudo);
  };

function lerDados(texto) {
    linhas = texto.split(/\r\n|\n/);

    for (var j = 0; j < linhas.length; j++) {
        prov = linhas[j].split(',');
        for(var i=0; i<prov.length; i++) {
            prov[i] = parseInt(prov[i], 10);
        }

        grafico.series[j] = [];
        grafico.series[j].data = prov;
        grafico.series[j].name = "test";
    }
    Highcharts.chart('container', grafico);
}
</script>

		</div>
	</div>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
<div id="footer" padding="20"><hr><!--Rodapé da Pagina-->
	<div id="" align="center">
		<address id="recurso_de_teste-copyright">
		<address id="version"><p> Powered by <a href="https://qadpf.000webhostapp.com/" title="Sistema de Monitoramento de Projetos"> QA - DPF </a> &reg; 2017 Time de QA <img id="logo_stefanini" src="img/logo_stefanini.png" alt="Logo da Stefanini" pla width=10%/> </a>
		<address id="webmaster-contact-information"> Contato <a href="mailto:fabricio.4135@gmail.com" title="Entre em contato com o webmaster via e-mail."> Administrador </a> para sugestões </address></p></a>
	</div>	
</div>
</html>