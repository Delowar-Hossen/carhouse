<?php

/********************************************** 
*  Sliders  Custom Post Register Here .....
***********************************************
*/
function carhouse_sliders_custom_post_register(){

	register_post_type('sliders', array(
		'labels'	=> array(
				'name'			=> 'Sliders',
				'add_new_item' 	=> 'Add New Slider'
			),
		'public'	=> true,
		'supports'	=> array('title', 'editor','excerpt','thumbnail'),
		'menu_icon' => 'dashicons-format-aside'
	));

}
add_action('after_setup_theme', 'carhouse_sliders_custom_post_register');


/********************************************** 
*  Services  Custom Post Register Here .....
***********************************************
*/
function carhouse_services_custom_post_register(){

	register_post_type('services', array(
		'labels'	=> array(
				'name'			=> 'Services',
				'add_new_item' 	=> 'Add New Services'
			),
		'public'	=> true,
		'supports'	=> array('title', 'editor','excerpt','thumbnail'),
		'menu_icon' => 'dashicons-format-aside'
	));

}
add_action('after_setup_theme', 'carhouse_services_custom_post_register');


/********************************************** 
*  Team  Custom Post Register Here .....
***********************************************
*/
function carhouse_team_custom_post_register(){

	register_post_type('teams', array(
		'labels'	=> array(
				'name'			=> 'Teams',
				'add_new_item' 	=> 'Add New Team Member'
			),
		'public'	=> true,
		'supports'	=> array('title', 'editor','thumbnail'),
		'menu_icon' => 'dashicons-format-aside'
	));

}
add_action('after_setup_theme', 'carhouse_team_custom_post_register');

/********************************************** 
*  Dealer  Custom Post Register Here .....
***********************************************
*/
function carhouse_dealer_custom_post_register(){

	register_post_type('delears', array(
		'labels'	=> array(
				'name'			=> 'Dealers',
				'add_new_item' 	=> 'Add New Dealer'
			),
		'public'	=> true,
		'supports'	=> array('title', 'editor','thumbnail'),
		'menu_icon' => 'dashicons-format-aside'
	));

}
add_action('after_setup_theme', 'carhouse_dealer_custom_post_register');


/********************************************** 
*  Products  Custom Post Register Here .....
***********************************************
*/
function carhouse_product_custom_post_register(){

	register_post_type('products', array(
		'labels'	=> array(
				'name'			=> 'Products',
				'add_new_item' 	=> 'Add New Products '
			),
		'public'	=> true,
		'supports'	=> array('title', 'editor','thumbnail','author','comments'),
		'menu_icon' => 'dashicons-format-aside'
	));

}
add_action('after_setup_theme', 'carhouse_product_custom_post_register');


/********************************************** 
*  Brands Texonomy for products post   .....
***********************************************
*/
function carhouse_barnds_category_texonomy(){
    register_taxonomy(
            'brands', // texonomy name
            'products', // custome post type name
            array(
                    'hierarchical'    	=> true,
                    'label'            	=> 'Brands',
                    'query_var'        	=> true,
                    'rewrite'         	=> array(
                            'slug'    	=> 'product-Brands',
                            'with_front'=> false
                        )
                )
        );
    register_taxonomy(
    'team_tag',
    'products',
    array(
        'hierarchical'  => false,
        'label'         => "Tags",
        'singular_name' => "Tag",
        'rewrite'       => true,
        'query_var'     => true
    )
);
}
add_action('after_setup_theme', 'carhouse_barnds_category_texonomy');





