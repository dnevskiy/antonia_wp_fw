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
//= delete/head.php
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