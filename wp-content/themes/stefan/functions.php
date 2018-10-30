<?php

//Making jQuery Google API
function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '1.8.1');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');


function add_theme_scripts() {
  	wp_enqueue_style( 'style.css', get_stylesheet_uri() );
 
  	wp_enqueue_style( 'style_secondary', get_template_directory_uri() . '/Owl/dist/assets/owl.carousel.min.css', array(), '1.1', 'all');
 
  	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/Owl/dist/assets/owl.theme.default.min.css', array(), '1.1', 'all');

   //  wp_enqueue_style( 'style_dynamic', get_template_directory_uri() . '/css/style_dynamic.css', array(), '1.1', 'all');


   //  wp_enqueue_style( 'js-composer', get_template_directory_uri() . '/css/js-composer.css', array(), '1.1', 'all');

    // wp_enqueue_style( 'responsive-min', get_template_directory_uri() . '/css/responsive-min.css', array(), '1.1', 'all');
    // wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');


    wp_enqueue_script( 'script', get_template_directory_uri() . '/Owl/dist/owl.carousel.min.js', 1.1, true);
    // wp_enqueue_script( 'script', get_template_directory_uri() . '/vuejs/vue-resource.js', 1.1, true);
    // wp_enqueue_script( 'script', get_template_directory_uri() . '/vuejs/vue-router.js', 1.1, true);
    // wp_enqueue_script( 'script', get_template_directory_uri() . '/vuejs/app.js', 1.1, true);

 
  
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// DODAVANJE MENIJA U WP SAJT
register_nav_menus( array(
	'headermenu' => 'Menu Main Navigation',
	'footer' => 'Footer',
));




/* ========================================================================
  Oglasi  
=========================================================================*/
// function create_post_type() {
//   register_post_type( 'oglasi',
//     array(
//       'labels' => array(
//         'name' => __( 'Oglasi' ),
//         'singular_name' => __( 'Oglasi' )
//       ),
//       'public' => true,
//       'has_archive' => true,
//       'show_in_rest' => true,
//     )
//   );
// }
// add_action( 'init', 'create_post_type','create_category');


// function oglasi_kategorije() {
// $labels = array(
//   'name'              => _x( 'Oglasi Kategorije', 'taxonomy general name' ),
//   'singular_name'     => _x( 'Kategorije Oglasa', 'taxonomy singular name' ),
//   'search_items'      => __( 'Pretrazi Kategorije' ),
//   'all_items'         => __( 'Sve Kategorije' ),
//   'parent_item'       => __( 'Roditelj Kategorije' ),
//   'parent_item_colon' => __( 'Roditelj Kategorije' ),
//   'edit_item'         => __( 'Uredi Kategoriju' ), 
//   'update_item'       => __( 'Azuriraj Kategoriju' ),
//   'add_new_item'      => __( 'Dodaj Novu Kategoriju' ),
//   'new_item_name'     => __( 'Nova Ktegorija' ),
//   'menu_name'         => __( 'Kategorije Oglasa' ),
//   );

// $args = array(
//   'labels' => $labels,
//   'hierarchical' => true,'labels' => $labels,
//   'hierarchical' => true,
//   'show_ui' => true,
//   'show_admin_column' => true,
//   'query_var' => true,
//   'rewrite' => array('slug' => 'kategorije')
//   );

// register_taxonomy( 'recipe_category', 'oglasi', $args );
// }
// add_action( 'init', 'oglasi_kategorije', 0 );

/* ========================================================================
  END: Oglasi  
=========================================================================*/






/* ========================================================================
	Theme Settings
=========================================================================*/


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/* ========================================================================
	END: Theme Settings
=========================================================================*/








/* ========================================================================
	Blog WIDGETS  ---SIDE BAR---
=========================================================================*/
 $args = array(
	'name'          => __( 'Blog Sidebar', 'theme_text_domain' ),
	'id'            => 'unique-sidebar-id',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
  'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );


register_sidebar( $args );
/* ========================================================================
	END: Blog WIDGETS  ---SIDE BAR---
=========================================================================*/




/* ========================================================================
  Footer WIDGETS  
=========================================================================*/
 $argsF = array(
  'name'          => __( 'Footer', 'theme_text_domain' ),
  'id'            => 'footer',    // ID should be LOWERCASE  ! ! !
  'description'   => '',
  'class'         => 'footer-widget',
  'before_widget' => '<li id="%1$s" class="%2$s widget-footer">',
  'after_widget'  => '</li>',
  'before_title'  => '<h2 class="widgettitle">',
  'after_title'   => '</h2>' );


register_sidebar( $argsF );
/* ========================================================================
  END: Footer WIDGETS  
=========================================================================*/





/* ========================================================================
	 Tag on WIDGETS  
=========================================================================*/

add_filter( 'widget_tag_cloud_args', 'all_tag_cloud_widget_parameters' );
function all_tag_cloud_widget_parameters() {
	$args[ 'exclude' ] = '22';
    $args = array(
        'smallest' => 12, 
        'largest' => 20, 
        'unit' => 'pt', 
        'number' => 20,
        'format' => 'flat', 
        'separator' => "\n", 
        'orderby' => 'name', 
        'order' => 'ASC',
        'exclude' => '', 
        'include' => '', 
        'link' => 'view', 
        'taxonomy' => array( 'post_tag', 'category' ),
        'post_type' => '', 
        'echo' => false
    );
    return $args;
}

 /* ========================================================================
	END: Tag on WIDGETS  
=========================================================================*/




 /* ========================================================================
	Excerpt Image (Like Feature Image)  
=========================================================================*/

function acf_set_featured_image( $value, $post_id, $field  ){
    
    if($value != ''){
	    //Add the value which is the image ID to the _thumbnail_id meta data for the current post
	    add_post_meta($post_id, '_thumbnail_id', $value);
    }
 
    return $value;
}

// acf/update_value/name={$field_name} - filter for a specific field based on it's name
add_filter('acf/update_value/name=cursusfoto', 'acf_set_featured_image', 10, 3);
 
/* ========================================================================
	END: Excerpt Image (Like Feature Image)  
=========================================================================*/


// Make sure featured images are enabled


// add_theme_support( 'post-thumbnails' );

function add_image_sizes()
{
     if ( function_exists( 'add_image_size' ) ) { 
           add_theme_support( 'post-thumbnails' ); // This feature enables post-thumbnail support for a theme
           add_image_size( 'apple-touch-icon', 180, 180, true);
           add_image_size( 'favicon36', 36, 36, true);
           add_image_size( 'favicon16', 16, 16, true);
           add_image_size( 'og_size', 1200, 630, true);
           add_image_size( 'logo', 80, 80, true);
           add_image_size( 'image_home_page', 250, 250,true);
           add_image_size( 'ucesnici', 800, 215,true);
           add_image_size( 'partneri_glavni', 550, 115,true);
           add_image_size( 'partneri', 250, 150,true);
           add_image_size( 'oglasi', 400, 300,true);
     }
}
add_action('after_setup_theme', 'add_image_sizes');


add_filter('widget_text', 'do_shortcode');


function re_rewrite_rules() {
   global $wp_rewrite;


   $wp_rewrite->pagination_base    = 'seite';
   $wp_rewrite->flush_rules();
}
add_action('init', 're_rewrite_rules');





/* ========================================================================
  Google map
=========================================================================*/

function my_acf_init() {
  
  acf_update_setting('google_api_key', 'AIzaSyABdwewAVweKcBQbubJapqLfLW-4RJ9Abk');
}

add_action('acf/init', 'my_acf_init');


/* ========================================================================
  END: Google map
=========================================================================*/