<?php /* Displays footer widgets if assigned */ ?>

<?php
	if (is_active_sidebar('sidebar-2') || is_active_sidebar('sidebar-3')) {	?>
		<aside class="widget-area" role="complementary">
			<?php
			if (is_active_sidebar('sidebar-2')) { ?>
				<div class="widget-column footer-widget-1">
					<?php dynamic_sidebar('sidebar-2'); ?>
				</div>
			<?php } ?>

		</aside><!-- .widget-area -->

<?php } //endif ?>