<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     *
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     *
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "razthemes";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name'              => 'Maos',
        'display_name'          => 'Maos Options',
        'display_version'       => 'v1.0.0',
        'page_slug'             => 'razthemes_options',
        'page_title'            => 'Maos Options',
        'update_notice'         => FALSE,
        'admin_bar'             => TRUE,
        'admin_bar_icon'        => 'dashicons-sos',
        'menu_icon'             => 'dashicons-sos',
        'menu_type'             => 'menu',
        'menu_title'            => 'Maos',
        'allow_sub_menu'        => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer'            => TRUE,
        'default_mark'          => '',
        'dev_mode'              => FALSE,
        'output'                => TRUE,
        'output_tag'            => TRUE,
        'compiler'              => TRUE,
        'page_permissions'      => 'manage_options',
        'save_defaults'         => FALSE,
        'show_import_export'    => TRUE,
        'database'              => 'options',
        'transient_time'        => '3600',
        'network_sites'         => TRUE,
        'use_cdn'               => TRUE,
        'google_api_key'        => 'AIzaSyBqDfbxhqvdfsxNyYMXJeNyli01aZTwL7k',
        // 'intro_text' => '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>',
        // 'footer_text'           => 'aha! you can insert footer text here!',
        'footer_credit'         => 'If you have questions about this theme, please contact us via <a target="_blank" href="http://razthemes.com/amember/helpdesk">Helpdesk</a>.',
        'hints' => array(
            'icon' => 'el el-question-sign',
            'icon_color'    => 'lightgray',
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/razthemes',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Support', 'maos' ),
            'content' => __( '<p>For better support management, please always use Helpdesk in our <a target="_blank" href="http://razthemes.com/amember/helpdesk">member area</a> to contact us. <br />Thanks</p>', 'maos' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Documentation', 'maos' ),
            'content' => __( '<p>Please visit <a href="http://razthemes.com/docs/maos/" target="_blank">maos Theme Documentation</a>.</p>', 'maos' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '', 'maos' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */
    Redux::setSection( $opt_name, array(
        'title' => __( 'General Setting', 'maos' ),
        'id'    => 'general',
        // 'desc'  => __( 'This tab contains common setting options which will be applied to whole theme.', 'maos' ),
        'icon'  => 'el el-cogs',
        'fields'     => array(
            array(
                  'id'       => 'title_logo',
                  'type'     => 'text',
                  'title'    => __( 'Title Logo', 'maos' ),
                  'subtitle' => __( 'You can change logo text in menu', 'maos' ),
                  'desc'     => __( 'Change logo text', 'maos' ),
                  'default'  => __( 'Maos', 'maos' ),
                ),
            array(
                'id'       => 'favicon',
                'type'     => 'media',
                'title'    => __( 'Favicon', 'maos' ),
                'desc'     => __( 'Upload your favicon', 'maos' ),
                'subtitle' => __( 'Upload a 16 x 16 px image that will represent your website\'s favicon. You can refer to this link for more information on how to make it: <br/> <a href="http://www.favicon.cc/" rell="nofollow" target="_blank">http://www.favicon.cc/</a>', 'maos' ),
                'default'  => array(
                    'url'  => 'https://s.w.org/favicon.ico?2'
                ),
            ),
            array(
                'id'       => 'header_code',
                'type'     => 'ace_editor',
                'mode'     => 'html',
                'title'    => __( 'Header Code', 'maos' ),
                'subtitle' => __( 'Enter the code which you need to place <b>before closing tag</b>. (ex: Google Webmaster Tools verification, Bing Webmaster Center, BuySellAds Script, Alexa verification etc.)', 'maos' ),
                'desc'     => __( '', 'maos' ),
            ),
            array(
                'id'       => 'footer_code',
                'type'     => 'ace_editor',
                'mode'     => 'html',
                'title'    => __( 'Footer Code', 'maos' ),
                'subtitle' => __( 'Enter the codes which you need to place in your footer. <b>(ex: Google Analytics, Clicky, STATCOUNTER, Woopra, Histats, etc.)</b>', 'maos' ),
                'desc'     => __( '<strong style="color:red;">NOTE:</strong> Histats users please use <strong><em>Hidden Tracker Code.</em></strong>', 'maos' ),
                'default'  => ''
            ),
            array(
                'id'       => 'copyright_text',
                'type'     => 'editor',
                'title'    => __( 'Copyrights Text', 'maos' ),
                // 'subtitle' => __( 'You can change or remove our link from footer and use your own custom text. (Link back is always appreciated)', 'maos' ),
                'desc'     => __( '', 'maos' ),
                'args'     => array(
                    'full_width' => true,
                 'teeny'          => false,
                 'media_buttons'  => false,
                 'wpautop'        => true,
                 // 'quicktags'      => false
                 // 'textarea_row'   => 3,
                ),
                'default' => 'Proudly powered by <a href="http://wordpress.org/">Wordpress</a> | </span>Theme: maos by <a href="http://www.razthemes.com/">razthemes</a>.',
             ),
        )
    ) );


    /**
     * Styling Options
     * -----------------------------------------------------------------------------
     */

    Redux::setSection( $opt_name, array(
        'title' => __( 'Styling Options', 'maos' ),
        'id'    => 'style_option',
        'desc'  => __( 'Control the visual appearance of your theme, such as colors, layout and patterns, from here.', 'maos' ),
        'icon'  => 'el el-adjust',
        'fields'      => array(
            array(
              'id'       => 'color_scheme',
              'type'     => 'color',
              'title'    => __( 'Color Scheme', 'maos' ),
              'transparent' => false,
              'default'  => '#049eb5',
            ),

          array(
            'id'       => 'custom_css',
            'type'     => 'ace_editor',
            'title'    => __( 'Custom CSS Code', 'maos' ),
            // 'subtitle' => __( 'This will override the default CSS used on your site.', 'maos' ),
            'mode'     => 'css',
            'theme'    => 'monokai',
            'full_width' => true,
            'desc'     => '',
            // 'default'  => "#header{\n   margin: 0 auto;\n}"
          ),
        )
    ) );


    /**
     * ADS MANAGEMENT
     * -----------------------------------------------------------------------------
     */
     Redux::setSection( $opt_name, array(
         'title'            => __( 'Ads Management', 'maos' ),
         'id'               => 'ads',
        //  'desc'             => __( 'Now, ad management is easy with our options panel. You can control everything from here, without using separate plugins.', 'maos' ),
         'customizer_width' => '400px',
         'icon'             => 'el el-usd'
     ) );


    Redux::setSection( $opt_name, array(
        'title' => __( 'Home Page', 'maos' ),
        'id'    => 'ads_home',
        // 'desc'  => __( 'Now, ad management is easy with our options panel. You can control everything from here, without using separate plugins.', 'maos' ),
        'subsection'       => true,
        'fields'     => array(
          array(
            'id'       => 'ads_top_home',
            'type'     => 'switch',
            'title'    => __( 'Top Ad', 'maos' ),
            // 'subtitle' => __( 'Use this button to Show or Hide Ads on below Primary Nav.', 'maos' ),
            'default'  => 0,
            'on'       => 'On',
            'off'      => 'Off',
          ),
          array(
              'id'       => 'ads_top_home_show',
              'type'     => 'textarea',
            //   'title'    => __( 'Paste Your Ad Code Here', 'maos' ),
              'required' => array('ads_top_home', '=', 1),
            //   'subtitle' => __( 'Paste your Adsense, BSA or other ad code here to show Ads below Primary Nav', 'maos' ),
              'desc'     => __( 'Size Ads: 970x90, 728x90, 428x60 and Responsive Ads', 'maos' ),
              'type'     => 'ace_editor',
              'mode'     => 'html',
              // 'validate' => 'html',
              // 'default'  => 'No HTML is allowed in here.'
          ),
          array(
            'id'       => 'ads_bottom_home',
            'type'     => 'switch',
            'title'    => __( 'Bottom Ad', 'maos' ),
            // 'subtitle' => __( 'Use this button to Show or Hide Ads on after content.', 'maos' ),
            'default'  => 0,
            'on'       => 'On',
            'off'      => 'Off',
          ),
          array(
              'id'       => 'ads_bottom_home_show',
              'type'     => 'textarea',
              'required' => array('ads_bottom_home', '=', 1),
            //   'title'    => __( 'Paste Your Code in Here', 'maos' ),
            //   'subtitle' => __( 'Paste your Adsense, BSA or other ad code here to show Ads after content', 'maos' ),
              'desc'     => __( 'Size Ads: 970x90, 728x90, 428x60 and Responsive Ads', 'maos' ),
              'type'     => 'ace_editor',
              'mode'     => 'html',
              // 'validate' => 'html',
              // 'default'  => 'No HTML is allowed in here.'
          ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Category, Tag Archive & Date', 'maos' ),
        'id'    => 'ads-category-tag',
        // 'desc'  => __( 'Now, ad management is easy with our options panel. You can control everything from here, without using separate plugins.', 'maos' ),
        'subsection'       => true,
        'fields'     => array(
          array(
            'id'       => 'ads_top_cat',
            'type'     => 'switch',
            'title'    => __( 'Top Ad', 'maos' ),
            // 'subtitle' => __( 'Use this button to Show or Hide Ads on below Primary Nav.', 'maos' ),
            'default'  => 0,
            'on'       => 'On',
            'off'      => 'Off',
          ),
          array(
              'id'       => 'ads_top_cat_show',
              'type'     => 'textarea',
              'required' => array('ads_top_cat', '=', 1),
            //   'title'    => __( 'Paste Your Code in Here', 'maos' ),
            //   'subtitle' => __( 'Paste your Adsense, BSA or other ad code here to show Ads below Primary Nav', 'maos' ),
              'desc'     => __( 'Size Ads: 970x90, 728x90, 428x60 and Responsive Ads', 'maos' ),
              'type'     => 'ace_editor',
              'mode'     => 'html',
              // 'validate' => 'html',
              // 'default'  => 'No HTML is allowed in here.'
          ),
          array(
            'id'       => 'ads_bottom_cat',
            'type'     => 'switch',
            'title'    => __( 'Bottom Ad', 'maos' ),
            // 'subtitle' => __( 'Use this button to Show or Hide Ads on after content.', 'maos' ),
            'default'  => 0,
            'on'       => 'On',
            'off'      => 'Off',
          ),
          array(
              'id'       => 'ads_bottom_cat_show',
              'type'     => 'textarea',
            //   'title'    => __( 'Paste Your Code in Here', 'maos' ),
              'required' => array('ads_bottom_cat', '=', 1),
            //   'subtitle' => __( 'Paste your Adsense, BSA or other ad code here to show Ads after content', 'maos' ),
              'desc'     => __( 'Size Ads: 970x90, 728x90, 428x60 and Responsive Ads', 'maos' ),
              'type'     => 'ace_editor',
              'mode'     => 'html',
              // 'validate' => 'html',
              // 'default'  => 'No HTML is allowed in here.'
          ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Search Page', 'maos' ),
        'id'    => 'ads-search',
        // 'desc'  => __( 'Now, ad management is easy with our options panel. You can control everything from here, without using separate plugins.', 'maos' ),
        'subsection'       => true,
        'fields'     => array(
          array(
            'id'       => 'ads_top_search',
            'type'     => 'switch',
            'title'    => __( 'Top Ad', 'maos' ),
            // 'subtitle' => __( 'Use this button to Show or Hide Ads on below Primary Nav.', 'maos' ),
            'default'  => 0,
            'on'       => 'On',
            'off'      => 'Off',
          ),
          array(
              'id'       => 'ads_top_search_show',
              'type'     => 'textarea',
              'required' => array('ads_top_search', '=', 1),
            //   'title'    => __( 'Paste Your Code in Here', 'maos' ),
            //   'subtitle' => __( 'Paste your Adsense, BSA or other ad code here to show Ads below Primary Nav', 'maos' ),
              'desc'     => __( 'Size Ads: 970x90, 728x90, 428x60 and Responsive Ads', 'maos' ),
              'type'     => 'ace_editor',
              'mode'     => 'html',
              // 'validate' => 'html',
              // 'default'  => 'No HTML is allowed in here.'
          ),
          array(
            'id'       => 'ads_bottom_search',
            'type'     => 'switch',
            'title'    => __( 'Bottom Ad', 'maos' ),
            // 'subtitle' => __( 'Use this button to Show or Hide Ads on after content.', 'maos' ),
            'default'  => 0,
            'on'       => 'On',
            'off'      => 'Off',
          ),
          array(
              'id'       => 'ads_bottom_search_show',
              'type'     => 'textarea',
              'required' => array('ads_bottom_search', '=', 1),
            //   'title'    => __( 'Paste Your Code in Here', 'maos' ),
            //   'subtitle' => __( 'Paste your Adsense, BSA or other ad code here to show Ads after content', 'maos' ),
              'desc'     => __( 'Size Ads: 970x90, 728x90, 428x60 and Responsive Ads', 'maos' ),
              'type'     => 'ace_editor',
              'mode'     => 'html',
              // 'validate' => 'html',
              // 'default'  => 'No HTML is allowed in here.'
          ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Single Post', 'maos' ),
        'id'    => 'ads-single',
        // 'desc'  => __( 'Now, ad management is easy with our options panel. You can control everything from here, without using separate plugins.', 'maos' ),
        'subsection'  => true,
        'fields'      => array(
          array(
            'id'       => 'ads_top_single',
            'type'     => 'switch',
            'title'    => __( 'TOP / Before Post Title Ad', 'maos' ),
            // 'subtitle' => __( 'Use this button to Show or Hide Ads on below post title.', 'maos' ),
            'default'  => 0,
            'on'       => 'On',
            'off'      => 'Off',
          ),
          array(
            'id'       => 'ads_top_single_show',
            'type'     => 'textarea',
            'required' => array('ads_top_single', '=', 1),
            // 'title'    => __( 'Below Post Title', 'maos' ),
            // 'subtitle' => __( 'Paste your Adsense, BSA or other ad code here to show ads below your article title on single posts.', 'maos' ),
            'desc'     => __( 'Size Ads: 728x90, 428x60, 300x250, 336x280, 250x250, 200x200 and Responsive Ads', 'maos' ),
            'type'     => 'ace_editor',
            'mode'     => 'html',
          ),
          array(
            'id'       => 'ads_bottom_single',
            'type'     => 'switch',
            'title'    => __( 'BOTTOM / After Content Ad', 'maos' ),
            // 'subtitle' => __( 'Use this button to Show or Hide Ads on below thumbnail content.', 'maos' ),
            'default'  => 0,
            'on'       => 'On',
            'off'      => 'Off',
          ),
          array(
            'id'       => 'ads_bottom_single_show',
            'type'     => 'textarea',
            'required'  => array( 'ads_bottom_single', '=', 1 ),
            // 'title'    => __( 'Below Post Content', 'maos' ),
            // 'subtitle' => __( 'Paste your Adsense, BSA or other ad code here to show ads below your article title on single posts.', 'maos' ),
            'desc'     => __( 'Side Ads: 728x90, 428x60, 300x250, 336x280, 250x250, 200x200 and Responsive Ads', 'maos' ),
            'type'     => 'ace_editor',
            'mode'     => 'html',
          ),
        )
    ) );

    /**
     * Socail Media
     * -----------------------------------------------------------------------------
     */
    Redux::setSection( $opt_name, array(
        'title' => __( 'Social Media', 'maos' ),
        'id'    => 'social',
        // 'desc'  => __( 'Enable or disable social sharing buttons on single posts using these buttons.', 'maos' ),
        'icon'  => 'el el-share',
        'fields' => array(
          array(
            'id'       => 'social-post',
            'type'     => 'switch',
            'title'    => __( 'Social Media Buttons', 'maos' ),
            // 'subtitle' => __( 'Check this box to show social sharing buttons after an article|\'s content text.', 'maos' ),
            'on'       => 'Enable',
            'off'      => 'Disable',
            'default'  => 1,
          ),
          array(
            'id'       => 'facebook-button',
            'type'     => 'switch',
            'required' => array( 'social-post', '=', '1' ),
            'title'    => __( 'Facebook', 'maos' ),
            'subtitle' => __( '', 'maos' ),
            'default'  => true,
          ),
          array(
            'id'       => 'twitter-button',
            'type'     => 'switch',
            'required' => array( 'social-post', '=', '1' ),
            'title'    => __( 'Twitter', 'maos' ),
            'subtitle' => __( '', 'maos' ),
            'default'  => true,
          ),
          array(
            'id'       => 'google-button',
            'type'     => 'switch',
            'required' => array( 'social-post', '=', '1' ),
            'title'    => __( 'Google Plus', 'maos' ),
            'subtitle' => __( '', 'maos' ),
          'default'  => true,
        ),
        array(
            'id'       => 'pinterest-button',
            'type'     => 'switch',
            'required' => array( 'social-post', '=', '1' ),
            'title'    => __( 'Pinterest', 'maos' ),
            'subtitle' => __( '', 'maos' ),
            'default'  => true,
          ),
          array(
            'id'       => 'tumblr-button',
            'type'     => 'switch',
            'required' => array( 'social-post', '=', '1' ),
            'title'    => __( 'Tumblr', 'maos' ),
            'subtitle' => __( '', 'maos' ),
            'default'  => false,
          ),
          array(
            'id'       => 'linkedin-button',
            'type'     => 'switch',
            'required' => array( 'social-post', '=', '1' ),
            'title'    => __( 'Linkedin', 'maos' ),
            'subtitle' => __( '', 'maos' ),
            'default'  => false,
          ),
          array(
            'id'       => 'stumbleupon-button',
            'type'     => 'switch',
            'required' => array( 'social-post', '=', '1' ),
            'title'    => __( 'StumbleUpon', 'maos' ),
            'subtitle' => __( '', 'maos' ),
            'default'  => false,
          ),
          array(
            'id'       => 'reddit-button',
            'type'     => 'switch',
            'required' => array( 'social-post', '=', '1' ),
            'title'    => __( 'Reddit', 'maos' ),
            'subtitle' => __( '', 'maos' ),
            'default'  => false,
          ),
          array(
            'id'       => 'delicious-button',
            'type'     => 'switch',
            'required' => array( 'social-post', '=', '1' ),
            'title'    => __( 'Delicious', 'maos' ),
            'subtitle' => __( '', 'maos' ),
            'default'  => false,
          ),
          array(
            'id'       => 'digg-button',
            'type'     => 'switch',
            'required' => array( 'social-post', '=', '1' ),
            'title'    => __( 'Digg', 'maos' ),
            'subtitle' => __( '', 'maos' ),
            'default'  => false,
          ),
        )
    ) );

    /**
     * Other Optioin
     * -----------------------------------------------------------------------------
     */
    Redux::setSection( $opt_name, array(
      'title' => __( 'Other Settings', 'maos' ),
      'id'    => 'other-options',
    //   'desc'  => __( 'Other Setting Options', 'maos' ),
      'icon'  => 'el el-cog',
      'fields'     => array(
        array(
          'id'       => 'auto-featured-image',
          'type'     => 'switch',
          'title'    => __( 'Auto Featured Image', 'maos' ),
        //   'subtitle' => __( 'Check this box to enable or disable auto featured image post when post have/upload images.', 'maos' ),
          'on'       => 'Enable',
          'off'      => 'Disable',
          'default'  => 1,
        ),
        array(
           'id'       => 'show-sidebar-mobile',
           'type'     => 'switch',
           'title'    => __( 'Show Sidebar on Mobile View', 'maos' ),
        //    'subtitle' => __( '<b>Enable or Disable</b> to show sidebar on Mobile View.', 'maos' ),
           'default'  => false,
           'on'       => 'Show',
           'off'      => 'Hide'
        ),
        array(
           'id'       => 'back-top',
           'type'     => 'switch',
           'title'    => __( 'Back To Top Button', 'maos' ),
        //    'subtitle' => __( '<b>Enable or Disable</b> Back To Top button.', 'maos' ),
           'default'  => true,
        ),
        array(
           'id'       => 'shadow-page',
           'type'     => 'switch',
           'title'    => __( 'Site Box Shadow', 'maos' ),
        //    'subtitle' => __( 'Use this button to activate box-shadow for your blog.', 'maos' ),
           'on'       => 'On',
           'off'      => 'Off',
           'default'  => 1,
        ),
      )

    ) );
