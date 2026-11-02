<?php 
// https://developer.wordpress.org/reference/classes/wp_query/

// 1. On définit les arguments pour définir ce que l'on souhaite récupérer
$args = array(
    'post_type' => 'post', // post, page, portfolio ...
    'category_name' => 'films',
    'posts_per_page' => 3,
    'order' => 'DESC', // ASC ou DESC 
    'orderby' => 'date', // title, date, comment_count...
    'posts_per_page' => get_option( 'posts_per_page'), // Valeur par défaut
    'posts_per_page' => 5, // 5 articles
    'posts_per_page' => -1, // tous les articles
    'offset' => 20, // à partir du vingtième
);

// 2. On exécute la WP Query
$my_query = new WP_Query( $args );

// 3. On lance la boucle !
if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
    
    the_title();
    the_content();
    the_post_thumbnail();

endwhile;
endif;

// 4. On réinitialise à la requête principale (important)
wp_reset_postdata();

// 5. Requêtes sur les dates


    $args = array(
        'date_query' => array(
            array(
                'after'     => 'January 1st, 2020',
                'before'    => array(
                    'year'  => 2021,
                    'month' => 12,
                    'day'   => 31,
                ),
                'inclusive' => true,
            ),
        ),
    );
    $query = new WP_Query( $args );

// 6. Requêtes simples sur les champs personnalisés dont ACF


$args = array(
    'post_type' => 'post',
    'category' => 'jeux-video',
    'meta_key' => 'prix', // nom du champ personnalisé
    'meta_value_num' => 20, // ou meta_value pour tester un texte
    'meta_compare' => '<' // < > != >= <=
);
$query = new WP_Query( $args );

// 6. Requêtes cumulées sur les champs personnalisés dont ACF


$args = array(
    'post_type'  => 'post',
    'category' => 'jeux-video',
    'meta_query' => array(
        'relation' => 'AND', // Toutes les conditions doivent être réunies
        array(
            'key'     => 'prix',
            'value'   => array( 20, 49 ),
            'type' 	  => 'numeric',
            'compare' => 'BETWEEN',
        ),
        array(
            'key' => 'note',
            'value'   => 16,
            'type'    => 'numeric',
            'compare' => '>',
        ),
    ),
);
$query = new WP_Query( $args );

// 7 Comment connaître le nombre d'éléments retournés par la WP Query ?


    $args = array(
        'post_type' => 'post'
    );
    $my_query = new WP_Query( $args );
    echo $my_query->found_posts . " articles trouvés"; 

// 8 Le hook pour modifier la WP Query

/* 
C’est le hook pre_get_posts qui va nous permettre de modifier la WP Query juste avant son exécution par WordPress. Le code suivant est à placer dans le fichier functions.php du thème.
https://developer.wordpress.org/reference/classes/wp_query/
*/   

function fr3_override_query( $wp_query ) {
    if( $wp_query->is_main_query() and is_post_type_archive( 'portfolio' ) ): 
        $wp_query->set( 'posts_per_page', 12 );
        //$wp_query->set( 'order', 'ASC' );
        //$wp_query->set( 'author_name', 'maxime' );
    endif;
}
add_action( 'pre_get_posts', 'fr3_override_query' );

// 8 Comment savoir quels sont les paramètres de la requête initiale de WordPress ?

/*
WordPress a donc défini lui même quels étaient les paramètres de sa WP Query, les query vars, en fonction du template choisi par le Template Hierarchy.
Si vous êtes curieux de connaitre la valeur de ces paramètres, voici le code pour les afficher :
A coller dans functions.php
*/

function fr3_override_query2( $wp_query ) {
    var_dump( $wp_query->query_vars );
}

add_action( 'pre_get_posts', 'fr3_override_query' );