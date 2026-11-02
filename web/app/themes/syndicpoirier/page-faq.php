<?php
/*
  Template Name: FAQ
  Template Post Type: post, page, product
*/
get_header(); ?>
    
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

  <div class="container max-width-lg padding-bottom-xl">
    <div class="margin-y-xxl">
      <h1 class="page-title text-center ">Les questions<br class="display@md"> fréquemment posées</h1>
    </div>
    <?php if ( have_rows( 'question_reponse' ) ) : ?>	
        <ul class="accordion-v2 flex flex-column gap-xxxs js-accordion" data-deep-link="on" data-animation="on" data-multi-items="on" data-version="v2">
        <?php while ( have_rows( 'question_reponse' ) ) : the_row(); ?>
        <li class="accordion-v2__item bg  js-accordion__item">

        <button class="reset accordion-v2__header padding-y-sm padding-x-sm js-tab-focus justify-start" type="button">
                <div class="text-component flex text-left justify-start flex-center">

                <?php $avatar = get_sub_field('illu_avatar');?>
                    <img class="display@md padding-left-xl block" style="max-width:80px !important;"src="<?php echo get_template_directory_uri();?>/assets/img/avatar<?php echo ($avatar );?>.png">
                    <span class="text-md"><?php the_sub_field( 'question' ); ?></span>
                </div>

                <svg class="icon accordion-v2__icon-arrow no-js:is-hidden order-3" viewBox="0 0 16 16" aria-hidden="true">
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10">
                    <path d="M2 2l12 12" />
                    <path d="M14 2L2 14" />
                    </g>
                </svg>
            </button>

            <div class="accordion-v2__panel js-accordion__panel bg-white color-accent">
                <div class="text-component padding-xl">
                    <?php the_sub_field( 'reponse' ); ?>

                    <?php $condition_ajout_btn_checked_values = get_sub_field( 'condition-ajout-btn' ); ?>

                    <?php $cible_du_lien = get_sub_field( 'cible_du_lien' ); ?>
                    <?php if ( $cible_du_lien ) : ?>
                    <div class="text-component text-left">
                        <a class="btn btn--sm btn--primary margin-top-sm" href="<?php echo esc_url( $cible_du_lien); ?>">En savoir +</a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
        </li>
    <?php else : ?>
	<?php // no rows found ?>
    <?php endif; ?>
    </ul>
  </div>
</section>
            
            <?php the_content(); ?>
            
        <?php endwhile; endif; ?>
    

<?php get_footer(); ?>