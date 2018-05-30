<?php get_header(); ?>
<div class="col-md-8">
    <div class="row">
        <div class="col-12">
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
        </div>
        <?php echo ads_top(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="single mb-4 col-12">
            <h1 class="mb-3 h4 text-capitalize"><?php the_title(); ?></a></h1>

            <?php the_content(); ?>

            <div class="col-12 text-center py-3">
                <img src="<?php echo get_template_directory_uri().'/assets/img/336.png'; ?>" alt="">
            </div>

        </article>
    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

        <div class="col-12 mb-5">
            <div class="d-inline-block">
                <span class="mr-3"><strong>Share:</strong></span>
                <a href="https://www.facebook.com/sharer.php?u=<?php echo urlencode_deep( get_permalink() );?>" class="btn btn-fb btn-sm text-white">Facebook</a>
                <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode_deep( get_the_title() );?>&amp;url=<?php echo urlencode_deep( get_permalink() );?>&amp" class="btn btn-tw btn-sm text-white">Twitter</a>
                <a href="https://plus.google.com/share?url=<?php echo get_permalink();?>" class="btn btn-danger btn-sm text-white">Google+</a>
            </div>
        </div>

        <?php get_template_part( 'related' ); ?>

        <div class="col-12">
            <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>
        </div>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
