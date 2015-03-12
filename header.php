<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BIMG Base
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

    <body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bimg-base' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div itemscope itemtype="http://schema.org/Organization" id="site-contact">
            <span itemprop="name" class="display-none">Christmas Decor</span>Call Us Today!<span itemprop="telephone"></span><span itemprop="email"><?php bloginfo( 'admin_email' ) ?></span>
        </div>
        <div id="header-wrapper">
            <div id="branding-wrapper">
                <div class="site-branding">
                <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>"></a>
                </div><!-- .site-branding -->
                <div class="social-icons">
                </div><!-- .social-icons -->
            </div>

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'bimg-base' ); ?></button>
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->
    <header id="sticky-header" class="site-header">
        <div class"site-branding">
        </div><!-- .site-branding -->
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'bimg-base' ); ?></button>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav><!-- #site-navigation -->
    </header>

    <div id="content" class="site-content">

