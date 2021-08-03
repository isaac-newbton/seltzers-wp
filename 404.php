<?php
get_header();

/**
 * <main>
 */

?>

<div class="background_container">
    <div class="content_container">
        <h1 class="post_title"><span class="heading_p1">404</span><br/><span class="heading_p2">Not Found</span></h1>
        <p>That page was not found. Try searching our site:</p>
        <?=get_search_form()?>
        <p class="return_home"><a href="<?php bloginfo('url'); ?>">Click to return home.</a></p>
    </div>
</div>

<?php

/**
 * </main>
 */

get_footer();