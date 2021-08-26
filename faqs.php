<?php
/*
 * Template Name: FAQs
 */

get_header();

/**
 * <main>
 */

$faqs = get_field('faqs');
$index = 0;

?>

<div class="background_container faqs_background">
    <header class="page-header">
        <h1><?php the_title(); ?></h1>
    </header>
    <?php if(have_rows('faqs')): ?>
        <?php while(have_rows('faqs')): the_row(); $question = get_sub_field('question'); $answer = get_sub_field('answer'); ?>
            <section id="faq-<?=$index?>" class="content_container faq">
                <header>
                    <h2><?=$question?></h2>
                </header>
                <div class="answer">
                    <div class="content">
                        <?=$answer?>
                    </div>
                    <?php if(false && $index < count($faqs) - 1): ?>
                        <a href="#faq-<?=$index + 1?>" class="scroll_next">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 64 32">
                                <polyline points="16 8, 32 24, 48 8" stroke="#fff" stroke-width="1" fill="transparent" stroke-linecap="round" />
                            </svg>
                        </a>
                    <?php endif; ?>
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