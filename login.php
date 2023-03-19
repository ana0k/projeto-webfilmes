<?php
 session_start();
 require "conexao.php";

if (!empty($_POST["Enter"])){
$nameLogin=htmlspecialchars(filter_input(INPUT_POST, "nameLogin"));
$nameEmail=htmlspecialchars(filter_input(INPUT_POST, "nameEmail"));
$namePassword=htmlspecialchars(filter_input(INPUT_POST, "namePassword"));

$query = "SELECT * FROM cadastro WHERE Nome LIKE '$nameLogin' AND Email LIKE '$nameEmail' AND Senha LIKE '$namePassword';";

 $res = mysqli_query($conex, $query);
 
 if (mysqli_num_rows($res) == 0){
    $msg = "Email ou senha inválidos"; 
 }else{
   $li = mysqli_fetch_array($res);
    setcookie("Logado", 1,time()+60*10);
    $_SESSION["idCadastro"] = $li["idCadastro"];
    $_SESSION["Nome"] = $li["Nome"];
    header("Location: index.php");
 }
}
?>
<html lang="pt-br">
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


                            <h3>Faça seu login para continuar: </h3>
							<h4>Caso ainda não possua um login <a href="cadastro.php"><strong>cadastre-se</strong></a></h4>

								<form id="form" name="login" method="post" action="login.php">
								   
                            <?php
                            if(!empty($msg)){
                                echo "<p>".$msg."</p>";
                            }
                            ?>
								<div class="success_wrapper">
									<div class="success">Login concluído!<br>
									<strong>Aproveite o melhor do nosso site!</strong> </div>
								</div>
								<fieldset>
									<label class="name">
									<input type="text" name="nameLogin" value="Nome:" >
									<br class="clear">
									</label>
									<br>
									<label class="email">
									<input type="text" name="nameEmail" value="E-mail:">
									<br class="clear">
									</label>	
									<br>
                                    <p>Senha:</p>
                                    <input type="password" name="namePassword" value="senha">
                                    <br class="clear">
                                    </label>	

									<div class="clear"></div>
									<div class="btns">
										<br>
                                        <a data-type="reset" class="btn">Cancelar</a>
										<input type="submit"name="Enter" class="btn" value="Entrar">
										<div class="clear"></div>
                                		<br>
                                        <a href="cadastro.php" class="btn">Fazer <strong>Cadastro</strong></a>
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