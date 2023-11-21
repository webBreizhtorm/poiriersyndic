</div><!-- end page -->
<!-- <?php get_template_part( 'parts/newsletter' ); ?> -->
<footer class="main-footer" data-theme="blue">
	
	<div class="container max-width-lg">
		<div class="grid gap-lg">
			<?php dynamic_sidebar( 'Footer Colonne 1' ); ?>
			<?php dynamic_sidebar( 'Footer Colonne 2' ); ?>
			<div class="col-4@md flex flex-column justify-start flex-start padding-bottom-xl">
				<div class="flex flex-row items-center justify-center justify-start@md margin-bottom-md">
					<svg class="icon margin-right-xxs"  width="32" height="32" viewBox="0 0 32 32"  aria-hidden="true">
						<path id="picto_tel" data-name="picto tel" d="M138.215,135.919l-.851,1.4s-3.234,4.435,3.7,11.414h0l.033.032.032.033h0c6.978,6.93,11.413,3.7,11.413,3.7l1.4-.851a1.646,1.646,0,0,0,.176-2.481l-1.666-1.666a1.646,1.646,0,0,0-2.152-.153l-1.773,1.133s-1.192.7-4.523-2.615-2.615-4.523-2.615-4.523l1.133-1.772a1.647,1.647,0,0,0-.153-2.152l-1.666-1.666A1.646,1.646,0,0,0,138.215,135.919Z" transform="translate(-136.61 -135.261)" fill="#fff"/>
					</svg>
					<a class="link-fx-2" href="tel:<?php the_field('telephone_principal', 'option'); ?>" title="Appeller Syndic Poirier">
						<span class="color-white text-left">
							<?php the_field('telephone_principal', 'option'); ?>
						<span>
					</a>
				</div>
				<div class="flex flex-row items-center justify-center justify-start@md margin-bottom-md">
					<svg class="icon margin-right-xxs"  width="32" height="32" viewBox="0 0 32 32"  aria-hidden="true">
						<path id="picto-adresse" d="M160.689,209.175a9.108,9.108,0,1,0-18.215,0s-.637,8.912,9.107,17.53C161.326,218.087,160.689,209.175,160.689,209.175Zm-9.108,3.844a3.844,3.844,0,1,1,3.844-3.844A3.844,3.844,0,0,1,151.581,213.019Z" transform="translate(-142.465 -200.067)" fill="#fff"/>
					</svg>
					<a class="link-fx-2" href="https://www.google.fr/maps/place/28+Boulevard+du+Colombier,+35000+Rennes/@48.1027591,-1.6801478,17z/data=!3m1!4b1!4m5!3m4!1s0x480edf57f74362b7:0x51656698fef3471d!8m2!3d48.1027555!4d-1.6779591" target="_blank" title="Localiser les bureaux de Syndic Poirier sur une carte">
						<!-- <?php the_field('adresse_postale', 'option'); ?> -->
						<span class="color-white text-left">28 Bld du Colombier<br class=>35000 Rennes</span>
					</a>
				</div>
				<div class="flex flex-row items-center  justify-center justify-start@md margin-bottom-md">
					<svg class="icon margin-right-xxs"  width="32" height="32" viewBox="0 0 32 32"  aria-hidden="true">
						<g id="picto_mail_" data-name="picto mail " transform="translate(0.673 0.673)">
							<rect id="Rectangle_219" data-name="Rectangle 219" width="26.596" height="17.948" transform="translate(0 0)" fill="#fff" stroke="#3664ae" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.347"/>
							<path id="Tracé_750" data-name="Tracé 750" d="M153.226,405.233l3.256,2.91,6.649,5.942h-26.6l6.649-5.942,3.256-2.91" transform="translate(-136.535 -396.259)" fill="#fff" stroke="#3664ae" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.347"/>
							<path id="Tracé_749" data-name="Tracé 749" d="M151.844,402.595a3.018,3.018,0,0,1-4.022,0l-4.638-4.145-6.649-5.942h26.6l-6.649,5.942Z" transform="translate(-136.535 -392.508)" fill="#fff" stroke="#3664ae" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.347"/>
						</g>
					</svg>
					<a class="link-fx-2" href="mailto:mickael@poiriersyndic.fr" title="Envoyer un e-mail à Syndic Poirier">
						<span class="color-white text-left"><?php the_field('mail_de_contact', 'option'); ?></span>
					</a>
				</div>
			</div>
			<section class="grid socials text-center border-top border-contrast-low padding-top-xl">
				<div class="container">
					<div class="grid">
						<div class="col-4@md margin-auto">
								<h1 class="flex flex-row justify-center align-center">Suivez-nous. 
									<a class="footer-icon-link padding-y-xxxxs padding-x-xs" href="https://www.linkedin.com/company/poirier-syndic/" target="_blank">
										<svg class="icon footer-icon color-white" viewBox="0 0 32 32"><title>Notre profil Linkedin</title><g><path d="M29,1H3A2,2,0,0,0,1,3V29a2,2,0,0,0,2,2H29a2,2,0,0,0,2-2V3A2,2,0,0,0,29,1ZM9.887,26.594H5.374V12.25H9.887ZM7.63,10.281a2.625,2.625,0,1,1,2.633-2.625A2.624,2.624,0,0,1,7.63,10.281ZM26.621,26.594H22.2V19.656c0-1.687,0-3.75-2.35-3.75s-2.633,1.782-2.633,3.656v7.126H12.8V12.25h4.136v1.969h.094a4.7,4.7,0,0,1,4.231-2.344c4.513,0,5.359,3,5.359,6.844Z"></path></g></svg>
									</a>
									<a class="footer-icon-link padding-y-xxxxs"href="https://www.google.com/search?q=poirier+syndic+rennes&rlz=1C5CHFA_enFR819FR819&oq=poirier+syndic+rennes&aqs=chrome..69i57j69i60.2265j1j7&sourceid=chrome&ie=UTF-8#lrd=0x480edff5404e49ad:0x78ab8e7db2d25275,1,,," target="_blank">
									<svg  class="icon footer-icon color-white" width="32" height="32.58" viewBox="0 0 32 32.58"><title>Parcourez les avis Google</title><path d="M19.285,34.58A16.29,16.29,0,1,1,30.257,6.247l.548.5L25.432,12.12l-.5-.426a8.689,8.689,0,1,0-5.65,15.286,7.77,7.77,0,0,0,7.472-4.773h-8.18V14.873l15.971.022.12.562a17.507,17.507,0,0,1-3.209,13.93C28.664,32.831,24.569,34.58,19.285,34.58Z" transform="translate(-2.992 -2)"/></svg>

									</a>
								</h1>	
						</div>			
						<div class="col-6 col-4@md offset-4@md flex flex-row margin-auto margin-0@md padding-top-md">
							<a href="https://www.unis-immo.fr/">
								<img class="block margin-auto"style="max-width:210px;" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/unis-logo.png" title="Unis: Les professionnels de l'immobilier"/>
							</a>							
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<div class="footer-bg"></div>
</footer>


<?php wp_footer(); ?>
</body>
</html>