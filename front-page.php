<?php /* The front page template file */ ?>
<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<!-- VIDEO -->
		<div class="video-background">
			<div class="video-foreground">
				<iframe src="https://www.youtube.com/embed/qPwjmyE5tRg?rel=0&amp;controls=0&amp;showinfo=0&amp;start=9&amp;autoplay=0&amp;loop=0&amp;fs=1&amp;modestbranding=0" frameborder="0" allowfullscreen class="video"></iframe>
			</div><!-- class="video-foreground" -->
		</div><!-- class="video-background" -->

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
						<div class="fpicon"><img src="http://localhost/~ronyortiz/sites2017/granchaco/wp-content/themes/granchaco/assets/images/icons/green/area-del-chaco.png"></div>
						<h3>1.141.000 km²</h3>
						<p>El chaco es la segunda región boscosa más extensa de América del Sur, después de la selva amazónica.</p>
					</li>
					<li class="info-li">
						<div class="fpicon"><img src="http://localhost/~ronyortiz/sites2017/granchaco/wp-content/themes/granchaco/assets/images/icons/green/comunidades-indigenas.png"></div>
						<h3>37 comunidades indígenas</h3>
						<p>20 de 100 argentinos, 4 de 100 bolivianos y 3 de 100 paraguayos viven en el Chaco.</p>
					</li>
					<li class="info-li">
						<div class="fpicon"><img src="http://localhost/~ronyortiz/sites2017/granchaco/wp-content/themes/granchaco/assets/images/icons/green/numero-familias.png"></div>
						<h3>Más de 6.000 familias</h3>
						<p>Viven aproximadamente 23.000 personas, donde 11.148 son hombres y 11.927 son mujeres.</p>
					</li>
					<li class="info-li">
						<div class="fpicon"><img src="http://localhost/~ronyortiz/sites2017/granchaco/wp-content/themes/granchaco/assets/images/icons/green/jovenes-beneficiados.png"></div>
						<h3>12.727 jóvenes beneficiados</h3>
						<p>7.956 en Argentina, 211 en Bolivia y 4.560 en Paraguay forman parte del Gran Chaco Americano.</p>
					</li>
				</ul>
				<div class="button"><a href="#">el proyecto</a></div>
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
					<ul class="slides">

						<li class="slide-testimony">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slides/slide1.jpg">
							<p>"La situación económica ha sido tan difícil que hay cosas básicas como libros y ropa que no he tenido la opción de comprar. La única ayuda que recibo es la de Save the Children"<span class="testimony-user">Rebecca y su hija Rachael,11 meses. Sudán</span></p>
						</li>

						<li class="slide-testimony">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slides/slide2.jpg">
							<p>"Llegué al centro de nutrición porque mi hija estaba perdiendo mucho peso y dejó de comer. Estoy muy agradecida por lo que Save the Children ha hecho por ella. Sin ayuda no habría sobrevivido"<span class="testimony-user">Sabina, madre de dos niñas de 11 años. España</span></p>
						</li>

						<li class="slide-testimony">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slides/slide3.jpg">
							<p>"No acabé el colegio. Me han enseñado a realizar un presupuesto. Hacer alfombras es nuestra principal fuente de ingresos, me gusta tejerlas. El programa de Save the Children Jóvenes en acción me ayuda a superar mis retos."<span class="testimony-user">Majesta, 16 años.Uganda</span></p>
						</li>

					</ul>
				</div><!-- id="slider" class="flexslider" -->


			</div><!-- class="fp-testimonios-wrap" -->
		</section><!-- class="fp-testimonios" -->

		<!-- EJECUTORES PROYECTO -->
		<section class="fp-ejecutores">
			<div class="fp-ejecutores-wrap">
				<h2 class="fp-ejecutores-title">Ejecutores del Proyecto</h2>
				<ul class="ul-ejecutores">
					<li class="li-ejecutores">
						<div class="imgcont">
							<a  href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ejecutores/cerdet.jpg"></a>
						</div>
					</li>
					<li class="li-ejecutores">
						<div class="imgcont">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ejecutores/icco.jpg"></a>
						</div>
					</li>
					<li class="li-ejecutores">
						<div class="imgcont">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ejecutores/jum.png"></a>
						</div>
					</li>
					<li class="li-ejecutores">
						<div class="imgcont">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ejecutores/kerkinactie.png"></a>
						</div>
					</li>
					<li class="li-ejecutores">
						<div class="imgcont">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ejecutores/tierraviva.jpg"></a>
						</div>
					</li>
				</ul>
			</div><!-- class="fp-ejecutores-wrap" -->
		</section><!-- class="fp-ejecutores" -->



	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
