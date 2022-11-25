<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<script src="https://kit.fontawesome.com/ac3ebf4168.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https: //fonts.googleapis.com/css2? family= Roboto:wght@100 & display=swap" rel="stylesheet"><!--importando fontes do google fontes--> 
	<link href="estilos/style.css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!--tag para site responsivo-->
	<meta name="description" content="Descrição do meu web site"> <!--para o google encontrar o site-->
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta charset="utf-8"/>

</head>

<body>
		
	<!--iniciar a marcação do menu do site-->
	<header>
		<div class="center">
		<div class="logo left">Logomarca</div> <!--logo-->
		<nav class="desktop right"> <!--site será responsivo-->
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Sobre</a></li>
				<li><a href="">Serviços</a></li>
				<li><a href="./pages/contato.php">Contato</a></li>
			</ul>
		</nav>
		
		<nav class="mobile right"> <!--site será responsivo-->
			<div class="botao-menu-mobile">
				<i class="fa fa-bars" aria-hidden="true"></i>
				
			</div>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Sobre</a></li>
				<li><a href="">Serviços</a></li>
				<li><a href="./pages/contato.php">Contato</a></li>
			</ul>
			
		</nav>
		<div class="clear"></div>
		</div><!--center-->
	</header>
	
	<!--banner-->
	<section class="banner-principal">
		<div class="overlay"></div>
		<div class="center">
		<!--formulario onde o usuario vai colocar o email-->
		
		<form>
			<h2>Qual o seu melhor e-mail?</h2>
			<input type="email" name="e-mail" required/>
			<input type="submit" name="acao" value="Cadastrar"/>
		</form>
		</div>
	</section>
	
	<!--descrição do autor-->
	<section class="descricao-autor">
		<div class="center">
		<div class="w50 left"> <!--vai pegar 50% da largura da tela-->
		<h2>Naira Arruda</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div><!--w50-->
		
		<div class="w50 left">
			<!--imagem--><!--pegar uma imagem e colocar dentro da pasta imagens-->
			<img src="imagens/images.jpg"/>
		</div>
		</div><!--center-->
		<div class="clear"></div> <!--limpar toda flutuacao da pagina.-->

	</section>
	
	<section class="especialidades"> <!--especialidades-->
		<div class="center"> 
			<h2 class="title">Especialidades</h2>
		
			<div class="w33 left box-especialidade">
				<h3><i class="fa-brands fa-css3"></i></h3>
				<h4>CSS3</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. </p>
			</div><!--box-especialidades-->
			<div class="w33 left box-especialidade">
				<h3><i class="fa-brands fa-html5"></i></h3>
				<h4>HTML5</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. </p>
			</div><!--box-especialidades-->
			<div class="w33 left box-especialidade">
				<h3><i class="fa-brands fa-js"></i></h3>
				<h4>JavaScript</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. </p>
			</div><!--box-especialidades-->
			<div class="clear"></div>
		</div><!--center-->
	

	</section><!--especialidades-->

	<section class="extras">
		<div class="center">
			<div class="w50 left depoimentos-container">
				<h2 class="title">Depoimentos dos nossos clientes</h2>
				<div class="depoimento-single">
					<p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="nome-autor">João Da Silva</p>
				</div>
				<div class="depoimento-single">
					<p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="nome-autor">Jorge Da Silva</p>
				</div>
				<div class="depoimento-single">
					<p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="nome-autor">José Da Silva</p>
				</div>
			</div><!--W50-->
			<div class="w50 left servicos-container">
				<h2 class="title">Serviços</h2>
				<div class="servicos">
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
				</ul>
			</div><!--servicos-->
			</div><!--W50-->
			<div class="center"></div>
			<div class="clear"></div>
		</div><!--center-->

	</section><!--extras-->
	<footer>
	<div class="center">
		<p>Todos os direitos reservados</p>
	</div><!--center--> 
	</footer>
	<script src="js/jquery.js"></script>
	<script src="js/scripts.js"></script>
	<script>
		

$(document).ready(function(){
  $("button").click(function(){
    $("#p1").css("color", "red").slideUp(2000).slideDown(2000);
  });
});

$(document).ready(function(){
  $("h4").on({
    mouseenter: function(){
      $(this).css("background-color", "lightgray");
    },  
    mouseleave: function(){
      $(this).css("background-color", "lightblue");
    }, 
    click: function(){
      $(this).css("background-color", "Orange");
    }  
  });
});
/*$( "li" ).hover(
  function() {
    $( this ).append( $( "<span></span>" ) );
  }, function() {
    $( this ).find( "span" ).last().remove();
  }
);*/
 
$(document).ready(function(){
  $("li").hover(function(){
    $(this).css("background-color", "#df9797");
    }, function(){
    $(this).css("background-color", "#ffff");
  });
});
</script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
</head>
<body>

<p id="p1">jQuery is fun!!</p>

<button>Click me</button>

</body>
</html>
