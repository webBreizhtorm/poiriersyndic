<?php
/*
Template Name: Go to first child
*/
// à appliquer aux éléments sur lesquels on souhaite rediriger vers une page enfant (ex: Changer de syndic -> comment changer de syndic)
// https://askwpgirl.com/redirect-parent-page-first-child-page-wordpress/

$pagekids = get_pages("child_of=".$post->ID."&sort_column=menu_order");
if ($pagekids) {
$firstchild = $pagekids[0];
wp_redirect(get_permalink($firstchild->ID));
} else {
// Do whatever templating you want as a fall-back.
}
