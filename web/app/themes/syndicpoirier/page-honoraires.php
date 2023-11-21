<?php
/*
  Template Name: Honoraires
  Template Post Type: post, page, product
*/
get_header(); ?>
    
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
            <section id="syndic-hero" class="width-100% padding-y-xxl bg-cover" style="background: transparent url('<?php echo $url;?>') top 50% left 33% no-repeat;">
                <div class="container max-width-adaptive-lg gabarit-titre">
                        <h1 class="page-title color-white text-center line-height-1 padding-x-md padding-y-sm" >Les honoraires<br class="display@md"> du syndic en <?php echo date('Y'); ?></h1>
                </div> 
            </section>
            <section id="syndic-intro">
            <div class="container max-width-md padding-y-lg text-md text-bold">
                <div class="reveal-fx reveal-fx--translate-up">
                    <?php the_field( 'paragraphe_intro' ); ?>
                <div>
            </div>
            </section>
            <!-- <h1 class="testTitle"><?php the_title(); ?> - (front-page)</h1> -->
            <?php if ( have_rows( 'tarifs' ) ) : //si il y a des tarifs ?>
            <section id="tarifs" data-theme="default">
                <div class="liste-tarifs container max-width-adaptive-md">
                <?php $i = 0;?>
                <?php while ( have_rows( 'tarifs' ) ) : the_row(); // boucler sur les tarifs?>
                    <?php $i++; ?>		            
                    <div class="col text-component padding-bottom-md reveal-fx reveal-fx--translate-up">
                        <h3 class="section-subtitle flex items-center padding-bottom-sm ">
                            <svg class="icon margin-right-xs" width="24" height="22.928" viewBox="0 0 24 22.928">
                                <g id="Groupe_412" data-name="Groupe 412" transform="translate(-3621.712 553.554)">
                                    <path id="Tracé_1145" data-name="Tracé 1145" d="M3627.766-553.554l6.054,6.055v16.874h-12.109V-547.5Z" transform="translate(0)" fill="#728bc6"/>
                                    <rect id="Rectangle_251" data-name="Rectangle 251" width="11.891" height="16.874" transform="translate(3633.821 -547.499)" fill="#c9d1ec"/>
                                    <path id="Tracé_1146" data-name="Tracé 1146" d="M3639.437-553.554h-11.891l6.055,6.055h11.891Z" transform="translate(0.221)" fill="#0e529f"/>
                                </g>        
                            </svg>                           
                            <?php the_sub_field( 'titre' ); // affichage du titre?>
                        </h3>
                        <p><?php the_sub_field( 'description' ); // affichage du paragraphe?></p>
                    </div><!-- tarif  -->
                    <?php if( $i == 3 ): // Au 3eme bloc on inclue un CTA vers la FAQ ?>
                        </div>
                    </section>
                    <section id="cta-faq" class="grid padding-y-xxl margin-y-lg">
                        <div class="bloc-cta col-8 offset-2 col-4@md offset-4@md">
                            <div class="text-component text-center padding-y-lg">
                            <h2>Posez-nous vos questions </h2>
                            <a href="<?php bloginfo( 'url' ); ?>/faq" class="btn padding-bottom-lgn btn--primary margin-top-sm">Je consulte la FAQ</a>
                        </div>
                        </div>  
                    </section>

                    <section id="tarifs-suite" data-theme="default">
                    <div class="liste-tarifs container max-width-adaptive-md padding-top-xl">
                    <?php endif ?>
                <?php endwhile; ?>
            <?php else : ?>
            <?php // rien à afficher ?>
            <?php endif; ?>
            <div id="bon-a-savoir" class="text-component padding-lg" data-theme="yellow">
                <h3 class="section-title">Bon à savoir</h3>
                <?php the_field( 'bon_a_savoir' ); ?>
            </div>
            <div class="text-component text-left padding-y-lg">
                <p>Dans le cas d’une copropriété qui ne serait constituée que de parkings, le parking est bien considéré comme un lot principal.</p>            
            </div>
            <div class="text-component text-center padding-bottom-xl">
                    <a href="<?php bloginfo( 'url' ); ?>/contact" class="btn btn--primary margin-top-sm">Je prends contact</a>
                </div> 
            </section>
           
            <!-- <?php the_content(); ?> -->
            
        <?php endwhile; endif; ?>
    

<?php get_footer(); ?>