<?php
/*
Template Name: Contact-dont use
*/

get_header(); ?>

<header>
	<h1 class="page-title"><?php the_title(); ?></h1>
</header><!-- .entry-header -->

<div class="contactWrap">
	<div class="contactMain">[contact-form-7 id="105" title="Contact form 1"]</div>
	<div class="contactSide">
		<div class="contactImage"><img alt="Overbrook" src="http://theoverbrookgroup.com/wp-content/uploads/2013/10/bostonOverbrook.jpg" /></div>
		<p class="contactSideRule contactSideP"><strong>OVERBROOK</strong> <br>
		11 Fairmount Avenue, Suite 111<br>
		Boston, MA 02136</p>
		<h3>How can we help you?</h3>
		<strong>Email:</strong> <span class="phNumbers"><a title="info@theoverbrookgroup.com" href="mailto:info@theoverbrookgroup.com" target="_blank">info@theoverbrookgroup.com</a></span>
		<strong>Phone:</strong> <span class="phNumbers">617-364-7683</span>
		<strong>Toll Free:</strong> <span class="phNumbers">855-782-4373 (US only)</span>
		<strong>Fax:</strong> <span class="phNumbers">617-360-9795</span>
	</div><!-- /.contactSide -->
</div><!-- /.contactWrap -->

<?php get_template_part( 'footer' ); ?>

