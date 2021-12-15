<?php
/*
 * Template Name: Farm Show Thank You Page
 */

get_header();

/**
 * <main>
 */

$header_text = get_field('header_text');

$background = false;
$hero = false;
$products_image = false;
$prizes_image = false;

if($landing_page = get_field('landing_page')){

    $background = get_field('background', $landing_page->ID);
    $hero = get_field('hero', $landing_page->ID);
    $products_image = get_field('products_image', $landing_page->ID);
    $prizes_image = get_field('prizes_image', $landing_page->ID);

}

?>

<div class="farm_show_background" style="background-image: url(<?=$background ?? ''?>);">

    <div class="background_container">
        <?php if($hero && $header_text): ?>
            <header class="hero_container content_container">
                <h1>Thank you for entering</h1>
                <img src="<?=$hero['url']?>" alt="<?=$hero['alt']?>">
                <div class="header_text">
                    <?=$header_text?>
                </div>
            </header>
        <?php endif; ?>

        <?php if($products_image): ?>
            <div class="products_container content_container">
                <img src="<?=$products_image['url']?>" alt="<?=$products_image['alt']?>">
            </div>
        <?php endif; ?>

        <?php if($prizes_image): ?>
            <div class="prizes_container content_container">
                <img src="<?=$prizes_image['url']?>" alt="<?=$prizes_image['alt']?>">
            </div>
        <?php endif; ?>

        <div class="copy_container content_container">
            <?php the_content(); ?>
        </div>

        <div class="social_container content_container">
            <ul class="social_list">
                <?php if($inUrl = get_option('aca_instagram_profile_url')): ?>
                    <li>
                        <a href="<?=esc_attr($inUrl)?>" title="Instagram">
                            <i class="fab fa-instagram-square"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($fbUrl = get_option('aca_facebook_profile_url')): ?>
                    <li>
                        <a href="<?=esc_attr($fbUrl)?>" title="Facebook">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($twUrl = get_option('aca_twitter_profile_url')): ?>
                    <li>
                        <a href="<?=esc_attr($twUrl)?>" title="Twitter">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($liUrl = get_option('aca_linkedin_profile_url')): ?>
                    <li>
                        <a href="<?=esc_attr($liUrl)?>" title="Linkedin">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

</div>

<?php

/**
 * </main>
 */

get_footer();