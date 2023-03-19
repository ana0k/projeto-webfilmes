<?php
require "conexao.php"; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Outros Itens</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/bgStretch.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
			$(document).ready(function(){
			$('#bgStretch')
				.bgStretch({
					align:'leftTop'
				})
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
	<body class="">
		<div id="bgStretch"><img src="images/bg_body.jpg" alt=""></div>
<!--==============================header=================================-->
		<header> 		
		<?php include __DIR__ . "/includes/navegacao.php";
		?>
		</header>
<!--=======content================================-->
		<div class="content_wrapper"><div class="ic">More Website Templates @ TemplateMonster.com - September 23, 2013!</div>
			<div class="container_12">
				<div class="grid_9">
					<div class="content">
						<div class="grid_5 alpha">
							<div class="block1">
								<img src="images/taças.jpg" width="140" alt="" class="img_inner fleft">
								<div class="">
									<h3>Taças</h3>
									<ul list-style: none>
										<li><strong>Conjunto de 2 Taças para Vinho Bourdeaux Grand Cru 860ml Sommelier Riedel</strong></li>
										<br>
										<li><h4>R$ 200,00</h4></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
							<div class="block1">
								<img src="images/cortagotas.jpg" width="140" alt="" class="img_inner fleft">
								<div class="">
									<h3>Corta gotas</h3>
									<ul list-style: none>
										<li><p><strong>Pacote com duas películas metalizadas que aderem a boca da garrafa</strong></p></li>
										<li><h4>R$ 14,00</h4></li>
										
									</ul>
								</div>
								<div class="clear"></div>
							</div>
							<div class="block1">
								<img src="images/sacarolhas.jpg" width="140" alt="" class="img_inner fleft">
								<div class="">
									<h3>Saca rolhas</h3>
									<ul style-type:none>
										<li><strong>Saca Rolhas Vinhos e Garrafas Inox Mimo Style Visitar</strong></li>		
										<br>							
										<li><h4>R$ 23,90</h4></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_3">
				<h1><a href="index.php"><img src="images/logo.png" alt="Decanter 1800 Winery &amp; Vineyard Toscana, Italy"></a></h1>				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
						Decanter &copy; 2013 | <a href="#">Privacy Policy</a> | Website Template designed by Ana Lidia Marques Barbo and Juliana Muller de Freitas.
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>