<?php 
    function verlion_customizer_options($wp_customize) {

        //-----------Sections
        // Section: Landing Options
        $wp_customize->add_section('verlion_landing_options', array(
            'title' => esc_html__( 'Landing Options', 'verlion' ),
            'description' => esc_html__( 'These are the settings for the landing page', 'verlion' )
        ));
        // Section: Website Options
        $wp_customize->add_section('verlion_website_options', array(
            'title' => esc_html__( 'Website Options', 'verlion' ),
            'description' => esc_html__( 'These are the main options for your website', 'verlion' )
        ));
        // Section: Theme Color Options
        $wp_customize->add_section('verlion_color_options', array(
            'title' => esc_html__( 'Theme Color Options', 'verlion' ),
            'description' => esc_html__( 'These are the options to customize the colors of the theme', 'verlion' )
        ));


        //------------ Landing Background Color
        // Settings: Landing Background Color
        $wp_customize->add_setting('verlion_landing_color', array(
            'default' => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        // Control: Landing Background Color
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize, 'verlion_landing_color', array(
                    'label' => esc_html__( 'Landing Background Color', 'verlion'),
                    'section' => 'verlion_landing_options'
                )
            )
        );

        //------------ Landing Background Image
        // Settings: Landing Background Image
        $wp_customize->add_setting('verlion_landing_image', array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        ));
        // Control: Landing Background Image
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize, 'verlion_landing_image', array(
                    'settings' => 'verlion_landing_image',
                    'section' => 'verlion_landing_options',
                    'label' => esc_html__('Landing Background Image', 'verlion'),
                    'description' => esc_html__( 'Choose the image to be used for the landing image', 'verion' )
                )
            )
        );

        //------------ Landing Image 1
        // Settings: Landing Image 1
        $wp_customize->add_setting('verlion_landing_image_1', array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        ));
        // Control : Landing Image 1
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize, 'verlion_landing_image_1', array(
                    'settings' => 'verlion_landing_image_1',
                    'section' => 'verlion_landing_options',
                    'label' => esc_html__( 'Landing Image 1', 'verlion' ),
                    'description' => esc_html__( 'This is the image below the landing text', 'verlion' )
                )
            )
        );



        //------------ Website Background Image
        // Settings: Website Background Image
        $wp_customize->add_setting('verlion_website_background', array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        ));
        // Control: Website Background Image
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize, 'verlion_website_background', array(
                    'setting' => 'verlion_website_background',
                    'section' => 'verlion_website_options',
                    'label' => esc_html__( 'Website Background', 'verlion' ),
                    'description' => esc_html__( 'This is the background for all pages other than the front page', 'verlion' )

                )
            )
        );








    }


    add_action( 'customize_register', 'verlion_customizer_options' )

?>