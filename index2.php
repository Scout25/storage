<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Head -->
<title>L'unité du Porc-épic 25, scouts et guides pluralistes de Ganshoren, Bruxelles-Norois</title>
<meta name="description" content="">
<?php include("includes/header.php"); ?>

<body class="index">
    <!-- Navbar -->
    <?php include("includes/navbar.php"); ?>
    <!-- Full Page Image Header Area -->
<header class="header">
    <section class="vert-text center">
        <div class="row images hidden-xs">
            <div class="col-md-2 col-md-offset-1 col-xs-5 col-xs-offset-1">
                <img src="img/logos/logo_min.png" class="img-responsive bg_white pull-left" alt="Logo Unité">
            </div>

            <div class="col-md-2 col-md-offset-6 col-xs-3 col-xs-offset-2">
                <a href="http://www.sgp.be" target="new">
                    <img src="img/logos/logo_sgp_min.png" class="img-responsive bg_white pull-right" alt="Logo SGP">
                </a>
            </div>
        </div>

        <div class="row title">
            <div class="col-md-12">
                <h1>L'unité du Porc-épic</h1>
            </div>
        </div>

        <button href="#services" class="btn outline">
            Poursuivre
        </button>
    </section>
</header>

<main class="index" role="main">
    <!-- Services -->
    <!-- <div id="services" class="services">
        <div class="container">
			<div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                	<h2>ATTENTION</h2>
                </div>
            </div>
                
            <div class="row">
                <div class="col-xs-12">
                    <p class="text-center">
                        Pour une raison d'organisation, la sortie piscine est annulée, cependant les réunions sont maintenues.<br><br>
                        Merci pour votre compréhension.
                    </p>
                </div>
            </div>
            
            </div>
            </div>  
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Infos Week-End de novembre</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="service-item text-center">
                        <a href="/pages/castors.php?#news_castors" id="bouton_default" class="btn btn-lg btn-default littles">Castors</a>
                        <a href="/pages/louveteaux.php?#news_louveteaux" id="bouton_default" class="btn btn-lg btn-default littles">Louveteaux</a>
                        <a href="/pages/scouts.php?#news_scouts" id="bouton_default" class="btn btn-lg btn-default littles">Scouts</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Intro -->
    <section class="page-section red sections">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Les sections</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 text-center">
                    <article class="section">
                        <a href="pages/castors.php">
                            <img class="border white rounded" src="img/sections/castors.jpg" alt="Section Castors">
                        </a>

                        <h3>Castors 5-8</h3>

                        <p>
                            La colonie des Castors est <strong>animée</strong> par une équipe <strong>dynamique</strong> symbolisant la famille Dubois. Chez nous, à la 25ème unité du Porc-épic, les Castors sont déjà une longue tradition.
                        </p>

                        <a href="pages/castors.php" class="btn outline">En savoir plus</a>
                    </article>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 text-center">
                    <article class="section">
                        <a href="pages/louveteaux.php">
                            <img class="border white rounded" src="img/sections/louveteaux.jpg" alt="Section Louveteaux">
                        </a>

                        <h3>Louveteaux 8-12</h3>

                        <p>
                            Si tu aimes les <strong>jeux</strong> de plein air, si tu t'ennuies les <strong>dimanches</strong>, viens vivre des <strong>aventures</strong> avec des filles et des garçons de ton âge, guidés par les "vieux-loups" qui ont plein d'idées.
                        </p>

                        <a href="pages/louveteaux.php" class="btn outline">En savoir plus</a>
                    </article>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 text-center">
                    <article class="section last-1">
                        <a href="pages/scouts.php">
                            <img class="border white rounded" src="img/sections/scouts.jpg" alt="Section Scouts">
                        </a>

                        <h3>Scouts 12-15</h3>

                        <p>
                            Apporter des idées et son enthousiasme, prendre des responsabilités, vivre des aventures passionnantes dans une atmosphère amicale et franche et se retrouver entre amis, entre amies.
                        </p>

                        <a href="pages/scouts.php" class="btn outline">En savoir plus</a>
                    </article>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 text-center">
                    <article class="section last">
                        <a href="pages/pis.php">
                            <img class="border white rounded" src="img/sections/pis.jpg" alt="Section Pionniers">
                        </a>

                        <h3>Pionniers 15-18</h3>

                        <p>
                            Le relais fonctionne sur base d’<strong>activités</strong> et de <strong>projets</strong> qui visent au développement global du jeune. Le <strong>scoutisme</strong> est présent comme cadre, comme idéal, comme identité.
                        </p>

                        <a href="pages/pis.php" class="btn outline">En savoir plus</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services_index" class="page-section blue us services_index">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Qui sommes-nous?</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <article>
                        <img alt="Activités" src="img/acceuil/activites.jpg" class="pull-left border white">
                        <h3>Nos activités :</h3>
                        <br/>

                        <p class="p1 lead">
                            Habituellement, les <strong>réunions hebdomadaires</strong> ont lieu le <strong>dimanche</strong>.
                            <br/>
                            <br/>
                            Les <strong>sections</strong> organisent également l’un ou l’autre week-end durant l’année et celle-ci se termine par un grand <strong>camp d’été</strong>. L’unité et/ou les sections proposent aussi d’autres <strong>activités</strong> tout au long de l’année (fêtes,soupers, etc…).
                            <br/>
                            <br/>
                            Un planning (KIM) est régulièrement adressé aux membres de l’unité.
                        </p>
                    </article>
                </div>
                <div class="col-xs-12 col-md-6">
                    <article>
                        <img alt="Localisation" src="img/acceuil/localisation.jpg" class="pull-left border white">
                        <h3>Notre localisation :</h3>
                        <br/>

                        <p class="p1 lead">
                            Notre unité fait partie de la région scoute de <strong>Bruxelles-Norois</strong> (nord-ouest de Bruxelles). Active sur la commune de <strong>Ganshoren</strong>. Elle est basée dans un quartier un peu en retrait de la circulation. Notre local est un pavillon aimablement mis à notre disposition par la commune.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Callout-->
    <section class="page-section callout">
        <div class="container-fluid">
            <div class="row callout-content">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Notre passion</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="page-section blue animateurs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Les animateurs</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <article>
                        <img class="img-responsive border white" src="img/team_25.png" alt="Staff 25ème">
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="staff" class="page-section staff portfolio">
        <div class="container-fluid">
            <header>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center bg_white">
                        <h2>Le staff d'unité</h2>
                    </div>
                </div>
            </header>
            
            <section class="board-container">
                <div class="row bg_white">
                    <section>
                        <div class="col-md-4 col-xs-12">
                            <aside class="animateur">
                                <img alt="Adam" src="img/id_pastilles/adam.jpg" class="pull-left border blue">
                                <address>
                                    <h3>Responsable d'Unité :</h3>
                                    <a href="http://fr.wikipedia.org/wiki/Buse_variable" target="new">
                                        <p>Butéo</p>
                                    </a>
                                    <p>Adam Cambier</p>
                                    <br/><br/><img alt="Icone téléphone" src="img/icons/tel.png"> 0472/61.43.86
                                </address>
                            </aside>
                        </div>

                        <div class="col-md-8 col-xs-12">
        	                <div class="readmore">
        	                    <a href="http://fr.wikipedia.org/wiki/Buse_variable" target="new"><img alt="Butéo" src="img/totem_pastilles/buteo.jpg" class="img-thumbnail float_right"></a>
        	                    <p>La Buse variable (Buteo buteo) est une espèce de rapaces diurnes de la famille des Accipitridés aux formes lourdes, au bec et aux serres faibles. Elle est souvent confondue avec le milan noir qui lui a la queue échancrée ; la buse, elle, a la queue arrondie.</p>
                            </div>
                        </div>
                    </section>
                </div>
                
                <section>
                    <div class="row white">
                        <div class="col-md-4 col-xs-12">
                            <img alt="Raphaël" src="img/id_pastilles/raph.jpg" class="img-thumbnail float">
                            <address>
                                <strong>Responsable d'Unité adj:</strong>
                                <br/> <a href="http://fr.wikipedia.org/wiki/Ocelot" target="new">Ocelot</a>
                                <br/> Raphaël Van Gijsegem
                            </address>
                        </div>

                        <div class="col-md-8 col-xs-12">
        	                <div class="readmore">
                            	<a href="http://fr.wikipedia.org/wiki/Ocelot" target="new"><img alt="Ocelot" src="img/totem_pastilles/ocelot.jpg" class="img-thumbnail float_right"></a>
        						<p>L’ocelot (Leopardus pardalis ou anciennement Felis pardalis) est un chat sauvage qui vit en Amérique du Sud et en Amérique centrale. On le rencontre aussi dans le sud-est du Texas, aux États-Unis. Il vit dans différents biotopes : marais, palétuviers, prairies, buissons, forêts tropicales. Il chasse la nuit au sol et parfois dans les arbres. Il est appelé Cunaguaro au Venezuela et Jaguatirica au Brésil.</p>
        	                </div>
                        </div>
                    </div>

                    <div class="row white">
                        <div class="col-md-4 col-xs-12">
                            <img alt="Patrick" src="img/id_pastilles/patrick.jpg" class="img-thumbnail float">
                            <address>
                                <strong>Responsable d'Unité adj:</strong>
                                <br/> <a href="http://fr.wikipedia.org/wiki/Jabiru" target="new">Jabiru</a>
                                <br/> Patrick Vanlaer
                            </address>
                        </div>

                        <div class="col-md-8 col-xs-12">
        	                <div class="readmore">
                            	<a href="http://fr.wikipedia.org/wiki/Jabiru" target="new"><img alt="Jabiru" src="img/totem_pastilles/jabiru.jpg" class="img-thumbnail float_right"></a>
        						<p>Le jabiru est une grande cigogne au bec épais et massif, à la tête et au cou presque chauves. Lorsqu'il se tient debout la tête "rentrée dans les épaules", il ressemble tout à fait à son parent de l'Ancien-Monde, le marabout africain. Très largement distribué de l'Argentine au Mexique, le jabiru est assez fréquent et on le rencontre sur les berges des fleuves, des rivières et des lacs, ainsi que dans les marécages. Il hante également les vastes savanes de Colombie et du Venezuela, lorsqu'elles sont inondées durant la saison pluvieuse et regorgent de grenouilles et d'autres créatures aquatiques. </p>
        	                </div>
                        </div>
                    </div>

                    <div class="row white">
                        <div class="col-md-4 col-xs-12">
                            <img alt="Rien" src="img/totem_pastilles/rien.jpg" class="img-thumbnail float">
                            <address>
                                <strong>Equipier Locaux & Matériel:</strong>
                                <br/> <a href="http://fr.wikipedia.org/wiki/Renardeau" target="new">Renardeau</a>
                                <br/> Frédéric Hemeleers
                                <br><br><a href="mailto:infrastructure&#64;scout25.be"><img src="img/icons/mail.png" alt="Icone mail"> Infrastructure</a>
                            </address>
                        </div>

                        <div class="col-md-8 col-xs-12">
        	                <div class="readmore">
                            	<a href="http://fr.wikipedia.org/wiki/Renardeau" target="new"><img alt="Renardeau" src="img/totem_pastilles/renardeau.jpg" class="img-thumbnail float_right"></a>
        						<p>Renard est un terme ambigu qui désigne le plus souvent en français les canidés du genre Vulpes, le plus commun étant le Renard roux (Vulpes vulpes). Toutefois, par similitude physique, le terme est aussi employé pour désigner des canidés appartenant à d'autres genres, comme les genres Atelocynus, Cerdocyon, Dusicyon, Otocyon, Lycalopex et Urocyon.</p>
        	                </div>
                        </div>
                    </div>

                    <div class="row white">
                        <div class="col-md-12">
                            <img alt="Bart" src="img/id_pastilles/bart.jpg" class="img-thumbnail float">
                            <address>
                                <strong>Equipier Affiliation & Trésorie:</strong>
                                <br/> Bart Corthouts
                            </address>
                        </div>
                    </div>
                </section>
            </section>

            <footer>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center white">
                    <p><a href="mailto:unite&#64scout25.be"><img src="img/icons/mail.png" alt="Icone mail"> unite&#64;scout25.be</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    <!-- Map -->
    <div class="container" id="gmap3">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2>Nous trouver</h2>
            </div>
        </div>
    </div>
    <div id="test" class="gmap3"></div>
</main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container" id="footer">
            <?php include("includes/footer.php"); ?>
        </div>
    </footer>

    <!--Gmap3-->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script type="text/javascript" src="js/gmap3.min.js"></script>
    <script type="text/javascript">
      $(function(){
      
        $("#test").gmap3({
          marker:{
            latLng: [50.873000,4.310624],
            options:{
                draggable:true,
            },
            events:{
              dragend: function(infowindow){
                $(this).gmap3({
                  getaddress:{
                    latLng:marker.getPosition(),
                    callback:function(results){
                      var map = $(this).gmap3("get"),
                        infowindow = $(this).gmap3({get:"infowindow"}),
                        content = results && results[1] ? results && results[1].formatted_address : "25 Avenue du cimetère, ganshoren";
                      if (infowindow){
                        infowindow.open(map, marker);
                        infowindow.setContent(content);
                      } else {
                        $(this).gmap3({
                          infowindow:{
                            anchor:marker, 
                            options:{content: content}
                          }
                        });
                      }
                    }
                  }
                });
              }
            }
          },

          infowindow:{
             latLng: [50.872891,4.310594],
             draggable: true,
             options:{
               content: "<strong>25ème Porc-épic</strong><br/>25 Avenue du cimetère,<br/>1083 Ganshoren"
             },
          },

          map:{
            options:{
              zoom: 15,
              scrollwheel: false,
            }
          }
        });
        
      });
    </script>

    <!-- Readmore -->    
    <script type="text/javascript" src="js/readmore.min.js"></script>
    <script type="text/javascript">
	    $('.readmore').readmore({
		  maxHeight: 160,
		  moreLink: '<a class="right" href="#">Lire plus</a>',
		  lessLink: '<a class="right" href="#">Fermer</a>',
		});
    </script>
</body>

</html>
