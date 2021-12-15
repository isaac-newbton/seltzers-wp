<?php
/*
 * Template Name: Farm Show Landing Page
 */

get_header();

/**
 * <main>
 */

$background = get_field('background');
$hero = get_field('hero');
$form_url = get_field('form_url');
$products_image = get_field('products_image');
$prizes_image = get_field('prizes_image');
$rules_page = get_field('rules_page');
$privacy_page = get_field('privacy_page');
$thank_you_page = get_field('thank_you_page');

?>

<div class="farm_show_background" style="background-image: url(<?=$background ?? ''?>);">

    <div class="background_container">
        <?php if($hero): ?>
            <header class="hero_container content_container">
                <img src="<?=$hero['url']?>" alt="<?=$hero['alt']?>">
            </header>
        <?php endif; ?>

        <?php if($products_image): ?>
            <div class="products_container content_container">
                <img src="<?=$products_image['url']?>" alt="<?=$products_image['alt']?>">
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

        <div class="entry_form_container content_container">
            <form method="post" action="<?=$form_url ?? ''?>">
                <div class="form_row">
                    <label for="first_name" class="sr_only">First name</label>
                    <input type="text" name="first_name" id="first_name" required placeholder="First name">
                </div>
                <div class="form_row">
                    <label for="last_name" class="sr_only">Last name</label>
                    <input type="text" name="last_name" id="last_name" required placeholder="Last name">
                </div>
                <div class="form_row">
                    <label for="email" class="sr_only">Email</label>
                    <input type="email" name="email" id="email" required placeholder="Email">
                </div>
                <input type="textarea" name="my_message" id="my_message" style="border: 0; clip: rect(1px, 1px, 1px, 1px); -webkit-clip-path: inset(50%); clip-path: inset(50%); height: 1px; margin: -1px; overflow: hidden; padding: 0; position: absolute !important; width: 1px; word-wrap: normal !important; word-break: normal; left: 0;" tabindex="-1">
                <div class="form_row">
                    <div class="checkbox_label_row">
                        <input type="checkbox" name="age_verification" id="age_verification" required><label for="age_verification">I am at least 18 years of age.</label>
                    </div>
                </div>
                <div class="form_row">
                    <div class="checkbox_label_row">
                        <input type="checkbox" name="opt_in" id="opt_in"><label for="opt_in"><b>Yes!</b> I'd like to receive emails from Seltzer's Smokehouse Meats.</label>
                    </div>
                </div>
                <div class="form_row">
                    <div class="checkbox_label_row">
                        <input type="checkbox" name="rules" id="rules" required><label for="rules">I understand and agree to these <a href="<?=$rules_page ?? '#'?>">Official Rules</a> and <a href="<?=$privacy_page ?? '#'?>">Privacy Policy</a>.</label>
                    </div>
                </div>
                <input type="hidden" name="_post_id" value="<?php the_ID(); ?>" readonly>
                <input type="hidden" name="_next" value="<?=$thank_you_page?>" readonly>
                <div class="form_row">
                    <button type="submit">Submit</button>
                </div>            
            </form>
        </div>

        <?php if($prizes_image): ?>
            <div class="prizes_container content_container">
                <img src="<?=$prizes_image['url']?>" alt="<?=$prizes_image['alt']?>">
            </div>
        <?php endif; ?>
    </div>

</div>

<?php

/**
 * </main>
 */

get_footer();