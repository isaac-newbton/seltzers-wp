<?php
get_header();

/**
 * <main>
 */

?>

<div class="background_container recipe_background">
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