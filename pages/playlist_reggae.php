<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BDD playlist</title>
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

?>

	<form method="post" action="traitement_reggae.php">
		Artiste : <input type="text" name="artiste">
		
		Titre : <input type="text" name="titre">
		
		<input type="submit">
	</form>
	</br>
	</br>

<?php
	
	$select = $bdd->query('SELECT * FROM `playlist-reggae`');

	echo '<table border=1>';

	echo '<tr>';
	echo '<td style="min-width: 250px; text-align:center;">Artiste</td><td style="min-width: 250px; text-align:center;">Titre</td>';
	echo '</tr>';

	while ($donnees = $select -> fetch()) {
	
		echo '<tr>';
		echo '<td style="min-width: 250px; text-transform:uppercase;">'.$donnees['Artiste'].'</td><td style="min-width: 250px;">'.$donnees['Titre'].'</td>';
		echo '</tr>';
		
	}

	echo '</table>';

	$select -> closeCursor();

?>
</body>
</html>