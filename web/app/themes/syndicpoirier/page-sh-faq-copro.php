<?php
/*
  Template Name: Shadow - FAQ Copropriétaires / Bailleurs / Locataires
  Template Post Type: page
*/

//Store the svg icon URL in a variable
$svg_icon_url = get_template_directory_uri() . '/assets/img/icone-maison.svg';

//Use file_get_contents() to retrieve the content of the svg
$svg_icon_content = file_get_contents( $svg_icon_url );

//Modify the SVG content based on your needs

//Sanitize the SVG content. In this example I will use https://packagist.org/packages/enshrined/svg-sanitize package
require 'vendor/autoload.php';
use enshrined\svgSanitize\Sanitizer;
$sanitizer = new Sanitizer();
$svg_icon_content = $sanitizer->sanitize($svg_icon_content);

get_header(); ?>
    
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

  <section id="syndic-hero" class="width-100% padding-y-xxl bg-cover" style="background: transparent url('<?php echo get_the_post_thumbnail_url(); ?>')">
        <div class="container max-width-adaptive-lg gabarit-titre">
            <h1 class="page-title color-white text-center line-height-1 padding-x-md padding-y-sm"><?php the_title(); ?></h1>
        </div>
    </section>

  <div class="shadow-page padding-y-xxl">

    <section id="syndic-intro">
      <div class="container max-width-md padding-top-xl text-md text-bold">
        <div class="reveal-fx reveal-fx--translate-up reveal-fx--is-visible">
          <p>
            <strong>95% des utilisateurs trouvent leur réponse dans la FAQ</strong>
          </p>
        </div>
      </div>
    </section>

    <section id="summary">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-bottom-md reveal-fx reveal-fx--translate-up reveal-fx--is-visible">
          <div class="text-component padding-lg" data-theme="yellow">
            <h3 class="section-title">Sommaire</h3>
            <a href="#lexique">Lexique</a>
            <br/>
            <br/>
            <ol class="summary-list">
              <li>
                <a href="#comment-acceder-a-ma-plateforme">Comment accéder à ma plateforme ?</a>
              </li>
              <li>
                <a href="#que-faire-si-je-ne-recois-pas-les-emails-de-notification">Que faire si je ne reçois pas les emails de notification ?</a>
              </li>
              <li>
                <a href="#modification-de-mes-informations">Modification de mes informations</a>
                <ol>
                  <li>
                    <a href="#comment-modifier-mes-informations-personnelles">Comment modifier mes informations personnelles ?</a>
                  </li>
                  <li>
                    <a href="#vous-etes-membres-du-conseil-syndical-activer-votre-statut-referent">Vous êtes membres du Conseil Syndical : activer votre statut Référent</a>
                  </li>
                  <li>
                    <a href="#comment-modifier-la-frequence-de-mes-notifications">Comment modifier la fréquence de mes notifications ?</a>
                  </li>
                  <li>
                    <a href="#comment-supprimer-mon-compte">Comment supprimer mon compte ?</a>
                  </li>
                </ol>
              </li>
              <li>
                <a href="#fonctionnement-de-la-plateforme">Fonctionnement de la plateforme</a>
                <ol>
                  <li>
                    <a href="#comment-creer-un-signalement">Comment créer un signalement ?</a>
                  </li>
                  <li>
                    <a href="#comment-repondre-a-un-signalement">Comment répondre à un signalement ?</a>
                  </li>
                </ol>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section id="lexique">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
          <h3 class="section-subtitle flex items-center padding-bottom-sm ">
            <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
            Lexique
          </h3>
          <p><strong>Occupant</strong> = Copropriétaire / Locataire / Bailleur</p>
          <p><strong>Référent</strong> = Membre du Conseil Syndical</p>
          <p><strong>Gestionnaire</strong> = Gestionnaire ou Assistant(e) de copropriétés</p>
          <p><strong>Prestataire</strong> = Artisan ponctuel (électricité, plombier…) et mainteneur (chauffage, ascenseurs…)</p>
          <p><strong>Signalement</strong> = On crée un signalement pour communiquer sur un problème ou un événement au sein de l’immeuble</p>
        </div>
      </div>
    </section>

    <section id="comment-acceder-a-ma-plateforme">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
          <h3 class="section-subtitle flex items-center padding-bottom-sm ">
            <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
            Comment accéder à ma plateforme ?
          </h3>
          <p>Sur le site <a href="https://appli.poiriersyndic.fr/email_authentication" target="_blank">https://appli.poiriersyndic.fr/email_authentication</a>, Indiquez votre adresse email.</p>
          <p>Votre adresse email n’est pas reconnue et on vous demande un <strong>code immeuble ?</strong></p>
          <p>Retrouvez le code immeuble sur l’affiche diffusée dans les parties communes, vous pouvez aussi demander à votre syndic ou conseil syndical.</p>
          <p>Puis validez votre profil.</p>
        </div>
      </div>
    </section>

    <section id="que-faire-si-je-ne-recois-pas-les-emails-de-notification">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
        <h3 class="section-subtitle flex items-center padding-bottom-sm ">
          <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
          Que faire si je ne reçois pas les emails de notification ?
        </h3>
        <p>Vérifiez que :</p>
        <ul>
          <li>Les notifications ne sont pas désactivées sur votre page <strong>« Mon Compte »</strong></li>
          <li>Les notifications n’atterrissent pas dans les emails indésirables</li>
          <li>Votre messagerie soit à jour dans sa dernière version</li>
          <li>Vous n’avez pas bloqué l’adresse email de la plateforme</li>
        </ul>
      </div>
    </section>

    <section id="modification-de-mes-informations">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
          <h3 class="section-subtitle flex items-center padding-bottom-sm">
            <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
            Modification de mes informations
          </h3>
          <div class="shadow-page__inner" id="comment-modifier-mes-informations-personnelles">
            <h4>Comment modifier mes informations personnelles ?</h4>
            <p>Cliquez sur <strong>« Mon compte »</strong>, en haut à droite de votre interface puis sur le bouton <strong>« Modifier mes informations »</strong>.</p>
            <figure>
              <img width="200" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-mon-compte.jpg" />
            </figure>
            <p>Vous pouvez modifier les informations suivantes :</p>
              <ul>
                <li>Le numéro de téléphone</li>
                <li>L’adresse mail</li>
                <li>Le nom et le prénom</li>
                <li>Vos alertes par email</li>
                <li>La visibilité de la pastille de notification sur les signalements</li>
                <li>Le mot de passe</li>
              </ul>
          </div>
          <div class="shadow-page__inner" id="vous-etes-membres-du-conseil-syndical-activer-votre-statut-referent">
            <h4>Vous êtes membres du Conseil Syndical : activer votre statut Référent</h4>
            <p>Le profil Référent vous donne accès à des fonctionnalités supplémentaires :</p>
              <ul>
                <li>Sélectionner les destinataires d’un signalement : Tout le monde, Référents uniquement, Référents + Gestionnaires, …</li>
                <li>Diffuser des notes d’information, par exemple des comptes-rendus de vos réunions, des informations utiles transmises par la Mairie, …</li>
                <li>Créer des sondages</li>
                <li>Clôturer des signalements dont vous n’êtes pas l’auteur.</li>
              </ul>
            <p>Pour activer votre profil, demandez-le à votre syndic de copropriété.</p>
          </div>
          <div class="shadow-page__inner" id="comment-modifier-la-frequence-de-mes-notifications">
            <h4>Comment modifier la fréquence de mes notifications ?</h4>
            <p>Il est possible de choisir la fréquence des notifications reçues par email :</p>
            <ul>
              <li>Dès leur publication</li>
              <li>Une fois par jour</li>
              <li>Une fois par semaine</li>
              <li>Pas du tout ! Vous conservez alors la possibilité de vous connecter à tout moment pour consulter les signalements.</li>
            </ul>
            <p>Cliquez sur <strong>« Mon compte »</strong>, en haut à droite de votre interface puis sur le bouton <strong>« Modifier mes alertes ».</strong></p>
            <p>Pour ne plus recevoir aucune notification, il faut décocher la case <strong>“Recevoir les nouveaux signalements, les mises à jour d’un signalement, les notes d’informations et sondages”</strong>.</p>
            <figure>
              <img width="600" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-alertes.jpg" />
            </figure>
          </div>
          <div class="shadow-page__inner" id="comment-supprimer-mon-compte">
            <h4>Comment supprimer mon compte ?</h4>
            <p>Ne nous quittez pas si vite !</p>
            <p>Si vous souhaitez ne plus recevoir de notifications, vous pouvez les désactiver. Vous conserverez la possibilité de vous connecter à tout moment si vous le souhaitez.</p>
            <p>Toute suppression de compte est définitive :</p>
            <ul>
              <li>Cliquez sur <strong>« Mon compte »</strong>, en haut à droite de votre interface puis sur le bouton <strong>« Modifier mes informations »</strong></li>
              <li>Cliquez sur <strong>“Supprimer mon compte”</strong> en bas de la page.</li>
            </ul>
          </div>
        </div>
    </section>

    <section id="fonctionnement-de-la-plateforme">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
        <h3 class="section-subtitle flex items-center padding-bottom-sm ">
          <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
          Fonctionnement de la plateforme
        </h3>
        <div class="shadow-page__inner" id="comment-creer-un-signalement">
          <h4>Comment créer un signalement ?</h4>
          <p>Si vous remarquez un problème au sein de votre immeuble ou logement, vous pouvez le signaler aux autres occupants et à votre gestionnaire.</p>
          <p>Pour cela, connectez-vous à la plateforme et créez un <strong>“Nouveau Signalement”</strong></p>
          <figure>
            <img width="300" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-signalement.jpg" />
          </figure>
          <p>Le signalement apparaîtra alors dans la colonne <strong>“À traiter”</strong>.</p>
          <p>Une fois que le gestionnaire ou le conseil syndical aura effectué une action sur ce signalement, il passera automatiquement dans la colonne <strong>“En cours”</strong>.</p>
          <p>Et une fois le problème résolu, l’auteur du signalement, le conseil syndical ou le gestionnaire peut clôturer le signalement. Il apparaîtra alors dans la colonne <strong>« Clôturés »</strong>.</p>
        </div>
        <div class="shadow-page__inner" id="comment-repondre-a-un-signalement">
        <h4>Comment répondre à un signalement ?</h4>
        <p>Pour répondre à un signalement :</p>
          <ul>
            <li>Cliquer sur le signalement en question</li>
            <li>Descendre le fil de la discussion</li>
            <li>Cliquer sur <strong>“Répondre”</strong></li>
          </ul>
          <figure>
            <img width="800" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-signalement-2.jpg" />
          </figure>
          <ul>
            <li>Ecrire votre message et rajouter des photos si nécessaire</li>
            <li>Valider</li>
          </ul>
          <p>Votre commentaire apparaîtra alors dans le fil de discussion.</p>
        </div>
      </div>
    </section>

  </div>
  <!-- End of shadow content -->

  <section id="cta-projet" class="grid padding-y-xxl">
    <div class="bloc-cta col-4@md offset-4@md">
        <div class="text-component text-center padding-xl">
            <h2>Vous n’avez pas trouvé la réponse à votre question ?</h2>
            <h3><a href="<?php echo site_url(); ?>/contactez-nous/">Contactez-nous</a></h3>
        </div>
    </div>
  </section>
            
  <?php endwhile; endif; ?>
        
<?php get_footer(); ?>