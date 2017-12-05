<?php /* Template part for displaying page "galeria-de-imagenes" content in page.php */ ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('page-galeria-de-imagenes'); ?>>

	<header class="entry-header">
		<div class="entry-header-wrap">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</div><!-- class="entry-header-wrap" -->
	</header><!-- .entry-header -->

	<!-- MAIN-CONTENT -->
	<section class="entry-content background-image">
		<div class="entry-content-wrap">
			<div class="infografia"><?php the_content(); ?></div>
		</div><!-- class="entry-content-wrap" -->
	</section><!-- .entry-content .main-content -->



	<!-- MAIN-CONTENT -->

	<!-- <section class="entry-content main-content">
		<div class="entry-content-wrap">
			<div class="columntxt"><?php //the_content(); ?></div>
		</div>
	</section> -->


</div><!-- #post-## class="page-canvas"-->