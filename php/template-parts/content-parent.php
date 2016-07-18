<?php
/**
 * @package antonia
 Template Name: parent
*/
?>
<article>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<small>t-p/content-page-parent.php</small>
	<div class="entry-content">
		<?php
		
$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

foreach( $mypages as $page ) {      
	$content = $page->post_content;
	if ( ! $content ) // Check for empty page
		continue;

	$content = apply_filters( 'the_content', $content );
	?>
		<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
	<?php
}


// $args = array(
// 	'depth'        => 0,
// 	'show_date'    => '',
// 	'date_format'  => get_option('date_format'),
// 	'child_of'     => 37,
// 	'exclude'      => '',
// 	'exclude_tree' => '',
// 	'include'      => '',
// 	'title_li'     => '',	//__('Pages'),
// 	'echo'         => 1,
// 	'authors'      => '',
// 	'sort_column'  => 'menu_order, post_title',
// 	'sort_order'   => 'ASC',
// 	'link_before'  => '',
// 	'link_after'   => '',
// 	'meta_key'     => '',
// 	'meta_value'   => '',
// 	'number'       => '',
// 	'offset'       => '',
// 	'walker'       => '',
// ); 

// wp_list_pages( $args );

		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'antonia' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article>