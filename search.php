<?php get_header(); ?>
<div class="col-md-12">
    <div class="row">
        <div class="col-12">
            <header class="text-center">
                <h1 class="h4"><span class="text-secondary">Search results for:</span> <?php echo get_search_query(); ?></h1>
            </header>
            <?php get_template_part( 'searchform' ); ?>
        </div>

        <?php echo ads_top(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="post mb-3 clearfix col-md-6">
            <h2 class="mb-3 h5 text-capitalize">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>
            <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid float-left mr-3')); ?>
                </a>
            <?php else: ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <img width="100" height="80" src="<?php echo get_bloginfo( 'stylesheet_directory' ).'/assets/img/no-img.png';?>" class="img-fluid float-left mr-3 wp-post-image" alt="">
                </a>
            <?php endif; ?>
            <?php echo excerpt(35); ?>
        </article>
    <?php endwhile; else : ?>
        <div class="single col-12 text-center">
            <div class="alert alert-danger" role="alert"><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></div>
        </div>
        <div class="col-12 mb-4">
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
        </div>
    <?php endif; ?>

        <?php echo ads_bottom(); ?>

        <div class="col-12">
            <?php
                if ( function_exists('pagination') )
                    pagination();
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
