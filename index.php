
    <?php get_header(); ?>

   <h1><?php bloginfo( 'name' )?></h1>

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