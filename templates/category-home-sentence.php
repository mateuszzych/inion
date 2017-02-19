<?php $query = new WP_Query( array( 'category_name' => 'home-sentence' ) ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

		<section class="sentence">
			<div class="container">
				<div class="row" data-aos="zoom-in" data-aos-once="true" >
					<?php the_content(); ?>
				</div>
			</div>
		</section>
<?php endwhile; 
wp_reset_postdata();
else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>