<?php
/*
Template Name: Home
*/

get_header(); ?>

<!-- <div class="pageHeadBreak"></div> -->
		<?php get_template_part( 'sidebar' , 'home'); ?>
		<div class="mainContent col-sm-12 col-md-9" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'home' ); ?>


			<?php endwhile; // end of the loop. ?>

			<?php get_template_part( 'footer' ); ?>
		</div><!-- #content -->


