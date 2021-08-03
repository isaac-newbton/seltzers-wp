<?php
global $wp_query;

get_header();

/**
 * <main>
 */

?>

<div class="background_container">
    <div class="content_container">
        <h1 class="post_title"><span class="heading_p1"><?=$wp_query->found_posts?> Search</span><br/><span class="heading_p2">Result<?=$wp_query->found_posts!==1 ? 's' : ''?></span></h1>
        <?=get_search_form()?>
        <?php if(have_posts()): ?>
            <div class="results_container">
                <ul>
                    <?php while(have_posts()): the_post(); ?>
                        <li>
                            <?php get_template_part('template-parts/search-result', get_post_type()); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php

/**
 * </main>
 */

get_footer();