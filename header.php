<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php echo esc_html( get_bloginfo( 'name' ) ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="mateuszzych">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700&subset=latin-ext" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
	

<?php wp_head(); ?>
	
</head> 
<body <?php body_class(); ?>>
<div class="page-wrap">
 <header id="header" role="banner">
	<nav class="navbar ease navbar-default">
		<div class="container">
				<div class="row">
						<div class="navbar-header" >
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" 
							title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
							<img data-aos="fade-down" src="<?php bloginfo('template_directory'); ?>/svg/logotyp.svg" 
							class="logotype-top" />
							</a>
						</div>
	              
			             <div class="navbar-header" data-aos="fade-down">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" 
				                data-target="#bs-example-navbar-collapse">
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				                </button>
			             </div>

			             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
			                <?php 
							    wp_nav_menu( array(
							    'menu'          =>  'main-nav',
							    'menu_class'    =>  'nav navbar-nav',
							    'depth'         =>  1,
							    ));
							?>
			             </div>
       			</div>
		</div>
	</nav>
</header> 