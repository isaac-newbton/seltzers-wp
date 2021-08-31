<?php
/**
 * Template Name: Where To Buy
 */

get_header();

/**
 * <main>
 */

$locations = get_field('locations');
$index = 0;

?>

<header class="page-header where_to_buy_header">
    <h1><?php the_title(); ?></h1>
</header>
<div class="background_container">
    <?php if(have_rows('locations')): ?>
        <?php while(have_rows('locations')): the_row(); $name = get_sub_field('name'); $zipcode = get_sub_field('zipcode'); $address = get_sub_field('address'); ?>
            <section id="location-<?=$index?>" class="content_container location">
                <header>
                    <h2><?=$name?></h2>
                </header>
                <div class="location_address">
                    <?=nl2br($address)?>
                </div>
            </section>
        <?php $index++; endwhile; ?>
    <?php endif; ?>
</div>

<?php

/**
 * </main>
 */

get_footer();
