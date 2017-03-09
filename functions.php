<?php
	// Thumbnails
	add_theme_support( 'post-thumbnails' );
	// side-menu
	register_nav_menus( array(
		'main_menu' => 'Main Menu',
	));
	// top-menu
	register_sidebar( array(
		'name' => __( 'top_menu' ),
		'before_widget' => '<div class="top_menu">',
		'after_widget' => '</div>',
	));
	// bottom-menu
	register_sidebar( array(
		'name' => __( 'bottom_menu' ),
		'before_widget' => '<div class="bottom_menu">',
		'after_widget' => '</div>',
	));
	// excerpt legnth change
	function custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 0 );
	// excerpt more
	function new_excerpt_more( $more ) {
		return '...&nbsp;&nbsp;&nbsp;<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('more', 'your-text-domain') . '</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
?>