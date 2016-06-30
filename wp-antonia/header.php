<?php
/**
 * @package antonia
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html xmlns='http://www.w3.org/1999/xhtml' xmlns:fb='http://ogp.me/ns/fb#' xmlns:og='http://ogp.me/ns#' <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//localhost:3000/wp-antonia/wp-content/themes/wp-antonia/css/main.css" type="text/css" media="all" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<!-- http://realfavicongenerator.net -->
	<?php wp_head(); ?>
		<!-- Safely using .ready() before including jQuery -->
		<!-- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/ -->
		<script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body>
<div class="root">
	<div class="root-container">
		<header class="root-header" role="banner">
			<div class="root-branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="root-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="//localhost:3000/wp-antonia/wp-content/themes/wp-antonia/img/logo.svg" alt="brand name"></a></h1>
				<?php else : ?>
					<p class="root-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="//localhost:3000/wp-antonia/wp-content/themes/wp-antonia/img/logo.svg" alt="brand name"></a></p>
				<?php
				endif;
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="root-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
			<nav id="root-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'antonia' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</header>
		<div class="root-content">