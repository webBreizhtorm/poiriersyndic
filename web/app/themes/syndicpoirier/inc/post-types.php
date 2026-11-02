<?php

// Documentation CPT: https://developer.wordpress.org/reference/functions/register_post_type/

//======================================================================
// CUSTOM POST TYPES
//======================================================================

/* Ordre d'apparition dans le menu */

# 5 : Le CPT apparait juste après Articles ;
# 10 : Sous Médias ;
# 20 : Sous Pages ;
# 65 : Sous Extensions ;
# 70 : Sous Utilisateurs ;
# 80 : Sous Réglages ;
# 100 : Tout en bas.


/* Fonctionnalités supportées */

# title : le champ Titre (il vaut mieux le laisser) ;
# editor : l’éditeur visuel (classique ou Gutenberg) ;
# author : le champ pour choisir/changer l’auteur ;
# thumbnail : l’image mise en avant ;
# excerpt : le champ extrait ;
# comments : la prise en charge des commentaires ;
# revisions : la sauvegarde automatique de révisions (je conseille de le mettre) ;
# custom-fields : la prise en charge des champs additionnels (on verra mieux avec ACF) ;
# page-attributes : utile si vous voulez donner la possibilité de choisir un template personnalisé ;
# post-formats : les Posts Formats à la tumblr.

/* Options menu-icon */

/*
$args = array(
    #1	  'menu_icon' => 'dashicons-portfolio',
    #2    'menu_icon' => get_template_directory_uri() . '/img/cpt-icon.png',
    #3    'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode( "<svg>...</svg>" ), 
    );
*/

function fr3_register_post_types() {
	
    // CPT Portfolio
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    );

	$args = array(
    /* Attention: Pour créer un Custom Post Type avec l’éditeur visuel Gutenberg, il faut ajouter le paramètre show_in_rest à true dans sa déclaration.
    Pourtant show_in_rest permet à la base d’afficher le type de publication dans l’API Rest. Mais en réalité Gutenberg a besoin de cette prise en charge de l’API pour fonctionner.
    */
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
    );    

    //register_post_type( 'portfolio', $args );

    // CPT Gestionnaire
    $gestlabels = array(
        'name' => 'gestionnaire',
        'all_items' => 'Tous les gestionnaires',  // affiché dans le sous menu
        'singular_name' => 'Gestionnaire',
        'add_new_item' => 'Ajouter un gestionnaire',
        'edit_item' => 'Modifier le gestionnaire',
        'menu_name' => 'Gestionnaires'
    );

	$gestargs = array(
        'labels' => $gestlabels,
        'public' => true,
        'show_in_rest' => false,
        'has_archive' => false,
        'supports' => array( 'title', 'editor' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-building',
    );    

    register_post_type( 'gestionnaire', $gestargs );

    // Déclaration de la Taxonomie
    $labels = array(// https://developer.wordpress.org/reference/functions/get_taxonomy_labels/
        'name' => 'Type de projets',
        'new_item_name' => 'Nom du nouveau Projet',
    	'parent_item' => 'Type de projet parent',
    );
    
    $args = array( 
        'labels' => $labels,
        'public' => true, 
        'show_in_rest' => true,
        'hierarchical' => true, 
    );
    // Assigner à un CPT
    //register_taxonomy( 'type-projet', 'portfolio', $args );
    // Assigner à plusieurs CPT
    // register_taxonomy( 'type-projet', array( 'portfolio', 'autre' ), $args );
}

add_action( 'init', 'fr3_register_post_types' ); // Le hook init lance la fonction