<?php

global $razthemes;


function ads_top() {
    global $razthemes;

    if ( is_home() && is_front_page() && $razthemes['ads_top_home'] == 1 ) {
        echo print_ads('ads_top_home_show');
    } elseif ( is_single() && !is_attachment() && $razthemes['ads_top_single'] == 1 ) {
        echo print_ads('ads_top_single_show');
    } elseif ( is_archive() && $razthemes['ads_top_cat'] == 1 ) {
        echo print_ads('ads_top_cat_show');
    } elseif ( is_search() && $razthemes['ads_top_search'] == 1 ) {
        echo print_ads('ads_top_search_show');
    }

}

function ads_bottom() {
    global $razthemes;

    if ( is_home() && is_front_page() && $razthemes['ads_bottom_home'] == 1 ) {
        echo print_ads('ads_bottom_home_show');
    } elseif ( is_single() && !is_attachment() && $razthemes['ads_bottom_single'] == 1 ) {
        echo print_ads('ads_bottom_single_show');
    } elseif ( is_archive() && $razthemes['ads_bottom_cat'] == 1 ) {
        echo print_ads('ads_bottom_cat_show');
    } elseif ( is_search() && $razthemes['ads_bottom_search'] == 1 ) {
        echo print_ads('ads_bottom_search_show');
    }

}

function print_ads($area) {
    global $razthemes;

    echo '<div class="col-12 text-center py-3">';
    echo $razthemes[$area];
    echo '</div>';
}
