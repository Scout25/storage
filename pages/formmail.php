<?php
	$TO = "webmaster@scout25.be";

	$h  = "From: " . $_POST['email'];

	$message = $_POST['comments'];

	$subject = "FAQ";

	mail($TO, $subject, $message, $h);

	Header("Location: http://www.scout25.be/pages/faq_merci.php");

?>