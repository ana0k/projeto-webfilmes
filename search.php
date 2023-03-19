<?php
require "conexao.php"; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Search</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/superfish.js"></script>
		<script src="search/search.js"></script>
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
					<h3>Resultados para:</h3>
						<div id="search-results"></div>
					</div>
				</div>
				<div class="grid_3">
					<h1><a href="index.html"><img src="images/logo.png" alt="Decanter 1800 Winery &amp; Vineyard Toscana, Italy"></a></h1>
				</div>
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