<?php
define('ACF_PATH', get_stylesheet_directory() . '/inc/plugins/acf/');
define('ACF_URL', get_stylesheet_directory_uri() . '/inc/plugins/acf/');

include_once ACF_PATH . 'acf.php';

function aca_acf_settings_url($url){
	return ACF_URL;
}
add_filter('acf_settings_url', 'aca_acf_settings_url');

if(function_exists('acf_add_local_field_group')){
	acf_add_local_field_group([
		'key'=>'group_product_fields',
		'title'=>'Product Custom Fields',
		'fields'=>[
			[
				'key'=>'field_product_card_title',
				'label'=>'Card Title',
				'name'=>'card_title',
				'type'=>'text'
			],
			[
				'key'=>'field_product_shop_url',
				'label'=>'Shop URL',
				'name'=>'shop_url',
				'type'=>'url'
			],
			[
				'key'=>'field_product_description',
				'label'=>'Description',
				'name'=>'description',
				'type'=>'wysiwyg'
			],
			[
				'key'=>'field_product_ingredients',
				'label'=>'Ingredients',
				'name'=>'ingredients',
				'type'=>'wysiwyg'
			],
			[
				'key'=>'field_product_nutritional_information',
				'label'=>'Nutritional Information',
				'name'=>'nutritional_information',
				'type'=>'wysiwyg'
			]
		],
		'location'=>[
			[
				[
					'param'=>'post_type',
					'operator'=>'==',
					'value'=>'product'
				]
			]
		],
		'menu_order'=>0,
		'position'=>'acf_after_title',
		'style'=>'default',
		'label_placement'=>'top',
		'instruction_placement'=>'label',
		'hide_on_screen'=>''
	]);

	acf_add_local_field_group([
		'key'=>'group_recipe_fields',
		'title'=>'Recipe Custom Fields',
		'fields'=>[
			[
				'key'=>'field_recipe_card_title',
				'label'=>'Card Title',
				'name'=>'card_title',
				'type'=>'text'
			],
			[
				'key'=>'field_recipe_ingredients',
				'label'=>'Ingredients',
				'name'=>'ingredients',
				'type'=>'wysiwyg'
			],
			[
				'key'=>'field_recipe_directions',
				'label'=>'Directions',
				'name'=>'directions',
				'type'=>'wysiwyg'
			]
		],
		'location'=>[
			[
				[
					'param'=>'post_type',
					'operator'=>'==',
					'value'=>'recipe'
				]
			]
		],
		'menu_order'=>0,
		'position'=>'acf_after_title',
		'style'=>'default',
		'label_placement'=>'top',
		'instruction_placement'=>'label',
		'hide_on_screen'=>''
	]);
}