<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shuban
 */

?>

			</div><!-- #content -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.st-content-area -->


	<div class="st-footer-area">
		<div class="container">
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'shuban' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'shuban' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'shuban' ), 'shuban', '<a href="http://www.salttechno.com/" rel="designer">SaltTechno</a>' ); ?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.st-footer-area -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
