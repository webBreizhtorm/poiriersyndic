<?php

//======================================================================
// GENERAL
//======================================================================

// Custom search form
function custom_search_form( $form, $value = "Search", $post_type = 'gestionnaire' ) {
    $form_value = (isset($value)) ? $value : esc_attr(apply_filters('the_search_query', get_search_query()));
    $form = '<form method="get" id="searchform" class="search-input search-input--icon-right" action="' . get_option('home') . '/" >
    <div>
        <input type="hidden" name="post_type" value="'.$post_type.'" />
        <input type="text" class="search-input__input form-control" value="' . $form_value . '" name="s" id="s" />
        <button class="search-input__btn" type="submit">
            <svg class="icon" viewBox="0 0 24 24"><title>Submit</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10"><line x1="22" y1="22" x2="15.656" y2="15.656"></line><circle cx="10" cy="10" r="8"></circle></g></svg>
        </button>
    </div>
    </form>';
    return $form;
}

//-----------------------------------------------------
// IMAGES
//-----------------------------------------------------
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Définir la taille des images mises en avant
set_post_thumbnail_size( 2000, 400, true );

// Définir d'autres tailles d'images
add_image_size( 'products', 800, 600, false );
add_image_size( 'square', 256, 256, false ); // utilisation: <?php the_post_thumbnail( 'square' ); 

//-----------------------------------------------------
// TITRES
//-----------------------------------------------------

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

//-----------------------------------------------------
// MENUS
//-----------------------------------------------------

//Gestion des menus

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

// function add_additional_class_on_li($classes, $item, $args) {
//   if($args->add_li_class) {
//       $classes[] = $args->add_li_class;
//   }
//   return $classes;
// }
// add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_class_to_all_menu_anchors( $atts ) {
  $atts['class'] = 'f-header__link';

  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );

//-----------------------------------------------------
// SIDEBARS & WIDGETS
//-----------------------------------------------------

/* Add Multiple sidebar 
*/
if ( function_exists('register_sidebar') ) {
  $sidebar1 = array(
      'before_widget' => '<div class="widget %2$s col-3@md flex flex-column justify-start flex-center padding-bottom-md@md">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => '</h2>',
      'id' => 'footer-1',        
      'name'=>__( 'Footer Colonne 1', 'textdomain' ),  
  );  
  $sidebar2 = array(
      'before_widget' => '<div class="widget %2$s col-5@md flex flex-column justify-start flex-center">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => '</h2>',
      'id' => 'footer-2',
      'name'=>__( 'Footer Colonne 2', 'textdomain' ),  
  );
   
  register_sidebar($sidebar1);
  register_sidebar($sidebar2);
}

// deactivate new block editor
function widget_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'widget_theme_support' );


/**
 * Add a special class for all rows of Caldera Forms grid layout, for a specific field
 */
add_action( 'caldera_forms_grid_row_class', function($rowClass, $row, $config ){
	//Change your field ID here
	if( 'cf12345' == $config[ 'form_id' ] ){
		$rowClass .= 'form-control width-100%';
	}

	return $rowClass;

}, 10, 3 );
//remove_filter ('the_content', 'wpautop');// Annule la génération automatique des paragraphes WordPress
//remove_filter ('acf_the_content', 'wpautop');// Annule la génération automatique des paragraphes dans les champs ACF

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title'	=> 'Options Poirier',
		'menu_title'	=> 'Options Poirier',
		'menu_slug' 	=> 'acf-options-poirier',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
	));

}
add_filter( 'caldera_forms_phone_js_options', function( $options){
	//Use ISO_3166-1_alpha-2 formatted country code
	$options[ 'initialCountry' ] = 'FR';
	return $options;
});

//-----------------------------------------------------
// ACF
//-----------------------------------------------------

//Générer un résumé pour les FAQ de l'accueil (désactivé, script conservé pour archive)
// https://wordpress.stackexchange.com/questions/325271/generate-a-excerpt-from-an-acf-wysiwyg-field

function wp_trim_excerpt_modified($text, $content_length = 20, $remove_breaks = false) {
  if ( '' != $text ) {
      $text = strip_shortcodes( $text );
      $text = excerpt_remove_blocks( $text );
      $text = apply_filters( 'the_content', $text );
      $text = str_replace(']]>', ']]&gt;', $text);
      $num_words = $content_length;
      $more = $excerpt_more ? $excerpt_more : null;
      if ( null === $more ) {
          $more = __( '&hellip;' );
      }
      $original_text = $text;
      $text = preg_replace( '@<(script|style)[^>]*?>.*?</\\1>@si', '', $text );

      // Modification
      // Autoriser les balises suivantes
      $text = strip_tags($text, '<strong><u><i><b>');

      if ( $remove_breaks )
          $text = preg_replace('/[\r\n\t ]+/', ' ', $text);
      $text = trim( $text );
      if ( strpos( _x( 'words', 'Word count type. Do not translate!' ), 'characters' ) === 0 && preg_match( '/^utf\-?8$/i', get_option( 'blog_charset' ) ) ) {
          $text = trim( preg_replace( "/[\n\r\t ]+/", ' ', $text ), ' ' );
          preg_match_all( '/./u', $text, $words_array );
          $words_array = array_slice( $words_array[0], 0, $num_words + 1 );
          $sep = '';
      } else {
          $words_array = preg_split( "/[\n\r\t ]+/", $text, $num_words + 1, PREG_SPLIT_NO_EMPTY );
          $sep = ' ';
      }
      if ( count( $words_array ) > $num_words ) {
          array_pop( $words_array );
          $text = implode( $sep, $words_array );
          $text = $text . $more;
      } else {
          $text = implode( $sep, $words_array );
      }
  }
  return $text;
}

// Excerpt ACF Option 2 (option active en frontpage)
// Usage: echo substrwords($string,30);
function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}

// define the wpcf7_is_tel callback 
function custom_filter_wpcf7_is_tel( $result, $tel ) { 
    $result = preg_match( '/^\(?\+?([0-9]{1,4})?\)?[-\. ]?(\d{10})$/', $tel );
    return $result; 
  }
  
  add_filter( 'wpcf7_is_tel', 'custom_filter_wpcf7_is_tel', 10, 2 );
