<?php
/*
 * Template Name: Retail Landing Page
 */

get_header();

/**
 * <main>
 */

$background = get_field('background');
$hero = get_field('hero');
$retailer_image = get_field('retailer_image');
$retailer_url = get_field('retailer_url');
$product_image = get_field('product_image');
$shop_now_text = get_field('shop_now_text');
$shop_now_url = get_field('shop_now_url');

?>

<div class="retail_landing_background" style="background-image: url(<?=$background?>);">
    
    <?php if($hero): ?>

        <header>
            <img src="<?=$hero?>" alt="<?php the_title() ?>" class="retail_landing_hero">
        </header>

    <?php endif; ?>

    <div class="retail_landing_content content_container">
        <?php the_content(); ?>
    </div>

    <div class="retail_landing_ctas_wrapper">
        <div class="retail_landing_ctas_container content_container">

            <?php if($retailer_image && $retailer_url): ?>

                <div class="retailer_cta_container">
                    <a href="<?=$retailer_url?>" title="Shop retailer's website.">
                        <img src="<?=$retailer_image?>" alt="">
                    </a>
                </div>

            <?php endif; ?>

            <?php if($product_image): ?>

                <div class="retailer_product_image_container">
                    <img src="<?=$product_image?>" alt="">
                </div>

            <?php endif; ?>

            <?php if($shop_now_url && $shop_now_text): ?>

                <div class="shop_now_cta_container">
                    <a href="<?=$shop_now_url?>"><?=$shop_now_text?></a>
                </div>

            <?php endif; ?>

        </div>
    </div>

</div>

<?php

/**
 * </main>
 */

get_footer();