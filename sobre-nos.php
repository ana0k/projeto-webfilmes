<?php
require "conexao.php"; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sobre Nós</title>
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
						<img src="images/page4_img1.jpg" alt="" class="img_inner fleft">
						<h3>Nossa Essência</h3><p><strong>As três palavras que nos define é amor, família e paixão.
							Somos um projeto familiar que surgiu de uma paixão antiga, trazida de geração para geração. A partir do desejo de se conectar à sua terra,
						 aos hábitos de sua família natal e da paixão que ele e sua esposa compartilham pelo vinho, buscaram um lugar há 20 anos atrás, onde hoje plantam suas próprias videiras e produzem seu próprio vinho.
						 É a história de uma dinastia familiar, que contribuiu para a qualidade da viticultura e a influenciou significativamente. Geração após geração, personalidades ilustres contribuíram com inteligência, 
						experiência e talento, assim como poder econômico e político para com a importância dos bons vinhos da região.
						<br>
						<br>
						A caminhada foi longa, mas hoje estamos aí, sendo uma grande vinícola do Rio Grande do Sul, trazendo diversidade, variedade e praticidade, e somente vinho de qualidade!</strong></p>
						<div class="clear cl1"></div>
						<!--<ul class="list2">
							<li><span>Best Wine Club: $19.95</span>, <a href="#">Dorem ipsum dolor sit amet, consectetur </a></li>
							<li><span>Premium Wine Club: $25.95</span>, <a href="#">Scing elit. In mollis. erat mattis neque </a></li>
							<li><span>Golden Wine Club: $39.95</span>, <a href="#">Rat mattis neque facilisiit gere amet ultricies</a></li>
							<li><span>Silver Wine Club: $29.95</span>, <a href="#">Mattis neque facilisiit gere amet ultricies erater</a></li>
							<li><span>Champagne Club: $69.95</span>, <a href="#">Facilisiit gere amet ultricies erater rutrumes</a></li>
						</ul>
						<div class="alright"><a href="#" class="btn">Read More</a></div>-->
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