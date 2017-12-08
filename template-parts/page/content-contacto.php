<?php /* Template part for displaying canvasfree contacto in page.php */ ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('page-contacto'); ?>>

	<header class="entry-header">
		<div class="entry-header-wrap">
			<?php if (has_post_thumbnail()) : ?>
					<div class="featured-image"><?php echo get_the_post_thumbnail($post->ID, 'granchaco-featured-image'); ?></div>
			<?php endif; ?>
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</div><!-- class="entry-header-wrap" -->
	</header><!-- .entry-header -->

	<!-- MAIN-CONTENT -->
	<section class="entry-content main-content">
		<div class="entry-content-wrap">
			<div class="contact-form"><?php the_content(); ?></div>
			<div class="contact-address">
				<?php get_template_part('template-parts/footer/footer', 'widgets-contact'); ?>
			</div>
		</div><!-- class="entry-content-wrap" -->
	</section><!-- .entry-content .main-content -->

	<div class="image-solid1"></div>


</div><!-- #post-## class="page-canvas"-->