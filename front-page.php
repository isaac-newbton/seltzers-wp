<?php
get_header();

/**
 * <main>
 */

$hero_text = get_field('hero_text');
$hero_bg_video = get_field('hero_video');
$hero_bg_poster = get_field('hero_poster');
$breaker = get_field('breaker');

?>

<section id="homepage_hero">
	<div class="background_container" style="<?php if($hero_bg_poster): ?>background-image: url(<?=$hero_bg_poster?>)<?php endif; ?>">
		<div class="content_container">
			<h1 class="post_title">
				<span class="heading_p1">Seltzer's</span><br>
				<span class="heading_p2">Smokehouse<br>Meats</span>
			</h1>
			<?php if($hero_text): ?>
				<div class="home_hero_text">
					<?=$hero_text?>
				</div>
			<?php endif; ?>
			<div class="button_link_container">
				<a href="#" class="button">Learn More</a>
			</div>
		</div>
		<?php if($hero_bg_video): ?>
			<video src="<?=$hero_bg_video?>" autoplay muted<?php if($hero_bg_poster): ?> poster="<?=$hero_bg_poster?>"<?php endif; ?>></video>
		<?php endif; ?>
	</div>
</section>

<section id="homepage_beef">
	<div class="background_container" style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/images/seltzers-home-beef-poster.jpg);">
		<div class="background_overlay"></div>
		<div class="content_container">
			<h2>
				<span class="heading_p1">our smokehouse meat is</span><br>
				<span class="heading_p2">100% Beef</span>
			</h2>
			<div class="flex_half">
				<div>
					<img class="homepage_beef_cow_image" src="<?=get_stylesheet_directory_uri()?>/assets/images/100-beef-cow.png" alt="Etching of a cow.">
				</div>
				<div class="motion_text_wrapper" data-timer="2000" data-index="0">
					<div class="static">
						<span>No</span>
					</div>
					<div class="dynamic">
						<div>Poultry</div>
						<div>Fillers</div>
						<div>Pork</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="breaker background_container">
	<img src="<?=get_stylesheet_directory_uri()?>/assets/images/seltzers-smokehouse-meats-breaker-logo.png" alt="Seltzer's logo." data-aos="fade-up">
</div>

<section id="homepage_products">
	<div class="background_container" style="background-image: url(<?=get_stylesheet_directory_uri()?>/assets/images/seltzers-home-products-poster.jpg);">
		<div class="content_container homepage_product_container original">
			<div class="product_image_container">
				<img src="<?=get_field('original_product_image') ?: ''?>" alt="Original product packaging.">
			</div>
			<div class="product_text_container">
				<h2>Original</h2>
				<?php if($original_description = get_field('original_description')): ?>
					<div class="product_description">
						<?=$original_description?>
					</div>
				<?php endif; ?>
				<div class="button_link_container">
					<a href="<?=get_field('original_url') ?: '#'?>" class="button">Learn More</a>
				</div>
			</div>
			<div class="product_ingredient_container">
				<img src="<?=get_field('original_ingredient_image') ?: ''?>" alt="Ingredients.">
			</div>
		</div>
		<div class="content_container homepage_product_container sweet">
		<div class="product_image_container">
				<img src="<?=get_field('sweet_product_image') ?: ''?>" alt="Sweet product packaging.">
			</div>
			<div class="product_text_container">
				<h2>Sweet</h2>
				<?php if($sweet_description = get_field('sweet_description')): ?>
					<div class="product_description">
						<?=$sweet_description?>
					</div>
				<?php endif; ?>
				<div class="button_link_container">
					<a href="<?=get_field('sweet_url') ?: '#'?>" class="button">Learn More</a>
				</div>
			</div>
			<div class="product_ingredient_container">
				<img src="<?=get_field('sweet_ingredient_image') ?: ''?>" alt="Ingredients.">
			</div>
		</div>
		<div class="content_container homepage_product_container db_smoked">
			<div class="product_image_container">
				<img src="<?=get_field('db_smoked_product_image') ?: ''?>" alt="Double smoked sweet product packaging.">
			</div>
			<div class="product_text_container">
				<h2><span class="heading_p1">Double</span><br/><span class="heading_p2">Smoked Sweet</span></h2>
				<?php if($db_smoked_description = get_field('db_smoked_description')): ?>
					<div class="product_description">
						<?=$db_smoked_description?>
					</div>
				<?php endif; ?>
				<div class="button_link_container">
					<a href="<?=get_field('db_smoked_url') ?: '#'?>" class="button">Learn More</a>
				</div>
			</div>
			<div class="product_ingredient_container">
				<img src="<?=get_field('db_smoked_ingredient_image') ?: ''?>" alt="Ingredients.">
			</div>
		</div>
		<div class="content_container homepage_product_container chipotle">
			<div class="product_image_container">
				<img src="<?=get_field('chipotle_product_image') ?: ''?>" alt="Sweet chipotle product packaging.">
			</div>
			<div class="product_text_container">
				<h2><span class="heading_p1">Sweet</span><br/><span class="heading_p2">Chipotle</span></h2>
				<?php if($chipotle_description = get_field('chipotle_description')): ?>
					<div class="product_description">
						<?=$chipotle_description?>
					</div>
				<?php endif; ?>
				<div class="button_link_container">
					<a href="<?=get_field('chipotle_url') ?: '#'?>" class="button">Learn More</a>
				</div>
			</div>
			<div class="product_ingredient_container">
				<img src="<?=get_field('chipotle_ingredient_image') ?: ''?>" alt="Ingredients.">
			</div>
		</div>
	</div>
</section>

<?php

/**
 * </main>
 */

get_footer();