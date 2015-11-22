<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload done!</title>
</head>

<body>
<?php
	
	try {
			
		// On se connecte à MySQL
		$bdd = new PDO('mysql:host=rdbms.strato.de;dbname=DB1981852', 'U1981852', 'W3bma5t3r355610');
				
	}catch(Exception $e){
			
		// En cas d'erreur, on affiche un message et on arrête tout
		die('Erreur : '.$e->getMessage());
			        
	}

	$insert = $bdd->prepare('INSERT INTO `playlist-reggae` (Artiste, Titre) VALUES(:artiste, :titre)');
	$insert->execute(array(
			'artiste' => $_POST['artiste'],
			'titre' => $_POST['titre']
		));

	$insert->closeCursor();

	echo 'Plus 10 points pour griffondor! </br></br>';
	echo 'Retour à la liste -> <a href="/pages/playlist_reggae.php">ici</a>';

?>
</body>
</html>