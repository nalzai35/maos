<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php wp_head(); ?>

        <style>
            body {
                background-color: #f4f4f4;
            }
            #site {
                background-color: #fff;
            }
            #site-header .navbar, .widget .widget-title, .page-item.active .page-link {
                background-color: #049eb5;
            }
            .page-item.active .page-link {
                border-color: #049eb5;
            }
            .page-link:focus, .search-field:focus, .widget_categories select:focus {
                z-index: 2;
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem #049eb535;
                box-shadow: 0 0 0 0.2rem #049eb535;
            }
            a:link, .widget a:hover, .post h2 a:hover {
                color: #049eb5;
            }
        </style>
    </head>
    <body>
        <?php if ( is_home() ) : ?>
            <h1 class="position-absolute"><?php bloginfo( 'name' ); ?></h1>
        <?php endif; ?>
        <header id="site-header" class="sticky-top">
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
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
