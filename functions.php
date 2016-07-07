<?php
function my_enqueue_assets() {
    wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(), null  );
    wp_enqueue_script( 'ajax-paging',  get_stylesheet_directory_uri() . '/js/ajax-paging.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' );

register_nav_menus( array(
  'primary' => __( 'Primary Menu',      'NewMusic' ),
  'social'  => __( 'Social Links Menu', 'NewMusic' ),
) );

// Support Featured Images
$support_args = array(
	'search-form',
  'post-thumbnails'
);
add_theme_support( 'html5', $support_args );

// Enqueue Google Fonts
function google_fonts() {
                wp_register_style('Oswald', 'https://fonts.googleapis.com/css?family=Oswald:300,400,700');
                wp_enqueue_style( 'Oswald');
                wp_register_style('Libre Franklin', 'https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,700');
                wp_enqueue_style( 'Libre Franklin');
        }

add_action( 'wp_print_styles', 'google_fonts' );


// Register sidebars and widgetized areas.
function custom_sidebar() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'custom_sidebar' );

// Add Custom Excerpt to Pages
// function add_page_excerpt() {
//     add_post_type_support('page', array('excerpt'));
// }
// add_action('init', 'add_page_excerpt');
