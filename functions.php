<?php

if ( ! function_exists( 'maos_setup' )) {
    function maos_setup() {

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );

        update_option( 'thumbnail_size_w', 100 );
        update_option( 'thumbnail_size_h', 80 );
        update_option( 'thumbnail_crop', 1 );

        // update_option( 'medium_size_w', 300 );
        // update_option( 'medium_size_h', 194 );
        // update_option( 'medium_crop', 1 );

        // update_option( 'large_size_w', 681 );
        // update_option( 'large_size_h', 454 );
        // update_option( 'large_crop', 1 );

        // add_image_size( 'large-thumb', 681, 454, true );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
                'primary' => esc_html__( 'Primary Menu', 'maos' ),
                'top' => esc_html__('Top Navigation', 'maos'),
                'footer' => esc_html__('Footer Navigation', 'maos'),
            )
        );

        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

    }
}
add_action( 'after_setup_theme', 'maos_setup' );


function maos_widget() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'maos' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title text-capitalize">',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'maos_widget' );


function maos_scripts() {

    if ( is_admin() ) {
        // wp_enqueue_style('wg-fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
    }

    wp_enqueue_style( 'app-style', get_template_directory_uri() . '/app.css' );

    wp_enqueue_style( 'maos-style', get_stylesheet_uri(), 100, true );

    wp_enqueue_script( 'jquery3', '//code.jquery.com/jquery-3.3.1.slim.min.js', false, NULL, true );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array(), '', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'wp_generator' );
}
add_action( 'wp_enqueue_scripts', 'maos_scripts' );


function maos_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'maos_excerpt_more' );

require get_template_directory() . '/inc/init.php';
