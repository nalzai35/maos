<?php get_header(); ?>
<div class="col-12">
    <div class="row">
        <article class="404 mb-4 col-12">
            <h1 class="mb-3 h2 text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'maos' ); ?></h1>

            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'maos' ); ?></p>

            <?php get_template_part( 'searchform' ); ?>

            <div class="my-3">
                <?php
                    $args = array(
                        'before_widget' => '<aside class="widget mb-4">',
                        'after_widget'  => '</aside>',
                        'before_title'  => '<h3 class="widget-title text-capitalize">',
                        'after_title'   => '</h3>',
                    );
                 ?>
                <?php the_widget( 'WP_Widget_Recent_Posts', array(), $args ); ?>
                <?php the_widget( 'WP_Widget_Archives', array(), $args ); ?>
                <?php the_widget( 'WP_Widget_Tag_Cloud', array(), $args ); ?>
            </div>

        </article>
    </div>
</div>
<?php get_footer(); ?>
