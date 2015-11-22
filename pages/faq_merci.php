<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Head -->
<title>Message envoyé, Foire aux questions, unité du Porc-épic 25, scouts et guides pluralistes de Ganshoren, Bruxelles-Norois</title>
<?php include("../includes/header.php"); ?>

<body class="faq">

    <!-- Navbar -->
    <?php include("../includes/navbar.php"); ?>
    <!-- /Navbar -->

    <div id="about_contacts" class="intro">
        <div class="container">
            <div class="row">
            	<div class="col-md-6 col-md-offset-3 form">
                    <h1>Merci,</h1>
                    <p>Votre question et sa réponse seront affichés sur la page FAQ au plus vite.</p>
                    <br>

                    <a href="http://www.scout25.be" class="form_btn retour">Retour à l'acceuil</a>
            	</div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <?php include('../includes/wrapper.php'); ?>

    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

    <!-- Sidebar buttons -->
    <?php include("../includes/sidebar_buttons.php"); ?>

    <!-- Follow buttons -->
    <?php include("../includes/follow_buttons.php"); ?>

    <!-- Mobile toolbar -->
    <?php include("../includes/mobile_toolbar.php"); ?>
    <script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.4.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>