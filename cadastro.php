<?php
session_start();
require "conexao.php"; 

if(!empty($_POST["enviar"])){
 $Nome=htmlspecialchars(filter_input(INPUT_POST, "nome"));
 $Email=htmlspecialchars(filter_input(INPUT_POST, "email"));
 $Telefone=htmlspecialchars(filter_input(INPUT_POST, "telefone"));
 $Senha=htmlspecialchars(filter_input(INPUT_POST, "senha"));
 
 $query = "SELECT * " 
         . "FROM cadastro " 
         . "WHERE Email LIKE '$Email' ";

 $result = mysqli_query($conex, $query);

 if (mysqli_num_rows($result) == 0){
 	$_SESSION["NomeCadas"] = $Nome;

    $query = "INSERT INTO cadastro (Nome, Email, Telefone, Senha)" .
          "VALUES ('$Nome','$Email', '$Telefone', '$Senha');";

 mysqli_query($conex, $query);

 }
  header("Location:Login.php");
}
?>
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
						<?php
							$clientArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);
							var_dump ($clientArray);
							?>
                            <h3>Cadastre-se </h3>

								<form id="form" action="cadastro.php" method="POST">
								<div class="success_wrapper">
									<div class="success">Cadastro concluído!<br>
									<strong>Agora faça seu login para continuar.</strong> </div>
								</div>
								<fieldset>
									<label class="name">
									<input type="text" value="Nome:" name="nome">
									<br class="clear">
									<span class="error error-empty">*Esse não é um nome válido.</span><span class="empty error-empty">*Este campo é obrigatório.</span> </label><label class="phone">
									<input type="tel" value="Telefone:" name="telefone">
									<br class="clear">
									<span class="error error-empty">*Telefone inválido.</span><span class="empty error-empty">*Este campo é obrigatório.</span> </label>
									<label class="email">
									<input type="text" value="E-mail:" name="email">
									<br class="clear">
									<span class="error error-empty">*Email inválido.</span><span class="empty error-empty">*Este campo é obrigatório.</span> </label>	
									<br>
                                    <p>Senha:</p>
                                    <input type="password" value="senha" name="senha">
                                    <br class="clear">
                                    <span class="error error-empty">*Senha inválida.</span><span class="empty error-empty">*Este campo é obrigatório.</span> </label>	
									
                                    <br>
                                    <p>Informe sua senha novamente:</p>
									<input type="password" value="senha" name="senhaconf">
									<br class="clear">
                                    <span class="error error-empty">*Senha inválida.</span><span class="empty error-empty">*Este campo é obrigatório.</span> </label>	

									<div class="clear"></div>
									<div class="btns">
										<a data-type="reset" class="btn">Cancelar</a><input type="submit" name="enviar" class="btn" value="Cadastrar">
										<div class="clear"></div>
                                        <br>
                                        <a href="login.php" class="btn">Fazer <strong>login</strong></a>
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