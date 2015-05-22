<?php

function elp_posttype_slideshow() {
	$labels = array(
		'name'                => 'Slideshows',
		'singular_name'       => 'Slideshow',
		'menu_name'           => 'Slideshow',
		'parent_item_colon'   => 'Parent Slideshow:',
		'all_items'           => 'All Slideshows',
		'view_item'           => 'View Slideshow',
		'add_new_item'        => 'Add New Slideshow',
		'add_new'             => 'New Slideshow',
		'edit_item'           => 'Edit Slideshow',
		'update_item'         => 'Update Slideshow',
		'search_items'        => 'Search slideshows',
		'not_found'           => 'No slideshows found',
		'not_found_in_trash'  => 'No slideshows found in Trash',
	);
	$args = array(
		'label'               => 'slideshow',
		'description'         => 'Home page slideshow',
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-images-alt2',
		'can_export'          => false,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'rewrite'             => false,
		'capability_type'     => 'page',
	);
	register_post_type( 'slideshow', $args );
}
add_action( 'init', 'elp_posttype_slideshow', 0 );

function elp_posttype_testimonial() {
	$labels = array(
		'name'                => 'Testimonials',
		'singular_name'       => 'Testimonial',
		'menu_name'           => 'Testimonial',
		'parent_item_colon'   => 'Parent Testimonial:',
		'all_items'           => 'All Testimonials',
		'view_item'           => 'View Testimonial',
		'add_new_item'        => 'Add New Testimonial',
		'add_new'             => 'New Testimonial',
		'edit_item'           => 'Edit Testimonial',
		'update_item'         => 'Update Testimonial',
		'search_items'        => 'Search testimonials',
		'not_found'           => 'No testimonials found',
		'not_found_in_trash'  => 'No testimonials found in Trash',
	);
	$args = array(
		'label'               => 'testimonial',
		'description'         => 'Home page testimonial',
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-quote',
		'can_export'          => false,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'rewrite'             => false,
		'capability_type'     => 'page',
	);
	register_post_type( 'testimonial', $args );
}
add_action( 'init', 'elp_posttype_testimonial', 0 );