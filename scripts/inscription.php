<?php 
try {
			
	// On se connecte à MySQL
	//rdbms.strato.de
	$bdd = new PDO('mysql:host=rdbms.strato.de;dbname=DB1981852', 'U1981852', 'W3bma5t3r355610');

	//$bdd = new PDO('mysql:host=localhost;dbname=scout25', 'root', '355610');
					
}catch(Exception $e){
			
	// En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
		
}     
	
$insert = $bdd->prepare('INSERT INTO inscriptions2015(nom, prenom, prenomEnfant, naissance, mail, gsm, infos) VALUES(:nom, :prenom, :prenomEnfant, :naissance, :mail, :gsm, :infos)');

$insert->execute(array(

	'nom' => $_POST['nom'],
	'prenom' => $_POST['prenom'],
	'prenomEnfant' => $_POST['prenomEnfant'],
	'naissance' => $_POST['naissance'],
	'mail' => $_POST['mail'],
	'gsm' => $_POST['gsm'],
	'infos' => $_POST['infos']

));

$insert->closeCursor();
$url = 'Location: /pages/inscriptions.php?envoye=1';
header($url);

// if ( !empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['prenomEnfant']) && !empty($_GET['naissance']) && !empty($_GET['mail']) && !empty($_GET['gsm']) )
// {	   
// 	try {
				
// 		// On se connecte à MySQL
// 		//rdbms.strato.de
// 		$bdd = new PDO('mysql:host=rdbms.strato.de;dbname=DB1981852', 'U1981852', 'W3bma5t3r355610');

// 		//$bdd = new PDO('mysql:host=localhost;dbname=scout25', 'root', 'root');
						
// 	}catch(Exception $e){
				
// 		// En cas d'erreur, on affiche un message et on arrête tout
// 	    die('Erreur : '.$e->getMessage());
			
// 	}     
		
// 	$insert = $bdd->prepare('INSERT INTO inscriptions2015(nom, prenom, prenomEnfant, naissance, mail, gsm, infos) VALUES(:nom, :prenom, :prenomEnfant, :naissance, :mail, :gsm, :infos)');

// 	$insert->execute(array(

// 		'nom' => $_GET['nom'],
// 		'prenom' => $_GET['prenom'],
// 		'prenomEnfant' => $_GET['prenomEnfant'],
// 		'naissance' => $_GET['naissance'],
// 		'mail' => $_GET['mail'],
// 		'gsm' => $_GET['gsm'],
// 		'infos' => $_GET['infos']

// 	));

// 	$insert->closeCursor();

// 	header('200', true, 200);
// 	die('Inscription effectuée !');
// }

// else
// {
// 	header('500', true, 500);

// 	if ( empty($_GET['nom']) )
// 		die('Veuillez indiquer votre nom');

// 	if ( empty($_GET['prenom']) )
// 		die('Veuillez indiquer votre prénom');

// 	if ( empty($_GET['prenomEnfant']) )
// 		die('Veuillez indiquer le prénom de votre enfant');

// 	if ( empty($_GET['naissance']) )
// 		die('Veuillez indiquer la date de naissance de votre enfant');

// 	if ( empty($_GET['mail']) )
// 		die('Veuillez indiquer votre adresse mail');

// 	if ( empty($_GET['gsm']) )
// 		die('Veuillez indiquer votre numéro de GSM');
// }
?>