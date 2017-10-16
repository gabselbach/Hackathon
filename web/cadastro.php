
<!DOCTYPE html>
<html>
<head>
<title>Nome do site!</title>
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
				<a href="index.html"> <img src="images/logo.png" alt=""/></a>
			</div>
			<div class="top-nav">
				<span class="menu"> <img src="images/menu.png" alt=""/> </span>
					<ul>
					<li><a class="active" href="index.html">Início</a></li>
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
				<h1>CADASTRO</h1>
				<div class="registration_form">
					<form id="registration_form">
						<div>
							<label>
								<input placeholder="Nome" type="text" required >
							</label>
						</div>
						<div>
							<label>
								<input placeholder="Sobrenome" type="text" required >
							</label>
						</div>
						<div>
							<label>
								<input placeholder="Email" type="email" required >
							</label>
						</div>	
						<div>
							<label>
								<input placeholder="Endereço" type="text" required>
							</label>
						</div>
						<div>
							<label>
								<input placeholder="Cidade" type="text" required>
							</label>
						</div>
						<div>
							<label>
								<input placeholder="Telefone" type="text" required>
							</label>
						</div>
						<div>
							<label>
								<input placeholder="Senha" type="password" >
							</label>
						</div>						
						<div>
							<label>
								<input placeholder="Confirmar Senha" type="password" >
							</label>
						</div>	
						<div>
							<input type="submit" value="Criar conta" id="register-submit">
						</div>
					</form>
				</div>
			</div>
			<div class="account-left">
				<h2>Usuário Existente</h2>
				<div class="registration_form">
					<form id="registration_form">
						<div>
							<label>
								<input placeholder="Email" type="email" tabindex="3">
							</label>
						</div>
						<div>
							<label>
								<input placeholder="Senha" type="password" tabindex="4">
							</label>
						</div>						
						<div>
							<input type="submit" value="ENTRAR" id="register-submit">
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