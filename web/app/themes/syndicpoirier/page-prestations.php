<?php
/*
  Template Name: Prestations
  Template Post Type: post, page, product
*/
get_header(); ?>
    
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
            
            <!-- <section id="home-intro" class="has-section-divider-bottom bg-transparent bg-opacity-10%" style="background: var(--color-white) url('<?php echo get_template_directory_uri();?>/assets/img/concrete_seamless.png') 0 0 repeat;"> -->
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
            <section id="presta-hero" class="width-100% padding-y-xxl bg-cover" style="background: transparent url('<?php echo $url;?>');">
                <div class="container max-width-lg gabarit-titre">
                    <h1 class="page-title color-white text-center line-height-1 padding-x-md padding-y-sm" >Les prestations<br class="display@md"> Poirier Syndic</h1>
                </div>
            </section>
            <section id="presta-intro"class="has-section-divider-bottom">
                <div class="container max-width-lg padding-y-lg">
                    <div class="text-component text-bold text-md line-height-1 padding-y-md">
                        <div class="reveal-fx reveal-fx--translate-up">
                            <p><?php the_field( 'intro' ); ?></p>
                        </div>
                    </div>
                    <div class="grid items-start">
                        <aside class="col-6@md order-2@md width-100% bg-cover reveal-fx reveal-fx--translate-left"  data-reveal-fx-delay="200" style="background: transparent url('<?php echo wp_get_attachment_url(122); ?>') bottom  center no-repeat;min-height:420px;"></aside>
                        <article class="col-6@md padding-top-xl padding-top-0@md padding-right-lg@md ">
                            <div class="text-component">
                                <h3 class="section-subtitle reveal-fx reveal-fx--translate-right padding-bottom-sm"  data-reveal-fx-delay="200">Des prestations et un état d’esprit <br class="display@md">Poirier Syndic</h3>
                                <div class="reveal-fx reveal-fx--translate-right  text-justify"  data-reveal-fx-delay="400">
                                    <?php the_field( 'prestations_esprit' ); ?>
                                </div>
                            </div>
                        </article>                        
                    </div>
                    <aside>
                        <p class="text-md text-bold padding-top-md"><span class="inline-block padding-xxxxs" data-theme="yellow">IMPORTANT :</span> nous avons fait le choix de faire développer notre plate-forme d'échanges « appli Poirier Syndic », un outil qui change la vie des copropriétaires et des occupants, pusqu'il rassemble en un seul support les échanges entre voisins, avec le syndic et avec les prestataires. Un vrai gain d'efficacité pour le bien de votre immeuble ! Et une transparence à 100% des actions du syndic et des prestataires.</p>
                    </aside>
                    <div class="container max-width-lg">
                        <div class="grid gap-x-xl padding-y-lg">
                       
                            <div class="col-6@md grid">
                                <div class="container grid gap-md">
                                    <figure class="col-2  reveal-fx reveal-fx--translate-right">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/chouettecopro--icon_signalez.jpg" alt="">
                                    </figure>
                                    <div class="text-component col-10 text-left reveal-fx reveal-fx--translate-left">
                                        <h3>Signalez</h3>
                                        <p>De manière simple tout incident technique</p>
                                    </div>
                                    <figure class="col-2  reveal-fx reveal-fx--translate-right" data-reveal-fx-delay="100">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/chouettecopro--icon_visualisez.jpg" alt="">
                                    </figure>
                                    <div class="text-component col-10  reveal-fx reveal-fx--translate-left" data-reveal-fx-delay="200">
                                        <h3>Visualisez</h3>
                                        <p>Les signalements en cours et résolus</p>
                                    </div>
                                    <figure class="col-2  reveal-fx reveal-fx--translate-right" data-reveal-fx-delay="300">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/chouettecopro--icon_consultez.jpg" alt="">
                                    </figure>
                                    <div class="text-component col-10  reveal-fx reveal-fx--translate-left" data-reveal-fx-delay="400">
                                        <h3>Consultez</h3>
                                        <p>Les infos transmises par votre syndic ou Conseil Syndical</p>
                                    </div>                                
                                </div>                            
                            </div>
                            <div class="padding-y-md col-6@md reveal-fx reveal-fx--clip-y">
                                <img  src="<?php echo get_template_directory_uri();?>/assets/img/image001.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="container max-width-lg">
                        <h1 class="text-uppercase text-center padding-bottom-xs reveal-fx--is-visible">Découvrez notre plate-forme en vidéo</h1>
                        <div class="yt-container">
                            <iframe class="padding-bottom-lg@md" width="560" height="315" src="https://www.youtube.com/embed/igNdgiYfJ6Y?si=DgbE6LNji4NybUck" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
            <img class="section-divider" src="<?php echo get_template_directory_uri();?>/assets/img/presta-divider-bottom.svg" alt="séparateur de section"/> 

            </section>
            <section id="prestations-syndic" data-theme="yellow">
                <article class="container max-width-lg padding-y-xl">
                    <div class="grid gap-xl justify-start padding-bottom-xl">                        
                        <?php if ( have_rows( 'prestations' ) ) : ?>
                            <?php $i = 0;?>
                            <?php while ( have_rows( 'prestations' ) ) : the_row(); ?>
                            <?php 
                                $colBegin = "col-4@md";
                                $colEnd ="col-4@md";
                                $colClass = ($i < 3) ? $colBegin : $colEnd;
                                $i++ ;
                            ?>
                            <div class="<?php echo $colClass;?> reveal-fx reveal-fx--translate-up">                                
                                <h3 class="text-center text-uppercase line-height-lg"><?php the_sub_field( 'titre_prestation' ); ?></h3>
                                <div class="text-component text-justify"><?php the_sub_field( 'description' ); ?></div>
                            </div>
                                <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>
                        </div>
                        <div class="text-component text-center padding-y-lg">
                        <a href="<?php echo get_permalink(31);?>" class="btn btn--primary margin-top-sm">Obtenir un devis</a>
                    </div>
                    </div>

                </article><!-- end section-container -->
            </section>

                


            
            <?php the_content(); ?>
            
        <?php endwhile; endif; ?>
    

<?php get_footer(); ?>