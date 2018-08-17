<?php

add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter('ot_show_pages', '__return_true' );

function theme_options_parent($parent){
	$parent = '';
	return $parent;
}
add_filter('ot_theme_options_parent_slug', 'theme_options_parent', 20);

require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . '/functions/theme-options.php' );
require( trailingslashit( get_template_directory() ) . '/functions/meta-boxes.php' );

function cream_setup() {
  
	load_theme_textdomain( 'cream', get_template_directory() . '/languages' );
  
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'menu' => 'Главное меню',
        'footer_menu-left' => 'Меню в подвале слева',
	    'footer_menu-right' => 'Меню в подвале справа',
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background', apply_filters( 'cream_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'cream_setup' );


add_action('init', 'register_post_types');
function register_post_types(){
    register_post_type('slider', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Slider',
			'singular_name'      => 'Slider',
			'add_new'            => 'Добавить slide',
			'add_new_item'       => 'Добавить новый slide',
			'edit_item'          => 'Редактировать slide',
			'new_item'           => 'Новый slide',
			'view_item'          => 'Смотреть slide',
			'search_items'       => 'Искать slide',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Slider',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-welcome-add-page', 
		'hierarchical'        => false,
		'supports'            => array('title','editor', 'thumbnail', 'excerpt'),
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
        'capability_type'    => 'page',
	) );
	
	register_post_type('certificate', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Certificate',
			'singular_name'      => 'Certificate',
			'add_new'            => 'Добавить certificate',
			'add_new_item'       => 'Добавить новый certificate',
			'edit_item'          => 'Редактировать certificate',
			'new_item'           => 'Новый certificate',
			'view_item'          => 'Смотреть certificate',
			'search_items'       => 'Искать certificate',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Certificate',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-welcome-learn-more', 
		'hierarchical'        => false,
		'supports'            => array('title','editor', 'thumbnail'),
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
        'capability_type'    => 'page',
	) );
}



function cream_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cream_content_width', 640 );
}
add_action( 'after_setup_theme', 'cream_content_width', 0 );

function cream_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cream' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cream' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cream_widgets_init' );

function cream_style() {
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style( 'popup', get_template_directory_uri() . '/css/popup.css');
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style( 'cream-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'cream_style' );

function cream_scripts() {
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array ('jquery'), '', true );
    wp_enqueue_script( 'mask', get_template_directory_uri() . '/js/jquery.mask.min.js', array ('jquery'), '', true );
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array ('jquery'), '', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js',  array ('jquery'), '', true );
    

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cream_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';
