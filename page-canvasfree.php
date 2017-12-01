<?php /* Template Name: Canvas Free */ ?>

<!-- CONTENT PART GENERATOR -->
<?php
  if (is_page('proyecto')) {
    $content_part = 'proyecto';
  } elseif (is_page('aprendizajes')) {
    $content_part = 'aprendizajes';
  } else {
    $content_part = 'canvas';
  }
?>

<?php get_header(); ?>

<!-- <div class="wrap"> -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while (have_posts()) : the_post();
				get_template_part('template-parts/page/content', $content_part);
			endwhile;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<!-- </div> --><!-- .wrap -->

<?php get_footer();
