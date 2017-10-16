
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
				<ul> 
					<li><a href="cadastro.php">CADASTRO</a></li>
					<li class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>ENTRAR</span></a>
						    <div id="loginBox">                
						        <form id="loginForm">
									<fieldset id="body">
										<fieldset>
											<label for="email">Email</label>
											<input type="text" name="email" id="email">
										</fieldset>
										<fieldset>
											<label for="password">Senha</label>
											<input type="password" name="password" id="password">
										</fieldset>
										<input type="submit" id="login" value="ENTRAR">
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
				<span class="menu"> <img src="images/menu.png" alt=""/> </span>
				<ul>
					<li><a href="index.php">Início</a></li>
					<li><a href="sobre.php">Sobre</a></li>					
					<li><a href="coleta.php">Coleta</a></li>
					<li><a href="apoio.php">Apoio</a></li>
					<li><a class="active" href="reciclagem.php">Reciclagem</a></li>
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
	<div class="banner1 about-bnr">
	</div>	
	<div class="codes">
		<div class="container">
			<h3 class="title">Reciclagem</h3>
			<div class="grid_3 grid_5">
				<h3 class="hdg">Vidro</h3>
				<div class="well">
					É de extrema importância a reciclagem do vidro, pois estamos contribuindo diretamente para o meio ambiente.
					Devemos considerar que o vidro é um elemento biodegradavél e permanece na natureza por cerca de <b>dez mil anos</b>.
					No momento que descartamos este tipo de material corretamente, estamos ajudando a diminuir o número deles em aterros e reaproveitando-os 100%.
					Além disso, a reciclagem de lixo (vidro) gera renda para os catadores e recicladores do Brasil.
					Tipos de vidros recicláveis:
					<ul>
					<li>Garrafas de sucos, refrigerantes, cervejas e outros tipos de bebidas;</li>
					<li>Potes de alimentos;</li>
					<li>Cacos de vidros;</li>
					<li>Frascos de remédios;</li>
					<li>Frascos de perfumes;</li>
					<li>Vidros planos e lisos;</li>
					<li>Pára-brisas;</li>
					<li>Vidros de janelas;</li>
					<li>Pratos, tigelas e copos (desde que não sejam de acrílico, cerâmica ou porcelana).</li>
					</ul>
					</p>
					<img src="./images/c.jpg" alt=""> 
					<div class="grid_3 grid_5">
					<div class="alert alert-info" role="alert">
						<strong> "O vidro reciclado possui, praticamente, as mesmas características do vidro comum."</strong>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div>
				<p> Todos os direitos reservados - 2015.</p>
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