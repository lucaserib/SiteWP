<!DOCTYPE html>
<html>
<head>
	<title>Lucodex - Tema</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script src="https://kit.fontawesome.com/54c7224db8.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>

	<section class="topo">
		<div class="center">
			<header>
				<div class="logo"><img src="images/logo.png"></div><!---logo--->				
			</header>
			<ul class="menu-desktop">
				<li><a href="">Home</a></li>
				<li><a href="">Sobre</a></li>
				<li><a href="">Contato</a></li>
			</ul><!---menu-desktop--->
			<div class="clear"></div>
			<br>
			<br>
			<div class="w50 time-descricao">
				<h2>Melhore a comunicação com seu cliente e time.</h2>
				<p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
				<a target="_blank" href="www.dankicode.com">Ver demonstração</a>
			</div><!---w50--->
			<div class="w50 time-imagem">
				<img src="images/equipe.png">
			</div><!---w50--->
			<div class="clear"></div>
		</div><!---center--->
	</section><!---topo--->
	<div class="circle"><i class="fa-solid fa-angle-down"></i></div>
	<section class="clientes-slider">
		
		<div class="center">
		<div style="max-width: 700px;margin: 0 auto;overflow: hidden; " class="slider-container">
			<img src="images/amazon.png">
			<img src="images/costco.png">
			<img src="images/uber.png">
			<img src="images/walmart.png">
			<img src="images/dominos.png">
		</div>
		</div><!---center--->
	</section>

<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>
<script type="text/javascript">
	$('section.clientes-slider .slider-container').slick({
		dots: true,
		arrows:false,
	    infinite: false,
	    speed:1000,
	    slidesToShow: 4,
	    autoplay: true,
	    centerMode:false,
	    autoplaySpeed: 3000,
	    pauseOnHover:false,
	    responsive: 
	    [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2
	      }
	    }
	    ]
	});
</script>
</body>
</html>