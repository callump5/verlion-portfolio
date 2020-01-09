<?php 
    function verlion_customizer_options($wp_customize) {

        //-----------Sections
        // Section: Landing Options
        $wp_customize->add_section('verlion_landing_options', array(
            'title' => esc_html__( 'Landing Options', 'verlion' ),
            'description' => esc_html__( 'These are the settings for the landing page', 'verlion' )
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
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'postMessage'
        ));
        // Control: LAnding Background Image
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






        

    }


    add_action( 'customize_register', 'verlion_customizer_options' )

?>