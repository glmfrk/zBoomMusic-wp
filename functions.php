<?php

function zBoomMusic_setup_func(){

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'menus' );
    add_theme_support( 'widgets' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'post-thumbnails' );
    load_theme_textdomain( 'zBoom', get_template_directory_uri() . '/lang' );

    if( function_exists("register_nav_menus")){
        register_nav_menus( array(
            'primary-menu'      =>  __('Header Menu', 'zBoom'),
            'footer-menu'       =>  __('Footer Menu', 'zBoom'),
        ) );
    }

    function read_more($limit){
        $post_contents = explode(' ', get_the_content());
       $less_content = array_slice($post_contents, 0, $limit);
       echo implode(' ', $less_content);
    }

    register_post_type('zboom-slider', array(
        'labels'         =>  array(
            'name'  =>  'Slider',
        ),
        'public'        =>  true,
        'supports'      =>  array('title', 'thumbnail'),
    ));

    register_post_type('zboom-services', array(
        'labels'            =>  array(
            'menu_name'             =>  __('Servicesss', 'zBoom'),
            'add_new'               =>  __('Add Service', 'zBoom'),
            'add_new_item'          =>  __('Add New Service', 'zBoom'),
            'all_items'             =>  __('All Services', 'zBoom'),
            'edit_item'             =>  __('Edit Service', 'zBoom'),
            'view_item'             =>  __('View Service', 'zBoom'),

        ),
        'public'            =>  true,
        'supports'          =>  array('title', 'editor'),
    ));

    register_post_type('zboom-gallary', array(
        'labels'            =>  array(
            'menu_name'             =>  __('Gallary', 'zBoom'),
            'add_new'               =>  __('Add Gallary', 'zBoom'),
            'add_new_item'          =>  __('Add New Gallary', 'zBoom'),
            'all_items'             =>  __('All Gallarys', 'zBoom'),
            'edit_item'             =>  __('Edit Gallary', 'zBoom'),
            'view_item'             =>  __('View Gallary', 'zBoom'),

        ),
        'public'            =>  true,
        'supports'          =>  array('title', 'editor','thumbnail'),
    ));

}

add_action( 'after_setup_theme', 'zBoomMusic_setup_func' );


function zBoomMusic_enqueue_scripts(){
    // CSS
    // ==================================================
       

    wp_enqueue_style( 'zerogrid', get_template_directory_uri() . '/assets/css/zerogrid.css', false );
    wp_enqueue_style( 'zero-style', get_template_directory_uri() . '/assets/css/style.css', false );
    wp_enqueue_style( 'zero-responsive', get_template_directory_uri() . '/assets/css/responsive.css', false );
    wp_enqueue_style( 'zero-slides', get_template_directory_uri() . '/assets/css/responsiveslides.css', false );
    wp_enqueue_style( 'custom-style', get_stylesheet_uri() );


    // JS Files 
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'zero-slides', get_template_directory_uri() . '/assets/js/responsiveslides.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'zero-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'zBoomMusic_enqueue_scripts' );



    function zboom_right_sidebar(){


        register_sidebar( array(
            'name'          =>  __('Right Sidebar', 'zBoom'),
            'description'   =>  __('Add Your Widget Items For Right Sidebar ', 'zBoom'),
            'id'            =>  __('right-sidebar'),
            'before_widget'     =>  '<div class="box">',
            'after_widget'      =>  '</div></div>',
            'before_title'      =>  '<div class="heading"><h2>',
            'after_title'       =>  '</h2></div><div class="content right-content">',
        ) );

        register_sidebar( array(
            'name'          =>  __('Contact Right Sidebar', 'zBoom'),
            'description'   =>  __('Add Your Widget Items For Contact Right Sidebar ', 'zBoom'),
            'id'            =>  __('contact-right-sidebar'),
            'before_widget'     =>  '<div class="box">',
            'after_widget'      =>  '</div></div>',
            'before_title'      =>  '<div class="heading"><h2>',
            'after_title'       =>  '</h2></div><div class="content right-content">',
        ) );

        
        register_sidebar( array(
            'name'          =>  __('Footer Widgets', 'zBoom'),
            'description'   =>  __('Add Your Widget Items For Footer Widget ', 'zBoom'),
            'id'            =>  __('footer-widget'),
            'before_widget'     =>  '<div class="col-1-4"><div class="wrap-col"><div class="box">',
            'after_widget'      =>  '</div></div></div></div>',
            'before_title'      =>  '<div class="heading"><h2>',
            'after_title'       =>  '</h2></div><div class="content">',
        ) );


    }
    add_action('widgets_init', 'zboom_right_sidebar');


// include_once('lib/Redux/redux-core/framework.php');
// include_once('lib/Redux/sample/config.php');

require_once('inc/settings_api.php');