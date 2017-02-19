<?php $query = new WP_Query( array( 'category_name' => 'google_content' ) ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
	$bgs = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>
	<div class="all col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 textfieldposition">
			<div class="social-text-second " data-aos-once="true" data-aos="zoom-in-right">
			<span style="font-weight:900; font-size:24px; padding: 0px 0px 0px 35px;"><?php the_title(); ?></span>
			<?php the_content(); ?>
		</div>
	</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 photofieldposition">
			<div class="social-photo-second" data-aos-once="true" data-aos="zoom-in-left">
				<?php if ($bgs != null) 
					echo '<img class="imager" src="'. $bgs . '" />';		
				?> 		
			</div>
		</div>
	</div>

<?php endwhile; 
wp_reset_postdata();
else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>