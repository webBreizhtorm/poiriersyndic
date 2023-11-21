<?php get_header(); ?>
<?php 
    if ( is_category() ) {
        $title = "Catégorie : " . single_tag_title( '', false );
    }
    elseif ( is_tag() ) {
        $title = "Étiquette : " . single_tag_title( '', false );
    }
    elseif ( is_search() ) {
        $title = "Vous avez recherché : " . get_search_query();
    }
    else {
        $title = 'Le Blog';
    }
?>
<h1 class="site__heading"><?php echo $title; ?></h1>

<div class="site__blog">
    <main class="site__content">
	    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
            <article class="post">
                <h2><?php the_title(); ?></h2>
        
                <?php if ( has_post_thumbnail() ): ?>
                    <div class="post__thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                
                <p class="post__meta">
                    Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                    par <?php the_author(); ?> • <?php comments_number(); ?>
                </p>
                
                <?php the_excerpt(); ?>
                
                <p>
                    <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
                </p>
            </article>

	    <?php endwhile; endif; ?>
        <?php // posts_nav_link(); // Option 1 Pagination simple après la boucle ?>
        <?php // the_posts_pagination(); // Option 2 pour une pagination numérique?>
        <?php // wp_pagenavi(); // Option 3 utiliser le plugin WP-PageNavi ?>

        <div class="site__navigation">
            <div class="site__navigation__prev">
                <?php previous_posts_link( 'Page Précédente' ); ?>
            </div>
            <div class="site__navigation__next">
                <?php next_posts_link( 'Page Suivante' ); ?> 
            </div>
        </div>


    </main>
    <aside class="site__sidebar">
        	<ul>
            	<?php dynamic_sidebar( 'blog-sidebar' ); ?>
            </ul>
        </aside>
	</div>

<?php get_footer(); ?>