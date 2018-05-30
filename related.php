<?php
// Default arguments
$args = array(
    'posts_per_page' => 5, // How many items to display
    'post__not_in'   => array( get_the_ID() ), // Exclude current post
    'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
);

// Check for current post category and add tax_query to the query arguments
$cats = wp_get_post_terms( get_the_ID(), 'category' );
$cats_ids = array();
foreach( $cats as $wpex_related_cat ) {
    $cats_ids[] = $wpex_related_cat->term_id;
}
if ( ! empty( $cats_ids ) ) {
    $args['category__in'] = $cats_ids;
}

// Query posts
$wpex_query = new wp_query( $args );

echo '<div class="col-12 mb-3 text-center"><h3 class="h5 rel">Related Post</h3></div>';

echo '<div class="col-12"><div class="row">';
// Loop through posts
foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>

    <article class="post mb-3 clearfix col-12">
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid float-left mr-3')); ?>
            </a>
        <?php else: ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <img width="100" height="80" src="<?php echo get_bloginfo( 'stylesheet_directory' ).'/assets/img/no-img.png';?>" class="img-fluid float-left mr-3 wp-post-image" alt="">
            </a>
        <?php endif; ?>
        <h4 class="mb-3 h5 text-capitalize">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h4>
        <?php echo excerpt(20); ?>
    </article>

<?php
// End loop
endforeach;
echo '</div></div>';
// Reset post data
wp_reset_postdata(); ?>
