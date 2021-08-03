<?php
get_header();

/**
 * <main>
 */

if(have_posts()){
	$i = 0;
	while(have_posts()){
		$i++;
		if(1<$i){

		}
		the_post();
		get_template_part('template-parts/content', get_post_type());
	}
}

/**
 * </main>
 */

get_footer();