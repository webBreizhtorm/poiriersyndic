<?php get_header(); ?>
    
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <section id="home-hero" class="width-100% has-background bg-cover" style="background: var(--color-accent) url('<?php echo get_template_directory_uri();?>/assets/img/illu-home-header.svg')"  data-theme="blue" >
                <div class="container max-width-adaptive-xl">        
                    <div class="grid gap-xl align-middle">
                        <div class="text-component margin-top-xl  margin-y-xxxl@md margin-bottom-xxxl color-white text-left flex flex-column align-middle">
                        <!-- <h2 class="align-left align-left@md line-height-1 text-xl text-xxxl@md text-uppercase"> -->
                            <h1>
                            <!-- Désactivation du scrollComponent <h2 class="page-title align-left align-left@md line-height-1 scroll-fx js-scroll-fx" data-scroll-fx-1="translateY, 100px, -100px, 0%, 100%"  data-scroll-fx-2="opacity, 0, 1, 0%, 50%"> -->
                                <span class="reveal-fx reveal-fx--text-mask" data-reveal-fx-delay="600">Poirier Syndic :</span><br>
                                <span class="reveal-fx reveal-fx--text-mask" data-reveal-fx-delay="1200"> plus qu'un syndic,</span><br class="display@md hide@xl">
                                <span class="reveal-fx reveal-fx--text-mask" data-reveal-fx-delay="1800">un facilitateur</span>
                            </h1>
                            <ul class="svg-list reveal-fx reveal-fx--text-mask" data-reveal-fx-delay="2400">
                                <!-- Désactivation du scrollComponent <ul class="svg-list scroll-fx js-scroll-fx reveal-fx reveal-fx--text-mask" data-reveal-fx-delay="2400" data-scroll-fx-1="translateY, 100px, -120px, 0%, 100%"  data-scroll-fx-2="opacity, 0, 1, 0%, 50%"> -->
                                <li>À l'écoute</li>
                                <li>Transparent</li>
                                <li>Réactif</li>
                            </ul>
                        </div>
                    </div>
            </section>
            <section id="home-intro" class="has-section-divider-bottom bg-transparent bg-opacity-10%" style="background: var(--color-white) url('<?php echo get_template_directory_uri();?>/assets/img/concrete_seamless.png') 0 0 repeat;">
                <div class="container max-width-xl"> 
                    <div class="grid gap-lg align-middle">
                        <div class="padding-x-lg padding-y-xxl col-7@md text-component text-left padding-y-xxxl@md order-2@md">
                            <h2 class="section-title text-center text-left@md padding-bottom-sm">Votre Syndic<br class="hide@md"/> à Rennes</h2>
                            <p>Poirier Syndic envisage <a class="link-fx-2" href="<?php echo get_permalink(126);?>" target="_blank" title="Qu'est ce qu'un syndic de copropriété ?">le métier de syndic</a> à 360°, avec une expertise à la fois technique, commerciale et humaine. Grâce à cette expertise et notre orientation portée 100 % sur le métier de syndic, nous voulons faciliter la vie des copropriétaires sur les nombreux sujets qui occupent leur quotidien.
Professionnels pragmatiques et rigoureux, nous pensons que notre métier de gestionnaire n’interdit pas une approche positive des échanges avec les copropriétaires, tout au long de l’année !</p>
                            <a href="<?php echo get_permalink(23);?>" class="btn btn--primary margin-top-sm">Découvrir Poirier Syndic</a>                    
                        </div>
                        <figure class="display@md col-5@md flex flex-column justify-center order-1@md">
                            <img class=" intro-img"src="<?php echo get_template_directory_uri();?>/assets/img/arroser-2.svg" alt="Poirier Syndic: Réduction des coûts">
                        </figure>
                    </div>
                </div>
                <img class="section-divider" src="<?php echo get_template_directory_uri();?>/assets/img/home-divider-bottom.svg" /> 
            </section>
            <?php if ( have_rows( 'offres' ) ) :?>
            <section id="offres" class="has-section-divider-bottom" data-theme="blue">
                <div class="container max-width-adaptive-md padding-top-xl">
                    <div class="text-component text-center">
                        <h2 class="section-title">Notre offre</h2>
                    </div>
            <?php // Loop settings 
            $classFigImpaire = "col-4@md flex justify-center reveal-fx reveal-fx--translate-right";
            $classTextTranslateImpair ="col-8@md text-component reveal-fx reveal-fx--translate-left";                    
            $classFigPaire = "col-4@md flex justify-center order-2@md  reveal-fx reveal-fx--translate-left";
            $classTextTranslatePair ="col-8@md text-component reveal-fx reveal-fx--translate-right";
            $i=0;
                while ( have_rows( 'offres' ) ) : the_row(); // boucler sur les offres 
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
                    </div><!-- offre  -->
                <?php endwhile; ?>
            <?php else : ?>
            <?php // rien à afficher ?>
            <?php endif; ?>
                </div><!-- container -->
            </section>

            <section id="presta-intro">
                <div class="grid">

                    <div class="padding-top-lg">
                        <div class="container max-width-xl">
                            <div class="text-component text-center ">
                                <h1 class="text-xxxxl text-uppercase">Exemples de copropriétés<br/> qui nous font confiance</span></h1>
                                <p class="text-md"><strong>Immeubles d'habitation ou tertiaire, le service Poirier Syndic<br/> est reconnu pour sa qualité et son professionnalisme.</strong></p>
                            </div>
                        </div>

                                <?php if ( have_rows( 'copropriete' ) ) :?>
                                    <?php while ( have_rows( 'copropriete' ) ) : the_row(); ?>
                            
                                        <div class="copropriete<?php if( get_sub_field('alignement') == 'droite' ) { ?> copropriete--right<?php } ?>">  
                                        <div class="container max-width-xl">
                                                <div class="copropriete__content">
                                                    <?php if ( get_sub_field( 'titre' ) ) :?>
                                                        <h2 class="copropriete__title text-xxxl"><?php the_sub_field( 'titre' );?></h2>
                                                    <?php endif; ?>
                                                    <figure class="copropriete__figure col-md-4">
                                                        <?php if ( get_sub_field( 'image' ) ) :?>
                                                            <img src="<?php the_sub_field( 'image' );?>" />                                    
                                                        <?php endif; ?>
                                                    </figure>
                                                    <div class="copropriete__text col-md-8">

                                                        <div class="copropriete__cartouche">
                                                            <?php if ( get_sub_field( 'sous-titre' ) ) :?>
                                                                <h3 class="text-xxl text-uppercase"><?php the_sub_field( 'sous-titre' );?></h3>
                                                            <?php endif; ?>
                                                            <?php if ( get_sub_field( 'info' ) ) :?>
                                                                <div class="copropriete__info">
                                                                    <?php the_sub_field( 'info' );?>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>

                                                        <?php if (have_rows('liste')): ?>
                                                            <ul class="liste-raisons padding-top-lg">
                                                                <?php while (have_rows('liste')): the_row();?>
                                                                    <li class="flex reveal-fx reveal-fx--translate-left" data-reveal-fx-delay="100">
                                                                        <svg class="icon margin-right-xs" width="24" height="22.928" viewBox="0 0 24 22.928">
                                                                            <g id="Groupe_412" data-name="Groupe 412" transform="translate(-3621.712 553.554)">
                                                                                <path id="Tracé_1145" data-name="Tracé 1145" d="M3627.766-553.554l6.054,6.055v16.874h-12.109V-547.5Z" transform="translate(0)" fill="#728bc6"/>
                                                                                <rect id="Rectangle_251" data-name="Rectangle 251" width="11.891" height="16.874" transform="translate(3633.821 -547.499)" fill="#c9d1ec"/>
                                                                                <path id="Tracé_1146" data-name="Tracé 1146" d="M3639.437-553.554h-11.891l6.055,6.055h11.891Z" transform="translate(0.221)" fill="#0e529f"/>
                                                                            </g>
                                                                        </svg>
                                                                        <?php if ( get_sub_field( 'item' ) ) :?>
                                                                            <?php the_sub_field('item');?>
                                                                        <?php endif; ?>
                                                                    </li>
                                                                <?php endwhile;?>
                                                            </ul>
                                                            <?php else: ?>
                                                            <?php // contenu indisponible ?>
                                                        <?php endif;?>

                                                        <?php if ( get_sub_field( 'temoignage_nom' ) ) :?>
                                                            <div class="copropriete__testimony">
                                                                <p class="copropriete__testimony__name"><strong><?php the_sub_field('temoignage_nom');?></strong></p>
                                                                <img class="copropriete__stars" src="<?php echo get_template_directory_uri(); ?>/assets/img/stars.png">
                                                                <h4 class="copropriete__testimony__title"><?php the_sub_field('temoignage_titre');?></h4>
                                                                <?php the_sub_field('temoignage_texte');?>
                                                            </div>
                                                        <?php endif;?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php endwhile; ?>
                                <?php endif; ?>
                    
                <div>
</section>
            <section class="home-faq position-relative" > 
                <div class="container max-width-adaptive-md padding-y-xxl">
                    <div class="text-component text-center">
                        <h2 class="section-title">Les questions fréquentes</h2>
                    </div>
                    <div class="carousel flex flex-column js-carousel" data-drag="on" data-loop="off" data-navigation="on" data-navigation-class="carousel__navigation order-3">                        <p class="sr-only">Éléments de la foire aux questions</p>
                        <div class="carousel__wrapper order-2 overflow-hidden">                        
                            <?php if ( have_rows( 'question_reponse', 29 ) ) : ?>
                            <ul class="carousel__list padding-y-xl">
                                <?php $i = 0; ?>
                                <?php while ( have_rows( 'question_reponse', 29 ) ) : the_row(); ?>
                                <li class="carousel__item reveal-fx reveal-fx--translate-up">
                                    <div class="home-faq-block">
                                    <?php $avatar = get_sub_field('illu_avatar');?>
                                        <img class="home-faq-block-vignette" style="max-width:80px !important;" src="<?php echo get_template_directory_uri();?>/assets/img/avatar<?php echo ($avatar );?>.png" alt="Vignette personnage FAQ"/>
                                        <div class="text-component text-center padding-y-xl padding-x-md">
                                            <h4 class="padding-bottom-sm"><?php the_sub_field( 'question' ); ?></h4>
                                            <!-- <p class="read-more js-read-more" data-characters="200" data-btn-class="read-more__btn js-tab-focus"> -->
                                            <p>
                                                <?php
                                                $reponse = get_sub_field( 'reponse' );
                                                if( !empty( $reponse ) ): ?>
                                                    <?php $i++; ?>
                                                    <?php echo substrwords($reponse,100); ?>
                                                    <a class="block padding-top-md" href="<?php echo home_url(); ?>/faq/#accordion-header-<?php echo strval( $i - 1 ); ?>">Lire la suite</a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <?php endwhile; ?>                                                                
                            <?php else : ?>
                                <?php echo("Il n'y a pas de questions actuellement dans la FAQ") ?>
                            </ul>
                            <?php endif; ?>                            
                        </div>
                    </div>
                    <div class="text-component text-center">
                        <a href="<?php echo home_url(); ?>/faq" class="btn btn--primary margin-top-sm">Consulter la faq</a>
                    </div>
                </div>
                <figure class="display@md position-absolute scroll-fx js-scroll-fx" data-scroll-fx="translateX, -100px, 100px, 0%, 33%" style="bottom:0;left:6em;">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/poirier-syndic-laptop.svg" alt="Poirier Syndic répond à toutes vos questions">
                </figure>
                
            </section>

            <section id="contact" class="bg-contrast-lower">
                <div class="grid">
                    <div class="col-6@md padding-y-xxl">
                        <div class="text-component text-center padding-y-lg">
                            <h1 class="text-xxxl text-uppercase">Contact</h1>
                        </div>
                        <div class="padding-x-xxl@lg">
                            <?php echo do_shortcode('[contact-form-7 id="379" title="Contact home"]');?>
                        </div>        
                    </div>
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                    <div class="col display@md" style="background: transparent url('<?php echo $url; ?>') 0 0 no-repeat;background-attachment:fixed;background-size:cover">
                        <div class="grid position-relative">
                            <div class="col-6@md offset-3@md margin-top-xxxxl align-middle shadow-xl scroll-fx@md js-scroll-fx" data-scroll-fx="translateX, 200px, 0px, 0%, 50%">
                                <div class="text-component text-center padding-md padding-lg@lg bg radius-lg" data-theme="accent">
                                    <h3 class="text-md text-lg@lg text-center">Vous préférez échanger<br class="display@lg"> par téléphone ? </h3>
                                        
                                        <a class="link-fx-2 flex flex-row items-center justify-center padding-top-md text-bold text-md text-lg@lg  color-primary" href="tel:<?php the_field('telephone_principal', 'option'); ?>" title="Appeller Syndic Poirier">
                                        <svg class="icon icon--md align-middle"  viewBox="0 0 32 32"  aria-hidden="true">
                                            <path id="picto_tel" data-name="picto tel" d="M138.215,135.919l-.851,1.4s-3.234,4.435,3.7,11.414h0l.033.032.032.033h0c6.978,6.93,11.413,3.7,11.413,3.7l1.4-.851a1.646,1.646,0,0,0,.176-2.481l-1.666-1.666a1.646,1.646,0,0,0-2.152-.153l-1.773,1.133s-1.192.7-4.523-2.615-2.615-4.523-2.615-4.523l1.133-1.772a1.647,1.647,0,0,0-.153-2.152l-1.666-1.666A1.646,1.646,0,0,0,138.215,135.919Z" transform="translate(-136.61 -135.261)" fill="CurrentColor"/>
                                        </svg><?php the_field('telephone_principal', 'option'); ?>
                                        </a>
                                        <p class="text-sm text-center padding-top-sm">Du lundi au vendredi<br class="hide@lg"> de 9h à 12h<br>  et de 14h à 18h sauf le vendredi jusqu'à 16h00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- grid -->

            </section>
            
            <!-- <?php the_content(); ?> -->
            
        <?php endwhile; endif; ?> 

<?php get_footer(); ?>