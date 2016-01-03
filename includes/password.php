<?php

$password_valide = "25Anims1083";

if (isset($_POST['password']) AND !empty($_POST['password'])) {

	if ($password_valide == $_POST['password']) {
	
		session_start();
		$_SESSION['password'] = "25Anims1083";

		header ('location: /pages/zone_anim.php');
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