<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Head -->
<title>Inscription effectuée, unité du Porc-épic 25, scouts et guides pluralistes de Ganshoren, Bruxelles-Norois</title>
<?php include("../includes/header.php"); ?>

<body class="faq">

	<?php
		
try {
			
	// On se connecte à MySQL
	//rdbms.strato.de
	$bdd = new PDO('mysql:host=rdbms.strato.de;dbname=DB1981852', 'U1981852', 'W3bma5t3r355610');
					
}catch(Exception $e){
			
	// En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
			        
}
	
	$insert = $bdd->prepare('INSERT INTO inscriptions(nom, tel, mail, nbrMembres, nonMembres, soutien, membres, remarque) VALUES(:nom, :tel, :mail, :nbrMembres, :nonMembres, :soutien, :membres, :remarque)');
	
	$insert->execute(array(
	
		'nom' => $_POST['nom'],
		'tel' => $_POST['tel'],
		'mail' => $_POST['mail'],
		'nbrMembres' => $_POST['nbrMembres'],
		'nonMembres' => $_POST['nonMembres'],
		'soutien' => $_POST['soutien'],
		'membres' => $_POST['membres'],
		'remarque' => $_POST['remarque']
	
	));
	
	$insert->closeCursor();
	
	$req = $bdd->prepare('SELECT id, nbrMembres, nonMembres, soutien FROM inscriptions WHERE nom= :nom');
	
	$req->execute(array(
	
		'nom' => $_POST['nom']
	
	));
	
	while ($donnees = $req->fetch()) {
	
		$id = $donnees['id'];
		$nbrMembres = $donnees['nbrMembres'];
		$nonMembres = $donnees['nonMembres'];
		$soutien = $donnees['soutien'];
		
	}
	
	$req->closeCursor();
	
	$total = ($nbrMembres*10) + ($nonMembres*15) + ($soutien*5);

	// Déclaration de l'adresse de destination
	$mail = $_POST['mail'];
	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
	{
		$passage_ligne = "\r\n";
	}
	else
	{
		$passage_ligne = "\n";
	}
	//Déclaration des messages au format texte et au format HTML.
	$message_txt = "L’unité du Porc-Epic vous remercie.

	Vous êtes préinscrit à la Fête d’Unité 2015. Votre commande est reprise si dessous :
	
	Membre(s) de l'unité : ".$nbrMembres."x10€
	Non membre(s) : ".$nonMembres."x15€
	Billet(s) de soutien : ".$soutien."x5€
	Pour un total de ".$total."€
	
	Veuillez-vous acquitter du montant dû par virement bancaire au 
	numéro de compte de l’unité et reprenant la communication \"FU2015 ".$id."\" pour confirmer votre inscription définitive.
	
	Pour tout renseignement,
	Adam Cambier
	unite@scout25.be";
	 
	//=====Création de la boundary.
	$boundary = "-----=".md5(rand());
	$boundary_alt = "-----=".md5(rand());
	//==========
	 
	//=====Définition du sujet.
	$sujet = "Inscription fete d'unite 14/03/15";
	//=========
	 
	//=====Création du header de l'e-mail.
	$header = "From: \"L'unite du Porc-epic\"<unite@scout25.be>".$passage_ligne;
	$header.= "Reply-to: \"L'unite du Porc-epic\" <unite@scout25.be>".$passage_ligne;
	$header.= "MIME-Version: 1.0".$passage_ligne;
	$header.= "Content-Type: text/plain;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
	//==========
	 
	//=====Création du message.
	//=====Ajout du message au format texte.
	$message.= $passage_ligne.$message_txt.$passage_ligne;
	//=====Envoi de l'e-mail.
	mail($mail,$sujet,$message,$header);

	
	?>

	<!-- Navbar -->
    <?php include("../includes/navbar.php"); ?>
    <!-- /Navbar -->
    
    <!-- Full Page Image Header Area -->
    <div id="top" class="header_contacts">
        <div class="vert-text">
            <h1>Inscription effectuée</h1>
            <br/>
            <a href="#about_contacts" id="bouton_intro" class="btn btn-lg btn-default little">Poursuivre</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->
    
    <div id="about_contacts" class="intro">
        <div class="container">
        	<div class="row">
                <div class="col-md-4 col-md-offset-4 col-xs-12 text-center">
                    <h2>Notes</h2>
                    <hr>
                </div>
            </div>
            
            <div class="row">
            	<div class="col-md-6 col-md-offset-3 col-xs-12">
            		<p>Nous vous remercions pour votre inscription et vous attendons le 14/03/15 pour une Fête d'unité mémorable.</p>
            		<p>PS: un e-mail contenant les informations de payement vous a été envoyé, si vous ne le voyez pas dans votre boite de réception vérifiez votre dossier "indésirables".</p>
            	</div>
            </div>
        </div>
    </div>
	
    <!-- Footer -->
    <footer class="footer_contacts">
        <div class="container" id="footer_contacts">
            <?php include("../includes/footer.php") ?>
        </div>
    </footer>
    <!-- /Footer -->
</body>

</html>
