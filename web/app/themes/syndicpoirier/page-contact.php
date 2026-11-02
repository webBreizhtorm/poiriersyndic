<?php
/*
Template Name: Contact
Template Post Type: post, page, product
 */
?>

<?php get_header();?>

<?php if( get_field('afficher_popup') ) : ?>
<div class="modal modal--animate-translate-up modal--is-visible alert-msg flex items-end bg-contrast-higher bg-opacity-30% js-modal" id="alert-msg-id">
    <div class="modal__content max-height-100% flex flex-column padding-md" role="alertdialog" aria-labelledby="alert-msg-title" aria-describedby="alert-msg-descr">
        <div class="margin-bottom-xxxs">
            <button class="reset alert-msg__close-btn radius-full shadow-md text-sm js-modal__close js-tab-focus">
                <span>Fermer</span>
                <svg class="icon icon--xxs margin-left-xxxs" viewBox="0 0 12 12" aria-hidden="true" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                    <line x1="1" y1="1" x2="11" y2="11" />
                    <line x1="11" y1="1" x2="1" y2="11" />
                </svg>
            </button>
        </div>
        <div class="width-100% max-width-xxxs padding-sm bg radius-md shadow-md overflow-auto">
            <div class="text-component text-sm v-align-md">
                <h1 id="alert-msg-title color-accent" class="text-md text-center">Vous préférez un échange de vive voix ?</h1>
                <h2 class="text-primary text-center v-space-xxl">
                    <span class="block line-height-1">Appelez-nous :</span>
                    <a class="block link-fx-2 padding-top-sm"href="tel:0221650208">02 21 65 02 08</a>
                </h2>
                <p id="alert-msg-descr" class="color-contrast-higher text-center">               
                Du lundi au vendredi de 9h à 12h et de 14h à 18h <br>sauf le vendredi jusqu'à 16h00
                </p>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if (have_posts()): while (have_posts()): the_post();?>


		<div class="container max-width-adaptive-lg">
		    <div class="text-component text-center padding-top-lg">
				<h1 class="page-title">Discutons de votre projet</h1>
			</div>
			<div class="grid padding-y-xl@md">
				<div class="col-6@md">
					<?php the_content();?>
				</div>
				<aside class="col-6@md">
					<?php echo the_post_thumbnail('full'); ?>
				</aside>
			</div>
		</div>
		<?php endwhile;endif;?>

<?php get_footer();?>