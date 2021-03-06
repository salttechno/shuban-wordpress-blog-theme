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

	<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
		<div id="footer-instagram">
			<?php dynamic_sidebar( 'sidebar-footer' ) ?>
		</div>
	<?php elseif ( !is_active_sidebar( 'sidebar-footer' ) && current_user_can( 'edit_theme_options' ) ) : ?>
		<div class="container">
			<p> You can add Instagram Widget Areas here from the customizer or widget.</p>
		</div><!-- .first .widget-area -->
	<?php endif; ?>

	<div class="st-footer-area">

		<div class="container">
			<footer id="colophon" class="site-footer row" role="contentinfo">

				<aside class="shuban-footer" role="complementary">
					<?php if ( is_active_sidebar( 'first-footer' ) ) : ?>
					    <div class="col-md-4 widget-area">
					        <?php dynamic_sidebar( 'first-footer' ); ?>
					    </div><!-- .first .widget-area -->
					<?php elseif ( !is_active_sidebar( 'first-footer' ) && current_user_can( 'edit_theme_options' ) ) : ?>
						<div class="col-md-4 widget-area">
					        <p> You can add Widget Areas here from the customizer or widget.</p>
					    </div><!-- .first .widget-area -->
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'second-footer' ) ) : ?>
					    <div class="col-md-4 widget-area">
					        <?php dynamic_sidebar( 'second-footer' ); ?>
					    </div><!-- .second .widget-area -->
					<?php elseif ( !is_active_sidebar( 'second-footer' ) && current_user_can( 'edit_theme_options' ) ) : ?>
						<div class="col-md-4 widget-area">
					        <p>You can add Widget Areas here from the customizer or widget.</p>
					    </div><!-- .first .widget-area -->
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'third-footer' ) ) : ?>
					    <div class="col-md-4 widget-area">
					        <?php dynamic_sidebar( 'third-footer' ); ?>
					    </div><!-- .third .widget-area -->
				    <?php elseif ( !is_active_sidebar( 'third-footer' ) && current_user_can( 'edit_theme_options' ) ) : ?>
						<div class="col-md-4 widget-area">
					         <p>You can add Widget Areas here from the customizer or widget.</p>
					    </div><!-- .first .widget-area -->
					<?php endif; ?>

				</aside><!-- #shuban-footer -->

			</footer><!-- #colophon -->
		</div>
		<!-- /.container -->

		<div class="site-info">

			<div class="container">
				<footer id="colophon" class="site-footer row" role="contentinfo">
					<div class="col-md-6 copyright text-left">
						<h6 class="mb-0"><?php echo wp_kses_post(get_theme_mod('shuban_footer_text_left', '&copy; Copyright 2017 - All Rights Reserved')); ?></h6>
					</div>

					<div class="col-md-6 builtby text-right">
						<h6 class="mb-0"><?php _e( '<a href="https://themes.salttechno.com/" target="_blank">WordPress Blog Themes</a> by SALT TECHNO', 'shuban' ) ?></h6>
					</div>
				</footer><!-- #colophon -->
			</div>
			<!-- /.container -->
		</div><!-- .site-info -->
	</div>
	<!-- /.st-footer-area -->

	<div class="scroll-to-top">
		<i class="fa fa-arrow-up"></i>
	</div>
	<!-- /.scroll-to-top -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
