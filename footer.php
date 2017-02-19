</div>
<footer>
	<div class="container">
		<div class="row footer-top"  >
			<div class="center col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-xs-6"
			 data-aos="fade-up" data-aos-once="true">
				<img src="<?php bloginfo('template_url'); ?>/svg/logotypgray.svg" class="brand"/>
			</div>
			<div class="col-lg-3 col-md-2 col-sm-3 col-xs-6" data-aos="fade-up" data-aos-once="true"> 
				<?php dynamic_sidebar( 'footer-widget-1' ); ?> 
			</div>
            
			<div class="google col-lg-5 col-lg-offset-1 col-md-6 col-sm-6 col-xs-12" data-aos="fade-up" 
			data-aos-duration="2000" data-aos-once="true">
			<p>Należymy do Partnerów Google</p>
				<img src="<?php bloginfo('template_url'); ?>/svg/google.svg"/>
			</div>

			<div>
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/svg/up-arrow.svg" class="scrollToTop"/></a>
			</div>
		</div>
	</div>

    <div class="copyright">
		<div class="col-lg-12 text-center">
		Copyright &copy; <?php echo( get_bloginfo( 'name' ) ); ?>  2009-<?php echo date('Y'); ?> 
		</div>
	</div>
</footer> 
<script>
jQuery(document).ready(function($) {
    $('.carousel').carousel({
  		interval: 3000	
  	})
	 
});
</script>

<?php wp_footer(); ?>
</body>
</html>