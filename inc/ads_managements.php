<?php

global $razthemes;


function ads_top() {
    global $razthemes;

    if ( is_home() && is_front_page() ) {
        if ($razthemes['ads_top_home'] == 1) :
            echo print_ads('ads_top_home_show');
        elseif ($razthemes['ads_top_cat'] == 1) :
            echo print_ads('ads_top_cat_show');
        elseif ($razthemes['ads_top_search'] == 1) :
            echo print_ads('ads_top_search_show');
        endif;
    }
    if ( is_single() ) {
        if ($razthemes['ads_top_single'] == 1) :
            echo print_ads('ads_top_single_show');
        endif;
    }
}

function print_ads($area) {
    global $razthemes;

    echo '<div class="col-12 text-center py-3">';
    echo $razthemes[$area];
    echo '</div>';
}
