<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Jessica Lyra">
                <meta name= "description" content="Portfolio de Desenvolvedora Web Front-End Wordpress"/>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Desenvolvedora Web - Jessica Lyra</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<!--FONT AWESOME-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<!--font google-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet"> 
		
	</head>
	<body>
	<header>
	<!--MENU MODO MOBILE-->
	<nav class="navbar navbar-light bd-light d-block d-sm-block d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-fixo" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse align-center" id="menu-fixo">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link text-uppercase scroll" href="#sobre">Sobre</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link scroll text-uppercase" href="#conhecimento">Conhecimento</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link scroll text-uppercase " href="#">jessica lyra</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link scroll text-uppercase" href="#cursos">Extracurriculares</a>
				</li>	
				<li class="nav-item ">
					<a class="nav-link text-uppercase scroll" href="#contato">Contato</a>
				</li>				
			</ul>
		</div>		
		</nav>
	<!-- FIM MENU MOBILE-->
	
	<div class=" banner row">
		<div class="d-none d-sm-none d-md-block col-md-12" style="height:450px; padding-top:110px;padding-bottom:110px;">
			
			<h1 class="animated lightSpeedIn text-center">Jessica Lyra</h1>
			<h4 class="animated fadeIn text-center">Desenvolvedora Web</h4>
		</div>
		<div class="col-12 col-sm-12 d-block d-sm-block d-md-none d-lg-none col-nome" style="padding-top:60px; padding-bottom:60px;">
			<h1 class="animated lightSpeedIn" style="font-size:50px;">Jessica <br>Lyra</h1>
			<h4 class="animated fadeIn" style="font-size:20px;">Desenvolvedora Web</h4>
		</div>
	</div>	
	<nav class="navbar navbar-expand-md navbar-expand-lg  d-none d-sm-none d-md-block">
		<div class="collapse navbar-collapse" id="menu-fixo">
			<ul class="navbar-nav container justify-content-center">
				<li class="nav-item">
					<a class="nav-link text-uppercase scroll" href="#sobre">Sobre</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link text-uppercase scroll" href="#conhecimento">Conhecimento</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link text-uppercase scroll cor-link" href="#">jessica lyra</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link text-uppercase scroll" href="#cursos">Extracurriculares</a>
				</li>	
				<li class="nav-item ">
					<a class="nav-link text-uppercase scroll" href="#contato">Contato</a>
				</li>				
			</ul>
		</div>		
		</nav>
	</header>
	<section class="sobre row mx-auto" >
		<div class="col-12 col-md-6">
			<div class="card" style="width: 350px;">
			  <img src="img/sobre.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			        <h5 class= "card-title text-center"> Desenvolvedora Programadora Web</h5>
				<p class="card-text text-justify"> Conhecimento como Desenvolvedora Web onde busco me aperfeiçoar e mostrar que posso e vou fazer a diferença dentro de uma equipe. Quem tem foco tem tudo!</p>
			  </div>
			</div>
		</div>
		<div class="col-12 col-md-6" class="dados">
			<h1 id="sobre">Sobre mim</h1>
			<div class="row pt-5">
				<div class="col-4 col-md-4">
					<p> Nome: </p>
					<p> Idade: </p>
					<p> Localidade: </p>
					<p> Telefone: </p>
					<p> Email: </p>
				</div>	
				<div class="col-7 col-md-6">
					<p> Jessica Lyra</p>
					<p> 30 anos</p>
					<p> São Bernardo do Campo - SP</p>
					<p> (11) 9 4857-4216</p>
					<p>  jessica.lyra@outlook.com</p>
				</div>
				<div class="d-none d-md-block col-md-2 ">
					<p><a href="https://www.instagram.com/developer.lyra" target="blank"><i class="fab  fa-instagram"></i></a></p>
					<p><a href="https://www.linkedin.com/in/jessica-lyra-9463a0163"  target="blank"><i class="fab  fa-linkedin-in"></i></a></p>
					<p><a href="https://github.com/JessicaLyra"  target="blank"><i class="fab  fa-github-alt"></a></i>
				</div>	
			</div>	
		</div>
	</section>
	<!--conhecimento-->
	<section class=" conhecimento" id="conhecimento">
		<div class="row">
		<div class="col-12 col-md-6"  >
			<h1 class="">Conhecimentos</h1>
		</div>
		<div class="col-12 col-md-6">
			<div class="row container dados-conhecimento">
				<div class="col-8">	
					<p>HTML5 <div class="progress" style="height: 20px;border:1px solid #848484">
						<div class="progress-bar barra-1" id="barra-html"role="progressbar" style=" background-color:#8A0829; " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</p>
					<p>CSS3 <div class="progress" style="height: 20px;border:1px solid #848484">
						  <div class="progress-bar barra-2" role="progressbar" style="background-color:#8A0829;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</p>  
					<p>PHP <div class="progress" style="height: 20px;border:1px solid #848484">
					  <div class="progress-bar barra-3" role="progressbar" style="background-color:#8A0829;
" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					</p>
					<p>JQuery <div class="progress barra" style="height: 20px;border:1px solid #848484">
					  <div class="progress-bar barra-4" role="progressbar" style="width: 50%; background-color:#8A0829;
" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div> 
					</p>
					<p>Wordpress <div class="progress barra" style="height: 20px; border:1px solid #848484">
					  <div class="progress-bar barra-5" role="progressbar" style="background-color:#8A0829;
 " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					</p>
				</div>	
				<div class="col-2">
					<p class="mt-5">70%</p>
					<p class="mt-5">60%</p>
					<p class="mt-5">45%</p>
					<p class="mt-5">50%</p>
					<p class="mt-5">40%</p>
				</div>
			</div>
		</div>
	
</div>
	</section>
	<section class="cursos" id="cursos">
			<div class="container">
				<h1>Cursos <br>Extracurrilares</h1>
				<div class="row  linha-cursos">
					<div class="col-6 animated fadeIn" >
						<p class=""><i class="fab fa-html5"id="curso"></i></p><br>
						<p class="" id="curso">23 horas</p>
						<p><i class="fab fa-php"id="curso"></i></p>
					</div>
					<div class="col-6 animated fadeIn" id="cursos">
						<p id="curso" class="">40 horas</p>
						<p><i class="fab fa-css3-alt" id="curso"></i></p><br>
						<p id="curso">40 horas</p>
					</div>	
				</div>	
			</div>	
	</section>
	<footer id="contato">
		<div class="container" >
			<div class="row container bloco-contato">
				<div class="col-12 col-sm-12 col-md-6  bloco-texto">	
						<div class="col-12 texto-form">
							<p>Agradeço por ter chegado aqui! Próximo passo é eu agradecer pelo seu contato, na verdade... já vou agradecendo desde já!</p>
						</div>	
						<div class="col-12  texto-form">
							<p><i class="far fa-envelope"></i> jessica.lyra@outlook.com</p>
						</div>	
						<div class="col-12  texto-form">
							<p><i class="fab fa-whatsapp"></i> (11) 94857-4216</p>
						</div>	
				</div>
				<div class="col-12 col-sm-12 col-md-6 ">	
				<?php
					if(isset($_POST['envia'])) {
						$nome= $_POST['nome'];
						$email= $_POST['email'];
						$telefone= $_POST['telefone'];
						$mensagem= $_POST['mensagem'];
						
						//email remetente
						$email_remetente = "localhost";
						
						//configurações do email
						$email_destinatario = "jessica.lyra@outlook.com";
						$email_reply ="$email";
						$email_assunto ="Contato do meu site";
						
						//montando o corpo da mensagem
						$email_conteudo = "Nome = $nome \n";
						$email_conteudo .="Email = $email \n";
						$email_conteudo .="Telefone = $telefone \n";
						$email_conteudo .= "Mensagem = $mensagem \n";
						
						$email_headers = implode("\n", array ("From: $email_remetente", "Reply-to: $email_reply", "Return_Path: $email_remetente", "MIME-version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
						
						//enviando o email
						if (mail($email_destinatario, $email_assunto, $email_conteudo, $email_headers)) {
							echo "</b>Email Enviado com sucesso!</b>";
						} else {
							echo "</b>Falha no envio d E-mail</b>";
						}
						
					}						
				?>
					<h1>Contato</h1>
					
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
						<input type="text" placeholder="Nome" name="nome"></input><br>
						
						<input type="text" placeholder="Email" name="email"></input><br>
						
						<input type="text" placeholder="Telefone" name="telefone"></input><br>
						
						<textarea rows="5" placeholder="Deixe sua mensagem"  name="mensagem"></textarea><br>
						<button type="submit" name="envia">Enviar Mensagem</button>
						
						
					</form>
				</div>	
			</div>
		</div>	
		<div class="creditos row">
			<div class="col-12">
				<p>Desenvolvido e Programado por Jessica Lyra</p>
			</div>	
		</div>
	</footer>	
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/993f9f280b.js"></script>
	<!--eventos em Jquery-->
	<script>
	$(document).ready(function() {
	//scroll menu
	$(".scroll").click(function(event) {
		event.preventDefault()
		$('html,body').animate ({scrollTop:$(this.hash).offset().top},1000); }) ;
	
	
	  $(window).scroll(function() {
		if ($(document).scrollTop() > 700) {
		  $("nav").addClass("menu");
		} else {
		  $("nav").removeClass("menu");
		}
	  });
	  //mudar classe ao clicar no item do menu
	  $("li").click(function(){
		$("li").removeClass("active");
		$(this).addClass("active");
	  });
	  //teste botão link
	 
	  //
  
	  $(window).scroll(function() {
		if ($(document).scrollTop() > 1200) {
		  $("div .barra-1").css("width","70%","transition","width 1s");
		   $("div .barra-2").css("width","60%","transition","width 1s");
		    $("div .barra-3").css("width","45%","transition","width 1s");
			 $("div .barra-4").css("width","50%","transition","width 1s");
			 $("div .barra-5").css("width","40%","transition","width 1s");
		  
		} else {
			 $("div .barra-1").css("width","0%");
			 $("div .barra-2").css("width","0%");
			 $("div .barra-3").css("width","0%");
			 $("div .barra-4").css("width","0%");
			 $("div .barra-5").css("width","0%");
		}
	  });
	  
	   $(window).scroll(function() { 
		 if ($(document).scrollTop() > 1700) {
			$(".cursos p").css("opacity","1");
		 } else {
			$(".cursos p").css("opacity","0");
		 }
		 
	   });	
	});
	
	
	
	
	</script>
	</body>
</html>