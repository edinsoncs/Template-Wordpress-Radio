<?php get_header(); ?>
<main>
	
	<section class="pageRadio">
		<section class="pageRadio--Iz">
			<article class="pageRadio--Envivo">
				<header class="envivo--Header">
					<h2 class="title">RADIO EN VIVO</h2>
				</header>
				<div class="envivo--Player">
					<div class="envivo--Player--Iz">
						<figure class="player--Iz--Figure">
							<img class="imgCover" src="<?php bloginfo('template_url') ?>/img/radioplayer.jpg">
						</figure>
					</div>
					<div class="envivo--Player--De">
						<header class="player--De--Header">
							<h2 class="title">Al Aire:</h2>
						</header>
						<div class="player--De--Programacion">
							<h2 class="programa jsName">RADIOMASTER</h2>
							<h3 class="programa">Acompañado con: <span class="jsLocutor">RadioMaster</span></h3>
							<div class="horarios">
								<span class="title jsTime">00:00 - 24:00</span>
							</div>
						</div>
						<div class="player--De--Reproductor">
							<audio id="radio" controls>
								<source src="http://200.58.118.108:8333/stream" type="audio/mpeg">
							</audio>
						</div>
					</div>
				</div>
			</article>
			<article class="pageRadio--Saludos">
				<header class="saludos--Header">
					<h2 class="title"><i class="el el-comment-alt"></i> Deja tu saludo</h2>
				</header>
				<div class="saludos--Facebook">
					<div class="fb-comments" data-href="http://www.radiomaster969.com.ar/radioenvivo/" data-width="604" data-numposts="10"></div>
				</div>
			</article>
		</section>
		<aside class="pageRadio--De">
			<article class="pageRadio--De--PageOne">
				<figure class="pageone--Figure">
					<img src="<?php bloginfo('template_url')?>/img/radiouno.gif" alt="">
				</figure>
			</article>

			<article class="pageRadio--De--PageOne">
				<figure class="pageone--Figure">
					<img src="<?php bloginfo('template_url')?>/img/saludos_radiovivo.png" alt="">
				</figure>
			</article>

			<div class="pageRadio--De--LomasLeido">
				<header class="loMasLeido">
						<h2 class="title">Las Más Leídas</h2>
					</header>

				<?php query_posts('cat=2&showposts=6&paged='.$page_num); ?>
				 <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
					<article class="loMasLeido--Article">
						<figure class="loMasLeido--Article--Figure">
							<?php 

								if (has_post_thumbnail()) {
									the_post_thumbnail();
								}

							 ?>
						</figure>
						<div class="loMasLeido--Article--Description">
							<span class="titles"><?php the_title(); ?></span>
							<div class="loMasLeido--Article--Link">
								<a href="<?php the_permalink(); ?>" class="button">Ver Más</a>
							</div>
						</div>
						
					</article>
				<?php endwhile; endif; ?>

			</div>
			
		</aside>
	</section>

</main>
<script>
	
	(function(){
		function programacion() {
				var data = new Date();
				var hora = data.getHours();
				var day = data.getDay();

				var programacion = ["Musica Variada", "Trasnoche", "Amanecida", "Buenos Dias", "Musica e Información", "Musica y Concursos", "Musica Concursos y Personajes", "Musica Concursos y Regalos", "Musica con RadioMaster"];
				var horarios = {
					MusicaVariada : {
						imagen: 'http://oi68.tinypic.com/vopkig.jpg',
						horario : "10:00 - 11:00",
						locutor: "RadioMaster"
					},
					Trasnoche: {
						imagen: "http://i68.tinypic.com/suxeew.jpg",
						horario: "11:00 - 12:00",
						locutor: "RadioMaster"
					},
					Amanecida: {
						imagen: "http://oi68.tinypic.com/64dq1u.jpg",
						horario: "12:00 - 06:00",
						locutor: "RadioMaster"
					},
					BuenosDias: {
						imagen: "http://oi65.tinypic.com/10yl9cg.jpg",
						horario: "06:00 - 07:00",
						locutor: "RadioMaster"
					},
					MusicaInformacion: {
						imagen: "http://oi64.tinypic.com/2jbwgoj.jpg",
						horario: "08:00 - 09:00",
						locutor: "Jorge Torres Marini"
					},
					MusicaConcursos: {
						imagen: "http://oi64.tinypic.com/qn2ohh.jpg",
						horario: "09:00 - 10:00",
						locutor: "Patricia Gallo"

					},
					MusicaConcursosP: {
						imagen: "http://i67.tinypic.com/23iig52_th.jpg",
						horario: "10:00 - 11:00",
						locutor: "J Tabaco"
					},
					MusicaConcursosR: {
						imagen: "http://i68.tinypic.com/9kpmr5_th.jpg",
						horario: "11:00 - 12:00",
						locutor: "Miguel Vega"
					},
					musicat: {
						imagen: "http://www.radiomaster969.com.ar/wp-content/themes/radiomaster969/img/radioplayer.jpg",
						horario: "12:00 - 10:00",
						locutor: "RadioMaster"
					}

				}
		if(day == 0) {
			console.log("Domingo");
		}
		else if (day == 1 || day == 2 || day == 3 || day == 4 || day == 5) {
				if(hora === 22 && hora <= 23) {
					$(".jsName").html(programacion[0]);
					$(".jsTime").html(horarios.MusicaVariada.horario);
					$(".jsLocutor").html(horarios.MusicaVariada.locutor);
					$(".imgCover").attr("src", horarios.MusicaVariada.imagen);
					
				}
				else if(hora === 23) {
					$(".jsName").html(programacion[1]);
					$(".jsTime").html(horarios.Trasnoche.horario);
					$(".jsLocutor").html(horarios.Trasnoche.locutor);
					$(".imgCover").attr("src", horarios.Trasnoche.imagen);
					
				}
				else if(hora === 00 || hora <= 6) {
					$(".jsName").html(programacion[2]);
					$(".jsTime").html(horarios.Amanecida.horario);
					$(".jsLocutor").html(horarios.Amanecida.locutor);
					$(".imgCover").attr("src", horarios.Amanecida.imagen);
					
				}
				else if(hora === 6 && hora <= 8) {
					$(".jsName").html(programacion[3]);
					$(".jsTime").html(horarios.BuenosDias.horario);
					$(".jsLocutor").html(horarios.BuenosDias.locutor);
					$(".imgCover").attr("src", horarios.BuenosDias.imagen);
				}
				else if(hora === 8 && hora <= 9) {

					$(".jsName").html(programacion[4]);
					$(".jsTime").html(horarios.MusicaInformacion.horario);
					$(".jsLocutor").html(horarios.MusicaInformacion.locutor);
					$(".imgCover").attr("src", horarios.MusicaInformacion.imagen);

				}
				else if(hora === 9 && hora <= 10) {

					$(".jsName").html(programacion[5]);
					$(".jsTime").html(horarios.MusicaConcursos.horario);
					$(".jsLocutor").html(horarios.MusicaConcursos.locutor);
					$(".imgCover").attr("src", horarios.MusicaConcursos.imagen);

				}
				else if(hora === 10 && hora <= 11) {
					$(".jsName").html(programacion[6]);
					$(".jsTime").html(horarios.MusicaConcursosP.horario);
					$(".jsLocutor").html(horarios.MusicaConcursosP.locutor);
					$(".imgCover").attr("src", horarios.MusicaConcursosP.imagen);
				}
				else if(hora === 11 || hora <= 12) {
					$(".jsName").html(programacion[7]);
					$(".jsTime").html(horarios.MusicaConcursosR.horario);
					$(".jsLocutor").html(horarios.MusicaConcursosR.locutor);
					$(".imgCover").attr("src", horarios.MusicaConcursosR.imagen);
				} 

				else if(hora === 13 && hora <= 22) {
					$(".jsName").html(programacion[7]);
					$(".jsTime").html(horarios.MusicaConcursosR.horario);
					$(".jsLocutor").html(horarios.MusicaConcursosR.locutor);
					$(".imgCover").attr("src", horarios.MusicaConcursosR.imagen);
				} 
				
				
		}
		else if(day == 6) {
			console.log("Sabado");
		}
		
		//console.log(hora + programacion);
		}
	programacion();
	})();

</script>



<?php get_footer(); ?>