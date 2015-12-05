			<div class="alert-error">
				<h3 id="alertText"></h3>
			</div>
			
			<div class="alert-success">
				<h3 id="alertText"></h3>
			</div>	

			<nav class="navbar navbar-default" role="navigation">
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
										<a class="move" href="/">Accueil</a>
									</li>
									<li>
										<a class="move" href="/?#services">News</a>
									</li>
									<li>
										<a class="move" href="/?#about">Les sections</a>
									</li>
									<li>
										<a class="move" href="/?#services_index">Qui somme-nous?</a>
									</li>
									<li>
										<a class="move" href="/?#passion">Notre passion</a>
									</li>
									<li>
										<a class="move" href="/?#anims">Animateurs</a>
									</li>
									<li>
										<a class="move" href="/?#staff">Staff d'Unité</a>
									</li>
									<li>
										<a class="move" href="/?#gmap3">Nous trouver</a>
									</li>
								</ul>
							</li>
							
							<li class="dropdown">
								 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Castors<strong class="caret"></strong></a>
								<ul class="dropdown-menu">
									<li>
										<a class="move" href="/pages/castors.php">Accueil</a>
									</li>
									<li>
										<a class="move" href="/pages/castors.php?#news_castors">News</a>
									</li>
									<li>
										<a class="move" href="/pages/castors.php?#about_castors">La colonie</a>
									</li>
									<li>
										<a class="move" href="/pages/castors.php?#galerie">Ancienne galerie</a>
									</li>
									<li>
										<a class="move" href="/pages/castors.php?#anim_castors">Animateurs</a>
									</li>
								</ul>
							</li>
							
							<li class="dropdown">
								 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Louveteaux<strong class="caret"></strong></a>
								<ul class="dropdown-menu">
									<li>
										<a class="move" href="/pages/louveteaux.php">Accueil</a>
									</li>
									<li>
										<a class="move" href="/pages/louveteaux.php?#news_louveteaux">News</a>
									</li>
									<li>
										<a class="move" href="/pages/louveteaux.php?#about_louveteaux">La meute</a>
									</li>
									<li>
										<a class="move" href="/pages/louveteaux.php?#souvenirs_louveteaux">Souvenirs</a>
									</li>
									<li>
										<a class="move" href="/pages/louveteaux.php?#anim_louveteaux">Animateurs</a>
									</li>
								</ul>
							</li>
							
							<li class="dropdown">
								 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Scouts<strong class="caret"></strong></a>
								<ul class="dropdown-menu">
									<li>
										<a class="move" href="/pages/scouts.php">Accueil</a>
									</li>
									<li>
										<a class="move" href="/pages/scouts.php?#news_scouts">News</a>
									</li>
									<li>
										<a class="move" href="/pages/scouts.php?#about_scouts">La troupe</a>
									</li>
									<li>
										<a class="move" href="/pages/scouts.php?#souvenirs_scouts">Souvenirs</a>
									</li>
									<li>
										<a class="move" href="/pages/scouts.php?#anim_scouts">Animateurs</a>
									</li>
								</ul>
							</li>
							
							<li class="dropdown">
								 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pionniers<strong class="caret"></strong></a>
								<ul class="dropdown-menu">
									<li>
										<a class="move" href="/pages/pis.php">Accueil</a>
									</li>
									<li>
										<a class="move" href="/pages/pis.php?#news_pis">News</a>
									</li>
									<li>
										<a class="move" href="/pages/pis.php?#about_pis">Le relais</a>
									</li>
									<li>
										<a class="move" href="/pages/pis.php?#souvenirs_pis">Souvenirs</a>
									</li>
									<li>
										<a class="move" href="/pages/pis.php?#anim_pis">Animateurs</a>
									</li>
									<li>
										<a class="move" href="http://roumanie.esy.es" target="blank">Roumanie 2015</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a class="li_navbar" href="/pages/agenda.php">Agenda</a>
							</li>
							
							<li>
								<a class="li_navbar" href="/pages/infos.php">Infos</a>
							</li>
							
							<li>
								<a class="li_navbar" href="/pages/faq.php">FAQ</a>
							</li>
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li>
								<a class="li_navbar" href="/pages/inscriptions.php">Inscriptions</a>
							</li>
							
							<li>
								<a class="li_navbar" href="/pages/zone_anim.php">Zone animateurs</a>
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
