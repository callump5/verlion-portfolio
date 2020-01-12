
<?php get_header(); ?>
 
<?php $website_bi = get_theme_mod( 'verlion_website_background'); ?>

<div class='page' style="background-image: url(<?php echo esc_url_raw( $website_bi ) ?>)">
        
        <?php get_template_part( 'template-part/navs/front-page' , 'nav'); ?>
    <div class="u-container">

        <div class="categories">
            <?php 
            
                if( have_posts(  ) ) {
                    while( have_posts(  ) ) { ?>
                    <?php the_post(); ?>
                        <div class='categories__posts'>
                            <div class='categories__posts__thumbnail' style='background-image: url(<?php esc_url_raw(the_post_thumbnail_url( )); ?>)'>
                                
                            </div>  
                            <div class='categories__posts__content'>
                                <h3 class='categories__posts__title'>{ <?php the_title(); ?> }</h3>
                                <p class='categories__posts__text'><?php the_excerpt(); ?></p>
                            </div> 
                        </div>
                    <?php }
                }
            ?>
        </div>

    </div>
    <?php get_footer(); ?>
</div> 