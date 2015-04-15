<?php

if( ! isset( $content_width ) ) $content_width = 920;

function elp_setup() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');

	add_theme_support( 'post-thumbnails' );
	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'op' ),
	) );

	register_nav_menus( array(
		'primary' => __( 'Side menu', 'op' ),
	) );

	add_image_size( 'slideshow-image', 1170, 400, true);

	register_sidebar( array(
	   'name' => __( 'Footer Wide'),
	   'id' => 'footer-wide',
	   'description' => __( 'Footer area', 'cf' ),
	   // 'before_widget' => '<div class="col-sm-4"><aside id="%1$s" class="widget %2$s">',
	   // 'after_widget' => "</aside></div>",
	   'before_title' => '<h3 class="footer-title">',
	   'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Home page',
		'id' => 'homepage_top',
		'description' => 'Home page',
	   	'before_widget' => '<div class="col-sm-4"><aside id="%1$s" class="widget %2$s">',
	   	'after_widget' => "</aside></div>"
	));

	register_sidebar( array(
		'name' => 'Organizers',
		'id' => 'organizers',
		'before_widget' => '<div class="col-xs-6 col-sm-6">',
		'after_widget' => '</div>'
	));

	register_sidebar( array(
		'name' => 'Partners',
		'id' => 'partners',
		'before_widget' => '<div class="col-xs-6 col-sm-6">',
		'after_widget' => '</div>'
	));
}
add_action( 'after_setup_theme', 'elp_setup' );

function elp_scripts() {
	if ( !is_admin() ) {
		if ( WP_DEBUG === true ) {
			wp_enqueue_style( 'elp-bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
			wp_enqueue_style( 'elp-jasny', get_template_directory_uri().'/css/components.css' );
			wp_enqueue_style( 'elp-style', get_template_directory_uri().'/css/style.css' );
			wp_enqueue_style( 'fa-style', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
			
			wp_enqueue_script( 'elp-components', get_template_directory_uri() . '/js/components.js', array('jquery'), '20141115', true );
			wp_enqueue_script( 'elp-main', get_template_directory_uri() . '/js/script.js', array('jquery'), '20141115', true );
		} else {
			wp_enqueue_style( 'elp-style', get_template_directory_uri().'/css/style.min.css' );
			wp_enqueue_style( 'fa-style', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
			wp_enqueue_script( 'elp-script', get_template_directory_uri() . '/js/script.min.js', array('jquery'), '20141115', true );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'elp_scripts' );

require get_template_directory() . '/lib/wp_bootstrap_navwalker.php';

require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/filters.php';
require get_template_directory() . '/inc/widgets.php';
// require get_template_directory() . '/inc/actions.php';
