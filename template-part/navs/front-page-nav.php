 <div class="front-page__nav">
     <div class='u-container'>

        <!-- // Left Side Navigation -->
        <?php 
            wp_nav_menu( array(
                'theme_location'  => 'left-menu',
                'items_wrap'      => '<nav id="%1$s" class="front-page__nav--left front-page__nav--navs %2$s">%3$s</nav>',
                'container'       => false
            ) );
        ?>
            
        <!-- // Custom Logo -->
        <div class='front-page__nav__logo'>
            <?php the_custom_logo(); ?>
        </div>
            
        <!-- // Right Side Navigation -->
        <?php
            wp_nav_menu( array(
                'theme_location' => 'right-menu',
                'items_wrap'     => '<nav id="%1$s" class="front-page__nav--right front-page__nav--navs %2$s">%3$s</nav>',
                'container'      => false
            ) );
        ?>
    </div>
</div>