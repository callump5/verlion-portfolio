
<?php get_header( ); ?>
<?php 
    $landing_bc = get_theme_mod( 'verlion_landing_color');
    $landing_bi = get_theme_mod( 'verlion_landing_image');
    $landing_image_1 = get_theme_mod( 'verlion_landing_image_1')
?>

<div class='front-page' style="background-color: <?php echo $landing_bc ?>; background-image: url(<?php echo esc_url_raw( $landing_bi ) ?>)">
    <?php get_template_part( 'template-part/navs/front-page' , 'nav'); ?>


    <div class='front-page__landing'>
        <div class='front-page__landing__content'>
        
            <h1 class="front-page__landing__content--name"><?php bloginfo( 'name' ); ?></h1>
            <h2 class="front-page__landing__content--info"><?php bloginfo( 'description' ); ?></h2>

            <div class="front-page__landing__content__image-1">
                <img src="<?php echo esc_url_raw($landing_image_1) ?>">
            </div>

            <?php wp_nav_menu( array(
                'theme_location'  => 'social-menu',
                'items_wrap'      => '<div id="%1$s" class="front-page__social-nav %2$s">%3$s</div>',
                'container'       => false 
            ))?>
        </div>
    </div>

</div>

<?php get_footer( ); ?>