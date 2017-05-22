<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shuban
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div class="st-header-area">
		<div class="container">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shuban' ); ?></a>

			<header id="masthead" class="site-header st-site-header" role="banner">
				 <div class="site-branding">
				 	<?php
                        $titan = TitanFramework::getInstance( 'shuban' );
                        $main_logo = $titan->getOption( 'shuban-main-logo' );
                        $shuban_logo_width = $titan->getOption( 'shuban-logo-width' );
                        $main_logsrc  = wp_get_attachment_image_url( $main_logo );
                        $description = get_bloginfo( 'description', 'display' );

                        if( $main_logo ) {  ?>
	                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	                        <img class="main-logo" src="<?php echo esc_url( $main_logsrc ); ?>" alt="shuban" width="<?php echo $shuban_logo_width; ?>"></a>
					<?php }
                    	elseif ( is_front_page() && is_home() ) {
                	?>
	                    <h1 class="site-title">
	                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	                    </h1>
                    <?php
                    		$description = get_bloginfo( 'description', 'display' );
						} else {
                    ?>
                    	<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php

						}
					 	if ( $description || is_customize_preview() ) {
                    ?>
                    		<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                    <?php } ?>

                </div><!-- .site-branding -->
	            <nav id="site-navigation" class="main-navigation" role="navigation">
	            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'shuban' ); ?>
	                 <span class="fa fa-bars"></span>
	            </button>
	            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
	            </nav><!-- #site-navigation -->
			</header><!-- #masthead -->
		</div>
		<!-- /.container -->
	</div>
	<!-- .st-header-area -->


	<?php if ( get_header_image() ) : ?>
		<style media="screen">
			.st-header-area {
				background-image: url('<?php header_image(); ?>');
			}
		</style>
	<?php endif; ?>



	<div class="st-content-area">
		<div class="container">
			<div id="content" class="site-content row">
