<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#3665b0">
    <meta name="msapplication-TileColor" content="#3665b0">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#f4f4f4">
    <meta name="google-site-verification" content="Msa08jMgTUqVXeHY3Kjg3TZ8CA1kZWp2Ofi3D898klg" />
    <?php wp_head(); ?>
    <?php 
    if ( get_field( 'desactiver_clic_opt', 'option' ) == 1 AND !is_page('31')) : ?>
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
            <div class="f-header__nav-grid justify-between@md container max-width-lg padding-y-lg">
                <div class="f-header__nav-logo-wrapper"><!--  flex-grow flex-basis-0 -->
                    <a href="<?php echo home_url( '/' ); ?>" class="f-header__logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-syndic-poirier.svg" alt="Logo Syndic Poirier">
                    </a>
                </div>
                <?php 
                //     $args = array( 
                //         'theme_location' => 'main', 
                //         'container' => 'ul', // afin d'éviter d'avoir une div autour 
                //         'menu_class' => 'f-header__list flex-grow flex-basis-0 justify-center@md padding-y-md', // ma classe personnalisée
                //         'fallback_cb'   => false,
                //         'add_li_class'  => 'f-header__item '
                //     );
                //     wp_nav_menu($args);
                // ?>
                <?php
                  $menu_name = 'main';
                  $locations = get_nav_menu_locations();
                  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                ?>

                <nav>
                <ul class="f-header__list flex-grow flex-basis-0 justify-center@md padding-y-md">
                    <?php
                    $count = 0;
                    $submenu = false;

                    foreach( $menuitems as $item ):

                        $link = $item->url;
                        $title = $item->title;
                        // item does not have a parent so menu_item_parent equals 0 (false)
                        if ( !$item->menu_item_parent ):

                        // save this id for later comparison with sub-menu items
                        $parent_id = $item->ID;
                    ?>

                    <li class="f-header__item">
                        <a href="<?php echo $link; ?>" class="f-header__link">
                            <span><?php echo $title; ?></span>
                            
<!--                             <svg class="f-header__dropdown-icon icon" aria-hidden="true" viewBox="0 0 12 12"><path d="M6,9l4-5H2Z" /></svg>
 -->
                        </a>
                    <?php endif; ?>

                        <?php if ( $parent_id == $item->menu_item_parent ): ?>

                            <?php if ( !$submenu ): $submenu = true; ?>
                            <ul class="f-header__dropdown">
                            <?php endif; ?>

                                <li class="item">
                                    <a href="<?php echo $link; ?>" class="f-header__dropdown-link"><?php echo $title; ?></a>
                                </li>

                            <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                            </ul>
                            <?php $submenu = false; endif; ?>

                        <?php endif; ?>

                    <?php if ( isset($menuitems[ $count + 1 ]) && $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
                    </li>                           
                    <?php $submenu = false; endif; ?>

                <?php $count++; endforeach; ?>

                </ul>
                </nav>
                <div class="btns gap-lg padding-y-md">                    
                    <a href="<?php the_permalink(31);?>" class="headlink headlink--btn headlink--1">Contact & devis</a>
                    <a href="https://poiriersyndic.monespaceclient.immo/" class="headlink headlink--btn headlink--2" target="_blank">Extranet client</a>
                    <a href="https://appli.poiriersyndic.fr/" class="headlink headlink--btn headlink--3" target="_blank">appli Poirier Syndic</a>
                </div>
            <?php //get_search_form(); ?>
            </div>
 
        </div>

    </header>
    <progress aria-hidden="true" class="reset reading-progressbar reading-progressbar--is-hidden js-reading-progressbar" max="100" value="0">
        <div class="reading-progressbar__fallback js-reading-progressbar__fallback"></div>
    </progress>
    <div class="page reading-content text-component js-reading-content">