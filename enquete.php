
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
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt="" width="160" height="149"/></a>
			</div>
			<div class="top-nav">
				<span class="menu"> <img src="images/menu.png" alt=""/> </span>
					<ul>
					<li><a href="usuario.php">Perfil</a></li>
					<li><a href="deposito.php">Depósito</a></li>					
					<li><a class="active" href="enquete.php">Enquete</a></li>
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
	<div class="account">
		<div class="container">		
			<div>
				<h1>Enquete</h1>
				<h4>Escolha a opção na qual deseja que o lucro arrecadado com a reciclagem seja utilizado no município de Charqueadas:</h4>
				<div class="registration_form">
					<form method="POST" action="" name="enquete">
					<br>
					<input type="radio" name="time" value="" />
					Violência
					<br />
					<input type="radio" name="time" value="" />
					Lazer
					<br />
					<input type="radio" name="time" value="" />
					Educação
					<br />
					<input type="radio" name="time" value="" />
					Saúde
					<br /><br />
					<input type="submit" value="Enviar" />
					<div class="clearfix"> </div>
					<div class="clearfix"> </div>
					<div class="clearfix"> </div>
					<div class="clearfix"> </div>
					<div class="clearfix"> </div>
					<div class="clearfix"> </div>
					<div class="clearfix"> </div>
					<div class="clearfix"> </div>
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