<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Head -->
<title>Agenda, unité du Porc-épic 25, scouts et guides pluralistes de Ganshoren, Bruxelles-Norois</title>
<?php include("../includes/header.php"); ?>

<body class="body_agenda">

    <!-- Navbar -->
    <?php include("../includes/navbar.php"); ?>
    <!-- /Navbar -->
    
    <!-- Full Page Image Header Area -->
    <div id="top" class="header_contacts">
        <div class="vert-text">
            <h1>Agenda de l'année</h1>
            <br/>
            <a href="#services" id="bouton_intro" class="btn btn-lg btn-default little">Poursuivre</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Intro -->
    <!-- /Intro -->

    <!-- Services -->
    <div id="services" class="services_contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Janvier 2015</h2>
                    <hr>
                </div>
            </div>

            <div class="row p">
                <div class="col-md-5 col-xs-12">
                    <img alt="Calendrier Janvier 2015" class="agenda paddings img-responsive calendrier" src="../img/agenda/janvier_15.png">
                </div>

                <div class="col-md-5 col-md-offset-2 col-xs-12 fond_blanc padding_titre">
                    <h2 class="bleu text-center">Informations</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Services -->

    <!-- Services -->
    <div id="services" class="services_contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Février 2015</h2>
                    <hr>
                </div>
            </div>

            <div class="row p">
                <div class="col-md-5 col-xs-12">
                    <img alt="Calendrier Janvier 2015" class="agenda paddings img-responsive calendrier" src="../img/agenda/fevrier_15.png">
                </div>

                <div class="col-md-5 col-md-offset-2 col-xs-12 fond_blanc padding_titre">
                    <h2 class="bleu text-center">Informations</h2>
                    
                    <p><span class="underline">18/02/2015</span> -> <span class="underline">21/02/2015</span></p>
                    
                    <p><span class="vert">Réunion spéciale</span> Week-end Pionniers.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Services -->

    <!-- Services -->
    <div id="services" class="services_contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Mars 2015</h2>
                    <hr>
                </div>
            </div>

            <div class="row p">
                <div class="col-md-5 col-xs-12">
                    <img alt="Calendrier Janvier 2015" class="agenda paddings img-responsive calendrier" src="../img/agenda/mars_15.png">
                </div>

                <div class="col-md-5 col-md-offset-2 col-xs-12 fond_blanc padding_titre">
                    <h2 class="bleu text-center">Informations</h2>
                    
                    <p><span class="underline">22/03/2015</span></p>
                    
                    <p><span class="vert">Réunion spéciale</span> inter-meutes pour les Louveteaux.</p>
                    
                    <p><span class="underline">28/03/2015</span> -> <span class="underline">29/03/2015</span></p>
                    
                    <p><span class="vert">Réunion spéciale</span> 24h vélo pour les Scouts et 3h trottinette pour les Castors.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Services -->

    <!-- Footer -->
    <footer class="footer_contacts">
        <div class="container" id="footer_contacts">
            <?php include("../includes/footer.php"); ?>
        </div>
    </footer>
    <!-- /Footer -->
</body>

</html>
