<?php
/**
 * Template Name: Where To Buy
 */

get_header();

/**
 * <main>
 */

?>

<header class="page-header where_to_buy_header">
    <h1><?php the_title(); ?></h1>
</header>
<div class="background_container">
    <div class="content_container"><?php the_content();?></div>
    <div class="metalocator content_container">
        <!-- MetaLocator.com Code START --><script language="javascript" src="//code.metalocator.com/index.php?option=com_locator&view=directory&layout=_javascript&framed=1&format=raw&tmpl=component&no_html=1&Itemid=15062"></script><!-- MetaLocator.com Code END: Do not modify this code block. See TOS for details. -->
    </div>
</div>

<?php

/**
 * </main>
 */

get_footer();
