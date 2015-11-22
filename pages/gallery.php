<?php
session_start();
$current_url = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
if ($_GET && $_GET['section'] && $_GET['gallery'] && $_GET['title']) {
	$section = $_GET['section'];
	$gallery = $_GET['gallery'];
	$title = str_replace("-", " ", $_GET['title']);
	$titles = array(
			"scouts" => "Les scouts et guides",
		);
} else {
	header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Gallerie Scouts - Carlsbourg 2013 - Scout25</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="Content-Language" content="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="scouts,scoutisme,guides,pluralistes,jeunes,jeunesse,mouvement de jeunesse,activités,animations,ganshoren,bruxelles,Bruxelles-Noroi,section,animateurs,week-end,adolescents,jeunes adolescents">
    <meta name="author" content="capaert.axel@hotmail.com">


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/icons/apple_touch/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/icons/apple_touch/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/icons/apple_touch/72.png">
    <link rel="apple-touch-icon-precomposed" href="/img/icons/apple_touch/57.png">
    <link rel="shortcut icon" href="/img/icons/favicon.png">

    <!-- Add custom CSS here -->
    <link href="/css/gallery.css" rel="stylesheet">
    
    <!-- Google Analytics -->
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-58418852-1', 'auto');
	  ga('send', 'pageview');
	</script>
</head>

<body id="gallery" class="is-loading-0 is-loading-1 is-loading-2">
		<!-- Main -->
		<div id="main">

			<!-- Header -->
			<header id="header">
				<h1><?= $titles[$section] ?></h1>
				<p><?= $title ?></p>
			</header>

			<!-- Thumbnail -->
			<section id="thumbnails">
			<?php
				$folder = "../img/gallery/sections/".$section."/".$gallery."/fulls/";
				$folderThumbs = "../img/gallery/sections/".$section."/".$gallery."/thumbs/";
				$files = scandir($folder);
				// $description = array(
				// 		"L'heure de la douche",
				// 		"L'heure de la douche",
				// 		"L'heure de la douche",
				// 		"Tente camouflage",
				// 		"Petit coin sympa",
				// 		"Le terrain",
				// 		"Les tables à feu",
				// 		"Repas en préparation",
				// 		"Une pause s'impose",
				// 		"Carlsbourg 2015",
				// 		"Préparation du repas",
				// 		"Préparation du repas",
				// 		"Préparation du repas",
				// 		"Préparation du repas",
				// 		"Le terrain",
				// 	);

				$i = 0;
				foreach ($files as $file) :
					// Prepend mac hidden files issue
					if ($file == "." || $file == "..") :
						// Do nothing
					else : ?>
						<article>
							<a class="thumbnail" href="<?= $folder.$file ?>" alt="<?= $description[$i]?$description[$i]:null ?>" >
								<img src="<?= $folderThumbs.$file ?>" alt="<?= $description[$i]?$description[$i]:null ?>" />
							</a>
							<h2><?= $title ?></h2>
							<!-- <p><?//= $description[$i]?$description[$i]:null ?></p> -->
						</article>
					<?php $i++; endif; ?>
				<?php endforeach; ?>
			</section>

			<!-- Footer -->
			<footer id="footer">
				<ul class="copyright">
					<li>&copy; 25 ème unité de Ganshoren</li>
				</ul>
			</footer>
		</div>

		<!-- Scripts -->
		<script src="/js/jquery-1.11.2.min.js"></script>
		<script src="/js/scout25/gallery/skel.min.js"></script>
		<!--[if lte IE 8]><script src="/js/scout25/gallery/ie/respond.min.js"></script><![endif]-->
		<script src="/js/scout25/gallery/main.js"></script>
	</body>
</html>