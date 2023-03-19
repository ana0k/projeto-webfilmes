<?php
require "conexao.php"; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Nossos Filmes</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/TMGPrototype2.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/TMGPrototype2.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
			$(window).load(function(){
				$('#TMGPrototype2').TMGPrototype2({});
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1">
<!--==============================header=================================-->
		<header>
		<?php include __DIR__ . "/includes/navegacao.php";
		?>	

		</header>
		<div id="TMGPrototype2"><div class="ic">More Website Templates @ TemplateMonster.com - September 23, 2013!</div>
		<h1><a href="index.php"><img src="images/logo.png" alt="Decanter 1800 Winery &amp; Vineyard Toscana, Italy"></a></h1>			<ul class='sets'>
				<li data-setName="Vinho Tinto">
					<ul>
						<li data-srcPreview="images/red1.jpg">
							<div>
								<div class="content">
									<img src="images/red_wine.jpg" alt="">
									<h3>Cabernet</h3>
									<p>Originária da região de Bordeaux, no sudoeste da França, ela é a uva vinífera mais difundida no mundo, encontrando-se em todas as zonas temperadas e quentes. É conhecida como "a rainha das uvas tintas"</p>
									<p> Vinho Tinto Chileno Casanova Antaño Reserva Cabernet Sauvignon</p>
									<ul>
										<li><span>Estilo:</span>Seco</li>
										<li><span>Alcool:</span> 13,30%</li>
										<li><span>Temp. de serviço: </span> 14-16°C</li>
										<li><span>Conteúdo: </span> 750 ml </li>
										<li><span>Safra: </span> 2019</li>
										<li><span>Valor:</span> R$ 78,43</li>
										
									</ul>
									
								</div>
							</div>
						</li>
						<li data-srcPreview="images/red2.jpg">
							<div>
								<div class="content">
									<img src="images/red_wine.jpg" alt="">
									<h3>Pinot Noir</h3>
									<p>Os Vinhos Pinot Noir são um dos mais antigos do planeta. As principais regiões de fabricação frequentemente são apontadas ao norte da França, Lombardia e Egito. Eles são vinhos de taninos suaves e uma acidez perfeita, e harmonizam com praticamente qualquer tipo de prato.</p>
									<p> Vinho Brasileiro Tinto Pinot Noir AURORA</p>
									<ul>
									<li>
										<span>Estilo:</span> Seco</li>
										<li><span>Alcool:</span> 12%</li>
										<li><span>Temp. de serviço: </span> 14-16°C</li>
										<li><span>Conteúdo: </span> 750 ml </li>
										<li><span>Safra: </span> 2000</li>
										<li><span>Valor:</span> R$ 90,00</li>
									</ul>
								</div>
							</div>
						</li>
						<li data-srcPreview="images/red3.jpg">
							<div>
								<div class="content">
									<h3>Merlot</h3>
									<img src="images/red_wine.jpg" alt="">
									<p>A textura dos vinhos Merlot é muito macia e doce. Alguns dos aromas típicos desse vinho são os frutados (morango, ameixa), florais (rosas, violetas), carvalho (cacau, tabaco) e especiarias (cravo, café), o que causa uma grande diferença entre vinhos Merlot e os demais.</p>
									<p>Vinho Casa Perini Arbo Merlot</p>
									<ul>
									<li>
										<span>Estilo:</span> Tintos Macios</li>
										<li><span>Alcool:</span> 11,8%</li>
										<li><span>Temp. de serviço: </span> 14-16°C</li>
										<li><span>Conteúdo: </span> 750 ml </li>
										<li><span>Safra: </span> 2010</li>
										<li><span>Valor:</span> R$ 70,00</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li data-setName="Vinho Branco">
					<ul>
						<li data-srcPreview="images/white1.jpg">
							<div>
								<div class="content">
									<img src="images/white_wine.jpg" alt="">
									<h3>Chardonnay</h3>
									<p>Originária da França, essa uva é chamada pelos especialistas de Rainha das uvas brancas, por conta de suas características de aroma e sabor de altíssima qualidade e super específicas. São bastante aromáticos e remetem a frutas cítricas ou, quando passam por carvalho, podem ter toques de baunilha e noz moscada.</p>
									<p>Vinho Chileno Branco Chardonnay</p>
									<ul>
									<li><span>Estilo:</span> Seco e leve</li>
										<li><span>Alcool:</span> 13,30%</li>
										<li><span>Temp. de serviço: </span> 14-16°C</li>
										<li><span>Conteúdo: </span> 750 ml </li>
										<li><span>Safra: </span> 2019</li>
										<li><span>Valor:</span> R$ 69,99</li>
									</ul>
								</div>
							</div>
						</li>
						<li data-srcPreview="images/white2.jpg">
							<div>
								<div class="content">
									<img src="images/white_wine.jpg" alt="">
									<h3>Sauvignon Blanc</h3>
									<p>Também de origem francesa, a Sauvignon remete mais a frutos tropicais e adocicados, como o maracujá, manga e melão. Ela também é responsável pela produção de vinhos mais delicados e de coloração clara. Muito refrescante, é a uva ideal para vinhos que serão consumidos em dias de calor ou na beira da piscina!</p>
									<p> Vinho Chileno Branco Sauvignon Blanc</p>
									<ul>
									<li><span>Estilo:</span> Leve</li>
										<li><span>Alcool:</span> 12%</li>
										<li><span>Temp. de serviço: </span> 14-16°C</li>
										<li><span>Conteúdo: </span> 750 ml </li>
										<li><span>Safra: </span> 2003</li>
										<li><span>Valor:</span> R$ 80,00</li>
									</ul>
								</div>
							</div>
						</li>
						<li data-srcPreview="images/white3.jpg">
							<div>
								<div class="content">
									<h3>Moscato</h3>
									<img src="images/white_wine.jpg" alt="">
									<p> Uma uva mediterrânea, muito popular em países dessa região mais “tropical” da Europa, é muito utilizada para a produção de vinhos adocicados, de sobremesa, como os tradicionais moscatéis. Tem aroma discreto e sabor mais doce. </p>
									<p>Vinho Panizzon Moscato Giallo</p>
									<ul>
									<li><span>Estilo:</span> Suave</li>
										<li><span>Alcool:</span> 13,30%</li>
										<li><span>Temp. de serviço: </span> 14-16°C</li>
										<li><span>Conteúdo: </span> 750 ml </li>
										<li><span>Safra: </span> 2011</li>
										<li><span>Valor:</span> R$ 45,99</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li data-setName="Espumante">
					<ul>
						<li data-srcPreview="images/spark1.jpg">
							<div>
								<div class="content">
									<img src="images/sparkl_wine.jpg" alt="">
									<h3>Astri</h3>
									<p>Nullam consectetur orci sed nulla facilisis consequat. Curabitur vel lorem sit amet nulla ullamcper fermentum. In vitae augue, eu. </p>
									<p>Etiam dui eros, laoreet sit amet est velewyl commodo venenatis eros. Fusce adipiscing quam id risus sagittis, non lacus interdum.</p>
									<ul>
									<li><span>Estilo:</span> Tintos Macios</li>
										<li><span>Alcool:</span> 13,30%</li>
										<li><span>Temp. de serviço: </span> 14-16°C</li>
										<li><span>Conteúdo: </span> 750 ml </li>
										<li><span>Safra: </span> 2019</li>
										<li><span>Valor:</span> Aliquam nibh</li>
									</ul>
								</div>
							</div>
						</li>
						<li data-srcPreview="images/spark2.jpg">
							<div>
								<div class="content">
									<img src="images/sparkl_wine.jpg" alt="">
									<h3>Prosecco</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia impedit possimus architecto repellat enim velit alias quis</p>
									<p> harum veritatis. Autem quaerat obcaecati quos corporis quasi voluptatum dolores velit laboriosam.</p>
									<ul>
									<li><span>Estilo:</span> Tintos Macios</li>
										<li><span>Alcool:</span> 13,30%</li>
										<li><span>Temp. de serviço: </span> 14-16°C</li>
										<li><span>Conteúdo: </span> 750 ml </li>
										<li><span>Safra: </span> 2019</li>
										<li><span>Valor:</span> Aliquam nibh</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
					Decanter &copy; 2021| <a href="#">Privacy Policy</a> | Website Template designed by Ana Lidia Marques Barbo and Juliana Muller de Freitas.
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>