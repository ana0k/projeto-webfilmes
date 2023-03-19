<?php
require "conexao.php"; 

if(!empty($_POST["enviar"])){
 $Nome=htmlspecialchars(filter_input(INPUT_POST, "nomeCont"));
 $Email=htmlspecialchars(filter_input(INPUT_POST, "emailCont"));
 $Telefone=htmlspecialchars(filter_input(INPUT_POST, "telefoneCont"));
 $Senha=htmlspecialchars(filter_input(INPUT_POST, "senhaCont"));
 $Mensagem=htmlspecialchars(filter_input(INPUT_POST, "msg"));
 
 $query = "INSERT INTO contato (Nome, Email, Telefone,  Senha, Mensagem)" .
          "VALUES ('$Nome','$Email', '$Telefone', '$Senha', '$Mensagem');";

 mysqli_query($conex, $query);

}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/form.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/forms.js"></script>
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
						<div class="grid_4 alpha">
							<h3>Localização</h3>
							<div class="map">
								<figure class="">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.5291149425857!2d-51.62668668535413!3d-29.964220334509285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951bc13e64d1e83d%3A0x4ee860010ec1ea1e!2sIFSul%20-%20C%C3%A2mpus%20Charqueadas!5e0!3m2!1spt-BR!2sbr!4v1637202625799!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>								</figure>
								
								<h4 class="style1"><strong> Faça seu<a href="#"> login</a> ou <a href="cadastro.php">Cadastre-se</a>.</strong></h4>
								
							</div>
						</div>
						<div class="grid_3 omega">
							<h3>Fale conosco</h3>
							<form id="form"action="contato.php" method="POST">
								<div class="success_wrapper">
									<div class="success">Mensagem enviada!<br>
									<strong>Entraremos em contato.</strong> </div>
								</div>
								<fieldset>
									<label class="name">
									<input type="text" value="Nome:" name="nomeCont">
									<br class="clear">
									 </label><label class="phone">
									<input type="tel" value="Telefone:" name="telefoneCont">
									<br class="clear">
									</label>
									<label class="email">
									<input type="text" value="E-mail:" name="emailCont">
									<br class="clear">
									 </label>	
									<input type="password" value="senha" name="senhaCont">
									<br class="clear">
									<br>
									<label class="Mensagem">
									<textarea name="msg" id="message" required="required">Message:</textarea>
									<br class="clear">
									</label>
									<div class="clear"></div>
									<div class="btns">
										<input type="submit" name="enviar" class="btn" value="Enviar mensagem">
										<div class="clear"></div>
									</div>
								</fieldset>
							</form>
							
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