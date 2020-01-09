<!DOCTYPE HTML>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Fondamento|Montserrat|Niconne|Rochester&display=swap" rel="stylesheet">


        <?php wp_head(  ); ?>
    </head>
    <body <?php body_class(); ?>>

    <?php 
        if(!is_front_page(  )){
            wp_nav_menu( array(
                'theme_location' => 'main-menu'
            ) );
        }
    ?>