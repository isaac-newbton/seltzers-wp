<?php
/*
 * Template Name: Farm Show Pre-Landing Page
 */

get_header();

/**
 * <main>
 */

$background = get_field('background');
$before_hero_text = get_field('before_hero_text');
$hero = get_field('hero');
$products_image = get_field('products_image');
$prizes_image = get_field('prizes_image');
$cta_url = get_field('cta_url');
$cta_image = get_field('cta_image');

?>

<div class="pre_farm_show_background" style="background-image: url(<?=$background ?? ''?>);">

    <div class="background_container">
        
        <div class="large_screen_container products_container">
            <img src="<?=$products_image['url']?>" alt="<?=$products_image['alt']?>">
        </div>

        <div class="main_container">

            <header>
                <h1><?=$before_hero_text?></h1>
                <img src="<?=$hero['url']?>" alt="<?=$hero['alt']?>">
            </header>

            <div class="small_screen_container products_container">
                <img src="<?=$products_image['url']?>" alt="<?=$products_image['alt']?>">
            </div>

            <div class="content_and_social">
                <div class="content">
                    <?php the_content(); ?>
                </div>
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

            <div class="small_screen_container prizes_container">
                <img src="<?=$prizes_image['url']?>" alt="<?=$prizes_image['alt']?>">
            </div>

            <div class="cta_container">
                <a href="<?=$cta_url?>" target="_blank" download>
                    <img src="<?=$cta_image['url']?>" alt="<?=$cta_image['alt']?>">
                </a>
            </div>

        </div>

        <div class="large_screen_container products_container">
            <img src="<?=$prizes_image['url']?>" alt="<?=$prizes_image['alt']?>">
        </div>

    </div>

</div>

<?php

/**
 * </main>
 */

get_footer();