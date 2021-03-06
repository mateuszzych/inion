<?php $query = new WP_Query( array( 'category_name' => 'social_content' ) ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
	$bgs = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>


		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="social-photo " data-aos-once="true" data-aos="zoom-in-right">
				<?php if ($bgs != null) 
					echo '<img class="imager" src="'. $bgs . '" />';		
				?> 		
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="social-text" data-aos-once="true" data-aos="zoom-in-left">
			<span style="font-weight:900; font-size:24px"><?php the_title(); ?></span>
			<?php the_content(); ?>
		</div>
	</div>

<?php endwhile; 
wp_reset_postdata();
else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>