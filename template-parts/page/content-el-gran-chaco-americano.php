<?php /* Template part for displaying canvasfree content in page.php */ ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('page-canvas'); ?>>

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
			<div <?php if (is_page('el-gran-chaco-americano') || is_page('antecedentes')) { ?> class="columntxt2"<?php } else { ?> class="columntxt3"<?php } ?>><?php the_content(); ?></div>
		</div><!-- class="entry-content-wrap" -->
	</section><!-- .entry-content .main-content -->

	<div class="<?php if (is_page('el-gran-chaco-americano')) { echo "image-solid2"; } elseif (is_page('acerca-del-proyecto')) { echo "image-solid6"; } elseif (is_page('antecedentes')) { echo "image-solid3"; } elseif (is_page('localizacion')) { echo "image-solid4"; } elseif (is_page('meta-objetivos-y-resultados')) { echo "image-solid5"; } ?>"></div>

	<!-- MAIN-CONTENT-2 -->

	<section class="entry-content main-content">
		<div class="entry-content-wrap">
			<div class="columntxt2">
				<?php
				$args = array(
					'post_type'				=> 'post',
					'name'						=> 'comunidades-indigenas',
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
					the_content();
				endwhile; endif;
				?>
			</div><!-- class="columntxt2" -->
		</div><!-- class="entry-content-wrap" -->
		<?php wp_reset_postdata(); ?>
	</section>

	<!-- MAIN-CONTENT-3 -->

	<section class="entry-content main-content">
		<div class="entry-content-wrap">
			<div class="columntxt1">
				<?php
				$args = array(
					'post_type'				=> 'post',
					'name'						=> 'el-gran-chaco-americano-en-numeros',
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
					the_content();
				endwhile; endif;
				?>
			</div><!-- class="columntxt2" -->
		</div><!-- class="entry-content-wrap" -->
		<?php wp_reset_postdata(); ?>
	</section>


</div><!-- #post-## class="page-canvas"-->