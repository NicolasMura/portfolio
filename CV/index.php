<?php
  include("../inc/constantes.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO -->
    <meta name="description" content="Nicolas MURA, CV chef de projet digital, concepteur, intégrateur et developpeur de sites et d'applications web">
    <meta name="author" content="Nicolas MURA">
    <meta name="keywords" content="CV, gestion de projet digital, gestion de projet web, concepteur web, intégrateur web, développeur web, développeur PHP, freelance, indépendant, création site internet, création application web, Paris">
    <!-- /SEO -->

    <meta name="robots" content="index, follow">
    
    <title>CV chef de projet web freelance, concepteur et développeur - Nicolas MURA</title>
    
    <!-- favicon -->
    <link rel="icon" type="image/png" href="../assets/images/other_images/favicon.png">
    
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../assets/css/CV-main.css" rel="stylesheet">
    <link href="../assets/css/CV-screen.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/CV-print.css" media="print" rel="stylesheet" type="text/css" />
    
    <!-- LiveRoad -->
    <?php
      if(HTTP_HOST_PATH == "portfolio.local"){
        echo "
          <script>document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')
          </script>
          ";
        }
    ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Google Analytics - contact@nicolasmura.fr -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-61679192-1', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <a id="lien-retour-portfolio" href=".." class="btn btn-primary btn-large bouton-perso retour hidden-xs"><span class="glyphicon glyphicon-arrow-left"></span> Retour au portfolio</a>
          <a id="lien-retour-portfolio" href=".." class="btn btn-primary btn-large bouton-perso retour visible-xs"><span class="glyphicon glyphicon-arrow-left"></span> Retour <br>au portfolio</a>
          <div id="photo-header" class="text-center">
            <!-- PHOTO (AVATAR) -->
            <div id="photo">
              <img src="../assets/images/CV-theme_images/avatar-nb2.png" alt="avatar">
            </div>
            <div id="text-header">
              <h1>Nicolas&nbsp;&nbsp;MURA<sup>&trade;</sup></span><br>Chef de <span>projet digital<br>Concepteur</span> de sites et d'applications web
              </h1>
            </div>
            <!-- Ligne de séparation pour print -->
            <div class="print-ligne-separation">
              <img src="../assets/images/CV-theme_images/line.png" width="100%" height="3px" alt="ligne de séparation pour media print">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-7">
          <!-- ABOUT ME -->
          <div class="box">
            <h2>Présentation</h2>
            <p class="justify">Après avoir exercé pendant 5 ans dans l'industrie électronique en tant que consultant auprès de grands comptes, j'ai saisi l'opportunité de me former dans la gestion, la conception et le développement de produits digitaux et d'applications web, sur desktop, tablette et mobile. </p>
            <p class="justify">Par la suite, j'ai créé mon auto-entreprise afin de lancer une activité en freelance, avec l'envie de relever les défis du numérique et de mettre mon expérience et mes compétences au service de mes clients.</p>
            <p class="justify">Les prestations que je propose :</p>
              <ul class="ul-presentation ">
                <li class="justify"><span class="fa fa-hand-o-right fa-fw"></span><span class="gras"> Gestion de projet web</span> : relation client, interface avec l'équipe digitale, analyse du besoin, rédaction de cahiers des charges / spécifications fonctionnelles, estimation de budgets, plannings ;</li>
                <li class="justify"><span class="fa fa-hand-o-right fa-fw"></span><span class="gras"> Intégration et développement</span> de sites et d'applications web, front/back-office et front/back-end ;</li>
                <li class="justify"><span class="fa fa-hand-o-right fa-fw"></span><span class="gras"> Réservation</span> de noms de domaine, <span class="gras">hébergement</span> sur serveur mutualisé ou VPS (Virtual Private Server) ;</li>
                <li class="justify"><span class="fa fa-hand-o-right fa-fw"></span><span class="gras"> Evolution et maintenance</span> de sites et d'applications web.</li>
              </ul>
          </div>
          <!-- EDUCATION -->
          <div class="box">
            <h2>Parcours</h2>
            <ul id="education" class="clearfix">
              <li>
                <div class="year pull-left">2014</div>
                <div class="description pull-right">
                  <h3><a id="lien-gobelins" href="http://www.gobelins.fr/" target="_blank">Gobelins, l'&Eacute;cole de l'image</a> | Formation <a id="lien-crpl" href="http://www.gobelins.fr/fc2014/multimedia/CR01.htm" target="_blank">CRPL</a></h3>
                  <p>
                    J'ai beaucoup appris de cette formation riche et intensive : de la méthodologie de projet, langages (HTML5, CSS3, JavaScript, AJAX, PHP5, MySQL) et logiciels / frameworks de développement (Dreamweaver, Photoshop, InDesign, Premiere, Edge Animate, After Effect, Google Webdesigner) aux newsletters et CMS (Wordpress), en passant par le référencement (SEO, SEA), l'UX design, le droit de l'internet et l'économie de l'agence digitale.
                  </p>
                </div>
              </li>
              <li>
                <div class="year pull-left">2007 2004</div>
                <div class="description pull-right">
                  <h3>&Eacute;cole d'ingénieur <a id="lien-ense3" href="http://ense3.grenoble-inp.fr/" target="_blank">ENSE<sup>3</sup></a> à l'Institut National Polytechnique de Grenoble</h3>
                  <p>
                    Anciennement ENSIEG (&Eacute;cole Nationale Supérieure des Ingénieurs &Eacute;lectriciens de Grenoble), cette école m'a permis d'acquérir des bases solides en ingénierie de production, développement logiciel et gestion de projet.<br>Le tout dans un environnement délicieusement montagnard, aux pieds des Alpes.
                  </p>
                </div>
              </li>
              <li>
                <div class="year pull-left">2004 2001</div>
                <div class="description pull-right">
                  <h3>Classes préparatoires MPSI–MP</h3>
                  <p>
                    Les années taupes : trois années de préparation intensive pour acquérir des bases solides en mathématiques, physique et sciences de l'ingénieur.
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <!-- EXPERIENCES -->
          <div class="box">
            <h2 class="print-saut-page">Expériences</h2>
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where overflow">Freelance / Autoentrepreneur</div>
                <div class="year">2014 - 2015</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Chargé de projets web</div>
                <div class="description justify">
                  <span class="fa fa-hand-o-right fa-fw"></span> Gestion de projet, relation client, conception graphique et intégration (Bootstrap 3) de sites « responsive » de promotion événementielle interne pour les rencontres commerciales du groupe <a id="lien-bpce" href="http://www.bpce.fr/" target="_blank">BPCE</a>.<br>
                  <span class="fa fa-hand-o-right fa-fw"></span> Conception, intégration et développement sous Joomla 3 du site de l'artiste peintre <a id="lien-natalina-micolini" href="http://micolini-natalina.eu/" target="_blank">Natalina Micolini</a>.<br>
                  <span class="fa fa-hand-o-right fa-fw"></span> Maintenance et évolution du site de la compagnie de danse <a id="lien-natalina-micolini" href="http://atou.fr" target="_blank">AToU</a>.
                </div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where">NetSach</div>
                <div class="year">2014</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Chef de projet web - Lancement startup</div>
                <div class="description">Analyse stratégique, positionnement, benchmarking &amp; prospection client pour le compte de la startup <a id="lien-netsach" href="http://netsach.com/" target="_blank">NetSach</a> (offre SaaS Cloud sur mesure). Intégration et développement d'une version beta du site de la société.<br>Ce stage m'a également permis de me former sur le framework Bootstrap 3 et de m'initier au langage Python sous Django.</div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where">Gobelins</div>
                <div class="year">2013 - 2014</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Chef de projet web</div>
                <div class="description">Gestion de projet (5 personnes), intégration, développement et mise en production du site (front et back-office + back-end) de la compagnie de danse AToU.<br>Découvrez le résultat sur <a id="lien-atou" href="http://atou.fr" target="_blank">www.atou.fr</a> !</div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where">ELSYS Design, Groupe ADVANS</div>
                <div class="year">2010 - 2013</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Consultant</div>
                <div class="description">Conception, développement, test, debug et qualification de systèmes électroniques pour MBDA Missiles (Défense) et Sagemcom Broadband (terminaux haut débit Livebox Play et ProV3).</div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where overflow">Merging Tech., Suisse</div>
                <div class="year">2009 - 2010</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Ingénieur en électronique</div>
                <div class="description">Prototypage du convertisseur audionumérique HORUS.<br>Audiophiles, n'hésitez pas à assouvir votre curiosité sur le site de <a id="lien-merging" href="http://www.merging.com" target="_blank">Merging</a> !</div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where">ALTEN</div>
                <div class="year">2008</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Consultant Ingénieur en électronique</div>
                <div class="description">Rédaction de dossiers de conception / spécifications fonctionnelles pour PSA Peugeot-Citroën.</div>
              </div>
            </div>
          </div>
          <!-- DEVELOPPEMENT PROFESSIONNEL -->
          <div class="box">
            <h2 class="print-saut-page">Développement professionnel</h2>
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where overflow">Elephorm<br><i>Julien Coquet</i></div>
                <div class="year">mai 2015</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Formation Data Management<br><a id="lien-google-analytics" href="http://www.elephorm.com/web-multimedia/formation-webmaster/formation-google-analytics-2014.html" target="_blank">Maîtrisez Google Analytics 2014 - Analysez vos données !</a></div>
                <div class="description justify">
                  <!-- <br> -->
                </div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where overflow">OpenClassrooms<br><i>Laurent Galichet</i></div>
                <div class="year">mai 2015</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Formation SEO | <a id="lien-seo" href="http://openclassrooms.com/courses/les-cles-pour-reussir-son-referencement-web" target="_blank">Les clés pour réussir son référencement web</a></div>
                <div class="description justify">
                  <b><i>En cours...</i></b><br>
                  > Les basics : Moteurs de recherche - Diptyque pertinence / notoriété - Ciblage longue traîne<br>
                  > Définition des mots-clés : Analyse sémantique - Volume de recherche - Analyse de la concurrence - SEMrush<br>
                </div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where overflow">&Eacute;cole Centrale Lille<br><i>Rémi Bachelet</i></div>
                <div class="year">mars 2015</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">MOOC | <a id="lien-gdp" href="http://mooc.gestiondeprojet.pm/" target="_blank">ABC de la gestion de projet</a></div>
                <div class="description justify">
                  > Notions fondamentales du management et de l'organisation de projets ;<br>
                  > Utiliser les outils de travail collaboratif sur Internet, évaluer financièrement un projet ;<br>
                  > Maîtriser les bases d'organisation : négocier les objectifs, gérer les réunions, établir les comptes rendus, définir et répartir les tâches ;<br>
                  > Outils avancés de gestion de projet : conception, planification, budget ;<br>
                  > Module Management d’Équipe Projet ;<br>
                  > Module Entrepreneuriat.<br>
                  <span class="fa fa-hand-o-right fa-fw"></span> Voir le <a id="lien-certification-gdp" href="../assets/pdf/Certificat-Centrale-Lille-MOOC-ABC-gestion-de-projet.pdf" target="_blank">certificat de réussite</a> à ce MOOC.<br>
                  <span class="fa fa-hand-o-right fa-fw"></span> Voir les <a id="lien-backpack-mozilla-gdp" href="http://backpack.openbadges.org/share/e59785624214553e17c4f0e039bef60e/" target="_blank">badges de compétences acquises</a> - Mozilla fondation Backpack.<br>
                </div>
              </div>
            </div>
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where overflow">Elephorm<br><i>Laurent Brière</i></div>
                <div class="year">novembre 2014</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Formation | <a id="lien-joomla-k2" href="http://www.elephorm.com/joomla-kit-de-construction-de-contenu-k2" target="_blank">Joomla 3.0 &amp; le CCK K2</a></div>
                <div class="description justify">
                  <!-- A faire (liste de pratiques professionnelles acquises).<br> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-5">
          <!-- CONTACT -->
          <div class="box clearfix">
            <h2>Contact</h2>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-birthday-cake fa-fw"></span></div>
              <div class="title only pull-right">33 ans</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-map-marker fa-fw"></span></div>
              <div class="title only pull-right">92700 Colombes</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-code fa-fw"></span></div>
              <div class="title only pull-right"><a id="lien-portfolio" href="http://www.nicolasmura.fr" target="_blank">www.nicolasmura.fr</a></div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
              <div class="title only pull-right"><a id="lien-contact-mail" href="mailto:contact@nicolasmura.fr">contact@nicolasmura.fr</a></div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-mobile fa-fw"></span></div>
              <div class="title only pull-right"><a id="lien-telephone" href="tel:+33648347459">(+33) (0)6 48 34 74 59</a></div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-linkedin fa-fw"></span></div>
              <div class="title only pull-right"><a id="lien-linkedin" href="https://www.linkedin.com/in/nicolasmura" target="_blank">LinkedIn</a></div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-skype fa-fw"></span></div>
              <div class="title pull-right">Skype</div>
              <div class="description pull-right">mura.nicolas</div>
            </div>
          </div>
          <!-- SKILLS -->
          <div class="box">
            <h2>Compétences</h2>
            <div class="skills">
              <div class="item-skills" data-percent="0.65">Gestion de projet digital</div>
              <div class="item-skills" data-percent="0.55">HTML 5</div>
              <div class="item-skills" data-percent="0.5">CSS 3</div>
              <div class="item-skills" data-percent="0.40">JavaScript (jQuery)</div>
              <div class="item-skills" data-percent="0.40">PHP 5</div>
              <div class="item-skills" data-percent="0.30">MySQL</div>
              <div class="item-skills" data-percent="0.20">AJAX</div>
              <div class="item-skills" data-percent="0.14">Django</div>
              <div class="item-skills" data-percent="0.20">Photoshop</div>
              <div class="item-skills" data-percent="0.25">InDesign</div>
              <div class="skills-legend clearfix">
                <div class="legend-left legend">Débutant</div>
                <div class="legend-left legend"><span>Efficace</span></div>
                <div class="legend-right legend"><span>Expert</span></div>
                <div class="legend-right legend">Maître</div>
              </div>
            </div>
          </div>
          <!-- LANGUAGES -->
          <div class="box">
            <h2>Langues</h2>
            <div id="language-skills">
              <div class="skill">Français (natif)<div class="icons pull-right"><div style="width: 100%;" class="icons-red"></div></div></div>
              <div class="skill">Anglais (opérationnel)<div class="icons pull-right"><div style="width: 72%;" class="icons-red"></div></div></div>
              <div class="skill">Espagnol (conversation)<div class="icons pull-right"><div style="width: 50%;" class="icons-red"></div></div></div>
            </div>
          </div>
          <!-- HOBBIES -->
          <div class="box">
            <h2>Hobbies</h2>
            <div class="hobby">WWW</div>
            <div class="hobby">Entrepreneuriat</div>
            <div class="hobby">Music - Jazz</div>
            <div class="hobby">Volley-ball</div>
          </div>

          <!-- DOWNLOAD CV FORMAT PDF -->
          <div class="row dl-cv-pdf">
            <div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2">
              <a id="lien-CV-PDF" href="../assets/pdf/Nicolas-MURA-Chef-de-projet-integrateur-developpeur-web.pdf" class="btn btn-primary btn-large bouton-perso" target="_blank"><span class="glyphicon glyphicon-download"></span> Téléchargez ce CV au format PDF</a>
            </div>
          </div>
          <div class="row dl-cv-pdf">
            <div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2">
              <a id="lien-CV-PDF" href="../assets/word/Nicolas-MURA-Chef-de-projet-integrateur-developpeur-web.docx" class="btn btn-primary btn-large bouton-perso" target="_blank"><span class="glyphicon glyphicon-download"></span> Téléchargez ce CV au format Word</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JQUERY -->
    <script src="js/jquery.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SCRIPTS -->
    <script src="js/scripts.js"></script>

    <!-- Tracking events via Google Analytics -->
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        // Retour portfolio
        $('#lien-retour-portfolio').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Lien sur retour portfolio', this.href);
        }); 
        // Contact
        $('#lien-portfolio').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur portfolio', this.href);
        });
        $('#lien-contact-mail').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur contact par mail', this.href);
        });
        $('#lien-telephone').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur telephone', this.href);
        });
        $('#lien-linkedin').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur profil LinkedIn', this.href);
        });
        $('#lien-twitter').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur profil Twitter', this.href);
        });
        // Parcours
        $('#lien-gobelins').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur Ecole des Gobelins', this.href);
        });
        $('#lien-crpl').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur CRPL', this.href);
        });
        $('#lien-ense3').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur ENSE3', this.href);
        });
        // Expériences
        $('#lien-bpce').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur BPCE', this.href);
        });
        $('#lien-natalina-micolini').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur Natalina Micolini', this.href);
        });
        $('#lien-netsach').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur Netsach', this.href);
        });
        $('#lien-atou').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur AToU', this.href);
        });
        $('#lien-merging').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur Merging', this.href);
        });
        // Développement pro
        $('#lien-google-analytics').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur Formation Google Analytics', this.href);
        });
        $('#lien-seo').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur Formation SEO', this.href);
        });
        $('#lien-gdp').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur MOOC GdP', this.href);
        });
        $('#lien-certification-gdp').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Telechargement certification MOOC GdP', this.href);
        });
        $('#lien-backpack-mozilla-gdp').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur Badges backpack certification MOOC GdP', this.href);
        });
        $('#lien-joomla-k2').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Clic sur Formation Joomla & CCK K2', this.href);
        });
        // Téléchargement du CV PDF
        $('#lien-CV-PDF').on('click', function() {
          ga('send', 'event', 'clic sur page CV', 'Telechargement CV PDF', this.href);
        });
      });
    </script>
    
  </body>
</html>