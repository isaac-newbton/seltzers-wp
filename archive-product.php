<?php
get_header();

/**
 * <main>
 */

$categories = get_terms([
    'taxonomy'=>'product_category',
    'hide_empty'=>true
]);

?>

<div class="products_header">
    <img src="<?=get_template_directory_uri()?>/assets/images/products-header-img.jpg" alt="Products.">
</div>
<div class="background_container products_background">
    <div class="content_container">
        <ul class="categories">
            <?php foreach($categories as $c): ?>
                <li class="category_container">
                    <a id="product_category-<?=$c->term_id?>" href="<?=get_term_link($c)?>">
                        <?php if($img = get_field('preview_image', "product_category_$c->term_id")): ?>
                            <img src="<?=$img['url']?>" alt="<?=$img['alt']?>">
                        <?php endif; ?>
                        <div><?=$c->name?></div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<?php

wp_reset_postdata();

/**
 * </main>
 */

get_footer();