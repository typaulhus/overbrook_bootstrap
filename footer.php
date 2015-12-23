<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer container" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">
				<div class="site-info">
					&copy; <?php echo date('Y'); ?> Overbrook Scientific
					<?php wp_nav_menu( array('menu' => 'footer', 'menu_class' => 'overbrookFooter' )); ?>
				</div><!-- close .site-info -->

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
