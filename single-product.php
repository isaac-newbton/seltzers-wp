<?php
get_header();

/**
 * <main>
 */

$categories = get_the_terms(get_the_ID(), 'product_category');
$category = (!empty($categories) ? $categories[0] : null);
$shop_url = get_field('shop_url');
$description = get_field('description');
$ingredients = get_field('ingredients');
$nutrition = get_field('nutritional_information');

?>

<div class="background_container products_background">
    <?php get_template_part('template-parts/product', 'categories'); ?>
    <div class="content_container">
        <article id="product-<?php the_ID(); ?>" class="product">
            <div class="product_image_wrapper">
                <div class="thumbnail_container">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
                <div class="product_subtitle_after_image">
                    <h2><?=($card_title = get_field('card_title')) ? $card_title : get_the_title()?></h2>
                    <?php if($weight_subtitle = get_field('weight_subtitle')): ?>
                        <span class="weight_subtitle"><?=$weight_subtitle?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="product_content_wrapper">
                <div class="product_title_container">
                    <?php if(null!=$category): ?>
                        <span class="category"><?=$category->name?></span>
                    <?php endif; ?>
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="product_description_container">
                    <?=$description?>
                </div>
                <?php if($shop_url): ?>
                    <a href="<?=$shop_url?>" class="product_shop_button">Shop Online</a>
                <?php endif; ?>
                <div class="meta_container">
                    <?php if($ingredients): ?>
                        <div class="opener">
                            <button type="button" class="opener_title_bar">
                                <h3>Ingredients</h3>
                                <span>+</span>
                            </button>
                            <div class="body">
                                <?=$ingredients?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($nutrition): ?>
                        <div class="opener">
                            <button type="button" class="opener_title_bar">
                                <h3>Nurtritional Information</h3>
                                <span>+</span>
                            </button>
                            <div class="body">
                                <?=$nutrition?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </article>
    </div>
</div>

<?php

/**
 * </main>
 */

get_footer();