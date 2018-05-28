<?php get_header(); ?>
<div class="col-md-8">
    <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="post mb-4 clearfix col-12">
            <h2 class="mb-3 text-capitalize">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>
            <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid float-left mr-3')); ?>
                </a>
            <?php endif; ?>
            <?php the_excerpt(); ?>
        </article>
    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

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
