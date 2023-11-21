<?php
/*
  Template Name: Shadow - Guide Référent
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
                <a href="#quels-sont-les-avantages-de-appli-poirier-syndic">Quels sont les avantages de Appli Poirier Syndic ?</a>
              </li>
              <li>
                <a href="#qui-est-referent-de-l-immeuble">Qui est Référent de l’immeuble ?</a>
              </li>
              <li>
                <a href="#qui-fait-quoi-repartition-des-roles-entre-syndic-et-referent">Qui fait quoi : répartition des rôles entre Syndic et Référent</a>
              </li>
              <li>
                <a href="#les-fonctionnalites-pour-les-referents">Les fonctionnalités pour les Référents</a>
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

    <section id="syndic-intro">
      <div class="container max-width-md padding-top-xl text-md text-bold">
        <div class="reveal-fx reveal-fx--translate-up reveal-fx--is-visible">
          <p>
            Bienvenue sur <strong>Appli Poirier Syndic</strong>, l’outil collaboratif qui facilite la gestion quotidienne des parties communes en améliorant la communication avec votre Gestionnaire et les prestataires techniques de l’immeuble pour un meilleur suivi de la résolution des incidents.
          </p>
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
          <p>Les Référents sont les oreilles et les yeux du Syndic : ce dernier n’étant pas sur place, les mieux placés pour rendre compte de l’actualité de l’immeuble sont ceux qui y vivent !</p>
        </div>
      </div>
    </section>

    <section id="qui-fait-quoi-repartition-des-roles-entre-syndic-et-referent">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
          <h3 class="section-subtitle flex items-center padding-bottom-sm ">
            <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
            Qui fait quoi : Répartition des rôles entre Syndic et Référent
          </h3>
          <figure>
            <img width="1000" src="<?php echo get_template_directory_uri(); ?>/assets/img/poirier-roles.jpg" />
          </figure>
        </div>
      </div>
    </section>

    <section id="les-fonctionnalites-pour-les-referents">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
          <h3 class="section-subtitle flex items-center padding-bottom-sm ">
            <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
            Les fonctionnalités pour les Référents
          </h3>
          <h4>Les Infos Immeubles</h4>
          <p>Les Conseils Syndicaux peuvent désormais utiliser des modèles d’infos immeuble. Les messages préremplis portent sur :</p>
          <ol>
            <li>Les avis de passage</li>
            <li>Les notices d’utilisation</li>
            <li>La collecte des encombrants</li>
            <li>Les règles de bon voisinage</li>
            <li>Les numéros utiles</li>
            <li>Les congés annuels</li>
          </ol>
          <h4>Sondages</h4>
          <p>La fonctionnalité « sondage » permet désormais aux membres du Conseil Syndical et aux Syndics de sonder les occupants de leur immeuble.</p>
          <p>Grâce à cet outil, vous pourrez effectuer des recensements dans votre immeuble sur de nombreux sujets :</p>
          <ul>
            <li>La date pour l’AG </li>
            <li>Est-ce qu’il faut mettre en place des bornes de recharge électrique ?</li>
            <li>Est-ce qu’on devrait installer des caméras de vidéosurveillance ?</li>
          </ul>
          <h4>La communication directe</h4>
          <p>Les Référents de l’immeuble et le Syndic peuvent désormais communiquer entre eux ou vers un occupant en particulier. Dans l’optique d’améliorer les échanges sur la plateforme, cette fonctionnalité vous permettra par exemple de :</p>
          <ul>
            <li>Être contacté par votre syndic ou votre Conseil Syndical concernant un problème d’ordre privé.</li>
            <li>Disposer d’un espace d’échange entre membre du Conseil Syndical.</li>
          </ul>
          <p>Pour accéder à la fonctionnalité, il suffit de suivre la procédure de signalement. Vous avez ensuite la possibilité de choisir votre/vos destinataire(s).</p>
          <h4>Alerte email journalière</h4>
          <p>Vous préférez ne recevoir qu’un récapitulatif journalier des signalements de votre immeuble ?</p>
          <p>Chez Appli Poirier Syndic, on s’adapte à vos besoins et il suffit d’aller dans l’onglet <strong>Mon compte</strong> et de cliquer sur <strong>« modifier mes alertes »</strong> pour choisir la fréquence des notifications qui vous convient le mieux !</p>
          <p>En choisissant le récapitulatif journalier, vous recevrez un mail chaque matin à 8h avec les signalements des dernières 24 heures.</p>
      </div>
    </section>

    <section id="bonnes-pratiques-d-utilisation">
      <div class="container max-width-adaptive-md">
        <div class="col text-component padding-top-md padding-bottom-md">
          <h3 class="section-subtitle flex items-center padding-bottom-sm ">
            <span class="icon margin-right-xs"><?php echo $svg_icon_content; ?></span>
            Bonnes pratiques d’utilisation
          </h3>
          <p>Pour vous aider à avoir la communication la plus chouette possible, nous avons sélectionné pour vous quelques bonnes pratiques d’usage de la plateforme :</p>
          <h4>Montrez que vous êtes présents</h4>
          <p>Notice d’utilisation du radiateur, avancement des travaux, compte rendu d’échanges avec les prestataires ou le Syndic – plus tôt on communique, moins les échanges seront fournis.</p>
          <p>Parce que le trop plein de réactions est parfois lié à la nécessité d’exprimer son inquiétude, l’enjeu est de rassurer en montrant que le sujet est pris en compte.</p>
          <h4>Publiez les règles de bon voisinage</h4>
          <p>Incivilité, non-respect des autres… des comportements déviants peuvent parfois avoir lieu, même sur Appli Poirier Syndic. Dans ce cas, n’hésitez pas à nous contacter : nous sommes aussi là pour vous aider dans la modération.</p>
          <p>Vous pouvez également poster une info immeuble rappelant les principaux points de la charte d’utilisation ou du règlement de la copropriété. Vous trouverez un modèle « règles de bon voisinage » dans les réponses types lors de la rédaction de votre info immeuble.</p>
          <h4>Ajoutez une image à un signalement pour plus de visibilité</h4>
          <p>Les signalements avec des images sont beaucoup plus visibles que ceux n’en ayant pas. De plus, cela permet aux autres occupants, au Syndic, mais également aux prestataires connectés de visualiser plus facilement la nature du problème.</p>
          <p>Un exemple qui parle de lui-même :</p>
          <h4>Utilisez Appli Poirier Syndic comme support de vos réunions de suivi avec le Syndic</h4>
          <p>La traçabilité et l’historisation des incidents est facile à réaliser avec Appli Poirier Syndic, et vous permet d’organiser vos réunions avec plus des éléments de réflexion supplémentaires : quels sont les incidents les plus récurrents, qu’est ce qui peut être amélioré dans la gestion quotidienne, etc.</p>
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