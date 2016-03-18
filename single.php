<?php get_header(); ?>

<main>

	<header class="contenido--Menu">
		<ul class="menu--Ul">
			<li class="list">
				Inicio
			</li>
			<li class="list">
				<?php the_category(', '); ?>
			</li>
			
		</ul>
	</header>
	
	<section class="contenido">
		<section class="contenidoSingle--Iz">
			<article class="contenidoSingle--Iz--Article">
				<header class="contenidoSingle--Iz--Header">
					<h2 class="title"><?php the_title(); ?></h2>
				</header>
				<div class="contenidoSingle--Iz--Date">
					<div class="date--Iz">
						<span class="title"><?php the_time('l, j'); ?> de <?php the_time(' F');?> de <?php the_time('Y')?> a las <?php the_time('g:i a'); ?></span>
					</div>
					<div class="date--De">
						<?php the_author(); ?>
					</div>	
				</div>
				
				<div class="contenidoSingle--Iz--Contenido">
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>
					
					<?php endwhile; endif; ?>

				</div>
				<div class="contenidoSingle--Iz--Escucha">
					<div class="escucha--primary">
						<p class="escucha">
							Disfruta con la mejor música en nuestra <a href="http://www.radiomaster969.com.ar/radioenvivo/" target="_blank">RADIO EN VIVO</a>
						</p>
					</div>
					<div class="escucha--header">
						<h2 class="title">
							Síguenos en Facebook
						</h2>
						<div class="contenidoSingle--Iz--Facebook">
							<div class="fb-page" data-href="https://www.facebook.com/RADIO-MASTER-ARGENTINA-P%C3%A1gina-Oficial--244634378903742/" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
							</div>
						</div>
				</div>
				<div class="contenidoSingle--Iz--Comentarios">
					<?php comments_template( $file, $separate_comments ); ?>
				</div>
					
				
			</article>

			
		</section>
		<aside class="contenidoSingle--De">
			<article class="contenidoSingle--De--Saludos--Article">
				<figure class="saludos--Figure">
					<a href="http://www.radiomaster969.com.ar/radioenvivo/" target="_blank">
						<img src=" <?php bloginfo('template_url'); ?>/img/saludos_radiovivo.png " alt="">
					</a>
				</figure>
			</article>
			<section class="contenidoSingle--De--Section">
				<header class="section--Header">
					<h2 class="title">Últimas Noticias</h2>
				</header>
				
				<?php query_posts('cat=2&showposts=6&paged='.$page_num); ?>
				 <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
					<article class="section--Article">
						<figure class="section--Article--Figure">
							<?php 
								if(has_post_thumbnail()) {
									the_post_thumbnail();
								}
							 ?>
						</figure>
						<div class="section--Article--Description">
							<a class="link" href="<?php the_permalink(); ?>">
								<span class="description">
									<?php the_title(); ?>
								</span>
							</a>
							<div class="link--VerMas">
								<a class="linkVerMas" href="<?php the_permalink(); ?>">
										Ver Más
								</a>
							</div>
						</div>
					</article>
				<?php endwhile; endif; ?>
			</section>
			
		</aside>
	</section>

</main>

<?php get_footer(); ?>