<?php global $razthemes; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href='<?php echo $razthemes['favicon']['url'] ?>' rel='icon' type='image/x-icon'/>
        <?php wp_head(); ?>
    </head>
    <body>
        <?php if ( is_home() ) : ?>
            <h1 class="position-absolute d-none"><?php bloginfo( 'name' ); ?></h1>
        <?php endif; ?>

        <header id="site-header" class="sticky-top">
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php echo $razthemes['title_logo']; ?></a>
                    <button class="navbar-toggler" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                        wp_nav_menu([
                            'menu'            => 'primary',
                            'theme_location'  => 'primary',
                            'container'       => 'div',
                            'container_id'    => 'bs4navbar',
                            'container_class' => 'navbar-collapse offcanvas-collapse',
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav ml-auto',
                            'depth'           => 2,
                            'fallback_cb'     => 'bs4navwalker::fallback',
                            'walker'          => new bs4navwalker()
                        ]);
                    ?>
                </div>
            </nav>
        </header>

        <div id="site" class="container py-4">
            <div class="row" id="main">
