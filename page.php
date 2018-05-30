<?php get_header(); ?>
<div class="col-md-8">
    <div class="row">
        <div class="col-12">
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
        </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="single mb-4 col-12">
            <h1 class="mb-3 h4 text-capitalize"><?php the_title(); ?></a></h1>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="mb-3"><?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?></div>
            <?php endif; ?>
            <?php the_content(); ?>
        </article>
    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
