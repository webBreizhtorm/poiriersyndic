<?php
/*
Template Name: Comment changer de syndic
Template Post Type: post, page, product
 */
get_header();?>

        <?php if (have_posts()): while (have_posts()): the_post();?>
		        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>
		        <section id="changer-syndic-hero" class="width-100% padding-y-xxl bg-cover" style="background: transparent url('<?php echo $url; ?>');background-repeat:no-repeat;background-size:cover;background-position:80%">
		                <div class="container max-width-adaptive-lg gabarit-titre">
		                    <h1 class="page-title color-white text-center line-height-1 padding-x-sm padding-y-md" >Comment changer de&nbsp;<br class="display@md">syndic de copropriété</h1>
		                </div>
		            </section>

		            <section id="syndic-intro">
		            <div class="container max-width-lg padding-top-lg padding-bottom-xl">
		                <div class="text-component padding-y-lg">
		                    <div class=" reveal-fx reveal-fx--translate-up">
		                        <p class="text-content text-md text-bold"><?php the_field('intro');?></p>
		                    </div>
		                </div>
		                <div class="grid">
		                        <aside class="col-6@md order-2@md width-100% bg-cover reveal-fx reveal-fx--translate-left"  data-reveal-fx-delay="200" style="background: transparent url('<?php echo wp_get_attachment_image_url(102, 'medium-large'); ?>') top 0 left 0 no-repeat;"></aside>

		                        <article class="col-6@md padding-right-lg">
		                            <div class="text-component">
		                                <h3 class="section-subtitle  padding-bottom-sm reveal-fx reveal-fx--translate-right"  data-reveal-fx-delay="200">Choisir son nouveau syndic</h3>
		                                <div class="reveal-fx reveal-fx--translate-right"  data-reveal-fx-delay="400">
		                                    <?php the_field('choisir_son_nouveau_syndic');?>
		                                </div>
		                            </div>

		                            <div class="text-component padding-top-md">
		                            <h3 class="section-subtitle padding-bottom-sm reveal-fx reveal-fx--translate-right"  data-reveal-fx-delay="200">Faut-il choisir un groupe national<br/> ou un syndic indépendant ?</h3>
		                                <div class="reveal-fx reveal-fx--translate-right"  data-reveal-fx-delay="400">
		                                    <?php the_field('confiance-nouveau-syndic');?>
		                                </div>
		                            </div>
		                        </article>
		                    </div>
		                <div>
		            </div>
		            </section>
		            <section id="changement-de-syndic" data-theme="yellow">
		                <article class="container max-width-lg padding-y-xl">
		                        <div class="text-component">
		                            <h1 class="section-title text-center reveal-fx reveal-fx--translate-down padding-bottom-md">Changer de syndic en cours de mandat</h1>
		                            <div class="reveal-fx reveal-fx--translate-up">
		                                <?php the_field('changer_de_syndic_mandat');?>
		                            </div>
		                            <h1 class="section-title padding-top-sm text-center reveal-fx reveal-fx--translate-down  padding-bottom-md">Changer de syndic, et après ?</h1>
		                            <div class="reveal-fx reveal-fx--translate-up">
		                                <?php the_field('changer_de_syndic_apres');?>
		                        </div>
		                        </div>
		                        <div class="text-component text-center padding-y-lg reveal-fx reveal-fx--translate-up">
		                            <a href="<?php bloginfo('url');?>/contact" class="btn btn--primary margin-top-sm">Obtenir un devis</a>
		                        </div>
		                </article><!-- end section-container -->
		            </section>
		            <section id="raisons-du-changement-de-syndic" data-theme="default">
		                <article class="container max-width-lg padding-y-xl">
		                    <div class="text-component">
		                        <h1 class="section-subtitle color-primary text-center reveal-fx reveal-fx--translate-up">Les raisons qui peuvent amener à un changement de syndic de copropriété </h1>
		                        <?php if (have_rows('raisons_changement')): ?>
		                        <ul class="liste-raisons padding-top-lg">
			                        <?php while (have_rows('raisons_changement')): the_row();?>
					                        <li class="flex items-center padding-bottom-sm reveal-fx reveal-fx--translate-left" data-reveal-fx-delay="100">
			                                    <svg class="icon margin-right-xs" width="24" height="22.928" viewBox="0 0 24 22.928">
			                                        <g id="Groupe_412" data-name="Groupe 412" transform="translate(-3621.712 553.554)">
			                                            <path id="Tracé_1145" data-name="Tracé 1145" d="M3627.766-553.554l6.054,6.055v16.874h-12.109V-547.5Z" transform="translate(0)" fill="#728bc6"/>
			                                            <rect id="Rectangle_251" data-name="Rectangle 251" width="11.891" height="16.874" transform="translate(3633.821 -547.499)" fill="#c9d1ec"/>
			                                            <path id="Tracé_1146" data-name="Tracé 1146" d="M3639.437-553.554h-11.891l6.055,6.055h11.891Z" transform="translate(0.221)" fill="#0e529f"/>
			                                        </g>
			                                    </svg>
			                                    <?php the_sub_field('raison');?>
			                                </li>
				                        <?php endwhile;?>
		                        </ul>
		                        <?php else: ?>
		                        <?php // contenu indisponible ?>
	                        <?php endif;?>
                    </div>
                    <div class="text-component text-center padding-y-lg">
                            <a href="<?php bloginfo('url');?>/faq" class="btn btn--primary margin-top-sm">Je consulte la FAQ</a>
                        </div>
                </article>

            </section>

            <section id="cta-projet" class="grid padding-y-xxl">
                <div class="bloc-cta col-4@md offset-4@md">
                    <div class="text-component text-center padding-xl">
                        <h2>Vous avez un projet ?</h2>
                        <h3><a href="<?php bloginfo('url');?>/contact">Discutons-en</a></h3>
                    </div>
                </div>
                <!-- <div class="text-component text-center padding-y-lg">
                    <a href="<?php bloginfo('url');?>/faq" class="btn btn--primary margin-top-sm">Qu'est ce qu'un syndic ?</a>
                </div>   -->
            </section>

            <?php the_content();?>

        <?php endwhile;endif;?>


<?php get_footer();?>