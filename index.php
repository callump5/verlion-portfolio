
    <?php get_header(); ?>
    <?php 
    $website_bi = get_theme_mod( 'verlion_website_background');
?>

    <div class='page' style="background-image: url(<?php echo esc_url_raw( $website_bi ) ?>)">
      <?php if(!is_front_page(  )){
                get_template_part( 'template-part/navs/front-page' , 'nav');
            };
            ?>

        <?php 
        
            if( have_posts(  ) ) {
                while( have_posts(  ) ) {
                    the_post();
                    the_title();
                    the_excerpt( );
                }
            }
        
        
        ?>

        <?php get_footer(); ?>
</div> 