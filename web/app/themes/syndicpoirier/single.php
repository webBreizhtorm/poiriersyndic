<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="post">
        <?php if ( has_post_thumbnail() ): ?>
            <div class="post__thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>

      <h1><?php the_title(); ?></h1>

      <div class="post__meta">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
        <p>
          Publié le <?php the_date(); ?>
          par <?php the_author(); ?>
          Dans la catégorie <?php the_category(); ?>
          Avec les étiquettes <?php the_tags(); ?>
        </p>
        <p> 
        Temps de lecture : 
        <?php echo get_post_meta( $post->ID, 'reading_time', true ); ?> minutes
        </p>
      </div>

      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </article>

  <?php endwhile; endif; ?>

    <div class="site__navigation">
        <div class="site__navigation__prev">
            <?php previous_post_link( 'Article Précédent<br>%link' ); ?>
        </div>
        <div class="site__navigation__next">
            <?php next_post_link( 'Article Suivant<br>%link' ); ?> 
        </div>
    </div>
<?php get_footer(); ?>