<?php
	include("includes/conexao.php");
	include("includes/sessao_cookie.php");
	include("class/Usuario.class.php");

	$usuario=new Usuario();
	$login=$usuario->logar($mysqli);
	if(isset($_SESSION["idUsuario"])){
		$id=$_SESSION["idUsuario"];
	}
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
<script src="js/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript" src="js/mostrainformação.js"></script>	
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
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt="" width="160" height="149"/></a>
			</div>
			<div class="top-nav">
				<span class="menu"> <img src="images/menu.png" alt=""/> </span>
					<ul>
					<li><a class="active" href="usuario.html">Perfil</a></li>
					<li><a href="deposito.php">Depósito</a></li>					
					<li><a href="enquete.php">Enquete</a></li>
					<li><a href="ranking.php">✩ ✩ ✩ ✩ ✩ ✩ ✩ ✩ ✩ Ranking ✩ ✩ ✩</a></li>
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
				
				</div>
			</div>
			<div class="clearfix"> </div>	
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
		</div>
		<div class="search-box">
				<div id="sb-search" class="sb-search">
					<a href="sair.php"><img src="./images/sair.png" width="20" height="20"></a>
				</div>
		</div>
	</div>	
	<div class="banner1 about-bnr">
	</div>
	<div class="about"> 
		<div class="container">
			<h1 class="hdng">Perfil</h1>
			<div class="about-text">
				<div class="col-md-6 about-text-left">
				</div>
				<div class="col-md-6 about-text-right">
					<h4><?php
					$usu= new Usuario($id);
					$usu->getUsuario($mysqli);
					echo $usu->getNome() . " " . $usu->getSobrenome(); 
					?></h4>
					<p>Informações do usuário:</p>
					
				</p>
					<ul>
						<br>
						
						<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Telefone:<?php echo $usu->getTelefone();?></li>
						<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Endereço:<?php echo $usu->getEndereco();?></li>
						<br>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<div class="footer">
		<div class="container">
			<div>
				<center><p> Todos os direitos reservados - 2015. </p></center>
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