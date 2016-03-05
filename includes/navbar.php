<?php
$news = false;
$newsLouveteaux = false;
$newsCastors = true;
?>
<div class="alert-error">
	<h3 id="alertText"></h3>
</div>

<div class="alert-success">
	<h3 id="alertText"></h3>
</div>	

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-center">
		<div class="navbar-header">
			 <button type="button" id="menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>Menu</button>
			 
			 <a class="navbar-brand" href="/"></a>
		</div>
		
		<!-- Accueil -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle <?= ($view == "index")?"active":null ?>" data-toggle="dropdown">Accueil<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a class="move" href="/<?= ($view == "index")?"#top":null ?>">Accueil</a>
						</li>
						<?php if ($news) : ?>
							<li>
								<a class="move" href="/?#news">News</a>
							</li>
						<?php endif ?>
						<li>
							<a class="move" href="/?#sections">Les sections</a>
						</li>
						<li>
							<a class="move" href="/?#nous">Qui somme-nous?</a>
						</li>
						<li>
							<a class="move" href="/?#passion">Notre passion</a>
						</li>
						<li>
							<a class="move" href="/?#animateurs">Animateurs</a>
						</li>
						<li>
							<a class="move" href="/?#staff">Staff d'Unité</a>
						</li>
						<li>
							<a class="move" href="/?#contact">Nous trouver</a>
						</li>
					</ul>
				</li>
				
				<li class="dropdown">
					 <a href="#" class="dropdown-toggle <?= ($view == "castors")?"active":null ?>" data-toggle="dropdown">Castors<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a class="move" href="/<?= ($view == "castors")?"#top":"pages/castors.php" ?>">Accueil</a>
						</li>
						<?php if ($newsCastors) : ?>
							<li>
								<a class="move" href="/pages/castors.php?#news_castors">News</a>
							</li>
						<?php endif ?>
						<li>
							<a class="move" href="/pages/castors.php?#colonie">Infos Pâques</a>
						</li>
						<li>
							<a class="move" href="/pages/castors.php?#colonie">La colonie</a>
						</li>
						<li>
							<a class="move" href="/pages/castors.php?#galerie">Ancienne galerie</a>
						</li>
						<li>
							<a class="move" href="/pages/castors.php?#animateurs_castors">Animateurs</a>
						</li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle <?= ($view == "louveteaux")?"active":null ?>" data-toggle="dropdown">Louveteaux<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a class="move" href="/<?= ($view == "louveteaux")?"#top":"pages/louveteaux.php" ?>">Accueil</a>
						</li>
						<?php if ($newsLouveteaux) : ?>
							<li>
								<a class="move" href="/?#news_louveteaux">News</a>
							</li>
						<?php endif ?>
						<li>
							<a class="move" href="/pages/castors.php?#colonie">Infos Pâques</a>
						</li>
						<li>
							<a class="move" href="/pages/louveteaux.php?#meute">La meute</a>
						</li>
						<li>
							<a class="move" href="/pages/louveteaux.php?#souvenirs_louveteaux">Souvenirs</a>
						</li>
						<li>
							<a class="move" href="/pages/louveteaux.php?#animateurs_louveteaux">Animateurs</a>
						</li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle <?= ($view == "scouts")?"active":null ?>" data-toggle="dropdown">Scouts<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a class="move" href="/<?= ($view == "scouts")?"#top":"pages/scouts.php" ?>">Accueil</a>
						</li>
						<?php if ($news) : ?>
							<li>
								<a class="move" href="/?#news_scouts">News</a>
							</li>
						<?php endif ?>
						<li>
							<a class="move" href="/pages/castors.php?#colonie">Infos Pâques</a>
						</li>
						<li>
							<a class="move" href="/pages/scouts.php?#troupe">La troupe</a>
						</li>
						<li>
							<a class="move" href="/pages/scouts.php?#souvenirs_scouts">Souvenirs</a>
						</li>
						<li>
							<a class="move" href="/pages/scouts.php?#animateurs_scouts">Animateurs</a>
						</li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle <?= ($view == "pis")?"active":null ?>" data-toggle="dropdown">Pionniers<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a class="move" href="/<?= ($view == "pis")?"#top":"pages/pis.php" ?>">Accueil</a>
						</li>
						<?php if ($news) : ?>
							<li>
								<a class="move" href="/?#news_pis">News</a>
							</li>
						<?php endif ?>
						<li>
							<a class="move" href="/pages/castors.php?#colonie">Infos Pâques</a>
						</li>
						<li>
							<a class="move" href="/pages/pis.php?#relais">Le relais</a>
						</li>
						<li>
							<a class="move" href="/pages/pis.php?#souvenirs_pis">Souvenirs</a>
						</li>
						<li>
							<a class="move" href="/pages/pis.php?#animateurs_pis">Animateurs</a>
						</li>
						<li>
							<a class="move" href="http://roumanie.esy.es" target="blank">Roumanie 2015</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a class="li_navbar <?= ($view == "agenda")?"active":null ?>" href="/pages/agenda.php">Agenda</a>
				</li>
				
				<li>
					<a class="li_navbar <?= ($view == "infos")?"active":null ?>" href="/pages/infos.php">Infos</a>
				</li>
				
				<li>
					<a class="li_navbar <?= ($view == "faq")?"active":null ?>" href="/pages/faq.php">FAQ</a>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li>
					<a class="li_navbar <?= ($view == "inscriptions")?"active":null ?>" href="/pages/inscriptions.php">Inscriptions</a>
				</li>
				
				<li>
					<a class="li_navbar <?= ($view == "anim")?"active":null ?>" href="/pages/zone_anim.php">Zone animateurs</a>
				</li>
				
				<!-- <li>
					<?php /*

					if (isset($_SESSION['fbi-password']) AND $_SESSION['fbi-password'] == "1234") {
					
					    echo '<a class="li_navbar" href="/pages/fbi.php">FBI</a>';
					
					} else {
						
						echo '<a href="#" class="li_navbar" onclick="toggleFbi()">FBI</a>';

					}
					
					*/?>
				</li> -->
			</ul>
		</div>					
	</div>
</nav>

<script type="text/javascript">
	function toggleFbi() {
		var wrapper = $("#fbi-wrapper");
		wrapper.toggleClass("active");
	}
</script>
