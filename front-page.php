
<?php get_header( ); ?>
<?php 
    $landing_bc = get_theme_mod( 'verlion_landing_color');
    $landing_bi = get_theme_mod( 'verlion_landing_image');
?>

<div class='front-page' style="background-color: <?php echo $landing_bc ?>; background-image: url(<?php echo esc_url_raw( $landing_bi ) ?>)">
    <div class='front-page__landing'>

        <!-- Custom Logo -->
        <div class="front-page__landing__logo u-logo-round u-logo-border u-box-shadow">
            <?php the_custom_logo(  ); ?>
        </div>


        <!-- Navigation -->
        <?php 
            wp_nav_menu( array(
                'theme_location'  =>  'main-menu',
                'container'       =>  false,
                'items_wrap'  =>  '<nav id="%1$s" class="front-page__landing__nav %2$s">%3$s</nav>'
            ) )
        ?>
    </div>
</div>

<?php get_footer( ); ?>