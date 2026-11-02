<?php
/*
  Template Name: Qui sommes-nous
  Template Post Type: post, page, product
*/
get_header(); ?>
    
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
            
            <!-- <section id="home-intro" class="has-section-divider-bottom bg-transparent bg-opacity-10%" style="background: var(--color-white) url('<?php echo get_template_directory_uri();?>/assets/img/concrete_seamless.png') 0 0 repeat;"> -->
            <section id="presta-hero" class="width-100% padding-y-xxl bg-cover" style="background: transparent url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');">
                <div class="container max-width-lg gabarit-titre">
                        <h1 class="page-title color-white text-center line-height-1 padding-x-md padding-y-sm" >Qui sommes-nous</h1>
                </div>
            </section>

            <?php if ( have_rows( 'presentation' ) ) :?>
                <?php while ( have_rows( 'presentation' ) ) : the_row(); ?>

                    <section class="presentation<?php if( get_sub_field('alignement') == 'droite' ) { ?> presentation--right<?php } ?>">
                        <div class="presentation__grid">

                            <div class="presentation__col">
                            <figure class="presentation__figure">
                                <?php if ( get_sub_field( 'image' ) ) :?>
                                    <img src="<?php the_sub_field( 'image' );?>" />                                    
                                <?php endif; ?>
                            </figure>
                            </div>
                            <div class="presentation__col">
                                <div class="presentation__content">

                                    <div class="presentation__heading ">
                                        <?php if ( get_sub_field( 'nom' ) ) :?>
                                            <h2 class="presentation__title"><?php the_sub_field( 'nom' );?></h2>
                                        <?php endif; ?>
                                        <?php if ( get_sub_field( 'poste' ) ) :?>
                                            <p class="color-primary"><strong><?php the_sub_field( 'poste' );?></strong></p>
                                        <?php endif; ?>
                                    </div>                            
                                
                                    <div class="presentation__inner__grid">
                                        <?php if (have_rows('experience')): ?>
                                            <dl class="presentation__list margin-bottom-lg">
                                            <dt class="presentation__small-title"><strong>Expérience : </strong></dt>
                                                <?php while (have_rows('experience')): the_row();?>
                                                    <dd class="presentation__item text-sm">
                                                        <svg class="icon margin-right-xs"viewBox="0 0 15.911 12.165">
                                                            <path id="séparateur-feuille" d="M2421.976,1597.451s15.613-.624,15.911,11.682C2437.887,1609.134,2426.882,1613.227,2421.976,1597.451Z" transform="translate(-2421.976 -1597.446)" fill="#53b687"/>
                                                        </svg>
                                                        <p>
                                                            <?php if ( get_sub_field( 'experience_annee' ) ) :?>
                                                                <strong><?php the_sub_field('experience_annee');?></strong>
                                                            <?php endif; ?>
                                                            <?php if ( get_sub_field( 'experience_item' ) ) :?>
                                                                <?php the_sub_field('experience_item');?>
                                                            <?php endif; ?>
                                                        </p>
                                                    </dd>
                                                <?php endwhile;?>
                                            </dl>
                                            <?php else: ?>
                                            <?php // contenu indisponible ?>
                                        <?php endif;?>
                                        <?php if (have_rows('profil')): ?>
                                            <dl class="presentation__list margin-bottom-lg">
                                            <dt class="presentation__small-title"><strong>Profil : </strong></dt>
                                                <?php while (have_rows('profil')): the_row();?>
                                                    <dd class="presentation__item text-sm">
                                                        <svg class="icon margin-right-xs"viewBox="0 0 15.911 12.165">
                                                            <path id="séparateur-feuille" d="M2421.976,1597.451s15.613-.624,15.911,11.682C2437.887,1609.134,2426.882,1613.227,2421.976,1597.451Z" transform="translate(-2421.976 -1597.446)" fill="#53b687"/>
                                                        </svg>
                                                        <?php if ( get_sub_field( 'profil_item' ) ) :?>
                                                            <p><?php the_sub_field('profil_item');?></p>
                                                        <?php endif; ?>
                                                    </dd>
                                                <?php endwhile;?>
                                            </dl>
                                            <?php else: ?>
                                            <?php // contenu indisponible ?>
                                        <?php endif;?>
                                    </div>

                                </div>
                            </div>
                            
                        <div>
                    </section>

                <?php endwhile; ?>
            <?php endif; ?>

            <section>
                <div class="container max-width-adaptive-md padding-y-xl">
                    <div class="grid gap-y-xl">
                        <div class="col-8@md text-component reveal-fx reveal-fx--translate-right">
                            <h1 class="text-uppercase">Un profil technique</h1>
                            <p>Poirier Syndic peut s’appuyer sur une expérience du terrain pour :</p>
                            <ul>
                                <li>être pertinent sur la problématique rencontrée</li>
                                <li>choisir le bon interlocuteur à envoyer sur site</li>
                                <li>analyser le diagnostic fait par les entreprises</li>
                            </ul> 
                        </div>
                        <div class="col-4@md text-component flex flex-column justify-center flex-center reveal-fx reveal-fx--translate-left padding-lg shadow-md" data-theme="yellow">
                            <span class="text-xxxl font-bold">80%</span>
                            <p class="text-center">des problèmes en copropriété sont<br>d’ordre technique</p>
                        </div>
                        
                        <div class="col-8@md text-component order-2@md  reveal-fx reveal-fx--translate-left">
                            <h1 class="text-uppercase">Un langage commun</h1>
                                <p>Notre profil technique vous garantit :</p>
                                <ul>
                                    <li>un traitement des demandes apprécié par les artisans</li>
                                    <li>des tarifs au meilleur rapport qualité/prix</li>
                                    <li>une analyse pertinente du diagnostic réalisé par les entreprises sollicitées</li>
                                    <li>un suivi rigoureux des interventions et un rapport intelligible pour les copropriétaires</li>
                                </ul>
                        </div>
                        <div class="col-4@md flex order-1@md  reveal-fx reveal-fx--translate-left">
                            <?php $url = wp_get_attachment_url(361); ?>
                            <img src="<?php echo $url;?>" alt="profil technique" style="margin-left:0!important";/>
                        </div>
                    </div>

                
                </div>

            </section>

            </section>
            <?php $url = wp_get_attachment_url(362);?>
            <section data-theme="blue" style="background: #3765B0 url('<?php echo $url;?>');background-repeat:no-repeat;background-size:contain;background-position:100% 100%">
                <article class="container max-width-md padding-y-lg">
                    <div class="text-component line-height-1 padding-bottom-xxl">
                        <div class="grid">
                            <div class="col-8@md reveal-fx reveal-fx--translate-up">
                                <h1>Une mobilité douce</h1>
                                <p>Parce qu’il est synonyme de mobilité, d’écologie, de flexibilité, Le vélo est notre moyen de locomotion favori.<br>
                                Il permet de maîtriser notre temps de trajet et de nous garer au pied des immeubles que nous gérons.<br>
                                Et quand ça n’est pas possible nous utilisons le réseau d’auto-partage Citiz et leurs voitures électriques. </p>
                            </div>
                        </div>
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