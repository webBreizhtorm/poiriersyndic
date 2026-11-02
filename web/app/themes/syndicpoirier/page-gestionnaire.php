<?php
/*
Template Name: Gestionnaire
Template Post Type: post, page, product
 */
?>

<?php get_header();?>

<?php if (have_posts()): while (have_posts()): the_post();?>

		<div class="container max-width-adaptive-lg">
		    <div class="text-component text-center padding-top-lg">
				<h1 class="page-title">Qui est le gestionnaire de mon immeuble ?</h1>
			</div>
			<div class="grid padding-y-xl@md">
				<div class="col-6@md">
                    <p>Veuillez renseigner votre adresse exacte dans le champ ci-dessous</p>
					<?= custom_search_form( null, 'Rechercher...', 'gestionnaire'); ?>
				</div>
				<aside class="col-6@md">
					<?php echo the_post_thumbnail('full'); ?>
				</aside>
			</div>
		</div>
		<?php endwhile;endif;?>

<?php get_footer();?>