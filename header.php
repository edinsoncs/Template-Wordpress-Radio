<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>RadioMaster</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/app.css">
	
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

</head>
<script>
(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>


<body>
	<div id="fb-root"></div>
	

	<header class="header" data-role="header">
		
		<div class="header--Top">
			<div class="header--Top--Iz">
				<figure class="header--Top--Logo u--Margen">
					<a href="http://www.radiomaster969.com.ar/">
						<img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="">
					</a>
				</figure>
			</div>
			<div class="header--Top--Center">
				<figure class="header--Top--Radio">
					<a href="http://www.radiomaster969.com.ar/radioenvivo/" target="_blank">
						<img src="<?php bloginfo('template_url') ?>/img/radio.svg" alt="">
					</a>
					<div class="header--Top--Horarios">
						<span class="horarios--Nombre">MUSICA VARIADA</span>
						<span class="horarios--Hora">00:00 AM - 24:00 PM</span>
					</div>
				</figure>
			</div>
			<div class="header--Top--De" style="opacity:0;">
				<div class="header--Top--Call">
					<strong class="title">
						LLÁMANOS
					</strong>
					<span class="telefono">
						<i class="el el-phone"></i>
						442-1188
					</span>
				</div>
			</div>
		</div>

		<nav class="header--Nav">
			<ul class="nav--Ul">
				<li class="List enLinea">
					<a href="#" class="Link">
						Noticias
						<i class="el el-caret-down"></i>
					</a>
				</li>
				<li class="List enLinea">
					<a href="#" class="Link">
						Musica
						<i class="el el-caret-down"></i>
					</a>
				</li>
				<li class="List enLinea">
					
					<a href="#" class="Link">
						Fotos
						<i class="el el-caret-down"></i>
					</a>

				</li>
				<li class="List enLinea">
					<a href="#" class="Link">
						Videos
						<i class="el el-caret-down"></i>
					</a>
				</li>
				<li class="List enLinea">
					<a href="#" class="Link">
						Programas
						<i class="el el-caret-down"></i>
					</a>
				</li>
				<li class="List enLinea">
					<a href="#" class="Link">
						Concursos
						<i class="el el-caret-down"></i>
					</a>
				</li>
				<li class="List enLinea">
					<a href="#" class="Link">
						Frases
						<i class="el el-caret-down"></i>
					</a>
				</li>
			</ul>
		</nav>
	</header>
	