<?php
/*
  Template Name: Syndic
  Template Post Type: post, page, product
*/
get_header(); ?>
    
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
            <section id="syndic-hero" class="width-100% padding-y-xxl bg-cover" style="background: transparent url('<?php echo $url;?>')">
                <div class="container max-width-adaptive-lg gabarit-titre">
                    <h1 class="page-title color-white text-center line-height-1 padding-x-md padding-y-sm" >Poirier Syndic : <br class="display@md">plus qu’un syndic, un facilitateur</h1>
                </div>
            </section>
            <!-- <section id="home-intro" class="has-section-divider-bottom bg-transparent bg-opacity-10%" style="background: var(--color-white) url('<?php echo get_template_directory_uri();?>/assets/img/concrete_seamless.png') 0 0 repeat;"> -->
            <section id="syndic-intro">
            <div class="container max-width-md padding-top-xl text-md text-bold">
                <div class=" reveal-fx reveal-fx--translate-up">
                    <?php the_field( 'paragraphe_intro' ); ?>
                </div>
            </div>
            </section>
            <!-- <h1 class="testTitle"><?php the_title(); ?> - (front-page)</h1> -->
            <?php if ( have_rows( 'offres' ) ) : //si il y a des offres ?>
            <section data-theme="default">
                <div class="container max-width-adaptive-md padding-top-lg">
                <?php // Loop settings 
                    $classFigImpaire = "col-5@md flex justify-center reveal-fx reveal-fx--translate-right";
                    $classTextTranslateImpair ="col-7@md text-component reveal-fx reveal-fx--translate-right";                    
                    $classFigPaire = "col-5@md flex justify-center order-2@md  reveal-fx reveal-fx--translate-left";
                    $classTextTranslatePair ="col-7@md text-component reveal-fx reveal-fx--translate-left";
                    $i=0;
                    $scrollValue=0;
                    while ( have_rows( 'offres' ) ) : the_row(); // boucler sur les offres                        
                        $classFigOffre = ($i % 2) ? $classFigImpaire : $classFigPaire;
                        $classTxtTrans = ($i % 2) ? $classTextTranslatePair : $classTextTranslateImpair;
                        $i++;
                    ?>
                   
                    <div class="offre grid gap-xl align-middle max-width-adaptive-md padding-y-md">
                    <!-- <div class="offre grid gap-xl align-middle max-width-adaptive-lg padding-y-xl scroll-fx js-scroll-fx" data-scroll-fx-1="translateY, 100px, -<?php echo $scrollValue;?>px, 0%, 50%"  data-scroll-fx-2="opacity, 0, 1, 0%, 50%"> -->
                        <figure class="<?php echo $classFigOffre;?>">
                            <?php if ( get_sub_field( 'illustration_argument' ) ) : // image présente
                                $the_text = get_sub_field( 'titre_argument' );// En vue d'appliquer wp_strip_all_tags pour supprimer les balises du champs WISIWIG d'ACF de la balise alt de l'image
                                ?>
                                <img src="<?php the_sub_field( 'illustration_argument' );?>" alt="<?php echo wp_strip_all_tags($the_text)?>" />                               
                            <?php endif ?>
                        </figure>
                            <div class="<?php echo $classTxtTrans;?>">
                                <h3 class="section-subtitle padding-bottom-sm">
                                    <?php the_sub_field( 'titre_argument',false,false ); // affichage du titre en désactivant les balises <p> incluses par ACF ?>
                                </h3>
                                <?php the_sub_field( 'description_argument' ); // affichage du paragraphe?>
                            </div>
                        </div><!-- offre  -->
                        <?php endwhile; ?>
                <?php else : ?>
                <?php // rien à afficher ?>
            <?php endif; ?>
            </div><!-- container -->
            </section>
            <section id="cta-projet" class="grid padding-y-xxl">
                <div class="bloc-cta col-4@md offset-4@md">
                    <div class="text-component text-center padding-y-xl">
                        <h2>Vous avez un projet ?</h2>
                        <a href="<?php bloginfo( 'url' ); ?>/contact" class="btn btn--primary margin-top-sm">Parlons-en</a>
                    </div>
                </div>

                </section>            
            <?php the_content(); ?>
            
        <?php endwhile; endif; ?>
    

<?php get_footer(); ?>