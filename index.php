<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <meta name="description" content="Nicolas MURA Portfolio - Consultant indépendant, développeur et intégrateur web au service de vos ambitions numériques.">
    <meta name="author" content="Nicolas MURA">
    <meta name="keywords" content="web, python, django, développement, intégration">
    <!-- /SEO -->

    <!-- Social media  -->
    <meta property="og:title" content="Nicolas MURA Portfolio - Développement et intégration web" />
    <meta property="og:url" content="http://www.nicolasmura.fr" />
    <meta property="og:image" content="http://www.nicolasmura.fr/nicolas-mura-portfolio-gestion-conception-integration-developpement-digital.jpg" />
    <!-- /Social media  -->

    <meta name="robots" content="index, follow">

    <title>Nicolas MURA Portfolio - Consultant Web - Consultant indépendant, développeur et intégrateur web au service de vos ambitions digitales.</title>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/images/other_images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- vegas bg -->
    <link href="assets/js/vegas/jquery.vegas.min.css" rel="stylesheet">
    <!-- owl carousel css -->
    <link href="assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="assets/js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <!-- intro animations -->
    <link href="assets/js/wow/animate.css" rel="stylesheet">
    <!-- font awesome -->
    <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- lightbox -->
    <link href="assets/js/lightbox/css/lightbox.css" rel="stylesheet">

    <!-- styles for this template -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- place your extra custom styles in this file -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- LiveRoad -->
    <?php
      if($_SERVER["HTTP_HOST"] != "www.nicolasmura.fr" AND $_SERVER["HTTP_HOST"] != "nicolasmura.fr"
        AND $_SERVER["HTTP_HOST"] != "nicolasmura.com" AND $_SERVER["HTTP_HOST"] != "www.nicolasmura.com"){
        echo "
          <script>
            document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')
          </script>
          ";
        }
    ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Google Apps for work - Validation du domaine -->
    <meta name="google-site-verification" content="V78TlwexPPdcFzZ51M5wvGnolcyDV7X7pLyX4wfCH_c" />

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

  <!-- <body data-default-background-img="assets/images/other_images/bg5.jpg" data-overlay="true" data-overlay-opacity="0.35"> -->
  <body>

    <!-- Outer Container -->
    <div id="outer-container">

      <!-- Left Sidebar -->
      <section id="left-sidebar">
        
        <div class="logo hidden-xs">
          <a id="lien-accueil" href="#intro" class="link-scroll"><span class="glyphicon glyphicon-th hidden-xs"></span></a>
        </div><!-- .logo -->

        <!-- Menu Icon for smaller viewports -->
        <div id="mobile-menu-icon" class="visible-xs" onClick="toggle_main_menu();"><span class="glyphicon glyphicon-th"></span></div>

        <ul id="main-menu">
          <li id="menu-item-services" class="menu-item scroll"><a id="lien-menu-prestations" href="#services">Prestations</a></li>
          <li id="menu-item-temoignages" class="menu-item scroll"><a id="lien-menu-temoignages" href="#temoignages">Témoignages</a></li>
          <li id="menu-item-competences" class="menu-item scroll"><a id="lien-menu-competences" href="#competences">Compétences</a></li>
          <li id="menu-item-realisations" class="menu-item scroll"><a id="lien-menu-realisations" href="#realisations">Clients / Réalisations</a></li>
          <li id="menu-item-contact" class="menu-item scroll"><a id="lien-menu-contact" href="#contact">Contact</a></li>
        </ul><!-- #main-menu -->

      </section><!-- #left-sidebar -->
      <!-- end: Left Sidebar -->

      <section id="main-content" class="clearfix">
        
        <article id="intro" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg5.jpg">
        <!-- <article id="intro" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/fond-gris.png"> -->
          <div class="content-wrapper clearfix wow fadeInDown" data-wow-delay="0.3s">
            <div class="col-sm-10 col-md-9 pull-right">

                <section class="feature-text">
                  <h1 class="cesure"><span class="nom-prenom">Nicolas MURA</span><br><span class="color-orange">&lt; Consultant Web /&gt;</span></h1>
                  <p>Développement &amp; Intégration Python / Django<br><span class="color-orange">Au service de vos ambitions digitales</span></p>
                  <p><a id="lien-cv" href="assets/pdf/Nicolas-MURA-Consultant-independant-web-junior-python-django.pdf" class="link-scroll btn btn-outline-inverse btn-lg">Voir mon CV</a></p>
                  <!-- <p><a id="lien-cv" href="CV" class="link-scroll btn btn-outline-inverse btn-lg">Voir mon CV</a></p> -->
                  <p><a id="lien-en-savoir-plus" href="#services" class="link-scroll btn btn-outline-inverse btn-lg">En savoir plus</a></p>
                </section>

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="services" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg1.jpg">
        <!-- <article id="services" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/fond-gris.png"> -->
          <div class="content-wrapper clearfix">
            <div class="col-sm-10 col-md-9 pull-right">

                <h1 class="section-title">Donnez de la <span class="color-orange">visibilité</span><br>à votre activité</h1>

                <p class="feature-paragraph"><img data-img-src="assets/images/other_images/transp-image7.png" class="lazy pull-right" alt="Lorem Ipsum">De l'analyse du besoin à la mise en production, en passant par la gestion de projet, la conception, le développement, l'intégration, le testing et la maintenance, je vous accompagne avec passion tout au long de vos projets en vous proposant des solutions adaptées.</p>
                <p class="feature-paragraph">Faites-vous une idée au travers des <a id="lien-temoignages" href="#temoignages" class="link-scroll color-orange">témoignages</a>.</p>
                <h4 class="color-orange">Un besoin spécifique ?</h4>
                <p class="feature-paragraph">J'interviens également sur des besoin ponctuels en gestion de projet, intégration et développement web. Qu'il s'agisse d'un site vitrine, e-commerce ou d'une application web, sur desktop, mobile ou tablette, vous aurez à votre service un interlocuteur réactif et compétitif.</p>
                <p class="feature-paragraph">Découvrez en détails les <a id="lien-competences" href="#competences" class="link-scroll color-orange">compétences</a> que je mets à votre disposition.</p>
                <!-- <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-1');" class="btn btn-outline-inverse btn-sm">L'offre dans le détail</a></p> -->
                
                <!-- <div class="content-to-populate-in-modal" id="modal-content-1">
                  <h1>Lorem Ipsum</h1>
                  <p><img data-img-src="assets/images/other_images/transp-image4.png" class="lazy rounded_border hover_effect pull-right" alt="Lorem Ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in urna vel ante mollis tincidunt. Donec nec magna condimentum tortor laoreet lobortis. Nunc accumsan sapien eu tortor fringilla, et condimentum metus pellentesque. Maecenas rhoncus tortor nec mi congue aliquet. Integer eu turpis scelerisque, iaculis magna non, tempor sem. Quisque consectetur nisi eu felis euismod, sit amet faucibus justo molestie. Ut pretium sapien dui, id facilisis metus interdum pharetra.</p>
                  <p>Etiam scelerisque lacus tempor, rhoncus diam vel, gravida felis. Fusce tristique sem et leo aliquam vulputate. Ut eget orci in sapien commodo fringilla. Ut luctus faucibus viverra. Quisque ut ante eget libero rutrum imperdiet. Morbi in diam bibendum, venenatis arcu sed, consequat libero. Nulla imperdiet, ipsum et adipiscing pulvinar, nibh metus porta mauris, et vestibulum dolor sapien sit amet justo. In dignissim leo nec erat faucibus volutpat.</p>
                  <h3>Duis dictum lorem metus, vitae dapibus</h3>
                  <p><img data-img-src="assets/images/other_images/transp-image3.png" class="lazy rounded_border hover_effect pull-left" alt="Lorem Ipsum">Sed auctor urna mi, sed fringilla felis vulputate nec. Cras eu nibh id quam pretium convallis. Donec ante enim, placerat nec sagittis sit amet, tempor in velit. Maecenas ultricies commodo lacus id porta. Suspendisse eros elit, lacinia vitae erat vitae, egestas accumsan nunc. Maecenas dictum odio ipsum, non volutpat erat consequat tempor. Pellentesque sed malesuada turpis. Quisque eget lacus sit amet dui feugiat molestie sit amet eget purus. Morbi eget neque nec lectus tempus sagittis nec at ante. </p>
                  <p>Etiam scelerisque lacus tempor, rhoncus diam vel, gravida felis. Fusce tristique sem et leo aliquam vulputate. Ut eget orci in sapien commodo fringilla. Ut luctus faucibus viverra. Quisque ut ante eget libero rutrum imperdiet. Morbi in diam bibendum, venenatis arcu sed, consequat libero. Nulla imperdiet, ipsum et adipiscing pulvinar, nibh metus porta mauris, et vestibulum dolor sapien sit amet justo. In dignissim leo nec erat faucibus volutpat.</p>
                </div> --><!-- #modal-content-1 -->

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="temoignages" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg3.jpg">
        <!-- <article id="carousel" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/fond-gris.png"> -->
          <div class="content-wrapper clearfix">

              <div id="features-carousel" class="carousel slide with-title-indicators max-height" data-height-percent="70" data-ride="carousel">
                
                <!-- Indicators - slide navigation -->
                <ol class="carousel-indicators title-indicators">
                  <li data-target="#features-carousel" data-slide-to="0" class="active">Casa del Vagna</li>
                  <li data-target="#features-carousel" data-slide-to="1">AToU</li>
                  <li data-target="#features-carousel" data-slide-to="2">Natalina Micolini</li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                  <div class="item active">
                    <div class="carousel-text-content">
                      <img src="assets/images/other_images/logo-casadelvagna.png" class="icon" alt="logo Casa del Vagna">
                      <h2 class="title"><span class="color-orange">Casa del Vagna</span> | UX Design</h2>
                      <p>&laquo; J'ai eu l'occasion de travailler avec Nicolas sur le site de la compagnie AToU, dans le cadre de la formation Conception et Réalisation de Produits en Ligne aux Gobelins. Nicolas a fait preuve d'une grande rigueur organisationnelle qui, couplée à un solide bagage technique, nous a permis de mener à bien ce projet. Cette collaboration a été un véritable plaisir, que j'espère pouvoir réitérer à l'avenir. &raquo;<br><br><span class="ajoutMargin pull-right quote-author"><span class="color-orange gras">Cécile Vagne</span> | UX Graphic Designer</span></p>
                      <p class="annule ajoutMargin"><a id="lien-temoignage-cecile" href="" onclick="populate_and_open_modal(event, 'modal-content-2');" class="btn btn-outline-inverse btn-sm">Qui est-ce ?</a></p>

                      <div class="content-to-populate-in-modal" id="modal-content-2">
                        <h2>Casa Del Vagna</h2>
                        <p><img data-img-src="assets/images/other_images/logo-casadelvagna-carre.png" class="lazy rounded_border hover_effect pull-left" alt="logo Casa des Vagna">Après avoir travaillé pendant dix ans en tant que graphiste print, notamment dans l’édition et pour diverses missions en freelance, elle décide d’élargir son champ d’action au digital.</p>
                        <p>Fraîchement diplômée de l’école des Gobelins (Conception et Réalisation de Produits en Ligne, 2014), elle explore avec un enthousiasme constant les possibilités qu’offre le digital.</p>
                        <p>Visitez le portfolio de <a id="lien-temoignage-cecile-site" href="http://casadelvagna.com/" class="color-orange" target="_blank">Casa Del Vagna</a></p>
                      </div><!-- #modal-content-2 -->
                    </div>
                  </div><!-- .item -->

                  <div class="item">
                    <div class="carousel-text-content">
                      <img src="assets/images/other_images/logo-AToU-fond-blanc.png" class="icon" alt="logo AToU">
                      <h2 class="title"><span class="color-orange">AToU</span> | Compagnie de danse</h2>
                      <p>&laquo; Nicolas, en tant que directeur de projet, était mon principal interlocuteur pour la réalisation du site AToU. Tout au long des six mois de collaboration, il s’est hissé à la hauteur de ses responsabilités. Il a démontré une supervision exemplaire : à l’écoute de nos besoins tout en sachant les recadrer régulièrement, compte tenu des moyens et du temps impartis au projet. Il a prouvé une grande capacité à traduire concrètement et techniquement nos attentes, à nous tenir informés de l’évolution du projet, à maintenir dans son équipe de l’efficacité et du ludique, et à assurer personnellement la rectification de quelques bugs, bien après la livraison du site. C’est une personne responsable, organisée et à l’écoute de ses collaborateurs. &raquo;<br><br><span class="ajoutMargin pull-right quote-author"><span class="color-orange gras">Marc Ribault</span> | Co-gérant de la Compagnie de danse AToU</span></p>
                      <p class="annule ajoutMargin"><a id="lien-temoignage-atou" href="" onclick="populate_and_open_modal(event, 'modal-content-3');" class="btn btn-outline-inverse btn-sm">Qui est-ce ?</a></p>

                      <div class="content-to-populate-in-modal" id="modal-content-3">
                        <h2>AToU</h2>
                        <p><img data-img-src="assets/images/other_images/logo-AToU-fond-blanc-carre.png" class="lazy rounded_border hover_effect pull-left" alt="logo AToU">AToU est une compagnie de danse contemporaine créée à Lyon en 2008 par la chorégraphe Anan Atoyama. En 2012, la compagnie est choisie pour une résidence au Centre Culturel Charlie Chaplin de Vaulx-en-Velin.</p>
                        <p>En parallèle, la compagnie s’attache à faire découvrir au plus grand nombre la danse comme outil de recherche personnelle, d’expression intime et de partage : elle propose ainsi des rencontres publiques, des ateliers hebdomadaires et des stages sur plusieurs jours, toujours en lien avec son travail artistique et dans l’optique d’une création collective avec les participants.</p>
                        <p>Découvrez le site internet d'<a id="lien-temoignage-atou-site" href="http://atou.fr/" target="_blank"><span class="color-orange">AToU</span></a></p>
                      </div><!-- #modal-content-3 -->
                    </div>
                  </div><!-- .item -->

                  <div class="item">
                    <div class="carousel-text-content">
                      <img src="assets/images/other_images/logo-natalina-micolini.png" class="icon" alt="logo Natalina Micolini">
                      <h2 class="title"><span class="color-orange">Natalina Micolini</span> | Artiste Peintre</h2>
                      <p>&laquo; Au-delà de ses connaissances techniques indiscutables, lesquelles bien évidemment rassurent, on trouve chez Nicolas Mura rigueur, éthique, discipline, et ce qui me semble être le point d'orgue, un sens aigu de l'écoute ! Il ne cherche pas à SE mais à VOUS faire plaisir.<br>On le sent capable de s'adapter pour porter les envies de ses interlocuteurs.<br>Très vite le site proposé m'a plu par son développement intuitif, esthétique et évolutif.<br>Je ne suis pas inquiète sur le suivi de ce site et le remercie encore d'en avoir accepté la réalisation. J'invite d'autres artistes à ne pas hésiter à en faire autant ! &raquo;<br><br><span class="ajoutMargin pull-right quote-author"><span class="color-orange gras">N. Micolini</span> | Artiste peintre</span></p>
                      <p class="annule ajoutMargin"><a id="lien-temoignage-natalina-micolini" href="" onclick="populate_and_open_modal(event, 'modal-content-4');" class="btn btn-outline-inverse btn-sm">Qui est-ce ?</a></p>
                  
                      <div class="content-to-populate-in-modal" id="modal-content-4">
                        <h2>Natalina Micolini</h2>
                        <p><img data-img-src="assets/images/other_images/logo-natalina-micolini.png" class="lazy rounded_border hover_effect pull-left" alt="logo Natalina Micolini">Natalina Micolini est peintre. Le temps a conduit l'artiste à définir une démarche orientée sur diverses séries d'œuvres réfléchies, assumées et maitrisées. Son inspiration se nourrit d'une curiosité constante de la scène artistique aussi bien classique ou moderne que contemporaine.</p>
                        <p>Nous pouvons découvrir son travail en évolution perpétuelle à travers des expositions régulières.
                        Elle n'envisage la présentation de son travail au public qu'à travers une volonté de partage ; il y a le tableau, l'interprète qu'est le regardeur et le peintre.</p>
                        <p>Découvrez le site internet de <a id="lien-temoignage-natalina-micolini-site" href="http://micolini-natalina.eu/" target="_blank"><span class="color-orange">Natalina Micolini</span></a></p>
                      </div><!-- #modal-content-4 -->
                    </div>
                  </div><!-- .item -->

                </div><!-- .carousel-inner -->

                <!-- Controls -->
                <a class="left carousel-control" href="#features-carousel" data-slide="prev"></a>
                <a class="right carousel-control" href="#features-carousel" data-slide="next"></a>

              </div><!-- #about-carousel -->

          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="competences" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg7.jpg">
          <div class="content-wrapper mid-vertical-positioning clearfix">
            <div class="col-sm-10 col-md-9 pull-right">

                <h1 class="section-title">Compétences</h1>

                <div class="tabpanel styled-tabs uniform-height" role="tabpanel">

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist" text-hidden-xs="true">
                    <li role="presentation" class="active"><a id="lien-competences-conception" href="#tabs-tab1" aria-controls="tabs-tab1" role="tab" data-toggle="tab"><!-- <i class="icon fa fa-train"></i> --><span class="icon glyphicon glyphicon-cog"></span><span>Conception</span></a></li>
                    <li role="presentation"><a id="lien-competences-integration" href="#tabs-tab2" aria-controls="tabs-tab2" role="tab" data-toggle="tab"><!-- <i class="icon fa fa-code"></i> --><span class="icon glyphicon glyphicon-file"></span><span>Intégration</span></a></li>
                    <li role="presentation"><a id="lien-competences-developpement" href="#tabs-tab3" aria-controls="tabs-tab3" role="tab" data-toggle="tab"><!-- <i class="icon fa fa-comment"></i> --><span class="icon glyphicon glyphicon-wrench"></span><span>Développement</span></a></li>
                    <li role="presentation"><a id="lien-competences-hebergement" href="#tabs-tab4" aria-controls="tabs-tab4" role="tab" data-toggle="tab"><!-- <i class="icon fa fa-comment"></i> --><span class="icon glyphicon glyphicon-cloud"></span><span>Hébergement</span></a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade in active" id="tabs-tab1">
                      <img src="assets/images/other_images/tabs-icon2.png" class="pull-right hidden-xs">
                      <h4 class="color-orange">Une méthodologie transparente</h4>
                      <p>Analyse du besoin, devis, cahier des charges et dossier de conception détaillée : les bases d'une collaboration saine.</p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tabs-tab2">
                      <img src="assets/images/other_images/tabs-icon4.png" class="pull-right hidden-xs">
                      <!-- <i class="icon fa fa-code fa-5x pull-right hidden-xs"></i> -->
                      <h4 class="color-orange">Fullstack</h4>
                      <p>Côté front-end : HTML5, CSS3 (notamment Boostrap3), une bonne dose de JavaScript (jQuery) et de l'AJAX si nécessaire pour donner vie à vos interfaces.
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tabs-tab3">
                      <img src="assets/images/other_images/tabs-icon5.png" class="pull-right hidden-xs">
                      <h4 class="color-orange">Python &amp; Django</h4>
                      <p>Côté back-end et outils de développement : Python, Django, MySQL ou PostgreSQL, RESTFul API / JSON, sans oublier l'indispensable Git.<br>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tabs-tab4">
                      <img src="assets/images/other_images/tabs-icon3.png" class="pull-right hidden-xs">
                      <h4 class="color-orange">VPS | Cloud</h4>
                      <p>VPS sou Linux Debian : profitez de la puissance et de la sécurité des serveurs virtuels.<br>Installation, administration, optimisation, backups et maintenance système.<br>Réservation de noms de domaine.</p>
                    </div>

                  </div><!-- .tab-content -->

                </div><!-- .tabpanel -->

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->  

        <article id="realisations" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg2.jpg">
        <!-- <article id="featured" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/fond-gris.png"> -->
          <div class="content-wrapper clearfix">
            <div class="col-sm-11 pull-right">

                <h1 class="section-title">Réalisations</h1>
              
                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                  <!-- feature 1 -->
                  <article class="feature-col col-md-6">
                    <a id="lien-realisations-XXX" href="" onclick="populate_and_open_modal(event, 'modal-content-12');" class="thumbnail linked">
                      <div class="image-container">
                        <img data-img-src="assets/images/other_images/projet-babyblog.jpg" class="lazy item-thumbnail" alt="Home Page Baby Blog">
                      </div>
                      <div class="caption">
                        <h5 class="color-orange">App hybride "Baby Blog"</h5>
                        <p>Un application hybride basée sur une API REST pour animer une communauté autour d'une naissance :</p>
                        <p>
                          <span class="icon glyphicon glyphicon-ok"></span> Développement Python / Django<br>
                          <span class="icon glyphicon glyphicon-ok"></span> App hybride Cordova (ANdroid / iPhone)<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Stack : JavaScript / HTML / CSS<br>
                        </p>
                      </div><!-- .caption -->
                    </a><!-- .thumbnail -->

                    <div class="content-to-populate-in-modal" id="modal-content-12">
                      <h1>Baby Blog Android / iPhone</h1>
                      <p>Développé avec amour.</p>
                      <p class="date-projet">Nov. 2016 / Jan. 2017 - work in progress</i></p>

                      <!-- image slider inside popup -->
                      <div id="unique-id-for-image-slider-1" class="owl-carousel popup-image-gallery">
                        <!-- slide -->
                        <div>
                          <!-- <h6 class="caption color-black">Price Page - version desktop</h6> -->
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-babyblog.jpg" alt="Babyblog Home">
                        </div>
                      </div>
                    </div><!-- #modal-content-10 -->
                  </article>

                  <!-- feature 1 -->
                  <article class="feature-col col-md-6">
                    <a id="lien-realisations-XXX" href="" onclick="populate_and_open_modal(event, 'modal-content-11');" class="thumbnail linked">
                      <div class="image-container">
                        <img data-img-src="assets/images/other_images/projet-netsach.jpg" class="lazy item-thumbnail" alt="Home Page Netsach">
                      </div>
                      <div class="caption">
                        <h5 class="color-orange">Développeur intégrateur Python / Django en startup</h5>
                        <p>Applications web cloud orientées métier :</p>
                        <p>
                          <span class="icon glyphicon glyphicon-ok"></span> Développement Python / Django<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Intégration Bootstrap 3<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Test driven development<br>
                          <br>
                        </p>
                      </div><!-- .caption -->
                    </a><!-- .thumbnail -->

                    <div class="content-to-populate-in-modal" id="modal-content-11">
                      <h1>Projets</h1>
                      <p>Restopilot - JobilX.</p>
                      <p class="date-projet">Mars / Nov. 2016 - confidentiel</i></p>

                      <!-- image slider inside popup -->
                      <div id="unique-id-for-image-slider-1" class="owl-carousel popup-image-gallery">
                        <!-- slide -->
                        <div>
                          <!-- <h6 class="caption color-black">Price Page - version desktop</h6> -->
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-netsach-restopilot-home-desktop.jpg" alt="Price Page, version desktop">
                        </div>
                        <!-- slide -->
                        <div>
                          <!-- <h6 class="caption color-black">Home Page - version mobile</h6> -->
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-netsach-jobilx-home-desktop.jpg" alt="Home Page JobilX, version desktop">
                        </div>
                      </div>
                    </div><!-- #modal-content-10 -->
                  </article>

                  <!-- feature 1 -->
                  <article class="feature-col col-md-6">
                    <a id="lien-realisations-XXX" href="" onclick="populate_and_open_modal(event, 'modal-content-10');" class="thumbnail linked">
                      <div class="image-container">
                        <img data-img-src="assets/images/other_images/projet-pickup.jpg" class="lazy item-thumbnail" alt="Home Page La Navette Pickup">
                      </div>
                      <div class="caption">
                        <h5 class="color-orange">Chef de projet IT</h5>
                        <p>Site e-commerce C to C lanavette.pickup.fr :</p>
                        <p>
                          <span class="icon glyphicon glyphicon-ok"></span> Pilotage et gestion de projet IT<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Supports et CR des comités de projets<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Coordination des prestataires, suivi des livrables<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Mises en environnement UAT, déploiements en production<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Supervision d’une campagne publicitaire sur le site du Bon Coin
                        </p>
                      </div><!-- .caption -->
                    </a><!-- .thumbnail -->

                    <div class="content-to-populate-in-modal" id="modal-content-10">
                      <h1>La Navette Pickup</h1>
                      <p>Gestion de projet IT du site e-commerce lanavette.pickup.fr.</p>
                      <p class="date-projet">Sep. 2015 / Fév. 2016 - <span><a id="lien-realisations-XXX" href="https://lanavette.pickup.fr/" class="color-orange" target="_blank">Voir le site internet</a></span></p>

                      <!-- image slider inside popup -->
                      <div id="unique-id-for-image-slider-1" class="owl-carousel popup-image-gallery">
                        <!-- slide -->
                        <div>
                          <!-- <h6 class="caption color-black">Price Page - version desktop</h6> -->
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-Pickup-price-desktop.jpg" alt="Price Page, version desktop">
                        </div>
                        <!-- slide -->
                        <div>
                          <!-- <h6 class="caption color-black">Home Page - version mobile</h6> -->
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-Pickup-home-mobile.png" alt="Home Page, version mobile">
                        </div>
                      </div>
                    </div><!-- #modal-content-10 -->
                  </article>

                  <!-- feature 1 -->
                  <article class="feature-col col-md-6">
                    <a id="lien-realisations-bpce" href="" onclick="populate_and_open_modal(event, 'modal-content-9');" class="thumbnail thumbnailPerso linked linkedPerso">
                      <div class="image-container">
                        <img data-img-src="assets/images/other_images/projet-bpce.jpg" class="lazy item-thumbnail" alt="Logo BPCE">
                      </div>
                      <div class="caption">
                        <h5 class="color-orange">Chargé de projet digital pour la BPCE</h5>
                        <p>Sites de promotion événementielle pour le service marketing (<i>confidentiel</i>) :</p>
                        <p>
                          <span class="icon glyphicon glyphicon-ok"></span> Gestion de projet, relation client<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Développement (HTML, CSS, jQuery, Bootstrap 3, PHP)<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Intégration vidéo<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Conception graphique (Photoshop) et responsive<br>
                        </p>
                      </div><!-- .caption -->
                    </a><!-- .thumbnail -->
                  </article>

                  <!-- feature 1 -->
                  <article class="feature-col col-md-6">
                    <a id="lien-realisations-natalina" href="" onclick="populate_and_open_modal(event, 'modal-content-6');" class="thumbnail linked">
                      <div class="image-container">
                        <img data-img-src="assets/images/other_images/projet-Natalina-Micolini.jpg" class="lazy item-thumbnail" alt="Home page Natalina Micolini">
                      </div>
                      <div class="caption">
                        <h5 class="color-orange">Site de Natalina Micolini, artiste peintre</h5>
                        <p>Intégration et développement &laquo; responsive &raquo; :</p>
                        <p>
                          <span class="icon glyphicon glyphicon-ok"></span> Gestion de projet<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Customisation HTML, CSS et jQuery<br>
                          <span class="icon glyphicon glyphicon-ok"></span> CMS Joomla 3<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Développement PHP front-office<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Maintenance
                        </p>
                      </div><!-- .caption -->
                    </a><!-- .thumbnail -->

                    <div class="content-to-populate-in-modal" id="modal-content-6">
                      <h1>Natalina Micolini</h1>
                      <p>Réalisation du site vitrine &laquo; responsive &raquo; de l'artiste peintre Natalina Micolini.</p>
                      <p class="date-projet">Janvier 2015 - <span><a id="lien-realisations-natalina-site" href="http://micolini-natalina.eu/" class="color-orange" target="_blank">Voir le site internet</a></span></p>

                      <!-- image slider inside popup -->
                      <div id="unique-id-for-image-slider-1" class="owl-carousel popup-image-gallery">
                        <!-- slide -->
                        <div>
                          <h6 class="caption color-black">Home Page - version desktop</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-Natalina-Micolini-home-desktop.jpg" alt="Home Page, version desktop">
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption color-black">Thème des arbres - version desktop</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-Natalina-Micolini-theme-arbres.jpg" alt="Page sur le thème des arbres, version desktop">
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption color-black">Expositions - version desktop</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-Natalina-Micolini-expositions.jpg" alt="Page des expositions, version desktop">
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption">Thème de l'eau - adaptation mobile</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-Natalina-Micolini-theme-eau-mobile.png" alt="Page sur le thème de l'eau, adaptation mobile">
                        </div>
                      </div>
                    </div><!-- #modal-content-6 -->
                  </article>

                  <!-- feature 1 -->
                  <article class="feature-col col-md-6">
                    <a id="lien-realisations-atou" href="" onclick="populate_and_open_modal(event, 'modal-content-7');" class="thumbnail linked">
                      <div class="image-container">
                        <img data-img-src="assets/images/other_images/projet-AToU.jpg" class="lazy item-thumbnail" alt="Lorem Ipsum">
                      </div>
                      <div class="caption">
                        <h5 class="color-orange">Site AToU<br></h5>
                        <p>Réalisation d'un site sur mesure pour la compagnie de danse AToU :</p>
                        <p>
                          <span class="icon glyphicon glyphicon-ok"></span> Gestion de projet, relation client<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Management (5 personnes)<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Intégration front-office / back-office (HTML, CSS, jQuery)<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Développement front-office / front-end (PHP, MySQL)<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Conception, déploiement, mise en production
                        </p>
                      </div><!-- .caption -->
                    </a><!-- .thumbnail -->

                    <div class="content-to-populate-in-modal" id="modal-content-7">
                      <h1>AToU</h1>
                      <p>Refonte du site de la compagnie de danse contemporaine AToU.<br>Projet de fin de formation, réalisé en équipe dans le cadre de la formation Conception et Réalisation de Produits en Ligne à Gobelins, l'école de l'image.</p>
                      <p class="date-projet">Février / Avril 2014 - <span><a id="lien-realisations-atou-site" href="http://atou.fr/" class="color-orange" target="_blank">Voir le site internet</a></span></p>

                      <!-- image slider inside popup -->
                      <div id="unique-id-for-image-slider-2" class="owl-carousel popup-image-gallery">
                        <!-- slide -->
                        <div>
                          <h6 class="caption">Home Page en parallaxe - version desktop</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-AToU-home-desktop.png" alt="Home Page en parallaxe du projet AToU, version desktop">
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption">Home Page - déclinaison tablette</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-AToU-home-IpadMini.png" alt="Home Page de la déclinaison tablette du projet AToU">
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption">Site mobile</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-AToU-smartphone.png" alt="Écrans du site mobile du projet AToU">
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption color-black">Page descriptive de la compagnie</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-AToU-compagnie.jpg" alt="Page descriptive de la compagnie AToU">
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption color-black">Liste des créations - intégration lecteur Vimeo</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-AToU-liste-creations.jpg" alt="Liste des créations de la compagnie AToU avec intégration d'un lecteur Vimeo">
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption color-black">Fiche création</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-AToU-fiche-creation.jpg" alt="Fiche création du projet AToU">
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption color-black">Connexion à un espace adhérents</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-AToU-login-adherent.jpg" alt="Connexion à un espace adhérents du projet AToU">
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption color-black">Espace adhérents</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-AToU-espace-adherents.jpg" alt="Espace adhérents du projet AToU">
                        </div>
                      </div>
                    </div><!-- #modal-content-7 -->
                  </article>

                  <!-- feature 1 -->
                  <article class="feature-col col-md-6">
                    <a id="lien-realisations-jim" href="" onclick="populate_and_open_modal(event, 'modal-content-8');" class="thumbnail linked">
                      <div class="image-container">
                        <img data-img-src="assets/images/other_images/projet-jazz-in-marciac.jpg" class="lazy item-thumbnail" alt="Home page Jazz in Marciac">
                      </div>
                      <div class="caption">
                        <h5 class="color-orange">Site du festival Jazz in Marciac</h5>
                        <p>Refonte « fictive » du site du festival :</p>
                        <p>
                          <span class="icon glyphicon glyphicon-ok"></span> Gestion de projet<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Cahier des charges<br>
                          <span class="icon glyphicon glyphicon-ok"></span> Conception détaillée
                        </p>
                      </div><!-- .caption -->
                    </a><!-- .thumbnail -->

                    <div class="content-to-populate-in-modal" id="modal-content-8">
                      <h1>Jazz in Marciac</h1>
                      <p>Refonte &laquo; fictive &raquo; du site du festival réalisée en équipe dans le cadre de la formation Conception et Réalisation de Produits en Ligne à Gobelins, l'école de l'image.</p>
                      <p class="date-projet">Novembre / Décembre 2013</p>

                      <!-- image slider inside popup -->
                      <div id="unique-id-for-image-slider-3" class="owl-carousel popup-image-gallery">
                        <!-- slide -->
                        <div>
                          <h6 class="caption color-black">Home Page - version desktop</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-jazz-in-marciac-home-desktop.jpg" alt="Home Page en parallaxe du projet Jazz in Marciac, version desktop">
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption color-black">Programme du festival</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-jazz-in-marciac-programme.jpg" alt="Programme du festival Jazz in Marciac">
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption color-black">Fiche artiste</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-jazz-in-marciac-fiche-artiste.jpg" alt="Fiche artiste du projet Jazz in Marciac">
                        </div>
                        <!-- slide -->
                        <div>
                          <h6 class="caption">Version smartphone</h6>
                          <img class="lazyOwl" data-src="assets/images/other_images/projet-jazz-in-marciac-smartphone.png" alt="Version smartphone du projet Jazz in Marciac">
                        </div>
                      </div>
                    </div><!-- #modal-content-8 -->
                  </article>

                </section><!-- end: .feature-columns -->

              <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->      

        <!-- <article id="contact" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/bg4.jpg"> -->
        <article id="contact" class="section-wrapper clearfix" data-custom-background-img="assets/images/other_images/Mexique_2013_318.jpg">
          <div class="content-wrapper clearfix">
            
              <h1 class="section-title">Contact</h1>
              
                <!-- CONTACT DETAILS -->
                <div class="contact-details col-sm-5 col-md-3">
                  <address class="paragraphe">92700 Colombes</address>
                  <tel><a id="lien-contact-telephone" href="tel:+33648347459" class="color-orange">(+33) (0)6 48 34 74 59</a></tel>
                  <p><a id="lien-contact-mail" href="mailto:contact@nicolasmura.fr" class="color-orange">contact@nicolasmura.fr</a></p>
                </div>
                <!-- END: CONTACT DETAILS -->

                <!-- CONTACT FORM -->
                <div class="col-sm-7 col-md-9">
                  <!-- IMPORTANT: change the email address at the top of the assets/php/mail.php file to the email address that you want this form to send to -->
                  <form class="form-style validate-form clearfix" action="assets/php/mail.php" method="POST" role="form">

                    <!-- form left col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="text-field form-control validate-field required" data-validation-type="string" id="form-name" placeholder="Votre nom et prénom" name="name">
                      </div>  
                      <div class="form-group">
                        <input type="email" class="text-field form-control validate-field required" data-validation-type="email" id="form-email" placeholder="Votre email" name="email">
                      </div>
                      <div class="form-group">
                        <input type="tel" class="text-field form-control validate-field phone" data-validation-type="phone" id="form-contact-number" placeholder="Votre téléphone" name="contact_number">
                      </div>    
                      <div class="form-group text-right">
                        <img id="form-captcha-img" src="assets/php/form_captcha/captcha_img.php">
                        <input type="text" class="text-field form-control validate-field required" data-validation-type="captcha" id="form-captcha" placeholder="Recopiez le texte" name="captcha">
                        <span id="form-captcha-refresh" class="fa fa-refresh" title="Reload"></span>
                      </div>                                   
                    </div><!-- end: form left col -->

                    <!-- form right col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <textarea placeholder="Votre message..." class="form-control validate-field required" name="message"></textarea>
                      </div> 
                      <div class="form-group">
                        <img src="assets/images/theme_images/loader-form.GIF" class="form-loader">
                        <button id="lien-contact-envoyer" type="submit" class="btn btn-sm btn-outline-inverse">Envoyer</button>
                      </div> 
                      <div class="form-group form-general-error-container"></div>           
                    </div><!-- end: form right col -->

                  </form>
                </div><!-- end: CONTACT FORM -->

          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

      </section><!-- #main-content -->

      <!-- Footer -->
      <section id="footer">

        <!-- Go to Top -->
        <div id="go-to-top" onclick="scroll_to_top();"><span class="icon glyphicon glyphicon-chevron-up"></span></div>

        <ul class="social-icons">
          <li>
            <a id="lien-footer-linkedin" href="https://www.linkedin.com/in/nicolasmura" target="_blank" title="LinkedIn"><img src="assets/images/theme_images/social_icons/linkedin.png" alt="LinkedIn"></a>
          </li>
          <li>
            <a id="lien-footer-twitter" href="https://twitter.com/nicolas_mura" target="_blank" title="Twitter"><img src="assets/images/theme_images/social_icons/twitter.png" alt="Twitter"></a>
          </li>
          <!-- Bouton Skype tuné -->
          <li id="SkypeButton_Call_mura.nicolas_1">
            
              <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
              <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>
              <script type="text/javascript" src="assets/js/skype-uri.js"></script>
              <script type="text/javascript">
                Skype.ui({
                  "name": "call",
                  "element": "SkypeButton_Call_mura.nicolas_1",
                  "participants": ["mura.nicolas"],
                  "imageColor": "blue",
                  "imageSize": 32
                });
              </script>
              <script type="text/javascript" src="assets/js/skype-uri-perso.js"></script>
              
          </li>
        </ul>

        <!-- copyright text -->
        <div class="footer-text-line">&copy; <?php echo date("Y");?> | Nicolas MURA<sup>&trade;</sup></div>
      </section>
      <!-- end: Footer -->      

    </div><!-- #outer-container -->
    <!-- end: Outer Container -->

    <!-- Modal -->
    <!-- DO NOT MOVE, EDIT OR REMOVE - this is needed in order for popup content to be populated in it -->
    <div class="modal fade" id="common-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="modal-body clearfix">
          </div><!-- .modal-body -->
        </div><!-- .modal-content -->
      </div><!-- .modal-dialog -->
    </div><!-- .modal -->    

    <!-- Javascripts
    ================================================== -->

    <!-- Jquery and Bootstrap JS -->
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Easing - for transitions and effects -->
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <!-- background image strech script -->
    <script src="assets/js/vegas/jquery.vegas.min.js"></script>

    <!-- detect mobile browsers -->
    <script src="assets/js/detectmobilebrowser.js"></script>

    <!-- detect scrolling -->
    <script src="assets/js/jquery.scrollstop.min.js"></script>

    <!-- owl carousel js -->
    <script src="assets/js/owl-carousel/owl.carousel.min.js"></script>

    <!-- lightbox js -->
    <script src="assets/js/lightbox/js/lightbox.min.js"></script>

    <!-- intro animations -->
    <script src="assets/js/wow/wow.min.js"></script>

    <!-- responsive videos -->
    <script src="assets/js/jquery.fitvids.js"></script>

    <!-- Custom functions for this theme -->
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/initialise-functions.js"></script>

    <!-- IE9 form fields placeholder fix -->
    <!--[if lt IE 9]>
    <script>contact_form_IE9_placeholder_fix();</script>
    <![endif]-->  

    <!-- Tracking events via Google Analytics -->
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        // Accueil & retour accueil
        $('#lien-accueil').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur bouton accueil', this.href);
        });
        $('#go-to-top').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur bouton go-to-top', this.href);
        });
        // Menu
        $('#lien-menu-prestations').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur prestations (menu)', this.href);
        });
        $('#lien-menu-temoignages').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur témoignages (menu)', this.href);
        });
        $('#lien-menu-competences').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur compétences (menu)', this.href);
        });
        $('#lien-menu-realisations').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur realisations (menu)', this.href);
        });
        $('#lien-menu-contact').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur contact (menu)', this.href);
        });
        // Introduction
        $('#lien-cv').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Voir mon CV', this.href);
        });
        $('#lien-en-savoir-plus').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur En savoir plus', this.href);
        });
        // Prestations
        $('#lien-temoignages').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Ancre témoignages', this.href);
        });
        $('#lien-competences').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Ancre compétences', this.href);
        });
        // Témoignages
        $('#lien-temoignage-cecile').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Qui est-ce (Cécile)', this.href);
        });
        $('#lien-temoignage-cecile-site').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur site de Cécile (Témoignages)', this.href);
        });
        $('#lien-temoignage-atou').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Qui est-ce (AToU)', this.href);
        });
        $('#lien-temoignage-atou-site').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur site AToU (Témoignages)', this.href);
        });
        $('#lien-temoignage-natalina-micolini').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Qui est-ce (Natalina Micolini)', this.href);
        });
        $('#lien-temoignage-natalina-micolini-site').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur site Natalina Micolini (Témoignages)', this.href);
        });
        // Compétences
        $('#lien-competences-projet').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Compétences Projet', this.href);
        });
        $('#lien-competences-conception').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Compétences Conception', this.href);
        });
        $('#lien-competences-integration').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Compétences Intégration', this.href);
        });
        $('#lien-competences-developpement').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Compétences Développement', this.href);
        });
        $('#lien-competences-hebergement').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Compétences Hébergement', this.href);
        });
        // Réalisations
        $('#lien-realisations-natalina').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur projet Natalina Micolini', this.href);
        });
        $('#lien-realisations-natalina-site').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur site Natalina Micolini (réalisations)', this.href);
        });
        $('#lien-realisations-atou').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur projet AToU', this.href);
        });
        $('#lien-realisations-atou-site').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur site AToU (réalisations)', this.href);
        });
        $('#lien-realisations-jim').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur projet Jazz in Marciac', this.href);
        });
        // Contact
        $('#lien-contact-telephone').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Téléphone', this.href);
        });
        $('#lien-contact-mail').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Mail', this.href);
        });
        $('#form-captcha-refresh').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Refresh Captcha', this.href);
        });
        $('#lien-contact-envoyer').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Envoi du formulaire de contact', this.href);
        });
        // Footer
        $('#lien-footer-linkedin').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Profil LinkedIn', this.href);
        });
        $('#lien-footer-twitter').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Profil Twitter', this.href);
        });
        $('#SkypeButton_Call_mura.nicolas_1').on('click', function() {
          ga('send', 'event', 'clic sur page portfolio', 'Clic sur Skype', this.href);
        });
      });
    </script>

  </body>
</html>