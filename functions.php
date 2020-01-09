<?php 

    // Required Files
    require_once('lib/customizer.php');

    // Theme Supports

    // Custom Logo
    function verlion_custom_logo() {
        add_theme_support('custom-logo', array(
            "height" => "400px",
            "width"  => "400px"
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
            'main-menu' => esc_html__('Main Menu', 'verlion')
        ));
    }
    add_action( 'init', 'verlion_register_menus');


?>