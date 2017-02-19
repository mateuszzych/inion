<div id="slider_carousel" class="carousel slide">
	<div class="carousel-inner">
		<?php // slide 1  
			$the_query = new WP_Query(array(
				'category_name' => 'home_slider', 
				'posts_per_page' => 1
			)); 
			while ( $the_query->have_posts() ) : 
			$the_query->the_post();

			$bg = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
		?>
		<div class="item active">
			<div class="container-sider">		 
					<div class="image-bg" style="background-image: url('<?php echo $bg; ?>')"></div>	
			</div>
		</div>
		
		<?php //slide 2
		endwhile; 
		wp_reset_postdata();
		?>
		<?php 
			$the_query = new WP_Query(array(
				'category_name' => 'home_slider', 
				'posts_per_page' => 1, 
				'offset' => 1 
			)); 
			while ( $the_query->have_posts() ) : 
			$the_query->the_post();
			$bg = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
		?>
		<div class="item">
			<div class="container-sider">		 
				<div class="image-bg" style="background-image: url('<?php echo $bg; ?>')"></div>			
			</div>
		</div>
		
		<?php  
		endwhile; 
		wp_reset_postdata();
		?>	
	</div><!-- carousel-inner -->
	<a class="left carousel-control" href="#slider_carousel" data-slide="prev">
		<img src="<?php bloginfo('template_directory'); ?>/img/arrow_left.png" />
	</a>
	<a class="right carousel-control" href="#slider_carousel" data-slide="next">
		<img src="<?php bloginfo('template_directory'); ?>/img/arrow_right.png"  />
	</a>
</div><!-- #slider -->