<?php get_header(); ?>

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        
        <!-- <h1><?php the_title(); ?> - (page)</h1> -->
        <div class="container max-width-adaptive-lg padding-y-xxl">

        <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>