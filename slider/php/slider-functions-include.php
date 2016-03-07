<?php

// Slider Panel Function

function create_post_type_slider() {
	register_post_type('slider_panel',
		array(
				'labels'			=> array(
					'name'					=> __('Slider'),
					'query_var'			=> true,
					'hierarchical'	=> true,
					'singular_name'	=> __('Panel')
				),
				'taxonomies' => array('category'),
				'public'			=> true,
				'has_archive'	=> false,
				'capability_type'	=> 'post',
				'menu_icon'		=> get_template_directory_uri() . '/slider/images/admin_marquee_icon.png',
				'rewrite' 		=> array('slug' => 'learnmore', 'with_front' => false), //permalinks format
				'supports'		=> array('title','editor','thumbnail')
			)
		);
}
add_action('init','create_post_type_slider');
