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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">
                <ul>
                    <li class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></li>
                </ul>
                <div class="burger">
                    <span></span>
                </div>

            </nav><!-- #site-navigation -->

            <section class="menu-items menuFull">
                <div class="titreMenuBurger">
                    <img class="logoMenuBurger" src=" <?php echo get_stylesheet_directory_uri() . '/images/logoburger.png'; ?> " alt=" logo Fleurs d'oranger & chats errants">
                </div>
                <img id="orchid" src=" <?php echo get_template_directory_uri() . '/assets/images/orchid.png'; ?> " alt="Fleur violette">
                <img id="hibiscus" src=" <?php echo get_template_directory_uri() . '/assets/images/Hibiscus.png'; ?> " alt="Hibiscus">
                <img id="sunflower" src=" <?php echo get_template_directory_uri() . '/assets/images/Sunflower.png'; ?> " alt="Sunflower">
                <img id="flower" src=" <?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?> " alt="Fleur">
                <img id="random_flower" src=" <?php echo get_template_directory_uri() . '/assets/images/random_flower.png'; ?> " alt="Fleur rose">
                <img id="chat_bleu" src=" <?php echo get_stylesheet_directory_uri() . '/images/Chat_bleu.png'; ?> " alt="Chat Bleu">
                <img id="chat_orange" src=" <?php echo get_stylesheet_directory_uri() . '/images/Chat_orange.png'; ?> " alt="Chat Orange">
                <img id="chat_gris" src=" <?php echo get_stylesheet_directory_uri() . '/images/Chat_gris.png'; ?> " alt="Chat Gris">

                <ul class="liste">
                    <li><a href="#story">Histoire</a></li>
                    <li><a href="#characters">Personnages</a></li>
                    <li><a href="#place">Lieu</a></li>
                    <li><a href="#studio">Studio Koukaki</a></li>
                </ul>
                <p class="signature">STUDIO KOUKAKI</p>
    </div>

    <div class="menu_burger">

    </div>
    </div>

    </section>


    </div>

    </section>


    </header><!-- #masthead -->