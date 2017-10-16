
<?php
	include("../includes/conexao.php");
	include("../class/Usuario.class.php");
	include('../class/Prefeitura.class.php');
	if(!empty($_POST['enviar'])){
	if($_POST['enviar']=="ENTRAR"){
		
			if(!empty($_POST['senha']) && !empty($_POST['email'])){
				$pref=new Prefeitura();

				$pref->setEmail(strtolower($_POST['email']));
				$pref->setSenha(strtolower($_POST['senha']));
				$login=$pref->logar($mysqli);
				if($login){
					header("location: Prefeitura.php");
				}else{
					$erro="Email ou senha estão incorretos";
				}
			}else{
				$erro="Preencha os campos";
			}

			}
		}
	
	//var_dump($mysqli);
	//require("class/Deposita.class.ph
?>
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
				
			</div>
			<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt="" width="160" height="149"/></a>
			</div>
			<div class="top-nav">
				<span class="menu"> <img src="images/menu.png" alt=""/> </span>
				<ul>
					<li><a href="prefeitura.php">Perfil</a></li>
					<li><a href="venda.php">Vender</a></li>					
					<li><a href="agendar.php">Agendar</a></li>
					<li><a href="cadastra_enquete.php">Enquete</a></li>
					<li><a href="cadastra_posto_coleta.php">Coleta</a></li>
					<li><a href="informacoes.php">Informação</a></li>
					<li><a href="sair.php"></a>Sair<li>
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
			<div class="search-box">
				<div id="sb-search" class="sb-search">
					<form>
						<input class="sb-search-input" placeholder="search term..." type="search" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"> </span>
					</form>
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
	<div class="banner1 about-bnr">
	</div>	
	<div class="account">
		<div class="container">		
			<div class="account-left">
			
				<?php
				if(isset($erro)){
					echo "<p>" . $erro . "</p>";
				}
					
				?>
			
					
			</div>
			<div class="account-left">
				<h2 style="text-transform: lowercase;">
					

				</h2>
				<div class="registration_form">
					<form id="registration_form" method="post" action="">
						<div>
							<label>
								<input placeholder="Email" type="email" tabindex="3" name="email">
							</label>
						</div>
						<div>
							<label>
								<input placeholder="Senha" type="password" tabindex="4" name="senha">
							</label>
						</div>						
						<div>
							<input type="submit" value="ENTRAR" id="register-submit" name="enviar">
						</div> 	
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div>
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