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

				<aside class="shuban-footer" role="complementary">
				    <div class="col-md-4 widget-area">
				        <?php dynamic_sidebar( 'first-footer' ); ?>
				    </div><!-- .first .widget-area -->

				    <div class="col-md-4 widget-area">
				        <?php dynamic_sidebar( 'second-footer' ); ?>
				    </div><!-- .second .widget-area -->

				    <div class="col-md-4 widget-area">
				        <?php dynamic_sidebar( 'third-footer' ); ?>
				    </div><!-- .third .widget-area -->

				</aside><!-- #shuban-footer -->

			</footer><!-- #colophon -->
		</div>
		<!-- /.container -->

		<div class="site-info">
			<?php
				$titan = TitanFramework::getInstance( 'shuban' );
				$shuban_sitefooter = $titan->getOption( 'shuban-site-footer' );

				echo $shuban_sitefooter;
			?>
		</div><!-- .site-info -->
	</div>
	<!-- /.st-footer-area -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
