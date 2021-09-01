<?php
/*
 * Template Name: About Us
 */

get_header();

/**
 * <main>
 */

$sections = get_field('content_sections');
$sections_count = is_countable($sections) ? count($sections) : 0;
if($featured_video_id = get_field('featured_video_id')){
    $sections_count++;
}
$featured_video_title = get_field('featured_video_title');
$featured_video_description = get_field('featured_video_description');
$index = 0;

?>

<div class="background_container about_background">
    <?php if(have_rows('content_sections')): ?>
        <?php while(have_rows('content_sections')): the_row(); $image = get_sub_field('image'); $title = get_sub_field('title'); $content = get_sub_field('content'); ?>
            <section id="about-<?=$index?>" class="about_section">
                <header>
                    <div class="title_container">
                        <?=0==$index ? "<h1>$title</h1>" : "<h2>$title</h2>"?>
                    </div>
                    <img src="<?=$image?>" alt="<?=strip_tags($title)?>">
                </header>
                <div class="body">
                    <div class="content">
                        <?=$content?>
                    </div>
                    <?php if($index < $sections_count - 1): ?>
                        <a href="#about-<?=$index + 1?>" class="scroll_next">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 64 32">
                                <polyline points="16 8, 32 24, 48 8" stroke="#fff" stroke-width="1" fill="transparent" stroke-linecap="round" />
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </section>
        <?php $index++; endwhile; ?>
    <?php endif; ?>
    <?php if($featured_video_id): ?>
        <section id="about-<?=$index?>" class="about_video_section">
            <?php if($featured_video_title): ?>
                <header>
                    <h2><?=$featured_video_title?></h2>
                </header>
            <?php endif; ?>
            <div class="body">
                <?php if($featured_video_description): ?>
                    <?=$featured_video_description?>
                <?php endif; ?>
                <iframe id="ytplayer" class="ytplayer" type="text/html" src="https://www.youtube.com/embed/<?=$featured_video_id?>?autoplay=0&origin=<?=home_url()?>&enablejsapi=1" frameborder="0"></iframe>
            </div>
        </section>
    <?php endif; ?>
</div>

<?php

/**
 * </main>
 */

get_footer();