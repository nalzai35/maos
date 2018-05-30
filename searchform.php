<?php
/**
 * Search Form Custom
 *
 * @link https://codex.wordpress.org/Function_Reference/get_search_form
 *
 **/

?>

<form method="get" action="<?php echo home_url( '/' ); ?>" >
    <div class="input-group mb-3">
        <input type="search" class="form-control" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr( 'Search for:', 'label' ) ?>" placeholder="<?php echo esc_attr( 'Search...', 'placeholder' ) ?>" aria-label="<?php echo esc_attr( 'Search...', 'placeholder' ) ?>" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button type="submit" class="input-group-text" id="basic-addon2"><?php echo esc_attr( 'Search', 'submit button' ) ?></button>
        </div>
    </div>
</form>
