<?php
	
function awesome_script_enqueue() {
	
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/style/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('bootstrapstyle', get_template_directory_uri() . '/assets/dist/css/bootstrap.min.css', array(), '1.0.0', 'all');
	wp_enqueue_script( 'customejs', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/dist/js/bootstrap.bundle.min.js', array(), '1.0.0', true);
	
}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

function awesome_theme_setup() {
	add_theme_support('menus');

	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'secondary', 'Secondary Footer Navigation' );
}

add_action('init', 'awesome_theme_setup');

/* function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="" /',$menu);        
    return $menu;      
}
 */
add_filter('wp_nav_menu','new_submenu_class'); 

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );