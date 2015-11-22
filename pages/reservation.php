<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Head -->
<title>Réservation repas parents 25/04, unité du Porc-épic 25, scouts et guides pluralistes de Ganshoren, Bruxelles-Norois</title>
<?php
		
try {
			
	// On se connecte à MySQL
	//rdbms.strato.de
	$bdd = new PDO('mysql:host=rdbms.strato.de;dbname=DB1981852', 'U1981852', 'W3bma5t3r355610');
					
}catch(Exception $e){
			
	// En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
			        
}
	
$req = $bdd->query('SELECT sum(adultes) AS adultes, sum(enfants) AS enfants FROM reservations_25_05');

while ($donnees = $req->fetch()) {

	 $places_prises = $donnees['adultes'] + $donnees['enfants'];
	 
}

$width = $places_prises/50 * 100;

echo '<style>
	#progress {
		width: '.$width.'%;
	}
</style>';

include("../includes/header.php"); ?>

<body class="faq">

	<!-- Navbar -->
    <?php include("../includes/navbar.php"); ?>
    <!-- /Navbar -->
    
    <!-- Full Page Image Header Area -->
    <div id="top" class="header_contacts">
        <div class="vert-text">
            <h1>Réservation repas parents 25/04</h1>
            <br/>
            <a href="#about_contacts" id="bouton_intro" class="btn btn-lg btn-default little">Poursuivre</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->
    
	<!-- Intro -->
    <div id="about_contacts" class="intro">
        <div class="container">
        	<div class="row">
                <div class="col-md-4 col-md-offset-4 col-xs-12 text-center form">
                    <h2>Formulaire de reservation</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
				<form role="form" method="POST" action="reservation_effectuee.php" >
					<div class="form-group col-md-6 col-md-offset-3 col-xs-12">
						<h3 class="text-center"><span class="form">Places prises </span>: <?php echo $places_prises; ?>/50</h3>
						<div class="input" id="progressBar">
							<div id="progress">
								<p class="text-center" id="progressText"><?php echo $width; ?>%</p>
							</div>
						</div>
						<hr>
					</div>
					
					<div class="form-group col-md-3 col-md-offset-3 col-xs-12 col-sm-6">
						<label>Nom*</label>
						<input required type="text" name="nom" class="form-control input">
					</div>

					<div class="form-group col-md-3 col-md-offset- col-xs-12 col-sm-6">
						<label>Numero de telephone*</label></br>
						<input required type="text" name="tel" class="form-control input">
					</div>

					<div class="form-group col-md-6 col-md-offset-3 col-xs-12">
						<label>E-mail</label></br>
						<input type="email" name="mail" class="form-control input">
					</div>

					<div class="form-group col-md-2 col-md-offset-3 col-xs-4">
						<label>Adulte(s)*</label></br>
						<input required type="number" name="adultes" class="form-control input">
					</div>

					<div class="form-group col-md-2 col-md-offset- col-xs-4">
						<label>Enfant(s)</label></br>
						<input type="number" name="enfants" class="form-control input">
					</div>

					<div class="form-group col-md-2 col-md-offset- col-xs-4">
						<label>Repas Halal</label></br>
						<select name="halal" class="form-control input">
							<option value="non" selected="1">Non</option>
							<option value="oui">Oui</option>
						</select>
					</div>

					<div class="form-group col-md-6 col-md-offset-3 col-xs-12">
						<label>Information complementaire</label></br>
						<textarea name="remarque" class="form-control input"></textarea>
					</div>

					<div class="form-group center col-md-6 col-md-offset-3 col-xs-12">
						<button type="submit" class="form_btn form">Envoyer</button> - <button type="reset" class="form_btn form">Annuler</button>
					</div>

					<div class="form-group col-md-6 col-md-offset-3 col-xs-12">
						<label>*Champs obligatoires</label>
					</div>
				</form>
            </div>
        </div>
    </div>
    <!-- /Intro -->
	
    <!-- Footer -->
    <footer class="footer_contacts">
        <div class="container" id="footer_contacts">
            <?php include("../includes/footer.php") ?>
        </div>
    </footer>
    <!-- /Footer -->
</body>

</html>
