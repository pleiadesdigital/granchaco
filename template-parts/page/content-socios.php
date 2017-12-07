<?php /* Template part for displaying socios content in page.php */ ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('page-socios'); ?>>

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
			<?php
				$args = array(
					'post_type'				=> 'post',
					'category_name'		=> 'socios',
				);
				$query = new WP_Query($args);
			?>
			<ul class="ulsocios">
			<?php if ($query->have_posts()) : while ($query->have_posts()): $query->the_post(); ?>
				<li class="lisocios">
					<?php the_post_thumbnail(); the_title('<h3>', '</h3>'); the_content(); ?>
				</li>
			<?php endwhile; endif; ?>
			</ul>
			<?php wp_reset_postdata(); ?>
		</div><!-- class="entry-content-wrap" -->
	</section><!-- .entry-content .main-content -->

	<div class="image-solid4"></div>
</div><!-- #post-## class="page-socios"-->