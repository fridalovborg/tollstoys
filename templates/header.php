<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="logo" href="<?= esc_url(home_url('/')); ?>">
                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'small' );
                    ?>
                    <img alt="logo" src="<?php echo $image[0]; ?>">
                </a>
                <a href="#" class="menu-toggle">
                    <div class="icon-content">
                        <img class="menu-icon" alt="menu" src="<?php echo get_template_directory_uri(); ?>/dist/images/menu.svg">
                        <img class="menu-icon-exit" alt="exit menu" src="<?php echo get_template_directory_uri(); ?>/dist/images/exit.svg">
                    </div><!-- .icon-content -->
                </a><!-- .menu-toggle -->
                <div class="nav-primary">
                    <nav>
                        <?php if (has_nav_menu('primary_navigation')) : ?>
                        <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>
                        <?php endif; ?>
                    </nav>
                </div>
            </div><!-- .col-12 -->
        </div><!-- .row -->
    </div><!-- .container -->
</header>
<div class="menu-m">
    <div class="nav-mobile">
        <nav>
            <?php if (has_nav_menu('primary_navigation')) : ?>
            <?php wp_nav_menu(['theme_location' => 'primary_navigation']); ?>
            <?php endif; ?>
        </nav>
    </div>
    <div class="icon-cart-mobile"><?php dynamic_sidebar('sidebar-primary'); ?></div>
</div>
<div class="icon-cart"><?php dynamic_sidebar('sidebar-primary'); ?></div>