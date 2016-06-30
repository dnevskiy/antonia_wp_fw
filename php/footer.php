<?php
/**
 * @package antonia
 */
?>
	</div><!-- .root-content -->
	<footer class="root-footer" role="contentinfo">
		<div class="root-footer-top">
			menu
		</div>
		<div class="root-footer-bottom">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="//localhost:3000/wp-antonia/wp-content/themes/wp-antonia/img/logo.svg" alt="brand name"></a>
			</div>
			<div class="copyrigth">
				<small>Site designed by <a href="http://nevskiy.com.ua" rel="designer">Nevskiy</a></small>
			</div>
		</div><!-- .root-info -->
	</footer>
</div><!-- .root-container -->
</div><!-- .root -->
<!-- //= delete/footer-frame.php -->
<?php wp_footer(); ?>
<!-- Safely using .ready() before including jQuery -->
<!-- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/ -->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>
</html>