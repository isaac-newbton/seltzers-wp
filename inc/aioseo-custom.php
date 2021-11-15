<?php

function acf_custom_title_for_aioseop($title) {
    $category = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    if($category && 'product_category' == $category->taxonomy && function_exists('get_field')){
        $custom_meta_title = get_field('custom_meta_title', "product_category_$category->term_id");
        $title = $custom_meta_title ?: $category->name;
    }
    return $title;
}

add_filter( 'aioseo_title', 'acf_custom_title_for_aioseop', 10, 1 ); 