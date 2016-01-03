<?php
$head_title = "Inscriptions année scoute 2015-2016, unité du Porc-épic 25, scouts et guides pluralistes de Ganshoren, Bruxelles-Norois";
$envoye = ($_GET && $_GET['envoye'])?true:false;
include("../includes/header.php");
?>

<header class="header">
    <section class="center">
        <div class="container-fluid">
            <div class="row title">
                <div class="col-md-12">
                	<?php if($envoye) : ?>
                    	<h1>Inscription effectuée !</h1>
                	<?php else : ?>
                		<h1>Inscriptions année 2015-16</h1>
                	<?php endif ?>
                </div>
            </div>

        	<?php if($envoye) : ?>
	            <a href="/" class="btn outline btn-intro">
	                Accueil
	            </a>
        	<?php else : ?>
	            <a href="#formulaire" class="btn outline btn-intro">
	                Poursuivre
	            </a>
        	<?php endif ?>
        </div>
    </section>
</header>

<main>
	<?php if ( $envoye == 1 ) : else : ?>
	    <section id="formulaire" class="page-section formulaire">
	        <div class="container-fluid">
	            <div class="row">
					<form id="form" role="form" method="post" action="/scripts/inscription.php" >
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">
							<section class="card blue">
								<header class="text-center">
									<h3>Formulaire d'inscription</h3>
								</header>

								<section>
									<div class="row">
										<div class="col-sm-6 bottom">
											<label>Nom *</label>
											<input required type="text" name="nom">
										</div>

										<div class="col-sm-6 bottom">
											<label>Prénom *</label>
											<input type="text" name="prenom">
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6 bottom">
											<label>Prénom de l'enfant *</label>
											<input required type="text" name="prenomEnfant">
										</div>

										<div class="col-sm-6 bottom">
											<label>Date de naissance de l'enfant *</label>
											<input required type="date" name="naissance">
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6 bottom">
											<label>E-mail *</label>
											<input required type="email" name="mail">
										</div>

										<div class="col-sm-6 bottom">
											<label>Numéro de GSM *</label>
											<input required type="text" name="gsm">
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12 bottom">
											<label>Information complementaire</label>
											<textarea type="text" name="infos"></textarea>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12">
											<label>*Champs obligatoires</label>
										</div>
									</div>
								</section>

								<footer>
									<div class="form-group text-right">
										<button id="envoi" type="submit" class="btn ghost">Envoyer</button>
										<button type="reset" class="btn ghost right">Annuler</button>
									</div>
								</footer>
							</section>
						</div>
					</form>
	            </div>
	        </div>
	    </section>
	<?php endif; ?>
</main>

<?php include("../includes/footer.php"); ?>