<?php
/*
  Template Name: Pourquoi changer de syndic
  Template Post Type: post, page, product
*/
get_header(); ?>
    
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
            
            <!-- <section id="home-intro" class="has-section-divider-bottom bg-transparent bg-opacity-10%" style="background: var(--color-white) url('<?php echo get_template_directory_uri();?>/assets/img/concrete_seamless.png') 0 0 repeat;"> -->
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
            <section id="changer-syndic-hero" class="width-100% padding-y-xxl bg-cover" style="background: transparent url('<?php echo $url;?>');">
                <div class="container max-width-lg gabarit-titre">
                        <h1 class="page-title color-white text-center line-height-1 padding-x-md padding-y-sm" >Pourquoi changer de Syndic</h1>
                </div>
            </section>

            <section id="presta-intro">
                <div class="container max-width-lg padding-y-lg">

                    <div class="grid items-start max-width-lg">
                        <aside class="padding-top-lg col-6@md order-2 width-100% bg-cover reveal-fx reveal-fx--translate-left"  data-reveal-fx-delay="200">
                            <img src="<?php echo wp_get_attachment_url(349); ?>" alt="" class="object-cover">    
                    </aside>
                        <article class="col-6@md padding-top-xl padding-top-0@md padding-right-lg@md ">
                            <div class="text-component">
                                <h3 class="section-subtitle reveal-fx reveal-fx--translate-right padding-bottom-sm"  data-reveal-fx-delay="200">Pour vivre la coproximité</h3>
                                <div class="reveal-fx reveal-fx--translate-right  text-justify"  data-reveal-fx-delay="400">
                                    <?php the_field( 'definition_coproximite' ); ?>
                                </div>
                            </div>                            
                        </article>                                               
                    </div>
                    <aside>
                        <div class="text-component text-center padding-y-lg">
                            <a href="<?php echo get_permalink(31);?>" class="btn btn--primary margin-top-sm">Notre approche</a>
                        </div>                    
                    </aside>
                    
                <div>
            </section>

            <?php if( have_rows( 'economies' ) ): ?>
                <section class="economies padding-y-lg color-bg--lighter" data-theme="lightblue">
                <?php while ( have_rows( 'economies' ) ) : the_row(); ?>

                <div class="container max-width-lg">
                    <div class="economies__heading">
                        <?php if ( get_sub_field( 'titre' ) ) :?>
                            <h2 class="economies__title text-uppercase padding-bottom-xs reveal-fx--is-visible"><?php the_sub_field( 'titre' );?></h2>
                        <?php endif; ?>
                        <?php if ( get_sub_field( 'texte' ) ) :?>
                            <?php the_sub_field( 'texte' );?>
                        <?php endif; ?>
                    </div>
                    <div class="economies__content">
                        <?php if (have_rows('nego')): ?>
                            <div class="grid"> 
                                <?php while (have_rows('nego')): the_row();?>
                                    <div class="col-4@sm padding-top-xl padding-top-0@md padding-right-lg@md">
                                        <div class="economies__col">
                                            <figure class="economies__figure">
                                                <?php if ( get_sub_field( 'nego_image' ) ) :?>
                                                    <img src="<?php the_sub_field( 'nego_image' );?>" />                                    
                                                <?php endif; ?>
                                            </figure>
                                            <?php if ( get_sub_field( 'nego_titre' ) ) :?>
                                                <h3 class="text-uppercase"><?php the_sub_field('nego_titre');?></h3>
                                            <?php endif; ?>
                                            <?php if ( get_sub_field( 'nego_sous-titre' ) ) :?>
                                                <p class="text-uppercase"><strong><?php the_sub_field('nego_sous-titre');?></strong></p>
                                            <?php endif; ?>
                                            <?php if ( get_sub_field( 'nego_economies' ) ) :?>
                                                <p class="economies__eco"><strong>
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 32 32" version="1.1">
                                                        <path d="M 16.007812 19.476562 L 27.582031 7.890625 C 27.976562 7.496094 28.523438 7.25 29.125 7.25 C 29.730469 7.25 30.277344 7.496094 30.671875 7.890625 L 30.671875 7.894531 C 31.066406 8.289062 31.308594 8.839844 31.308594 9.441406 C 31.308594 10.046875 31.066406 10.59375 30.671875 10.992188 L 17.5625 24.113281 C 17.167969 24.507812 16.625 24.75 16.023438 24.75 C 15.453125 24.75 14.933594 24.53125 14.546875 24.175781 L 1.335938 11 C 0.9375 10.605469 0.695312 10.054688 0.695312 9.449219 C 0.695312 8.242188 1.671875 7.261719 2.882812 7.261719 C 3.484375 7.261719 4.03125 7.507812 4.425781 7.902344 Z M 16.007812 19.476562 "/>
                                                    </svg>
                                                    <?php the_sub_field('nego_economies');?>
                                                </strong></p>
                                            <?php endif; ?>
                                            <?php if ( get_sub_field( 'nego_texte' ) ) :?>
                                                <div class="economies__inner-text">
                                                    <p><?php the_sub_field('nego_texte');?></p>
                                                </div>
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile;?>
                                <?php else: ?>
                                <?php // contenu indisponible ?>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
                <?php endwhile; ?>
                </section>
            <?php endif; ?>

            <section class="color-bg--lighter" data-theme="lightblue">
                <article class="container max-width-lg padding-y-lg">
                    <div class="text-component line-height-1 padding-y-lg">
                        <div class="reveal-fx reveal-fx--translate-up">
                            <p><?php the_field( 'presentation_vision' ); ?></p>
                        </div>
                    </div>
                </article>
            </section>
            <section class="loop-tabs padding-y-lg js-loop-tabs" data-theme="lightblue">
                <div class="container max-width-adaptive-lg">
                    <div class="grid gap-md flex-row-reverse@md">
                    <div class="loop-tabs__content col-6@md flex flex-column  text-center text-left@md">
                        <ul class="loop-tabs__controls js-loop-tabs__controls margin-bottom-lg margin-bottom-0@lg flex flex-center flex-wrap items-start@md" style="list-style-type: none;">
                        <li>
                            <a href="#timing-tab-1-panel-1" class="loop-tabs__control loop-tabs__control--selected text-sm padding-md"><span class="step1">1</span></a>
                        </li>

                        <li>
                            <a href="#timing-tab-1-panel-2" class="loop-tabs__control text-sm padding-md step2"><span class="step2">2</span></a>
                        </li>

                        <li>
                            <a href="#timing-tab-1-panel-3" class="loop-tabs__control text-sm padding-md step3"><span class="step3">3</span></a>
                        </li>
                        <li>
                            <a href="#timing-tab-1-panel-4" class="loop-tabs__control text-sm padding-md step4"><span class="step4">4</span></a>
                        </li>

                        <li>
                            <a href="#timing-tab-1-panel-5" class="loop-tabs__control text-sm padding-md step5"><span class="step5">5</span></a>
                        </li>

                        <li>
                            <a href="#timing-tab-1-panel-6" class="loop-tabs__control text-sm padding-md step6"><span class="step6">6</span></a>
                        </li>                        
                        </ul>
                
                        <div class="loop-tabs__panels js-loop-tabs__panels margin-bottom-md">
                        <section id="timing-tab-1-panel-1" class="loop-tabs__panel js-loop-tabs__panel text-component loop-tabs__panel--selected flex flex-center">
                            <p>Suite à notre premier contact, nous réalisons une visite de votre immeuble et une analyse technique des parties communes.</p>
                        </section>
                
                        <section id="timing-tab-1-panel-2" class="loop-tabs__panel js-loop-tabs__panel text-component flex flex-center">
                            <p>Nous vous envoyons une proposition de contrat ainsi qu’un premier retour sur la visite.</p>
                        </section>
                
                        <section id="timing-tab-1-panel-3" class="loop-tabs__panel js-loop-tabs__panel text-component flex flex-center">
                            <p>Après validation en AG, les copropriétaires reçoivent un courrier de bienvenue avec toutes les informations pour notre future communication.</p>
                        </section>

                        <section id="timing-tab-1-panel-4" class="loop-tabs__panel js-loop-tabs__panel text-component flex flex-center">

                            <p>Nous renégocions les contrats en cours auprès des fournisseurs.</p>
                        </section>
                
                        <section id="timing-tab-1-panel-5" class="loop-tabs__panel js-loop-tabs__panel text-component flex flex-center ">
                            <p>Nous réalisons au minimum 2 visites de votre immeuble par an et vous envoyons un rapport chaque fois.</p>
                        </section>
                
                        <section id="timing-tab-1-panel-6" class="loop-tabs__panel js-loop-tabs__panel text-component flex flex-center">

                            <p>Et toute l’année, nous gérons le quotidien : dépannage, travaux, dégâts des eaux, coupures d’électricité, sans oublier le moment privilégié de l’Assemblée Générale.</p>
                        </section>
                        </div>
                    </div>
                
                    <div class="loop-tabs__media col-6@md" aria-hidden="true">
                        <ul class="loop-tabs__assets js-loop-tabs__assets" style="list-style-type:none;">
                        <li class="loop-tabs__asset loop-tabs__asset--selected">
                            <img style="max-width:320px;" src="<?php echo get_template_directory_uri();?>/assets/img/illu_etape-1.svg" alt="Illustration étape 1">
                            
                        </li>
                
                        <li class="loop-tabs__asset">
                        <img style="max-width:320px;" src="<?php echo get_template_directory_uri();?>/assets/img/bulle2.png" alt="Illustration étape 2">
                        </li>
                
                        <li class="loop-tabs__asset">
                        <img style="max-width:320px;" src="<?php echo get_template_directory_uri();?>/assets/img/illu_etape-3.svg" alt="Illustration étape 3">
                        </li>
                        <li class="loop-tabs__asset">
                        <img style="max-width:320px;" src="<?php echo get_template_directory_uri();?>/assets/img/illu_etape-4.svg" alt="Illustration étape 4">
                        </li>
                
                        <li class="loop-tabs__asset">
                        <img style="max-width:320px;" src="<?php echo get_template_directory_uri();?>/assets/img/illu_etape-5.svg" alt="Illustration étape 5">
                        </li>
                
                        <li class="loop-tabs__asset">
                        <img style="max-width:320px;" src="<?php echo get_template_directory_uri();?>/assets/img/illu_etape-6.svg" alt="Illustration étape 6">
                        </li>                        
                        </ul>
                    </div>
                    <aside>
                        <div class="text-component text-center padding-y-lg">
                            <a href="<?php echo get_permalink(31);?>" class="btn btn--primary margin-top-sm">Qui sommes-nous</a>
                        </div>                    
                    </aside>
                    </div>
                </div>
            </section>
            <?php if ( have_rows( 'offres' ) ) :?>
            <section id="arguments-pourquoi" class="has-section-divider-bottom">
                <div class="container max-width-adaptive-md padding-top-xl">
            <?php // Loop settings 
            $classFigImpaire = "col-4@md flex justify-center reveal-fx reveal-fx--translate-right";
            $classTextTranslateImpair ="col-8@md text-component reveal-fx reveal-fx--translate-left";                    
            $classFigPaire = "col-4@md flex justify-center order-2@md  reveal-fx reveal-fx--translate-left";
            $classTextTranslatePair ="col-8@md text-component reveal-fx reveal-fx--translate-right";
            $i=0;
                while ( have_rows( 'offres' ) ) : the_row(); // boucler sur les arguments 
                // Bascule des styles alternés
                $classFigOffre = ($i % 2) ? $classFigPaire : $classFigImpaire;
                $classTxtTrans = ($i % 2) ? $classTextTranslatePair : $classTextTranslateImpair;
                $i++;?>
                    <div class="offre grid gap-xl align-middle max-width-adaptive-xl padding-y-xl">
                        <figure class="<?php echo $classFigOffre;?>">
                            <?php if ( get_sub_field( 'illustration_argument' ) ) :?>
                            <img src="<?php the_sub_field( 'illustration_argument' );?>" alt="<?php the_sub_field( 'titre_argument',false,false );?>" />                                    
                            <?php endif ?>
                        </figure>                            
                        <div class="<?php echo $classTxtTrans;?>">
                            <h3 class="section-subtitle block padding-bottom-sm"><?php the_sub_field( 'titre_argument',false,false ); // affichage du titre?></h3>
                            <?php $argument = get_sub_field('description_argument');?>
                            <p><?php echo wp_strip_all_tags($argument)?></p>
                            <?php if ( have_rows( 'cta-group' ) ) : ?>
                                <?php while ( have_rows( 'cta-group' ) ) : the_row(); ?>
                                    <?php $url_btn = get_sub_field( 'url_btn' ); ?>
                                        <?php if ( $url_btn ) : ?>
                            <a class="btn btn--sm btn--primary margin-top-lg" href="<?php echo esc_url( $url_btn); ?>"><?php the_sub_field( 'txt_btn' ); ?></a>
                                        <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div><!-- argument  -->
                <?php endwhile; ?>
            <?php else : ?>
            <?php // rien à afficher ?>
            <?php endif; ?>
                </div><!-- container -->
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