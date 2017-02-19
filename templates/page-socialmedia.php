<?php /* Template Name: Social Media  */ ?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="contact-header bigtop">
	<div class="container">
		<h2 data-aos="zoom-in" data-aos-once="true">SOCIAL MEDIA</h2>
        <p data-aos="zoom-in" class="line" data-aos-once="true"></p>
	</div>
</section>

<section>
					<div class="row">
						 	<?php include (TEMPLATEPATH . '/templates/category-social_content.php'); ?>
				</div>
</section>

<section id="cooperation">
			<?php include (TEMPLATEPATH . '/templates/category-home-cooperation.php'); ?>
</section> 

<?php endwhile; endif; ?>
<?php get_footer(); ?>