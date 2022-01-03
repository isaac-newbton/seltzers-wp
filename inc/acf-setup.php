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
		'key'=>'group_home_fields',
		'title'=>'Homepage Custom Fields',
		'location'=>[
			[
				[
					'param'=>'page_type',
					'operator'=>'==',
					'value'=>'front_page'
				]
			]
		],
		'fields'=>[
			[
				'key'=>'field_hero_text',
				'label'=>'Hero Text',
				'name'=>'hero_text',
				'type'=>'text'
			],
			[
				'key'=>'field_hero_button_url',
				'label'=>'Hero Button Link',
				'name'=>'button_url',
				'type'=>'url'
			],
			[
				'key'=>'field_hero_video',
				'label'=>'Hero Video URL',
				'name'=>'hero_video',
				'type'=>'url'
			],
			[
				'key'=>'field_hero_poster',
				'label'=>'Hero Poster',
				'name'=>'hero_poster',
				'type'=>'image',
				'return_format'=>'url',
				'library'=>'all'
			],
		],
		'menu_order'=>0,
		'position'=>'acf_after_title',
		'style'=>'default',
		'label_placement'=>'top',
		'instruction_placement'=>'label',
		'hide_on_screen'=>''
	]);

	acf_add_local_field_group([
		'key'=>'group_home_product_fields',
		'title'=>'Homepage Product Fields',
		'location'=>[
			[
				[
					'param'=>'page_type',
					'operator'=>'==',
					'value'=>'front_page'
				]
			]
		],
		'fields'=>[
			[
				'key'=>'field_original_description',
				'label'=>'Original Description',
				'name'=>'original_description',
				'type'=>'textarea'
			],
			[
				'key'=>'field_original_url',
				'label'=>'Original URL',
				'name'=>'original_url',
				'type'=>'url'
			],
			[
				'key'=>'field_original_product_image',
				'label'=>'Original Product Image',
				'name'=>'original_product_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all'
			],
			[
				'key'=>'field_original_ingredient_image',
				'label'=>'Original Ingredient Image',
				'name'=>'original_ingredient_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all'
			],
			[
				'key'=>'field_sweet_description',
				'label'=>'Sweet Description',
				'name'=>'sweet_description',
				'type'=>'textarea'
			],
			[
				'key'=>'field_sweet_url',
				'label'=>'Sweet URL',
				'name'=>'sweet_url',
				'type'=>'url'
			],
			[
				'key'=>'field_sweet_product_image',
				'label'=>'Sweet Product Image',
				'name'=>'sweet_product_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all'
			],
			[
				'key'=>'field_sweet_ingredient_image',
				'label'=>'Sweet Ingredient Image',
				'name'=>'sweet_ingredient_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all'
			],
			[
				'key'=>'field_db_smoked_description',
				'label'=>'Smoked Description',
				'name'=>'db_smoked_description',
				'type'=>'textarea'
			],
			[
				'key'=>'field_db_smoked_url',
				'label'=>'Smoked URL',
				'name'=>'db_smoked_url',
				'type'=>'url'
			],
			[
				'key'=>'field_db_smoked_product_image',
				'label'=>'Smoked Product Image',
				'name'=>'db_smoked_product_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all'
			],
			[
				'key'=>'field_db_smoked_ingredient_image',
				'label'=>'Smoked Ingredient Image',
				'name'=>'db_smoked_ingredient_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all'
			],
			[
				'key'=>'field_chipotle_description',
				'label'=>'Chipotle Description',
				'name'=>'chipotle_description',
				'type'=>'textarea'
			],
			[
				'key'=>'field_chipotle_url',
				'label'=>'Chipotle URL',
				'name'=>'chipotle_url',
				'type'=>'url'
			],
			[
				'key'=>'field_chipotle_product_image',
				'label'=>'Chipotle Product Image',
				'name'=>'chipotle_product_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all'
			],
			[
				'key'=>'field_chipotle_ingredient_image',
				'label'=>'Chipotle Ingredient Image',
				'name'=>'chipotle_ingredient_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all'
			],
			[
				'key'=>'field_smoke_honey_description',
				'label'=>'Smoke \'n Honey Description',
				'name'=>'smoke_honey_description',
				'type'=>'textarea'
			],
			[
				'key'=>'field_smoke_honey_url',
				'label'=>'Smoke \'n Honey URL',
				'name'=>'smoke_honey_url',
				'type'=>'url'
			],
			[
				'key'=>'field_smoke_honey_product_image',
				'label'=>'Smoke \'n Honey Product Image',
				'name'=>'smoke_honey_product_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all'
			],
			[
				'key'=>'field_smoke_honey_ingredient_image',
				'label'=>'Smoke \'n Honey Ingredient Image',
				'name'=>'smoke_honey_ingredient_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all'
			],
		],
		'menu_order'=>0,
		'position'=>'acf_after_title',
		'style'=>'default',
		'label_placement'=>'top',
		'instruction_placement'=>'label',
		'hide_on_screen'=>''
	]);

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
				'key'=>'field_product_weight_subtitle',
				'label'=>'Weight Subtitle',
				'name'=>'weight_subtitle',
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
			],
			[
				'key'=>'field_recipe_video_url',
				'label'=>'Video URL',
				'name'=>'video_url',
				'type'=>'url'
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

	acf_add_local_field_group([
		'key'=>'group_about_us_fields',
		'title'=>'About Us Custom Fields',
		'fields'=>[
			[
				'key'=>'field_content_sections',
				'label'=>'Content Sections',
				'name'=>'content_sections',
				'type'=>'repeater',
				'layout'=>'row',
				'sub_fields'=>[
					[
						'key'=>'field_image',
						'label'=>'Image',
						'name'=>'image',
						'type'=>'image',
						'return_format'=>'url',
						'library'=>'all',
						'preview_size'=>'thumbnail',
						'required'=>true
					],
					[
						'key'=>'field_title',
						'label'=>'Title',
						'name'=>'title',
						'type'=>'text',
						'required'=>true
					],
					[
						'key'=>'field_content',
						'label'=>'Content',
						'name'=>'content',
						'type'=>'wysiwyg',
						'tabs'=>'all',
						'media_upload'=>false,
						'required'=>true
					],
				]
			],
			[
				'key'=>'field_featured_video_id',
				'label'=>'Featured Video YouTube ID',
				'name'=>'featured_video_id',
				'type'=>'text'
			],
			[
				'key'=>'field_featured_video_title',
				'label'=>'Featured Video Title',
				'name'=>'featured_video_title',
				'type'=>'text'
			],
			[
				'key'=>'field_featured_video_description',
				'label'=>'Featured Video Description',
				'name'=>'featured_video_description',
				'type'=>'wysiwyg'
			]
		],
		'location'=>[
			[
				[
					'param'=>'page_template',
					'operator'=>'==',
					'value'=>'about-us.php'
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
		'key'=>'group_faqs_fields',
		'title'=>'FAQs Fields',
		'fields'=>[
			[
				'key'=>'field_faqs',
				'label'=>'FAQs',
				'name'=>'faqs',
				'type'=>'repeater',
				'layout'=>'row',
				'sub_fields'=>[
					[
						'key'=>'field_question',
						'label'=>'Question',
						'name'=>'question',
						'type'=>'text',
						'required'=>true
					],
					[
						'key'=>'field_answer',
						'label'=>'Answer',
						'name'=>'answer',
						'type'=>'wysiwyg',
						'required'=>true
					]
				]
			]
		],
		'location'=>[
			[
				[
					'param'=>'page_template',
					'operator'=>'==',
					'value'=>'faqs.php'
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
		'key'=>'group_where_to_buy',
		'title'=>'Where To Buy',
		'fields'=>[
			[
				'key'=>'field_locations',
				'label'=>'Locations',
				'name'=>'locations',
				'type'=>'repeater',
				'layout'=>'row',
				'sub_fields'=>[
					[
						'key'=>'field_name',
						'label'=>'Name',
						'name'=>'name',
						'type'=>'text',
						'required'=>true
					],
					[
						'key'=>'field_zipcode',
						'label'=>'Zip Code',
						'name'=>'zipcode',
						'type'=>'text',
						'required'=>true
					],
					[
						'key'=>'field_address',
						'label'=>'Address',
						'name'=>'address',
						'type'=>'textarea',
						'required'=>true
					]
				]
			],
		],
		'location'=>[
			[
				[
					'param'=>'page_template',
					'operator'=>'==',
					'value'=>'where-to-buy.php'
				]
			]
		]
	]);

	acf_add_local_field_group([
		'key'=>'group_retail_landing',
		'title'=>'Retail Landing Page',
		'fields'=>[
			[
				'key'=>'field_background',
				'label'=>'Background',
				'name'=>'background',
				'type'=>'image',
				'return_format'=>'url',
				'library'=>'all',
			],
			[
				'key'=>'field_hero',
				'label'=>'Hero Image',
				'name'=>'hero',
				'type'=>'image',
				'return_format'=>'url',
				'library'=>'all',
			],
			[
				'key'=>'field_retailer_image',
				'label'=>'Retailer Image',
				'name'=>'retailer_image',
				'type'=>'image',
				'return_format'=>'url',
				'library'=>'all',
			],
			[
				'key'=>'field_retailer_url',
				'label'=>'Retailer URL',
				'name'=>'retailer_url',
				'type'=>'url'
			],
			[
				'key'=>'field_product_image',
				'label'=>'Product Image',
				'name'=>'product_image',
				'type'=>'image',
				'return_format'=>'url',
				'library'=>'all',
			],
			[
				'key'=>'field_shop_now_text',
				'label'=>'Shop Now Button Text',
				'name'=>'shop_now_text',
				'type'=>'text',
			],
			[
				'key'=>'field_shop_now_url',
				'label'=>'Shop Now Button URL',
				'name'=>'shop_now_url',
				'type'=>'url'
			],
		],
		'location'=>[
			[
				[
					'param'=>'page_template',
					'operator'=>'==',
					'value'=>'template-retail-landing.php',
				],
			],
		],
	]);

	acf_add_local_field_group([
		'key'=>'group_farm_show_landing',
		'title'=>'Farm Show Landing Page Settings',
		'fields'=>[
			[
				'key'=>'field_background_image',
				'label'=>'Background Image',
				'name'=>'background',
				'type'=>'image',
				'return_format'=>'url',
				'library'=>'all',
			],
			[
				'key'=>'field_hero_image',
				'label'=>'Hero Banner',
				'name'=>'hero',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all',
			],
			[
				'key'=>'field_form_url',
				'label'=>'Form URL',
				'name'=>'form_url',
				'type'=>'url',
				'required'=>true,
			],
			[
				'key'=>'field_products_image',
				'label'=>'Products Image',
				'name'=>'products_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all',
			],
			[
				'key'=>'field_prizes_image',
				'label'=>'Prizes Image',
				'name'=>'prizes_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all',
			],
			[
				'key'=>'field_rules_page',
				'label'=>'Rules Page',
				'name'=>'rules_page',
				'type'=>'page_link',
				'post_type'=>['page'],
				'required'=>true,
			],
			[
				'key'=>'field_privacy_page',
				'label'=>'Privacy Page',
				'name'=>'privacy_page',
				'type'=>'page_link',
				'post_type'=>['page'],
				'required'=>true,
			],
			[
				'key'=>'field_thank_you_page',
				'label'=>'Thank You Page',
				'name'=>'thank_you_page',
				'type'=>'page_link',
				'post_type'=>['page'],
				'required'=>true,
			],
		],
		'location'=>[
			[
				[
					'param'=>'page_template',
					'operator'=>'==',
					'value'=>'template-farm-show-landing.php',
				],
			],
		],
		'position'=>'normal',
	]);

	acf_add_local_field_group([
		'key'=>'group_farm_show_landing_thankyou',
		'title'=>'Farm Show Landing Page Settings',
		'fields'=>[
			[
				'key'=>'field_header_text',
				'label'=>'Header Text',
				'name'=>'header_text',
				'type'=>'wysiwyg',
			],
			[
				'key'=>'field_landing_page',
				'label'=>'Landing Page',
				'name'=>'landing_page',
				'type'=>'post_object',
				'post_type'=>['page'],
			],
		],
		'location'=>[
			[
				[
					'param'=>'page_template',
					'operator'=>'==',
					'value'=>'template-farm-show-landing-thank-you.php',
				],
			],
		],
		'position'=>'normal',
	]);

	acf_add_local_field_group([
		'key'=>'group_farm_show_pre_landing',
		'title'=>'Farm Show Pre-Landing Page Settings',
		'fields'=>[
			[
				'key'=>'field_background_image',
				'label'=>'Background Image',
				'name'=>'background',
				'type'=>'image',
				'return_format'=>'url',
				'library'=>'all',
			],
			[
				'key'=>'field_before_hero_text',
				'label'=>'Before Hero Text',
				'name'=>'before_hero_text',
				'type'=>'text',
			],
			[
				'key'=>'field_hero_image',
				'label'=>'Hero Banner',
				'name'=>'hero',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all',
			],
			[
				'key'=>'field_products_image',
				'label'=>'Products Image',
				'name'=>'products_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all',
			],
			[
				'key'=>'field_prizes_image',
				'label'=>'Prizes Image',
				'name'=>'prizes_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all',
			],
			[
				'key'=>'field_cta_image',
				'label'=>'CTA Image',
				'name'=>'cta_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all',
			],
			[
				'key'=>'field_cta_url',
				'label'=>'CTA URL',
				'name'=>'cta_url',
				'type'=>'url',
			],
		],
		'location'=>[
			[
				[
					'param'=>'page_template',
					'operator'=>'==',
					'value'=>'template-farm-show-pre-landing.php',
				],
			],
		],
		'position'=>'normal',
	]);

	acf_add_local_field_group([
		'key'=>'group_product_category_settings',
		'title'=>'Product Category Settings',
		'fields'=>[
			[
				'key'=>'field_preview_image',
				'label'=>'Preview Image',
				'name'=>'preview_image',
				'type'=>'image',
				'return_format'=>'array',
				'library'=>'all',
			],
			[
				'key'=>'field_custom_banner',
				'label'=>'Custom Banner',
				'name'=>'custom_banner',
				'type'=>'image',
				'return_format'=>'url',
				'library'=>'all',
			],
			[
				'key'=>'field_custom_meta_title',
				'label'=>'Custom Meta Title',
				'name'=>'custom_meta_title',
				'type'=>'text',
			],
			[
				'key'=>'field_on_page_description',
				'label'=>'On-page Description',
				'name'=>'on_page_description',
				'type'=>'textarea',
			]
		],
		'location'=>[
			[
				[
					'param'=>'taxonomy',
					'operator'=>'==',
					'value'=>'product_category',
				],
			],
		],
		'position'=>'normal'
	]);
}