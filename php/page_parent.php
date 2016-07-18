<?php
/**
 * @package antonia
 Template Name: parent
 */
get_header(); ?>
<small>page_parent.php</small>
		<main class="main">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page_parent' );
		endwhile;
		?>
		</main>
<?php
get_sidebar();
get_footer();