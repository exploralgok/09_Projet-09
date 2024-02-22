<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

        <header id="masthead" class="site-header">
            <!-- 2 nav -->
            <nav id="site-navigation" class="main-navigation">

                <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        rel="home"><?php bloginfo( 'name' ); ?></a></div>


                <input id="toggle" type="checkbox"></input>

                <label for="toggle" class="hamburger">
                    <div class="top-bun"></div>
                    <div class="meat"></div>
                    <div class="bottom-bun"></div>
                </label>


                <div class="nav">
                    <div class="nav-wrapper">
                        <div class="nav-logo"><img src="/wp-content/themes/foce-child/assets/images/Image logo en paralax.png" alt=""></div>
                        <nav>
                            <ul>
                                <li class="nav-item nav-story"><a href="#story">Histoire</a></li>
                                <li class="nav-item nav-characters"><a href="#characters">Personnages</a></li>
                                <li class="nav-item nav-place"><a href="#place">Lieu</a></li>
                                <li class="nav-item nav-studio"><a href="#studio">Studio Koukaki</a></li>
                            </ul>
                        </nav>
                        <div class="nav-name"><img src="wp-content/themes/foce-child/assets/images/Studio Koukaki.png" alt=""></div>
                    </div>
                </div>

            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->