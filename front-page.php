<?php get_header(); ?>

<section id="slider" >  
	<?php include (get_template_directory() . '/templates/category-home_slider.php'); ?>
</section> 

<section id="home-info" data-aos="zoom-in-up" data-aos-once="true">
			<?php include (get_template_directory() . '/templates/category-home-maininfo.php'); ?>
</section> 
 
<section id="home-circle" data-aos="zoom-in" data-aos-once="true">
			<?php include (get_template_directory() . '/templates/category-home-circle.php'); ?>
</section>   

<section id="home-sentence">
			<?php include (get_template_directory() . '/templates/category-home-sentence.php'); ?>
</section>   

<section id="home-step">
			<?php include (get_template_directory() . '/templates/category-home-step.php'); ?>
</section> 

<section id="cooperation">
			<?php include (get_template_directory() . '/templates/category-home-cooperation.php'); ?>
</section> 

<?php get_footer(); ?>