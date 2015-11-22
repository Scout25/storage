<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Head -->
<title>Inscriptions Fête d'unité 14/03/15, unité du Porc-épic 25, scouts et guides pluralistes de Ganshoren, Bruxelles-Norois</title>

<?php include("../includes/header.php"); $envoye = ($_GET['envoye'])? $_GET['envoye'] :  null; ?>

<body class="faq">

	<!-- Navbar -->
    <?php include("../includes/navbar.php"); ?>
    <!-- /Navbar -->
    
    <!-- Full Page Image Header Area -->
    <div id="top" class="header_contacts">
        <div class="vert-text">
			<?php if ( $envoye == 1 ) : ?>
	            <h1>Inscription effectuée !</h1>
	            <br/>
            	<a href="/" id="bouton_intro" class="btn btn-lg btn-default little">Accueil</a>
			<?php else : ?>
	            <h1>Inscriptions année 2015-16</h1>
	            <br/>
            	<a href="#about_contacts" id="bouton_intro" class="btn btn-lg btn-default little">Poursuivre</a>
			<?php endif; ?>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->
    
	<!-- Intro -->
	<?php if ( $envoye == 1 ) : ?>
	<?php else : ?>		<!-- nothing -->
    <div id="about_contacts" class="intro">
        <div class="container">
        	<div class="row">
                <div class="col-md-4 col-md-offset-4 col-xs-12 text-center form">
                    <h2>Formulaire d'inscription</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
				<form id="form" role="form" method="post" action="/scripts/inscription.php" >
					<div class="row">
						<div class="form-group col-md-3 col-md-offset-3 col-xs-12 col-sm-6">
							<label>Nom *</label>
							<input required type="text" name="nom" class="form-control input">
						</div>
						
						<div class="form-group col-md-3 col-md-offset- col-xs-12 col-sm-6">
							<label>Prénom *</label></br>
							<input type="text" name="prenom" class="form-control input">
						</div>
					</div>
					
					<div class="row">
						<div class="form-group col-md-3 col-md-offset-3 col-xs-12 col-sm-6">
							<label>Prénom de l'enfant *</label>
							<input required type="text" name="prenomEnfant" class="form-control input">
						</div>
						
						<div class="form-group col-md-3 col-md-offset- col-xs-12 col-sm-6">
							<label>Date de naissance de l'enfant *</label></br>
							<input required type="date" name="naissance" class="form-control input">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-3 col-md-offset-3 col-xs-12">
							<label>E-mail *</label></br>
							<input required type="email" name="mail" class="form-control input">
						</div>

						<div class="form-group col-md-3 col-xs-12">
							<label>Numéro de GSM *</label></br>
							<input required type="text" name="gsm" class="form-control input">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-6 col-md-offset-3 col-xs-12">
							<label>Information complementaire</label></br>
							<textarea type="text" name="infos" class="form-control input"></textarea>
						</div>
					</div>

					<div class="form-group center col-md-6 col-md-offset-3 col-xs-12">
						<button id="envoi" type="submit" class="form_btn form">Envoyer</button> - <button type="reset" class="form_btn form">Annuler</button>
					</div>

					<div class="form-group col-md-6 col-md-offset-3 col-xs-12">
						<label>*Champs obligatoires</label>
					</div>
				</form>
            </div>
        </div>
    </div>
	<?php endif; ?>
    <!-- /Intro -->
	
    <!-- Footer -->
    <footer class="footer_contacts">
        <div class="container" id="footer_contacts">
            <?php include("../includes/footer.php") ?>
            <!-- <script type="text/javascript" src="/js/inscriptions2015.js"></script> -->
        </div>
    </footer>
    <!-- /Footer -->
</body>

</html>
