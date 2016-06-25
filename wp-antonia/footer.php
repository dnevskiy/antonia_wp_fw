<?php
/**
 * @package antonia
 */
?>
	</div><!-- .root-content -->
	<footer class="root-footer" role="contentinfo">
		<div class="footer-top">
			menu
		</div>
		<div class="footer-bottom">
			Site designed by <a href="http://nevskiy.com.ua" rel="designer">Nevskiy</a>
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