<?php /* The template for displaying the Site Footer */ ?>
		</div><!-- #content -->
		<!-- FOOTER -->
		<footer id="colophon" class="site-footer" role="contentinfo">

				<!-- Footer Top -->
				<section class="footer-top">
					<div class="footer-top-wrap">
						<?php get_template_part('template-parts/footer/footer', 'widgets'); ?>
					</div><!-- class="footer-top-wrapper" -->
				</section><!-- class="footer-top" -->

				<!-- Footer Bottom -->
				<section class="footer-bottom">
					<div class="footer-bottom-wrap">
						<?php
						if (has_nav_menu('social')) : ?>
							<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e('Footer Social Links Menu', 'pleiadesmoon'); ?>">
								<?php
									wp_nav_menu(array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>' . pleiadesmoon_get_svg(array('icon' => 'chain')),
									));
								?>
							</nav><!-- .social-navigation -->
						<?php endif;
						get_template_part('template-parts/footer/site', 'info');
						?>
					</div><!-- class="footer-bottom-wrapper" -->
				</section><!-- class="footer-bottom" -->

		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
