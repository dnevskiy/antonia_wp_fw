<?php 
/**
 * @package antonia
 */
?>

<article>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php antonia_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<small>t-p/content.php</small>
	<div class="entry-content">
<div class="row">
<div class="col-2">2</div>
<div class="col-2">2</div>
<div class="col-2">2</div>
<div class="col-2">2</div>
<div class="col-2">2</div>
	<div class="col-2">2</div></div>
<div class="row">
<div class="tony-3">3</div>
<div class="tony-3">3</div>
<div class="tony-2">2</div>
	<div class="col-3">3</div></div>
<div class="row">
<div class="col-4">4</div>
<div class="col-4">4</div>
	<div class="col-4">4</div></div>
<div class="row">
<div class="tony-6">6</div>
<div class="tony-6">6</div>
	<div class="col-6">6</div></div>
<div class="row">
<div class="col-10">10</div>
	<div class="col-12">12</div></div>
<div class="row">
<div class="col-5">5</div>
<div class="col-5">5</div>
<div class="col-5">5</div>
<div class="col-5">5</div>
	<div class="col-5">5</div></div>




		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'antonia' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'antonia' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php antonia_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article>