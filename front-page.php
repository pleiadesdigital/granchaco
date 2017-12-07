<?php /* The front page template file */ ?>
<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<!-- FP IMAGE -->
		<section class="fp-featimg">
			<div class="fp-featimg-wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg/fpbg.jpg)">
				<?php
					$args = array(
						'post_type'					=> 'post',
						'post_per_page'			=> 1,
						'post_status'				=> 'publish',
						'p'									=> 189,
					);
					$query = new WP_Query($args);
				?>
				<?php if ($query -> have_posts()) : while ($query -> have_posts()) : $query->the_post();  ?>
					<div class="video-link-container">
						<?php the_content(); ?>
					</div>
				<?php endwhile; endif; ?>

			</div><!-- class="fp-featimg-wrap" -->
			<?php wp_reset_postdata(); ?>
		</section><!-- class="fp-featimg" -->

		<!-- EL PROYECTO -->
		<section class="fp-proyecto">
			<div class="fp-proyecto-wrap">
				<div class="proyecto-intro">
					<!-- <h2>El Proyecto</h2> -->
					<p>El programa <strong>Chaco Sustentable</strong> busca promover la calidad de vida de hombres y mujeres indígenas que se encuentran en situación de pobreza.</p>
				</div><!-- class="proyecto-intro" -->
				<!-- GRID -->
				<ul class="proyecto-infografias">
					<li class="info-li">
						<div class="fpicon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/green/area-del-chaco.png"></div>
						<h3>1.141.000 km²</h3>
						<p>El chaco es la segunda región boscosa más extensa de América del Sur, después de la selva amazónica.</p>
					</li>
					<li class="info-li">
						<div class="fpicon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/green/comunidades-indigenas.png"></div>
						<h3>37 comunidades indígenas</h3>
						<p>20 de 100 argentinos, 4 de 100 bolivianos y 3 de 100 paraguayos viven en el Chaco.</p>
					</li>
					<li class="info-li">
						<div class="fpicon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/green/numero-familias.png"></div>
						<h3>Más de 6.000 familias</h3>
						<p>Viven aproximadamente 23.000 personas, donde 11.148 son hombres y 11.927 son mujeres.</p>
					</li>
					<li class="info-li">
						<div class="fpicon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/green/jovenes-beneficiados.png"></div>
						<h3>12.727 jóvenes beneficiados</h3>
						<p>7.956 en Argentina, 211 en Bolivia y 4.560 en Paraguay forman parte del Gran Chaco Americano.</p>
					</li>
				</ul>
				<div class="button"><a href="http://chacosustentable.org/programa-chaco-sustentable/el-gran-chaco-americano/">el programa</a></div>
			</div><!-- class="fp-proyecto-wrap" -->
		</section><!-- class="fp-proyecto" -->

		<!-- NOTICIAS -->
		<section class="fp-noticias">
			<div class="fp-noticias-wrap">
				<h2 class="fp-noticias-title">Noticias</h2>
				<ul class="ul-noticias">
					<li class="li-noticia">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog1.jpg">
						<span class="noticias-metadata">30.11.2017</span>
						<h3>Winter Hideaway – Creating a cosy home for the festive season</h3>
						<p>How to create a festive winter hideaway, with our top shopping list to help you get the look in your own home.</p>
						<a href="#" class="more-link">Leer más</a>
					</li>
					<li class="li-noticia">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog2.jpg">
						<span class="noticias-metadata">30.11.2017</span>
						<h3>Winter Hideaway – Creating a cosy home for the festive season</h3>
						<p>How to create a festive winter hideaway, with our top shopping list to help you get the look in your own home.</p>
						<a href="#" class="more-link">Leer más</a>
					</li>
					<li class="li-noticia">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog3.jpg">
						<span class="noticias-metadata">30.11.2017</span>
						<h3>Winter Hideaway – Creating a cosy home for the festive season</h3>
						<p>How to create a festive winter hideaway, with our top shopping list to help you get the look in your own home.</p>
						<a href="#" class="more-link">Leer más</a>
					</li>
				</ul>
			</div><!-- class="fp-noticias-wrap" -->
		</section><!-- class="fp-noticias" -->

		<!-- TESTIMONIOS -->
		<section class="fp-testimonios">
			<div class="fp-testimonios-wrap">
				<div id="slider" class="flexslider">
					<?php
						$args = array(
							'post_type'				=> 'post',
							'cat'							=> 6,
							'orderby'					=> 'rand',
						);
						$query = new WP_Query($args);
					?>
					<h2 class="fp-testimonios-title">Testimonios</h2>
					<ul class="slides">
						<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
						<li class="slide-testimony">
							<?php the_post_thumbnail('granchaco-fp-testimonios'); ?>
							<div class="testimony-text">
								<?php the_excerpt(); ?>
								<p class="testimony-user"><?php wp_strip_all_tags(the_title(), true); ?></p>
								<div class="button">
									<a href="<?php the_permalink(); ?>">leer más</a>
								</div><!-- class="button" -->
							</div><!-- class="testimony-text" -->

						</li>
						<?php endwhile; endif; ?>
					</ul>
					<?php wp_reset_postdata(); ?>
				</div><!-- id="slider" class="flexslider" -->


			</div><!-- class="fp-testimonios-wrap" -->
		</section><!-- class="fp-testimonios" -->

		<!-- EJECUTORES PROYECTO -->
		<section class="fp-ejecutores">
			<div class="fp-ejecutores-wrap">
				<h2 class="fp-ejecutores-title">Socios del Programa</h2>
				<ul class="ul-ejecutores">
					<li class="li-ejecutores">
						<a  href="http://www.cerdet.org.bo/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ejecutores/cerdet.png" alt="Cerdet - Centro de Estudios Regionales para el Desarrollo de Tarija"></a>
					</li>
					<li class="li-ejecutores">
						<a href="https://iccoamericalatina.org/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ejecutores/icco.png" alt="ICCO - Organización internacional holandesa de cooperación para el desarrollo"></a>
					</li>
					<li class="li-ejecutores">
						<a href="http://federacionjum.org.ar/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ejecutores/jum.png" alt="JUM - Organización formada por iglesias cristianas que realizan sus acciones de servicio en el vínculo y diálogo con las comunidades indígenas"></a>
					</li>
					<li class="li-ejecutores">
						<a href="https://www.kerkinactie.nl/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ejecutores/kerkinactie.png" alt="KerkInActie - Juntos somos la Iglesia en Acción. Inspirado por Jesucristo, queremos compartir lo que se nos ha dado. Ofrecer a las personas en los Países Bajos y en todo el mundo la esperanza y mostrar todo su potencial."></a>
					</li>
					<li class="li-ejecutores">
						<a href="http://www.tierraviva.org.py/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ejecutores/tierraviva.png" alt="Tierraviva es una organización no gubernamental sin fines de lucro, que desde 1994 trabaja en la promoción y defensa de los derechos humanos de los Pueblos Indígenas"></a>
					</li>
				</ul>
			</div><!-- class="fp-ejecutores-wrap" -->
		</section><!-- class="fp-ejecutores" -->



	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
