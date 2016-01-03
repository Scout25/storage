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
		$bdd = new PDO('mysql:host=rdbms.strato.de;dbname=DB1981852', 'U1981852', 'W3bma5t3r355610');
					
	}catch(Exception $e){
			
		// En cas d'erreur, on affiche un message et on arrête tout
	        die('Erreur : '.$e->getMessage());
			        
	}
	
	$req = $bdd->prepare('INSERT INTO reservations_25_05(nom, tel, mail, adultes, enfants, halal, remarque) VALUES(:nom, :tel, :mail, :adultes, :enfants, :halal, :remarque)');
	
	$req->execute(array(
		'nom' => $_POST['nom'],
		'tel' => $_POST['tel'],
		'mail' => $_POST['mail'],
		'adultes' => $_POST['adultes'],
		'enfants' => $_POST['enfants'],
		'halal' => $_POST['halal'],
		'remarque' => $_POST['remarque']
	));
	
	$req->closeCursor();

	/* Email 
	
	// On filtre les serveurs qui présentent des bugs
	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail))
	{
		$passage_ligne = "\r\n";
	}
	else
	{
		$passage_ligne = "\n";
	}
	
	// Destinataire, Sujet et Message
	$mail = $_POST['mail'];
	$sujet = 'Inscription fête d\'unité 25ème';
	$texte = 'Ceci est un putain de message, ma gueule!';
	
	// Separation
	
	// Email Header
	$header = 'Content-type: text/plain; charset=utf-8'."\r\n";
	$header .= "From: \"L'unité du Porc-épic\"<unite@scout25.be>".$passage_ligne;
	$header .= "Reply-to: \"L'unité du Porc-épic\" <unite@scout25.be>".$passage_ligne;
	$header .= "MIME-Version: 1.0".$passage_ligne;
	$header .= "X-Priority: 3".$passage_ligne;
	
	// Ajout du message au format texte
	$message.= $passage_ligne.$texte.$passage_ligne;
	
	// Envoi de l'e-mail.
	mail($mail,$sujet,$message,$header);*/

	
	?>

	<!-- Navbar -->
    <?php include("../includes/navbar.php"); ?>
    <!-- /Navbar -->
    
    <!-- Full Page Image Header Area -->
    <div id="top" class="header_contacts">
        <div class="vert-text">
            <h1>Inscription effectuée</h1>
            <br/>
            <a href="/" id="bouton_intro" class="btn btn-lg btn-default little">Accueil</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->
	
    <!-- Footer -->
    <footer class="footer_contacts">
        <div class="container" id="footer_contacts">
            <?php include("../includes/footer.php") ?>
        </div>
    </footer>
    <!-- /Footer -->
</body>

</html>
