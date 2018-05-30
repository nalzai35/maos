<?php

if ( ! function_exists( 'maos_setup' )) {
    function maos_setup() {

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );

        update_option( 'thumbnail_size_w', 100 );
        update_option( 'thumbnail_size_h', 80 );
        update_option( 'thumbnail_crop', 1 );

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

    wp_enqueue_style( 'app-style', get_template_directory_uri() . '/assets/css/app.css' );

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


function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);

      if (count($excerpt) >= $limit) {
          array_pop($excerpt);
          $excerpt = implode(" ", $excerpt) . '...';
      } else {
          $excerpt = implode(" ", $excerpt);
      }

      $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

      return '<p>'.$excerpt.'</p>';
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);

    if (count($content) >= $limit) {
        array_pop($content);
        $content = implode(" ", $content) . '...';
    } else {
        $content = implode(" ", $content);
    }

    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);

    return $content;
}

function maos_theme_head_script() {

    global $razthemes;

    echo '<style>
            body {
                background-color: '.$razthemes['bg_color'].';
            }
            #site-header .navbar, .widget .widget-title, .page-item.active .page-link, .dropdown-item.active, .dropdown-item:active {
                background-color: '.$razthemes['color_scheme'].';
            }
            .page-item.active .page-link, .form-control:focus, .page-link:focus, .search-field:focus, .widget_categories select:focus {
                border-color: '.$razthemes['color_scheme'].' !important;
            }
            .page-link:focus, .search-field:focus, .widget_categories select:focus, .form-control:focus {
                z-index: 2;
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem '.$razthemes['color_scheme'].'35;
                box-shadow: 0 0 0 0.2rem '.$razthemes['color_scheme'].'35;
            }
            ::selection {
                background: '.$razthemes['color_scheme'].';
                color: #fff;
            }
            a:link,
            a:visited,
            .widget a:hover,
            .post:hover h2 a,
            .post:hover h4 a,
            .footer #menu-footer li a:hover {
                color: '.$razthemes['color_scheme'].';
            }
            '.$razthemes['custom_css'].'
        </style>';

    if (is_user_logged_in()) {
        echo '<style>@media (min-width:782px){.sticky-top{top:32px;}}</style>';
    }

    if ( $razthemes['anti_ucbrowser'] == 1 ) {
        echo '
            <script type="text/javascript">
                var redirect = navigator.userAgent.search("UCBrowser");
                if(redirect>1) {
                    var OpenChrome = window.location.assign("googlechrome://navigate?url="+ window.location.href);
                    var activity = OpenChrome;document.getElementsByTagName("head")[0].appendChild(activity);
                }
            </script>
        ';
    }
    if ( $razthemes['anti_operamini'] == 1 ) {
        echo '
            <script type="text/javascript">
                var redirect = navigator.userAgent.search("Opera Mini");
                if(redirect>1) {
                    var OpenChrome = window.location.assign("googlechrome://navigate?url="+ window.location.href);
                    var activity = OpenChrome;document.getElementsByTagName("head")[0].appendChild(activity);
                }
            </script>
        ';
    }

    echo $razthemes['header_code'];
}
add_action( 'wp_head', 'maos_theme_head_script', 999 );

function maos_theme_footer_script() {
    global $razthemes;
    echo $razthemes['footer_code'];
}
add_action( 'wp_footer', 'maos_theme_footer_script', 999 );


function feature_image() {
    global $razthemes;
    if ( $razthemes['auto-featured-image'] == 1 && has_post_thumbnail() ) {
        echo '<div class="feature mb-3">';
        the_post_thumbnail('full', array('class' => 'img-fluid'));
        echo '</div>';
    }
}

require get_template_directory() . '/inc/init.php';
require get_template_directory() . '/admin/admin-init.php';
