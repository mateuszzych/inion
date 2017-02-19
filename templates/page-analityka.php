<?php /* Template Name: Analityka  */ ?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="contact-header bigtop">
	<div class="container">
		<h2 data-aos="zoom-in" data-aos-once="true">ANALITYKA</h2>
        <p class="line" data-aos="zoom-in" data-aos-once="true" ></p>
	</div>
</section>

<section>
					<div class="row">
						 	<?php include (get_template_directory() . '/templates/category-analytics_content.php'); ?>

			</div>
</section>

<section id="cooperation">
			<?php include (get_template_directory() . '/templates/category-home-cooperation.php'); ?>
</section> 

<?php endwhile; endif; ?>
<?php get_footer(); ?>