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
    </div>
</div>

<?php

wp_reset_postdata();

/**
 * </main>
 */

get_footer();