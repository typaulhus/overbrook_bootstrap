<?php
/*
Template Name: About
*/

get_header(); ?>

<?php get_template_part( 'sidebar' , 'about'); ?>

		<div class="content aboutUs col-sm-9" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->


<?php get_template_part( 'footer' ); ?>
