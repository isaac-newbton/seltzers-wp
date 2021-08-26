<?php
get_header();

/**
 * <main>
 */

?>

<div class="background_container">
    <header class="page-header">
        <h1><?php the_title(); ?></h1>
    </header>
    <div class="content_container">
        <?php the_content(); ?>
    </div>
</div>

<?php

/**
 * </main>
 */

get_footer();