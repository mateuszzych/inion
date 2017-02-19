<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found" data-aos="fade-down">
				<header class="page-header">
					<h1 style="text-align: center;"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
				</header><!-- .page-header -->
				<section>
	
				<h3>Powrót do strony głównej?</h3>
				<p class="line"></p>
				<div class="cooperation-button button404">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><p>Naciśnij Tutaj</p></a>				
			</div>
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php get_footer(); ?>
