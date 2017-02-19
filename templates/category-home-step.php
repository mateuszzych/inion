<div class="container">
	<div class="row">
		<?php $query = new WP_Query( array( 'category_name' => 'home-step' ) ); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
		$bg = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
		?>


		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-list ">  	<h3 data-aos="zoom-in-down" data-aos-once="true">Zobacz jak działamy</h3>
			<p class="line" data-aos="zoom-in-down" data-aos-once="true"></p>
		       <ul>
			       <li data-aos="fade-right" data-aos-once="true" >
			       		<img src="<?php bloginfo('template_directory'); ?>/svg/chat.svg">
						<h4>Rozmowa z klientem</h4>
						<p>Poznanie celów i zamiarów firmy.</p>
			       </li>

			        <li data-aos="fade-left" data-aos-once="true">
			       		<img src="<?php bloginfo('template_directory'); ?>/svg/strategy.svg">
						<h4>Nasza propozycja działań</h4>
						<p>Przedstawiamy naszą propozycję działań.</p>
						
			       	</li>

			       	<li data-aos="fade-right" data-aos-once="true">
			       		<img src="<?php bloginfo('template_directory'); ?>/svg/tools.svg">
						<h4>Budowa kampanii</h4>
						<p>Z zebranych materiałów tworzymy kampanię.</p>
						
					</li>
			       	
			       	<li data-aos="fade-left" data-aos-once="true">
						<img src="<?php bloginfo('template_directory'); ?>/svg/mixer.svg">
						<h4>Optymalizacja kampanii</h4>
						<p>Badanie rynku i optymalizacja reklamy.</p>
						
					</li>
					<li data-aos="fade-right" data-aos-once="true">
			       		<img src="<?php bloginfo('template_directory'); ?>/svg/increase.svg">
						<h4>Pierwsze efekty</h4>
						<p>Widoczne pierwsze efekty naszych działań.</p>
						
					</li>

		      	</ul>
		        		
		</div>


		   <?php endwhile; wp_reset_postdata(); else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		   <?php endif; ?>
		         
	</div>
</div>



