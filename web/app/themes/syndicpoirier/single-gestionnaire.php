<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="post">
        <?php if ( has_post_thumbnail() ): ?>
            <div class="post__thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>

        <div class="container max-width-adaptive-lg">
            <div class="text-component text-center padding-top-lg">
            <h1 class="page-title"><?php the_title(); ?></h1>
          </div>
          <div class="grid padding-y-xl@md">
            <div class="col-12@md">
              <h2>Adresses :</h2>
              <?php the_content(); ?>
              <br/>
              <?php if ( get_field( 'contact' ) ) :?>
                <h2>Coordonnées :</h2>
                <?php the_field( 'contact' );?>                                    
              <?php endif ?>
            </div>
          </div>
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