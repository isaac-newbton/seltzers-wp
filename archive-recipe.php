<?php
get_header();

$on_page_description = false;

if(function_exists('aioseo')) {
    $on_page_description = aioseo()->dynamicOptions->searchAppearance->archives->recipe->metaDescription;
}

/**
 * <main>
 */

?>
<div class="background_container recipe_background">
    <div class="recipes_header">
        <img src="<?=get_template_directory_uri() . '/assets/images/recipes-header-img.jpg'?>" alt="Recipes.">
    </div>
    <header class="page-header">
        <h1>Recipes</h1>
        <?php if($on_page_description): ?>
            <div class="recipe_archive_description"><?=$on_page_description?></div>
        <?php endif; ?>
    </header>
    <div class="content_container">
        <?php if(have_posts()): ?>
            <ul class="recipes">
                <?php while(have_posts()): the_post(); ?>
                    <li id="recipe-<?php the_ID(); ?>">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(); ?>
                            <?php if($card_title = get_field('card_title')): ?>
                                <span class="card_title"><?=$card_title?></span>
                            <?php endif; ?>
                            <h2><?php the_title(); ?></h2>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>

<?php

/**
 * </main>
 */

get_footer();