<?php
	include("includes/conexao.php");
	include("class/Usuario.class.php");
	if(!empty($_POST['enviar'])){
		if(!empty($_POST['senha']) && !empty($_POST['email'])){
			$usuario=new Usuario();
			$usuario->setEmail($_POST['email']);
			$usuario->setSenha($_POST['senha']);
			$login=$usuario->logar($mysqli);
			if($login){
				header("location:usuario.php");
			}else{
				$erro="Email ou senha estão incorretos";
			}
		}else{
			$erro="Preencha os campos";
		}
	}
	//echo $_SESSION['idUsuario'];
						//echo $_SESSION['emailUsuario'];
						//echo $_SESSION['usuario'];
	//var_dump($mysqli);
	//require("class/Deposita.class.php")?>
<!DOCTYPE html>
<html>
<head>
<title>InfColeta</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Stylish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<script src="js/menu_jquery.js"></script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="header-left">
				<ul> 
					<li><a href="cadastro.php">CADASTRO</a></li>
					<li class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>ENTRAR</span></a>
						    <div id="loginBox">                
						        <form id="loginForm" action="#" method="post">
						        	
									<fieldset id="body">
										<fieldset>
											<?php
												if(isset($erro)){
													echo $erro;
												}
											?>
											<label for="email">Email</label>
											<input type="text" name="email" id="email">
										</fieldset>
										<fieldset>
											<label for="password">Senha</label>
											<input type="password" name="senha" id="password">
										</fieldset>
										<input type="submit" id="login" value="ENTRAR" name="enviar">
									</fieldset>
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt="" width="160" height="149"/></a>
			</div>
			<div class="top-nav">
				<span class="menu"><img src="images/menu.png" alt=""/></span>
				<ul>
					<li><a class="active" href="index.php">Início</a></li>
					<li><a href="sobre.php">Sobre</a></li>					
					<li><a href="coleta.php">Coleta</a></li>
					<li><a href="apoio.php">Apoio</a></li>
					<li><a href="reciclagem.php">Reciclagem</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
				<script>					
							$("span.menu").click(function(){
								$(".top-nav ul").slideToggle("slow" , function(){
								});
							});
				</script>
			</div>
			<div class="search-box">
				<div id="sb-search" class="sb-search">
					<a href="sair.php"><img src="./images/sair.png" width="20" height="20"></a>
				</div>
			</div>
			<div class="clearfix"> </div>
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
		</div>
	</div>	
	<div class="banner">
		<script src="js/responsiveslides.min.js"></script>
		
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner1">
					</div>
				</li>
			</ul>
			<div class="clearfix"> </div>
		</div>
	</div>			
	<div class="footer">
		<div class="container">
			<div class="">
				<center><p> Todos os direitos reservados - 2015.</p></center>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <script src="js/bootstrap.js"></script>
</body>
</html>