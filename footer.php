<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package rfm
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( is_active_sidebar( 'footer-widgets' ) ) { ?>
			<div id="footer widget-area" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</div><!-- #secondary -->
		<?php } ?>



	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
