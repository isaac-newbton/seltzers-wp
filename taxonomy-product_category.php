<?php
get_header();

/**
 * <main>
 */

$category = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
if(0 < $category->count) {
    $query = new WP_Query([
        'post_type'=>'product',
        'tax_query'=>[
            [
                'taxonomy'=>'product_category',
                'field'=>'term_id',
                'terms'=>$category->term_id
            ]
        ]
    ]);
}

?>

<div class="background_container products_background">
    <div class="products_header">
        <img src="<?=get_template_directory_uri() . '/assets/images/products-header-img.jpg'?>" alt="Products.">
        <a href="#product_header_scroll" id="product_header_scroll" class="scroll_next">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 64 32">
                <polyline points="16 8, 32 24, 48 8" stroke="#fff" stroke-width="1" fill="transparent" stroke-linecap="round" />
            </svg>
        </a>
    </div>
    <?php get_template_part('template-parts/product', 'categories'); ?>
    <div class="content_container">
        <article id="term-<?=$category->term_id?>" class="product_category">
            <header>
                <h1><?=$category->name?></h1>
                <p><?=$category->description?></p>
            </header>
            <?php if($query->have_posts()): ?>
                <ul class="products">
                    <?php while($query->have_posts()): $query->the_post(); ?>
                        <li id="product-<?php the_ID(); ?>">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_post_thumbnail(); ?>
                                <h2><?=($title = get_field('card_title')) ? $title : get_the_title()?></h2>
                                <?php if($weight_subtitle = get_field('weight_subtitle')): ?>
                                    <span class="weight_subtitle"><?=$weight_subtitle?></span>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </article>
        <section class="our_brands">
            <header>
                <h1>Our<br/><span>Brands</span></h1>
            </header>
            <div class="body">
                <ul>
                    <li>
                        <img src="<?=get_template_directory_uri() . '/assets/images/brand-1.png'?>" alt="Bombergers.">
                    </li>
                    <li>
                        <img src="<?=get_template_directory_uri() . '/assets/images/brand-2.png'?>" alt="Penn Dutch.">
                    </li>
                    <li>
                        <img src="<?=get_template_directory_uri() . '/assets/images/brand-3.png'?>" alt="Baum's.">
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>

<?php

wp_reset_postdata();

/**
 * </main>
 */

get_footer();