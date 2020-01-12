<?php 

    // Required Files
    require_once('lib/customizer.php');

    // Theme Supports
    add_theme_support( 'post-thumbnails' );
    add_theme_support('category-thumbnails');

    // Custom Logo
    function verlion_custom_logo() {
        add_theme_support('custom-logo', array(
            "height" => "1000px",
            "width"  => "1000px"
        ) );
    }
    add_action( "init", "verlion_custom_logo" );


    // Enqueue Assets
    function verlion_assets() {
        wp_enqueue_style( 'verlion-stylesheet', get_template_directory_uri( ) . '/dist/assets/css/main.css', array(), 'all' );
    }
    add_action( 'wp_enqueue_scripts', 'verlion_assets' );


    // Register Nav Menus
    function verlion_register_menus(){
        register_nav_menus( array(
            'left-menu'    => esc_html__( 'Left Nav of Logo', 'verlion' ),
            'right-menu'   => esc_html__( 'Right Nav of Logo', 'verlion' ),
            'main-menu'    => esc_html__( 'Main Menu', 'verlion' ),
            'social-menu'  => esc_html__( 'Social Menu', 'verlion' )
        ));
    }
    add_action( 'init', 'verlion_register_menus');


?>