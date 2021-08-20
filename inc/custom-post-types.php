<?php
register_post_type('product', [
	'labels'=>[
		'name'=>'Products',
		'singular_name'=>'Product'
	],
	'public'=>true,
	'menu_position'=>20,
	'menu_icon'=>'dashicons-products',
	'supports'=>[
		'thumbnail',
		'title'
	],
	'has_archive'=>false
]);

register_taxonomy('product_category', 'product', [
	'labels'=>[
		'name'=>'Product Categories',
		'singular_name'=>'Product Category',
		'search_item'=>'Search Product Category',
		'all_items'=>'All Product Categories',
		'parent_item'=>'Parent Product Category',
		'edit_item'=>'Edit Product Category',
		'view_item'=>'View Product Category',
		'update_item'=>'Update Product Category',
		'add_new_item'=>'Add Product Category',
		'new_item_name'=>'New Product Category',
		'separate_items_with_commas'=>'Separate product categories with commas',
		'add_or_remove_items'=>'Add or remove product categories',
		'choose_from_most_used'=>'Choose from the most used product categories',
		'not_found'=>'No product categories found',
		'no_terms'=>'No product categories'
	],
	'rewrite'=>[
		'slug'=>'product-category'
	]
]);

register_post_type('recipe', [
	'labels'=>[
		'name'=>'Recipes',
		'singular_name'=>'Recipe'
	],
	'public'=>true,
	'menu_position'=>21,
	'menu_icon'=>'dashicons-list-view',
	'supports'=>[
		'thumbnail',
		'title'
	]
]);