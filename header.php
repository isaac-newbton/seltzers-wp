<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content' ); ?></a>

        <?php get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <svg xmlns="http://www.w3.org/2000/svg" hidden="hidden">
                    <symbol id="arrow" viewbox="0 0 16 16" >
                        <polyline points="4 6, 8 10, 12 6" stroke="#000" stroke-width="2" fill="transparent" stroke-linecap="round" />
                    </symbol>
                </svg>
                <header id="site-header" class="site-header">
                    <div class="header-wrapper">
                        <button id="header_menu_toggle">
                            <svg viewBox="0 0 100 80" width="40" height="40">
                                <rect width="100" height="20"></rect>
                                <rect y="30" width="100" height="20"></rect>
                                <rect y="60" width="100" height="20"></rect>
                            </svg>
                        </button>
                        <div class="header-content-container">
                            <div class="header-logo-container">
                                <?php the_custom_logo(); ?>
                            </div>
                        </div>
                        <div class="header-menu-wrapper" id="header_menu">
                            <?php
                            wp_nav_menu([
                                'theme_location'  => 'primary',
                                'menu_class'      => 'menu-wrapper',
                                'container_id'    => 'primary-menu-container',
                                'container_class' => 'primary-menu-container',
                                'items_wrap'      => '<ul id="primary-menu-list" class="click-menu %2$s">%3$s</ul>',
                                'fallback_cb'     => false,
                            ]);

                            wp_nav_menu([
                                'theme_location'  => 'secondary',
                                'menu_class'      => 'menu-wrapper',
                                'container_id'    => 'secondary-menu-container',
                                'container_class' => 'secondary-menu-container',
                                'items_wrap'      => '<ul id="secondary-menu-list" class="%2$s">%3$s</ul>',
                                'fallback_cb'     => false,
                            ]);
                            ?>
                            <div class="header-search-container">
                                <form action="<?php bloginfo('url') ?>" role="search">
                                    <label for="header-search-input" class="sr_only">Search for:</label>
                                    <input type="text" id="header-search-input" name="s" placeholder="search..." value="<?=get_search_query()?>">
                                    <button type="submit" aria-label="Submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </header>
                <main id="main" class="site-main" role="main">