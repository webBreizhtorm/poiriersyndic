<?php
/*
  Template Name: Shadow - Guide Utilisateur
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

    <section id="summary">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-bottom-md reveal-fx reveal-fx--translate-up reveal-fx--is-visible">
          <div class="text-component padding-lg" data-theme="yellow">
            <h3 class="section-title">Sommaire</h3>
            <ol class="summary-list">
              <li>
                <a href="#qu-est-ce-que-appli-poirier-syndic">Qu’est-ce que Appli Poirier Syndic ?</a>
              </li>
              <li>
                <a href="#les-fonctionnalites-de-base">Les fonctionnalités de base</a>
              </li>
              <li>
                <a href="#la-charte-d-utilisation">La Charte d’Utilisation</a>
              </li>
              <li>
                <a href="#quels-sont-les-avantages-de-appli-poirier-syndic">Quels sont les avantages de Appli Poirier Syndic ?</a>
              </li>
              <li>
                <a href="#qui-est-referent-de-l-immeuble">Qui est Référent de l’immeuble ?</a>
              </li>
              <li>
                <a href="#les-fonctionnalites-pour-les-occupants">Les fonctionnalités pour les Occupants</a>
              </li>
              <li>
                <a href="#bonnes-pratiques-d-utilisation">Bonnes pratiques d’utilisation</a>
              </li>
              <li>
                <a href="#support-et-assistance-technique">Support & assistance technique</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section id="qu-est-ce-que-appli-poirier-syndic">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
        <h3 class="section-subtitle flex items-center padding-bottom-sm ">
          <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
          Qu’est-ce que Appli Poirier Syndic ?
        </h3>
        <p><strong>Appli Poirier Syndic</strong> est une plateforme de communication qui simplifie l’entretien des parties communes, et met en relation les occupants, le Syndic et les prestataires techniques de l’immeuble.</p>
        <p>Accessible sur tous les écrans (smartphones, tablettes et ordinateurs),<strong>Appli Poirier Syndic</strong>vous permet de prendre soin de votre bien commun et valoriser votre patrimoine.</p>
        <p>Tous les occupants d’un immeuble peuvent s’inscrire sur la plateforme qu’ils soient <strong>copropriétaires ou locataires</strong>. Il en va de même pour les gestionnaires et les entreprises de prestations techniques. En s’inscrivant, les utilisateurs s’engagent à fournir des informations sincères, exactes, à jour et complètes.</p>
        <p>Voici le mode de fonctionnement de la plateforme :</p>
        <figure>
          <img width="800" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-plateforme.jpg" />
        </figure>
      </div>
    </section>

    <section id="les-fonctionnalites-de-base">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
          <h3 class="section-subtitle flex items-center padding-bottom-sm ">
            <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
            Les fonctionnalités de base
          </h3>
          <div class="grid gap-xl">
            <figure class="shadow-page__figure col-4@md">
              <img width="64" src="<?php echo get_template_directory_uri(); ?>/assets/img/chouettecopro--icon_signalez.jpg" />
              <figcaption><strong>Signaler</strong> tout incident technique en rapport avec votre immeuble et suivre la progression de sa résolution.</figcaption>
            </figure>
            <figure class="shadow-page__figure col-4@md">
                <img width="64" src="<?php echo get_template_directory_uri(); ?>/assets/img/chouettecopro--icon_visualisez.jpg" />
                <figcaption><strong>Visualiser</strong> les signalements en cours et résolus.</figcaption>
              </figure>
              <figure class="shadow-page__figure col-4@md">
                <img width="64" src="<?php echo get_template_directory_uri(); ?>/assets/img/chouettecopro--icon_consultez.jpg" />
                <figcaption><strong>Consulter</strong> les informations générales transmises par le gestionnaire de syndic/bailleur.</figcaption>
              </figure>
          </div>
        </div>
      </div>
    </section>

    <section id="la-charte-d-utilisation">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
          <h3 class="section-subtitle flex items-center padding-bottom-sm ">
            <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
            La charte d'utilisation
          </h3>
          <p>Pour le bénéfice de tous, nous vous remercions de respecter les consignes suivantes :</p>
          <ul>
            <li><strong>Utiliser l’application pour tout signalement</strong> plutôt que de contacter directement le gestionnaire</li>
            <li>Signaler seulement les incidents relatifs aux <strong>aspects techniques des parties communes</strong> de votre immeuble.</li>
            <li>Les signalements sans rapport avec la gestion technique du bâtiment (ex : remontée d’incivilités, communication entre occupants) sont <strong>tolérés s’ils sont constructifs et bénéficient à tous</strong>.</li>
            <li>S’assurer que l’incident n’a <strong>pas été déjà signalé</strong> sur la plateforme avant d’en déclarer un nouveau (pour plus d’efficacité dans la résolution).</li>
            <li>Éviter les <strong>signalements abusifs</strong> qui n’ont pas de rapport avec la copropriété.</li>
            <li>Ne pas tenir de propos <strong>diffamants ou irrespectueux.</strong></li>
          </ul>
        </div>
      </div>
    </section>

    <section id="quels-sont-les-avantages-de-appli-poirier-syndic">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
          <h3 class="section-subtitle flex items-center padding-bottom-sm ">
            <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
            Quels sont les avantages de Appli Poirier Syndic ?
          </h3>
          <p><strong>Accélérer la résolution</strong> des incidents techniques du quotidien, par une déclaration immédiate depuis son mobile et un meilleur partage des informations entre les parties prenantes. Chaque habitant inscrit au service peut consulter et réagir sur les signalements, et suivre leur résolution.</p>
          <p><strong>Mieux remonter</strong> les incidents : en ayant l’information si l’incident a déjà été signalé, en évitant de remonter plusieurs fois le même incident, avec la possibilité de communiquer la localisation de l’incident et de joindre une photo.</p>
          <p><strong>Assurer un meilleur suivi</strong> opérationnel des problèmes, et pouvoir consulter l’historique des incidents techniques déjà résolus.</p>
          <p><strong>Améliorer la communication</strong> entre les voisins, pour une ambiance apaisée et une plus grande convivialité.</p>
          <p><strong>Diminuer les charges</strong> de copropriété, parce qu’une copropriété mieux entretenue génère moins de travaux à long terme.</p>
        </div>
      </div>
    </section>

    <section id="qui-est-referent-de-l-immeuble">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
          <h3 class="section-subtitle flex items-center padding-bottom-sm ">
            <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
            Qui est Référent de l'immeuble ?
          </h3>
          <p>Ce seront les membres du <strong>Conseil Syndical</strong> dans le cas d’une copropriété,. L’outil étant collaboratif, plusieurs référents pourront coexister de manière profitable pour la communauté.</p>
        </div>
      </div>
    </section>

    <section id="les-fonctionnalites-pour-les-occupants">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
          <h3 class="section-subtitle flex items-center padding-bottom-sm ">
            <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
            Les fonctionnalités pour les Occupants
          </h3>
          <p>La plateforme est constituée de <strong>4 onglets</strong> visibles en haut de l’écran.</p>
          <figure>
            <img width="300" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-onglets.jpg" />
          </figure>
          <h4>Signalements</h4>
          <p>Cet onglet affiche la liste des signalements <strong>ouverts</strong> (à fond blanc) et <strong>clos</strong> (à fond gris). Vous pouvez consulter le <strong>détail</strong> de chaque fiche de signalement en cliquant dessus.</p>
          <h5>Emails de notification</h5>
          <p>A chaque <strong>nouveau signalement, commentaire</strong> ou <strong>clôture</strong>, vous serez averti par un email de notification. Vous pourrez ainsi consulter l’événement via votre boite mail ou vous rendre directement sur la plateforme. Notez toutefois que vous avez la possibilité de <strong>configurer la fréquence</strong> des notifications. Vous trouverez les indications sur cette option plus bas.</p>
          <h5>Nouveau signalement</h5>
          <p>Sélectionnez la <strong>catégorie adéquate</strong>, puis précisez la <strong>localisation</strong> si nécessaire (étage etc.). Vous pourrez ensuite décrire sur un <strong>texte court</strong> (mais précis !) l’incident, et prendre <strong>une photo</strong> pour l’illustrer.</p>
          <h5>Répondre</h5>
          <p>En cliquant sur le bouton <strong>« Répondre »</strong> vous pouvez apporter une <strong>précision</strong> ou un <strong>commentaire utile</strong> pour la résolution de l’incident.</p>
          <h5>Clôturer</h5>
          <p>Si vous constatez que l’incident signalé par vos soins a été résolu, vous pouvez le clôturer en cliquant sur ce bouton.  La clôture d’un signalement n’est possible que par <strong>l’auteur</strong> de ce dernier, par un <strong>Référent</strong> ou par le <strong>Syndic</strong>.</p>
          <h4>Gérer</h4>
          <p>Vous pouvez consulter les visites d’immeubles si celles-ci sont partagées par votre syndic. </p>
          <h4>Communiquer</h4>
          <p>Dans cet onglet, vous pourrez consulter les notes d’informations. Ce sont les <strong>infos générales</strong> transmises par le Syndic ou les Référents, habituellement affichées à l’entrée de l’immeuble.</p>
          <p>Vous pourrez également <strong>répondre à un sondage</strong>. Cette fonctionnalité répond à un besoin des Syndics et membres du conseil syndical pour effectuer des recensements dans leur immeuble.</p>
          <p>En participant au sondage, vous participez à la vie de votre immeuble en les informant sur vos souhaits.</p>
          <h5>Comment répondre au Sondage ?</h5>
          <p>Lorsqu’un sondage est créé par un Référent ou un Gestionnaire, vous recevez une notification email.</p>
          <p>Vous pouvez répondre au sondage directement via le mail en cliquant sur le bouton « répondre au sondage ».</p>
          <figure>
            <img width="200" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-repondre.jpg" />
          </figure>
          <p>Lorsqu’un sondage est clôturé par son auteur, vous recevez les résultats par email et sa case est grisée dans l’Info immeuble comme l’image ci-dessous.</p>
          <figure>
            <img width="800" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-sondage.jpg" />
          </figure>
          <h4>Mon Immeuble</h4>
          <p>Vous pouvez également <strong>imprimer l’affiche</strong> comportant le code immeuble qui permet de s’inscrire sur Appli Poirier Syndic et la coller dans les parties communes. Ou <strong>partagez-la</strong> directement avec vos contacts pour inviter vos voisins à utiliser cette chouette plateforme !</p>
        </div>
        <h4>Mon compte</h4>
        <figure>
          <img width="200" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-mon-compte.jpg" />
        </figure>
        <h5>Modifier mes informations</h5>
        <p>À tout moment, vous pouvez <strong>modifier les informations</strong> vous concernant et générer un nouveau <strong>mot de passe.</strong></p>
        <figure>
          <img width="400" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-informations.jpg" />
        </figure>
        <h5>Alerte email journalière</h5>
        <p>Vous préférez ne recevoir qu’un récapitulatif journalier ou hebdomadaire des signalements de votre immeuble ?</p>
        <p>Chez Appli Poirier Syndic, on s’adapte à vos besoins et il suffit d’aller dans l’onglet <strong>Mon compte</strong> et de cliquer sur <strong>« modifier mes alertes »</strong> pour choisir la fréquence des notifications qui vous convient le mieux !</p>
        <p>En choisissant le récapitulatif journalier, vous recevrez un mail chaque jour à 8 heures avec les signalements des dernières 24 heures. Notez que vous serez toujours averti en cas de note d’information. </p>
        <figure>
          <img width="800" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-alertes-journalieres.jpg" />
        </figure>
        <h5>Configuration du service</h5>
        <p>Paramétrez par catégorie les notifications email que vous souhaitez recevoir en allant dans l’onglet <strong>Mon compte</strong>.</p>
        <p>Vous vivez au rez-de-chaussée et les incidents concernant l’ascenseur ne vous intéressent pas ?</p>
        <p>Cliquez sur le bouton <strong>« Modifier »</strong> devant la catégorie « Ascenseur » et vous ne recevrez plus de notification concernant cette catégorie.</p>
        <figure>
          <img width="400" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-ascenseur.jpg" />
        </figure>
      </div>
    </section>

    <section id="bonnes-pratiques-d-utilisation">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
          <h3 class="section-subtitle flex items-center padding-bottom-sm ">
            <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
            Bonnes pratiques d’utilisation
          </h3>
          <p>Pour vous aider à avoir la communication la plus chouette possible, nous avons sélectionné pour vous quelques bonnes pratiques d’usage de la plateforme</p>
          <h4>Utiliser uniquement Appli Poirier Syndic pour signaler un incident relevant des parties communes</h4>
          <p>Un signalement sur Appli Poirier Syndic et votre gestionnaire sera informé de l’incident ! <strong>Vérifiez</strong> si l’incident a déjà été signalé et soyez <strong>concis</strong> !</p>
          <h4>Sélectionner la catégorie de signalement adéquate</h4>
          <p>Afin que le Syndic ne soit pas alerté sur des sujets pour lesquels il n’a pas à intervenir, une catégorie a été créée : <strong>Messages entre voisins.</strong></p>
          <p>Nous vous remercions donc de préférer la catégorie « Messages entre voisins » lorsque votre signalement concerne uniquement <strong>l’ensemble des occupants</strong> et ne demande pas d’intervention de la part du Syndic.</p>
          <h4>Ajouter une image à un signalement pour plus de visibilité</h4>
          <p>Les signalements avec des images sont beaucoup <strong>plus visibles</strong> que ceux n’en ayant pas. De plus, cela permet aux autres occupants, au Syndic, mais également aux prestataires connectés de <strong>visualiser</strong> plus facilement la <strong>nature du problème.</strong></p>
          <figure>
            <img width="600" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-fuite.jpg" />
          </figure>
          <h4>Veillez à rester courtois</h4>
          <p>Oui, oui, on sait … Vous avez 15 sacs de courses à porter et l’ascenseur est en panne. Mais bon, un petit message sans animosité, c’est toujours plus chouette !</p>
          <h4>Pensez à clôturer vos signalements</h4>
          <p>Ça y est, l’ascenseur fonctionne de nouveau. Chouette ! Vite vite, on va sur Appli Poirier Syndic et on en informe ses voisins. C’est aussi ça le collaboratif !</p>
          <p class="text-center"><strong>À vous de jouer ! À vos claviers… Prêt ? Signalez !</strong></p>
        </div>
      </div>
    </section>

    <section id="support-et-assistance-technique">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
          <h3 class="section-subtitle flex items-center padding-bottom-sm ">
            <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
            Support & assistance technique
          </h3>
          <p>Vous avez une question particulière, ou simplement besoin d’un coup de pouce ? Consultez la FAQ ou contactez-nous.</p>
          <p>En vous souhaitant une bonne utilisation,</p>
          <p><i>L’équipe Appli Poirier Syndic</i></p>
        </div>
      </div>
    </section>

  </div>
  <!-- End of shadow content -->
            
  <?php endwhile; endif; ?>
        
<?php get_footer(); ?>