<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-78J1E4P94T"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-78J1E4P94T');
    </script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#3665b0">
    <meta name="msapplication-TileColor" content="#3665b0">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#f4f4f4">
    <?php wp_head(); ?>
    <?php 
    if ( get_field( 'desactiver_clic_opt', 'option' ) == 1 ) : ?>
    <?php // echo 'true'; ?>
        <script language="JavaScript"> 
            // Désactiver 
            function disableselect(e){ 
            return false 
            } 
            
            function reEnable(){ 
            return true 
            } 

            //if IE4+ 
            document.onselectstart=new Function ("return false") 
            document.oncontextmenu=new Function ("return false") 
            //if NS6 
            if (window.sidebar){ 
            document.onmousedown=disableselect 
            document.onclick=reEnable 
            } 
            //--> 
        </script> 
    <?php else : ?>
	    <?php // echo 'false'; ?>
    <?php endif; ?>
    
</head>

<body <?php body_class(); ?>>    
    <?php wp_body_open(); ?>
    <header class="f-header js-f-header bg hide-nav js-hide-nav js-hide-nav--main" data-nav-target-class="f-header--expanded">
        <div class="f-header__mobile-content container max-width-lg">
            <a href="<?php echo home_url( '/' ); ?>" class="f-header__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-syndic-poirier.svg" alt="Logo Syndic Poirier">
            </a>
            <button class="reset anim-menu-btn js-anim-menu-btn f-header__nav-control js-tab-focus" aria-label="Déployer le menu">
                <i class="anim-menu-btn__icon anim-menu-btn__icon--close" aria-hidden="true"></i>
            </button>
        </div>

        <div class="f-header__nav" role="navigation">
            <div class="f-header__nav-grid justify-between@md container max-width-lg">
                <div class="f-header__nav-logo-wrapper"><!--  flex-grow flex-basis-0 -->
                    <a href="<?php echo home_url( '/' ); ?>" class="f-header__logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-syndic-poirier.svg" alt="Logo Syndic Poirier">
                    </a>
                </div>
                <?php 
                    $args = array( 
                        'theme_location' => 'main', 
                        'container' => 'ul', // afin d'éviter d'avoir une div autour 
                        'menu_class' => 'f-header__list flex-grow flex-basis-0 justify-center@md', // ma classe personnalisée
                        'fallback_cb'   => false,
                        'add_li_class'  => 'f-header__item'
                    );
                    wp_nav_menu($args);
                ?>
                <div class="btns gap-xs">                    
                    <a href="<?php the_permalink(31);?>" class="btn btn--primary text-uppercase">Contact & devis</a>
                    <a class="scribble-text-fx scribble-text-fx--v4" href="https://adbnet.krier.fr" target="_blank">
                        <span class="scribble-text-fx__label color-accent">Espace client</span>
                        <svg class="scribble-text-fx__decoration" viewBox="0 0 40 16" aria-hidden="true" fill="none" stroke="currentColor" stroke-miterlimit="10"><path d="M1.23,8.841A134.1,134.1,0,0,1,33.99,7.489"/><path d="M22.2,2.632A71.858,71.858,0,0,1,35.767,6.509a86.049,86.049,0,0,0-11.809,7.3"/></svg>
                    </a>
                </div>
            <?php //get_search_form(); ?>
            </div>
 
        </div>

    </header>
    <progress aria-hidden="true" class="reset reading-progressbar reading-progressbar--is-hidden js-reading-progressbar" max="100" value="0">
        <div class="reading-progressbar__fallback js-reading-progressbar__fallback"></div>
    </progress>
    <div class="page reading-content text-component js-reading-content">