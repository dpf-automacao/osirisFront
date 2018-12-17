<!DOCTYPE html>
<html lang="pt-br">
<head>
   
<script src="RGraph/libraries/RGraph.common.core.js"></script>
<script src="RGraph/libraries/RGraph.bar.js"></script>

 <meta charset="utf-8">
	<title>Painel</title>
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

<canvas id="cvs" width="650" height="300">
    [No canvas support]
</canvas>


<script>
    var gutterLeft   = 60,
        gutterRight  = 25,
        gutterTop    = 45,
        gutterBottom = 65,
        hmargin      = 15,
        ymax         = 35,
        data = [

            // If you don't need a third dataset take out this FIRST
            // dataset and replace it with the word: null

            // null, // [12,16,10,12,13,15,16]
            [5,16,10,12,13,15,30],
            [15,21,24,23,18,19,20],
            [35,34,32,28,26,35,34]
        ],
        colors = [
            'Gradient(#696:#0f0:#0f0)',
            'Gradient(#966:#f00:#f00)',
            'Gradient(#669:blue:blue)'
        ],
        labels = ['Miner','Siscaer','Sittel','Siproquim','Rapina','Sinarm','Sis'];




    var bar = new RGraph.Bar({
        id: 'cvs',
        data: data[2],
        options: {
            textAccessible: true,
            variant: '3d',
            variantThreedYaxis: false,
            variantThreedXaxis: false,
            strokestyle: 'rgba(0,0,0,0)',
            colors: [colors[2]],
            shadow: true,
            shadowOffsetx: 10,
            backgroundGridColor: '#ccc',
            backgroundGridAutofitNumhlines: 5,
            backgroundGridAutofitNumvlines: 14,
            scaleZerostart: true,
            axisColor: '#ddd',
            gutterBottom: gutterBottom,
            gutterTop: gutterTop,
            gutterLeft: gutterLeft,
            gutterRight: gutterRight,
            hmargin: hmargin,
            ymax: ymax,
            noaxes: true,
            ylabels: false
        }
    }).grow();

    var bar2 = new RGraph.Bar({
        id: 'cvs',
        data: data[1],
        options: {
            textAccessible: true,
            variant: '3d',
            variantThreedYaxis: false,
            variantThreedXaxis: false,
            strokestyle: 'rgba(0,0,0,0)',
            colors: [colors[1]],                
            shadow: true,
            shadowOffsetx: 10,
            shadowColor: 'rgba(0,0,0,0.5)',
            backgroundGrid: false,
            axisColor: '#ddd',
            ylabels: false,
            labels: [],
            gutterBottom: gutterBottom - 10,
            gutterTop: gutterTop + 10,
            gutterLeft: gutterLeft - 25,
            gutterRight: gutterRight + 25,
            hmargin: hmargin,
            ymax: ymax,
            noaxes: true
        }
    }).grow();


    if (data[0]) {
        var bar3 = new RGraph.Bar({
            id: 'cvs',
            data: data[0],
            options: {
                textAccessible: true,
                variant: '3d',
                variantThreedYaxis: false,
                variantThreedXaxis: false,
                strokestyle: 'rgba(0,0,0,0)',
                colors: [colors[0]],
                labels: labels,
                shadow: true,
                shadowOffsetx: 10,
                shadowColor: 'rgba(0,0,0,0.5)',
                backgroundGrid: false,
                axisColor: '#ddd',
                unitsPost: 'km',
                gutterTop: gutterTop + 20,
                gutterBottom: gutterBottom - 20,
                gutterLeft: gutterLeft - 40,
                gutterRight: gutterRight + 40,
                hmargin: hmargin,
                ymax: ymax,
                noaxes: true,
                scaleZerostart: true,
                ylabels: false
            }
        }).grow();
    }
    
    var yaxis = new RGraph.Drawing.YAxis({
        id: 'cvs',
        x: 640,
        options: {
            max:          bar.scale2.max,
            colors:       ['rgba(0,0,0,0)'],
            textColor:    'black',
            gutterTop:    gutterTop,
            gutterBottom: gutterBottom + 35,
            align: 'right'
        }
    }).draw();
</script>

		</div>
	</div>
</body>
<div id="footer" padding="20"><hr><!--Rodapé da Pagina-->
	<div id="" align="center">
		<address id="recurso_de_teste-copyright">
		<address id="version"><p> Powered by <a href="https://qadpf.000webhostapp.com/" title="Sistema de Monitoramento de Projetos"> QA - DPF </a> &reg; 2017 Time de QA <img id="logo_stefanini" src="img/logo_stefanini.png" alt="Logo da Stefanini" pla width=10%/> </a>
		<address id="webmaster-contact-information"> Contato <a href="mailto:fabricio.4135@gmail.com" title="Entre em contato com o webmaster via e-mail."> Administrador </a> para sugestões </address></p></a>
	</div>	
</div>
</html>