<?php
/*
  Template Name: Définition de syndic
  Template Post Type: post, page, product
*/
get_header(); ?>
    
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
            
            <!-- <section id="home-intro" class="has-section-divider-bottom bg-transparent bg-opacity-10%" style="background: var(--color-white) url('<?php echo get_template_directory_uri();?>/assets/img/concrete_seamless.png') 0 0 repeat;"> -->
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
            <section id="def-syndic-hero" class="width-100% padding-y-xxl bg-cover" style="background: transparent url('<?php echo $url;?>') bottom 0 center;background-repeat:no-repeat;background-size:cover;">
                <div class="container max-width-adaptive-lg gabarit-titre">
                    <h1 class="page-title color-white text-center line-height-1 padding-x-md padding-y-sm">Qu'est ce qu'un syndic<br class="display@md"> de copropriété</h1>
                </div>
            </section>           
            <section id="syndic-intro">
            <div class="container max-width-lg padding-top-xl">
                <div class="text-component text-bold padding-top-lg">
                    <div class=" reveal-fx reveal-fx--translate-up">
                        <?php the_field( 'intro' ); ?>
                    </div>
                </div>
                <div class="grid padding-y-xl">
                    <?php $url = wp_get_attachment_url(102); ?>
                        <aside class="col-6@md order-2@md width-100% bg-cover padding-y-xxl reveal-fx reveal-fx--translate-left"  data-reveal-fx-delay="200" style="background: transparent url('<?php echo $url;?>') bottom 0 left 0 no-repeat;background-size:cover;"></aside>

                        <article class="col-6@md padding-right-lg">
                            <div class="text-component padding-top-lg">
                                <h3 class="section-subtitle  padding-bottom-sm reveal-fx reveal-fx--translate-right"  data-reveal-fx-delay="200">Comment est désigné le syndic de copropriété ?</h3>
                                <div class="reveal-fx reveal-fx--translate-right"  data-reveal-fx-delay="400">
                                    <?php the_field( 'designation-syndic' ); ?>
                                </div>
                            </div>
                            <div class="text-component text-center padding-top-lg reveal-fx reveal-fx--translate-up">
                                <a href="<?php echo get_permalink(87);?>" class="btn btn--primary margin-top-sm">Changer de syndic</a>
                            </div>
                        </article>                        
                    </div>
                <div>
            </div>
            </section>
            <section id="changement-de-syndic" data-theme="yellow">
                <article class="container max-width-lg padding-y-xl">
                        <div class="text-component padding-top-xl">
                            <h1 class="section-title text-center reveal-fx reveal-fx--translate-down">Les différents types de syndic</h1>
                            
                            <?php if ( have_rows( 'types_syndic' ) ) : ?>
	                            <?php while ( have_rows( 'types_syndic' ) ) : the_row(); ?>
                                <h2 class="section-subtitle padding-top-lg"><?php the_sub_field( 'titre_type' ); ?></h2>
                                <p><?php the_sub_field( 'description_type' ); ?></p>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <?php // no rows found ?>
                            <?php endif; ?>
                            <div class="text-component text-center padding-y-lg reveal-fx reveal-fx--translate-up">
                                <a href="<?php echo get_permalink(23);?>" class="btn btn--primary margin-top-sm">Découvrez votre syndic pro</a>
                            </div>
                            
                </article><!-- end section-container -->
            </section>
            <section id="raisons-du-changement-de-syndic" data-theme="default">
                <article class="container max-width-lg padding-y-xl">
                    <div class="text-component padding-y-xl">
                        <h1 class="section-title text-center reveal-fx reveal-fx--translate-up">Les rôles d’un syndic de copropriété</h1>
                    </div>
                        <?php if ( have_rows( 'roles_du_syndic' ) ) : ?>
                            <?php while ( have_rows( 'roles_du_syndic' ) ) : the_row(); ?>
                            <?php the_sub_field( 'intro' ); ?>
                            <?php if ( have_rows( 'missions' ) ) : ?>
                            <div class="grid gap-lg padding-top-xl">
                                <?php while ( have_rows( 'missions' ) ) : the_row(); ?>
                                <div class="mission col-4@md padding-lg">
                                    <?php if ( get_sub_field( 'picto' ) ) : ?>
                                    <img src="<?php the_sub_field( 'picto' ); ?>" />
                                    <?php endif ?>
                                    <h3 class="text-center"><?php the_sub_field( 'titre_mission' ); ?></h3>
                                </div>                             
                            <?php endwhile; ?>
                            </div>
                        <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>
                        <?php if ( have_rows( 'questions_reponses' ) ) :
                            $nb_elements = is_array(get_sub_field('questions_reponses')) ? count(get_sub_field('questions_reponses')) : 0 ;
                            $classNormal = "padding-y-lg";
                            $lastElement = "padding-top-lg";                            
                            $comptage = 0;?>
                            <?php while ( have_rows( 'questions_reponses' ) ) : the_row(); ?>
                                <?php $class = ($comptage <= $nb_elements) ? $classNormal : $lastElement;?>
                            <div class="text-component <?php echo $class;?>">
                                <h3 class="section-subtitle color-primary text-center"><?php the_sub_field( 'question' ); ?></h3>
                                <p><?php the_sub_field( 'reponse' ); ?></p>
                            </div>
                            <?php $comptage++;?>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>   
                    </div>
                    <div class="text-component text-center padding-bottom-xl">
                            <a href="<?php echo get_permalink(25);?>" class="btn btn--primary margin-top-sm">Découvrir l'offre</a>
                        </div>
                </article>
            
            </section>
                

            <section id="cta-projet" class="grid padding-y-xxl">
                <div class="bloc-cta col-4@md offset-4@md">
                    <div class="text-component text-center padding-xl">
                        <h2>Vous avez un projet ?</h2>
                        <a href="<?php echo get_permalink(31);?>" class="btn btn--primary">Discutons-en</a>
                    </div>
                </div> 
            </section>
            
            <?php the_content(); ?>
            
        <?php endwhile; endif; ?>
    

<?php get_footer(); ?>