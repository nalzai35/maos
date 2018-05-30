<?php get_header(); ?>
<div class="col-md-8">
    <div class="row">
        <div class="col-12">
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
        </div>

        <?php echo ads_top(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="post mb-3 clearfix col-12">
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
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>
