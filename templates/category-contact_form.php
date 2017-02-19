<?php $query = new WP_Query( array( 'category_name' => 'contact_form' ) ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		
			<?php the_content(); ?>


<?php endwhile; 
wp_reset_postdata();
else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>