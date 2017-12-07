<?php /* Template part for displaying canvasfree content in page.php */ ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('page-programa'); ?>>

	<header class="entry-header">
		<div class="entry-header-wrap">
			<?php if (has_post_thumbnail()) : ?>
					<div class="featured-image"><?php echo get_the_post_thumbnail($post->ID, 'granchaco-featured-image'); ?></div>
			<?php endif; ?>
			<div class="title-subtitle">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
				<h3 class="entry-subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></h3><!-- class="entry-subtitle" -->
			</div><!-- class="title-subtitle" -->

		</div><!-- class="entry-header-wrap" -->
	</header><!-- .entry-header -->

	<!-- MAIN-CONTENT -->
	<section class="entry-content main-content">
		<div class="entry-content-wrap">
			<div <?php if (is_page('el-gran-chaco-americano') || is_page('el-programa')) { ?> class="columntxt2"<?php } else { ?> class="columntxt3"<?php } ?>><?php the_content(); ?></div>
		</div><!-- class="entry-content-wrap" -->
	</section><!-- .entry-content .main-content -->

	<div class="image-solid2"></div>

	<!-- MAIN-CONTENT-2 -->

	<section class="entry-content main-content">
		<div class="entry-content-wrap">
			<div class="columntxt3">
				<?php
				$args = array(
					'post_type'				=> 'post',
					'name'						=> 'meta-objetivos-resultados',
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
					the_title('<h2>', '</h2>');
					the_content();
				endwhile; endif;
				?>
			</div><!-- class="columntxt3" -->
		</div><!-- class="entry-content-wrap" -->
		<?php wp_reset_postdata(); ?>
	</section>

	<div class="image-solid3"></div>

	<!-- MAIN-CONTENT-3 -->

	<section class="entry-content main-content">
		<div class="entry-content-wrap">
			<div class="columntxt3">
				<?php
				$args = array(
					'post_type'				=> 'post',
					'name'						=> 'localizacion-del-proyecto',
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
					the_title('<h2>', '</h2>');
					the_content();
				endwhile; endif;
				?>
			</div><!-- class="columntxt2" -->
		</div><!-- class="entry-content-wrap" -->
		<?php wp_reset_postdata(); ?>
	</section>


</div><!-- #post-## class="page-canvas"-->