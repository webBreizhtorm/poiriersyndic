<?php get_header();?>
<?php if ( ! post_password_required() ) : ?>
	<?php $type = get_query_var('post_type'); ?>
	<main id="main" role="main">
		<?php if(have_posts()) : ?>

			<div class="container max-width-adaptive-lg">
				<div class="text-component text-center padding-top-lg">
					<h1 class="page-title">Qui est le gestionnaire de mon immeuble ?</h1>
				</div>
				<div class="grid padding-y-xl@md">
					<div class="col-12@md">
						<div id="results-search-form">
							<?php echo get_search_form(); ?>
							<div class="autocomplete-results"><ul></ul></div>
						</div>
						<div class="cols">
							<?php while(have_posts()) : the_post(); ?>
								<div class="col col-12 col-sm-4 mg-b-10 is-layout-flow wp-block-bzh-column-is-layout-flow">
									<div class="actu">
											<h2 class="actu__title"><?php echo the_title() ?></h2>
											<p>
												<a href="<?php echo the_permalink(); ?>" class="btn btn--primary margin-top-sm" data-text="Lire maintenant">
													<span>Consulter</span>
												</a>
											</p>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>

		<?php else: ?>
			<div class="container max-width-adaptive-lg">
				<div class="text-component text-center padding-top-lg">
					<h1 class="page-title">Qui est le gestionnaire de mon immeuble ?</h1>
				</div>
				<div class="grid padding-y-xl@md">
					<div class="col-12@md">
						<div id="results-search-form">
							<?php echo get_search_form(); ?>
							<div class="autocomplete-results"><ul></ul></div>
						</div>
						<div class="cols">
								<div class="col col-12 col-sm-4 mg-b-10 is-layout-flow wp-block-bzh-column-is-layout-flow">
									<div class="actu">
										<h2>Désolé, nous n'avons rien trouvé !<h2>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		
	</main>
<?php endif; ?> 
<?php get_footer(); ?>