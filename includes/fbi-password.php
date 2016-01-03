<?php

$password_valide = "1234";

if (isset($_POST['fbi-password']) AND !empty($_POST['fbi-password'])) {

	if ($password_valide == $_POST['fbi-password']) {
	
		session_start();
		$_SESSION['fbi-password'] = $_POST['fbi-password'];

		header ('location: /pages/fbi.php');
	}
	
	else {
	
		echo '<body onLoad="alert(\'Mot de passe incorrect\')">';
		echo '<meta http-equiv="refresh" content="0;URL=/">';
	}
}

else {

		echo '<body onLoad="alert(\'Veuillez indiquer un mot de passe\')">';
		echo '<meta http-equiv="refresh" content="0;URL=/">';
}
?>