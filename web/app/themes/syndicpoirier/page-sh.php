<?php
/*
  Template Name: Shadow
  Template Post Type: page
*/
get_header(); ?>
    
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <section id="syndic-hero" class="width-100% padding-y-xxl bg-cover" style="background: transparent url('<?php echo get_the_post_thumbnail_url(); ?>')">
        <div class="container max-width-adaptive-lg gabarit-titre">
            <h1 class="page-title color-white text-center line-height-1 padding-x-md padding-y-sm" ><?php the_title(); ?></h1>
        </div>
    </section>

    <div class="shadow-page padding-y-xxl">

    <section>
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
        <?php the_content(); ?>
        </div>
      </div>
    </section>

    </div>
    <!-- End of shadow content -->
            
  <?php endwhile; endif; ?>
        
<?php get_footer(); ?>