<?php
get_header();

/**
 * <main>
 */

$directions = get_field('directions');
$ingredients = get_field('ingredients');
$video_url = get_field('video_url');

?>
<div class="background_container recipe_background">
    <div class="content_container">
        <article id="recipe-<?php the_ID(); ?>" class="recipe">
            <div class="recipe_image_wrapper">
                <?php if($video_url): ?>
                    <div class="video_wrapper">
                        <video id="video-<?php the_ID(); ?>" class="custom_play_video" src="<?=$video_url?>"></video>
                        <button type="button" aria-label="play pause toggle" class="play_video_button" data-video="video-<?php the_ID(); ?>">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="72px" height="102px">
                                <path fill-rule="evenodd"  opacity="0.75" fill="rgb(255, 255, 255)" d="M68.618,45.231 C72.429,48.140 72.429,53.876 68.618,56.785 L12.142,99.918 C7.357,103.574 0.460,100.162 0.460,94.140 L0.460,7.876 C0.460,1.853 7.357,-1.558 12.142,2.098 L68.618,45.231 Z"/>
                            </svg>
                        </button>
                    </div>
                <?php else: ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>
                <div class="actions">
                    <a href="<?=get_post_type_archive_link('recipe')?>">Back to Recipes</a>
                    <button type="button" id="print" onclick="window.print(); return false;">
                        <svg 
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="40px" height="35px">
                            <path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M9.546,3.949 L30.454,3.949 C31.282,3.949 31.954,3.268 31.954,2.428 C31.954,1.588 31.282,0.907 30.454,0.907 L9.546,0.907 C8.718,0.907 8.046,1.588 8.046,2.428 C8.046,3.268 8.718,3.949 9.546,3.949 ZM30.500,20.175 L9.500,20.175 C8.948,20.175 8.500,20.629 8.500,21.189 L8.500,32.851 C8.500,33.971 9.396,34.879 10.500,34.879 L29.500,34.879 C30.604,34.879 31.500,33.971 31.500,32.851 L31.500,21.189 C31.500,20.629 31.052,20.175 30.500,20.175 ZM20.500,31.583 L13.500,31.583 C12.810,31.583 12.250,31.016 12.250,30.315 C12.250,29.615 12.810,29.048 13.500,29.048 L20.500,29.048 C21.191,29.048 21.750,29.615 21.750,30.315 C21.750,31.016 21.191,31.583 20.500,31.583 ZM25.500,26.513 L13.500,26.513 C12.810,26.513 12.250,25.945 12.250,25.245 C12.250,24.545 12.810,23.977 13.500,23.977 L25.500,23.977 C26.191,23.977 26.750,24.545 26.750,25.245 C26.750,25.945 26.191,26.513 25.500,26.513 ZM36.000,6.484 L4.000,6.484 C1.791,6.484 0.000,8.300 0.000,10.541 L0.000,20.682 C0.000,22.922 1.791,24.738 4.000,24.738 L6.000,24.738 L6.000,21.189 C6.000,19.232 7.570,17.639 9.500,17.639 L30.500,17.639 C32.430,17.639 34.000,19.232 34.000,21.189 L34.000,24.738 L36.000,24.738 C38.209,24.738 40.000,22.922 40.000,20.682 L40.000,10.541 C40.000,8.300 38.209,6.484 36.000,6.484 ZM5.826,14.011 C4.799,14.011 3.966,13.167 3.966,12.126 C3.966,11.085 4.799,10.240 5.826,10.240 C6.852,10.240 7.685,11.085 7.685,12.126 C7.685,13.167 6.852,14.011 5.826,14.011 Z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="recipe_text_wrapper">
                <header>
                    <?php if($card_title = get_field('card_title')): ?>
                        <span class="card_title"><?=$card_title?></span>
                    <?php endif; ?>
                    <h1><?php the_title(); ?></h1>
                </header>
                <div class="ingredients">
                    <?=$ingredients?>
                </div>
                <div class="directions">
                    <?=$directions?>
                </div>
            </div>
        </article>
    </div>
</div>

<?php

/**
 * </main>
 */

get_footer();