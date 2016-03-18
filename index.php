<?php get_header(); ?>

<div class="header--sub">
		<div class="publicidad">
			<figure class="publicidad--Figure">
				<img src="<?php bloginfo('template_url')?>/img/publicidaduno.jpg" alt="viaintimedia">
			</figure>
		</div>
	</div>

	<main>
		
		<section class="primerContenido">
			<section class="contenido--Iz">
				
				<?php query_posts('cat=3&showposts=4&paged='.$page_num); ?>
	
					<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
						<article class="viewNoticias">
							<header class="viewNoticias--Title">
								<a href="<?php the_permalink(); ?>">
									<h2 class="title"><?php the_title(); ?></h2>
								</a>
							</header>
							<figure class="viewNoticias--Imagen u--Margen">
								<a href="<?php the_permalink(); ?>">
									<?php 

										if (has_post_thumbnail()) {
											the_post_thumbnail();
										}

									 ?>
								</a>
							</figure>
							<div class="viewNoticias--Categoria">
								<span>
									
								<?php echo single_cat_title(); ?>

								</span>
							</div>
						</article>

				<?php endwhile; endif; ?>

				
				
			</section>

			<aside class="contenido--De">
				<article class="contenidos">
					<header class="contenidos--Header">
						<h2 class="title">RadioMaster Videos</h2>
					</header>
					<div class="contenidos--Videos">
						<?php query_posts('cat=4&showposts=8&paged='.$page_num); ?>
	
						<?php if (have_posts()) : while (have_posts()) : the_post();  ?>	
								<article class="view--Videos">
									<figure class="view--Videos--Figure u--Margen">
										<?php 

											if (has_post_thumbnail()) {
												the_post_thumbnail();
											}
										 ?>
									</figure>
									<div class="view--Videos--Description">
										<a href="<?php the_permalink(); ?>" class="descriptionVideos">
											<?php the_title(); ?>
										</a>
										<div class="descriptionVideos--Btn">
											<a href="<?php the_permalink(); ?>" class="linkVideos">
												Ver Video
											</a>
										</div>
									</div>
								</article>
						<?php endwhile; endif; ?>



					</div>
					<div class="contenido--Videos--VerMas">
						<a href="#" class="linkVerMas">
							Ver Más Videos
						</a>
					</div>
				</article>
				<article class="contenidos">
					<figure class="contenidos--Votar u--Margen">
						<img src="http://www.radiopanamericana.com/images/nueva_web/cabecera/svg/mas-mas-semana-red.svg" alt="">
					</figure>
					<div class="contenido--Videos--VerMas">
						<a href="#" class="linkVerMas">
							Votar
						</a>
					</div>
				</article>
				
			</aside>
		</section>
		<div class="subContenido">
			<figure class="subContenido--Publicidad u--Margen">
				<img src="<?php bloginfo('template_url')?>/img/descarga.jpg" alt="">
			</figure>
		</div>
		<section class="segundoContenido">
			<section class="segundoContenido--Iz">
				<header class="segundoContenido--Iz--Header">
					<h2 class="title">Más Noticias</h2>
				</header>
				<?php query_posts('cat=5&showposts=7&paged='.$page_num); ?>
	
				<?php if (have_posts()) : while (have_posts()) : the_post();  ?>	

						<article class="segundoContenido--Iz--Article">
							<header class="iz--Article--Header">
								<a href="<?php the_permalink(); ?>">
									<h2 class="title"><?php the_title(); ?></h2>
								</a>
							</header>
							<figure class="iz--Article--Figure">
								<a href="<?php the_permalink(); ?>">
									<?php 

										if (has_post_thumbnail()) {
													the_post_thumbnail();
												}

									 ?>
								</a>
							</figure>
							<div class="iz--Article--Category">
								<span class="name--Category"><?php echo single_cat_title(); ?></span>
							</div>
						</article>

				<?php endwhile; endif; ?>

			</section>
			<section class="segundoContenido--Center">
				<header class="segundoContenido--Center--Header">
					<h2 class="title">Deportes</h2>
				</header>

				<?php query_posts('cat=6&showposts=5&paged='.$page_num); ?>
	
				<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
						<article class="center--Article">
							<figure class="center--Article--Figure">
								<?php 

									if (has_post_thumbnail()) {
										the_post_thumbnail();
									}

								 ?>
							</figure>
							<div class="center--Article--Description">
								<div class="center--Article--Description--TT">
									<?php the_title(); ?>
								</div>
								<div class="center--Article--Description--Link">
									<a href="<?php the_permalink(); ?>" class="link">Ver Más</a>
								</div>
							</div>

						</article>

				<?php endwhile; endif; ?>

				
				<section class="contenido--ProgramacionRadial">
					<article class="article--ProgramacionRadial">
						<header class="article--ProgramacionRadial--Header">
							<h2 class="title">Programación de L-V</h2>
						</header>
						<figure class="article--ProgramacionRadial--Figure">
							<img src="<?php bloginfo('template_url');?>/img/splash.png" alt="">
						</figure>
					</article>
				</section>
				<section class="contenido--Twitter">
					<header class="contenido--Twitter--Header">
						<h2 class="title">Últimos Tweets</h2>
					</header>
					<div class="contenido--Twitter--Tweets">
						<a class="twitter-timeline" href="https://twitter.com/RADIOMASTER969" data-widget-id="660493631573368832"></a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</section>
				
				<section class="contenido--Artista">
					<header class="contenido--Artista--Header">
						<h2 class="title">El artista del mes</h2>
					</header>
					<?php query_posts('cat=8&showposts=1&paged='.$page_num); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
						<article class="artistas--Mes">
							<figure class="contenido--Artista--Figure">
								<?php 

								if (has_post_thumbnail()) {
									the_post_thumbnail();
								}

							 ?>
							</figure>
							<div class="contenido--Artista--Description">
								<h2 class="title"><?php the_title(); ?></h2>
							</div>
							<div class="contenido-Artista--Link">
								<a href="<?php the_permalink(); ?>" class="linkVerMas">
									Conoce más de tu artista
								</a>
								<a href="<?php the_permalink(); ?>" class="linkVerVideos">
									<i class="el el-video-alt"></i>
									Mira videos de tu artista
								</a>
							</div>
						</article>
					<?php endwhile; endif; ?>

					<header class="contenido--Artista--Header">
						<h2 class="title">Facebook Fans</h2>
					</header>
					<article class="contenido--Artista--Facebook">
						<div class="fb-page" data-href="https://www.facebook.com/RADIO-MASTER-ARGENTINA-P%C3%A1gina-Oficial--244634378903742/" data-width="279" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
							</div>
					</article>

				</section>

			</section>
			<aside class="segundoContenido--De">
				<article class="de--Publicidad">
					<figure class="de--Publicidad--Figure">
						<img src="<?php bloginfo('template_url'); ?>/img/radiodos.gif" alt="">
					</figure>
				</article>
				<!--<article class="de--Publicidad">
					<figure class="de--Publicidad--Figure">
						<img src="<?php bloginfo('template_url'); ?>/img/publicidadtres.jpg" alt="">
					</figure>
				</article>-->
				<article class="de--Publicidad">
					<header class="de--Publicidad--Header">
						<h2 class="title">Ranking</h2>
					</header>

					<?php query_posts('cat=7&showposts=7&paged='.$page_num); ?>
					<?php if(have_posts()) : while (have_posts()) : the_post();  ?>
						<article class="article--Ranking">
							<figure class="ranking--Figure">
								<?php 

									if (has_post_thumbnail()) {
										the_post_thumbnail();
									}

								 ?>
							</figure>
							<div class="ranking--Num">
								<span class="title--Num jsNum">
									00
								</span>
							</div>
							<div class="ranking--Description">
								<span class="description">
									<?php the_title(); ?>
								</span>
							</div>
						</article>
					<?php endwhile; endif ?>

				</article>
				<article class="de--Publicidad">
					<header class="de--Publicidad--Header">
						<h2 class="title">Eventos</h2>
					</header>
					
					<?php query_posts('cat=2&showposts=6&paged='.$page_num); ?>
				 	<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
						<article class="de--Eventos">
							<figure class="de--Eventos--Figure">
								<?php 

								if (has_post_thumbnail()) {
									the_post_thumbnail();
								}

							 ?>
							</figure>
							<div class="de--Eventos--Description">
								<a href="<?php the_permalink(); ?>" class="linkVerDescription">
									<?php the_title(); ?>
								</a>
							</div>
						</article>
					<?php endwhile; endif; ?>

				</article>
			</aside>

		</section>
		<section class="tercerContenido">
			<section class="tercerContenido--Iz">
				<header class="iz--Header">
						<h2 class="title">Multimedia</h2>
				</header>
				<article class="tercerContenido--Iz--Article">
					<header class="iz--Article--Header">
						<h2 class="title">Fotos Artistas</h2>
					</header>
					<div class="iz--Article--Description">
						<?php query_posts('cat=9&showposts=4&4paged='.$page_num) ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article class="multimediaArticles">
								<figure class="multimediaArticles--Figure">
									<a href="<?php the_permalink(); ?>">
										<?php 

											if (has_post_thumbnail()) {
												the_post_thumbnail();
											}

										 ?>
									</a>	
								</figure>
								<div class="multimediaArticles--Title">
									<a href="<?php the_permalink(); ?>">
										<span class="tt">
											<?php the_title(); ?>
										</span>
									</a>
								</div>
								<div class="multimediaArticles--Link">
									<a href="<?php the_permalink(); ?>" class="linkVerMultimedia">
										Ver Más
									</a>
								</div>
							</article>

						<?php endwhile; endif ?>
					</div>
				</article>
				<article class="tercerContenido--Iz--Article">
					<header class="iz--Article--Header">
						<h2 class="title">Videos Destacados</h2>
					</header>
					<div class="iz--Article--Description">
						<?php query_posts('cat=10&showposts=4&4paged='.$page_num) ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article class="multimediaArticles">
								<figure class="multimediaArticles--Figure">
									<a href="<?php the_permalink(); ?>">
										<?php 

											if (has_post_thumbnail()) {
												the_post_thumbnail();
											}

										 ?>
									</a>	
								</figure>
								<div class="multimediaArticles--Title">
									<a href="<?php the_permalink(); ?>">
										<span class="tt">
											<?php the_title(); ?>
										</span>
									</a>
								</div>
								<div class="multimediaArticles--Link">
									<a href="<?php the_permalink(); ?>" class="linkVerMultimedia">
										Ver Más
									</a>
								</div>
							</article>

						<?php endwhile; endif ?>
					</div>
				</article>
			</section>
			<aside class="tercerContenido--De">
				
			</aside>
		</section>

		

	</main>

	<script>
		function a() {
			 $(".article--Ranking:nth-child(2) .ranking--Num .jsNum").text('01');
			 $(".article--Ranking:nth-child(3) .ranking--Num .jsNum").text('02');
			 $(".article--Ranking:nth-child(4) .ranking--Num .jsNum").text('03');
			 $(".article--Ranking:nth-child(5) .ranking--Num .jsNum").text('04');
			 $(".article--Ranking:nth-child(6) .ranking--Num .jsNum").text('05');
			 $(".article--Ranking:nth-child(7) .ranking--Num .jsNum").text('06');
			 $(".article--Ranking:nth-child(8) .ranking--Num .jsNum").text('07');
		}
		a();

	</script>

<?php get_footer(); ?>