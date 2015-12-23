<?php
/*
Template Name: Full Width Alt
*/

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="mainContent col-sm-12 col-md-9">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<div class="entry-content-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
					<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
				</article><!-- #post-## -->
			</div>
			

			<!-- SIDEBAR -->
			<div class="sidebar leftNav col-sm-12 col-md-3" role="complementary">
				<?php wp_nav_menu( array('menu' => 'sidenav', 'menu_class' => 'sideNav' )); ?>
				<div class="atAGlance">
					<h4>At-a-Glance</h4>
					<a href="<?php bloginfo('template_directory'); ?>/docs/Overbrook_At-a-Glance_Final.pdf">Download</a>
				</div>			
			</div>
			<!-- /SIDEBAR -->
			
		</div><!-- /row -->


		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
