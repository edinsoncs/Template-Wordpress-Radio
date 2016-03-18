<footer class="footer">
	<div class="footer--Iz">
		<div class="iz--Header">
			<h2 class="title">
				Secciones
			</h2>
		</div>
		<ul class="iz--Ul">
			<li class="list">
				<a href="#" class="link">
					Inicio
				</a>
			</li>
			<li class="list">
				<a href="#" class="link">
					Noticias
				</a>
			</li>
			<li class="list">
				<a href="#" class="link">
					Música
				</a>
			</li>
			<li class="list">
				<a href="#" class="link">
					Eventos
				</a>
			</li>
			<li class="list">
				<a href="#" class="link">
					Fotos
				</a>
			</li>
			<li class="list">
				<a href="#" class="link">
					Videos
				</a>
			</li>
			<li class="list">
				<a href="#" class="link">
					Programas
				</a>
			</li>
			<li class="list">
				<a href="#" class="link">
					Concursos
				</a>
			</li>
			<li class="list">
				<a href="#" class="link">
					Frases
				</a>
			</li>
		</ul>
	</div>
	<div class="footer--De">

		<div class="De--Header">
			<h2 class="title">
				Descarga la aplicación para tu Smartphone
			</h2>
		</div>
		<ul class="de--Ul">
			<li class="list">
				<a class="link" href="#">
					<img style="width:20px;"src="<?php bloginfo('template_url') ?>/img/footer-03.svg">
					Android
				</a>
			</li>

		</ul>

		<div class="de-Grupo">
			<p class="de--Grupo--P">
				Realizado por ViaintiMedia
			</p>
		</div>
		

		<div class="De--Derechos">
			<span class="title">
				© RADIO MASTER - Todo los derechos reservados. Buenos Aires - Argentina 2015
			</span>
		</div>
	</div>
	
<script>
	
	(function(){
		function programacionHeader() {
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
						horario: "06:00 AM - 07:00 AM",
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
					$(".horarios--Nombre").html(programacion[0]);
					$(".horarios--Hora").html(horarios.MusicaVariada.horario);
					//$(".jsLocutor").html(horarios.MusicaVariada.locutor);
					//$(".imgCover").attr("src", horarios.MusicaVariada.imagen);
					
				}
				else if(hora === 23) {
					$(".horarios--Nombre").html(programacion[1]);
					$(".horarios--Hora").html(horarios.Trasnoche.horario);
					//$(".jsLocutor").html(horarios.Trasnoche.locutor);
					//$(".imgCover").attr("src", horarios.Trasnoche.imagen);
					
				}
				else if(hora === 00 || hora <= 6) {
					$(".horarios--Nombre").html(programacion[2]);
					$(".horarios--Hora").html(horarios.Amanecida.horario);
					//$(".jsLocutor").html(horarios.Amanecida.locutor);
					//$(".imgCover").attr("src", horarios.Amanecida.imagen);
					
				}
				else if(hora === 6 && hora <= 8) {
					$(".horarios--Nombre").html(programacion[3]);
					$(".horarios--Hora").html(horarios.BuenosDias.horario);
					//$(".jsLocutor").html(horarios.BuenosDias.locutor);
					//$(".imgCover").attr("src", horarios.BuenosDias.imagen);
				}
				else if(hora === 8 && hora <= 9) {

					$(".horarios--Nombre").html(programacion[4]);
					$(".jsTime").html(horarios.MusicaInformacion.horario);
					//$(".jsLocutor").html(horarios.MusicaInformacion.locutor);
					//$(".imgCover").attr("src", horarios.MusicaInformacion.imagen);

				}
				else if(hora === 9 && hora <= 10) {

					$(".horarios--Nombre").html(programacion[5]);
					$(".horarios--Hora").html(horarios.MusicaConcursos.horario);
					//$(".jsLocutor").html(horarios.MusicaConcursos.locutor);
					//$(".imgCover").attr("src", horarios.MusicaConcursos.imagen);

				}
				else if(hora === 10 && hora <= 11) {
					$(".horarios--Nombre").html(programacion[6]);
					$(".horarios--Hora").html(horarios.MusicaConcursosP.horario);
					//$(".jsLocutor").html(horarios.MusicaConcursosP.locutor);
					//$(".imgCover").attr("src", horarios.MusicaConcursosP.imagen);
				}
				else if(hora === 11 || hora <= 12) {
					$(".horarios--Nombre").html(programacion[7]);
					$(".horarios--Hora").html(horarios.MusicaConcursosR.horario);
					//$(".jsLocutor").html(horarios.MusicaConcursosR.locutor);
					//$(".imgCover").attr("src", horarios.MusicaConcursosR.imagen);
				} 

				else if(hora === 13 && hora <= 22) {
					$(".horarios--Nombre").html(programacion[7]);
					$(".horarios--Hora").html(horarios.MusicaConcursosR.horario);
					//$(".jsLocutor").html(horarios.MusicaConcursosR.locutor);
					//$(".imgCover").attr("src", horarios.MusicaConcursosR.imagen);
				} 
				
				
		}
		else if(day == 6) {
			console.log("Sabado");
		}
		
		//console.log(hora + programacion);
		}
	programacionHeader();
	})();

</script>

</footer>