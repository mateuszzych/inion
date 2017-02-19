<?php $query = new WP_Query( array( 'category_name' => 'home_maininfo' ) ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 main-info">
		<h3><?php the_title(); ?></h3>
		<p class="line"></p>
		<?php the_content(); ?>
	</div>
</div>
<?php endwhile; 
wp_reset_postdata();
else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>