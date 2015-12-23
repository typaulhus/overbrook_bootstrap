<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package overbrook
 */
?>
	<div class="sidebar col-sm-12 col-md-3" role="complementary">

			<?php wp_nav_menu( array('menu' => 'sidenav', 'menu_class' => 'sideNav' )); ?>

			<div class="atAGlance">
				<h4>At-a-Glance</h4>
				<a href="<?php bloginfo('template_directory'); ?>/docs/Overbrook_At-a-Glance_Final.pdf">Download</a>
			</div>

	</div><!-- Sidebar -->
