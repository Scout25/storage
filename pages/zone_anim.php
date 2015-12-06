<?php
$head_title = "Zone animateurs, unité du Porc-épic 25, scouts et guides pluralistes de Ganshoren, Bruxelles-Norois";
include("../includes/header.php");
?>

<header class="header">
    <section class="vert-text center">
        <div class="container-fluid">
            <div class="row title">
                <div class="col-md-12">
                    <h1>Zone animateurs</h1>
                </div>
            </div>

            <a href="#agenda" class="btn outline btn-intro">
                Poursuivre
            </a>
        </div>
    </section>
</header>

    <div id="about_contacts" class="pdf-zone">
        <div class="container" id="zone_anim">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Documents utiles</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="pdf-box col-xs-6 col-sm-3 col-md-2 text-center">
                    <a class="download-link" href="../documents/accident.pdf" download="">
                        <i class="fa pdf-file"></i>
                    </a>
                    <p class="center">Déclaration d'accident</p>
                </div>

                <div class="pdf-box col-xs-6 col-sm-3 col-md-2 text-center">
                    <a class="download-link" href="../documents/affilia.pdf" download="">
                        <i class="fa pdf-file"></i>
                    </a>
                    <p class="center">Affiliation</p>
                </div>

                <div class="pdf-box col-xs-6 col-sm-3 col-md-2 text-center">
                    <a class="download-link" href="../documents/autor_bois.pdf" download="">
                        <i class="fa pdf-file"></i>
                    </a>
                    <p class="center">Autorisation activités bois et forêts</p>
                </div>

                <div class="pdf-box col-xs-6 col-sm-3 col-md-2 text-center">
                    <a class="download-link" href="../documents/autor_parent.pdf" download="">
                        <i class="fa pdf-file"></i>
                    </a>
                    <p class="center">Participation et autorisation parentale</p>
                </div>

                <div class="pdf-box col-xs-6 col-sm-3 col-md-2 text-center">
                    <a class="download-link" href="../documents/decla_camp.pdf" download="">
                        <i class="fa pdf-file"></i>
                    </a>
                    <p class="center">Déclaration de camp</p>
                </div>

                <div class="pdf-box col-xs-6 col-sm-3 col-md-2 text-center">
                    <a class="download-link" href="../documents/fiche_medic.pdf" download="">
                        <i class="fa pdf-file"></i>
                    </a>
                    <p class="center">Fiche médicale</p>
                </div>

                <div class="pdf-box col-xs-6 col-sm-3 col-md-2 text-center">
                    <a class="download-link" href="../documents/pharma.pdf" download="">
                        <i class="fa pdf-file"></i>
                    </a>
                    <p class="center">Pharmacie</p>
                </div>

                <div class="pdf-box col-xs-6 col-sm-3 col-md-2 text-center">
                    <a class="download-link" href="../documents/fan.pdf" download="">
                        <i class="fa pdf-file"></i>
                    </a>
                    <p class="center">Inscription et fiche médicale FAN</p>
                </div>
            </div>
        </div>
    </div>

    <div id="about_contacts" class="pdf-zone">
        <div class="container" id="zone_anim">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Dossiers animation</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="pdf-box col-xs-6 col-sm-3 col-md-2 col-md-offset-2 text-center">
                    <a class="download-link" href="../documents/animca.pdf" download="">
                        <i class="fa pdf-file"></i>
                    </a>
                    <p class="center">Animer les Castors</p>
                </div>

                <div class="pdf-box col-xs-6 col-sm-3 col-md-2 text-center">
                    <a class="download-link" href="../documents/animlx.pdf" download="">
                        <i class="fa pdf-file"></i>
                    </a>
                    <p class="center">Animer les Louveateaux</p>
                </div>

                <div class="pdf-box col-xs-6 col-sm-3 col-md-2 text-center">
                    <a class="download-link" href="../documents/animsc.pdf" download="">
                        <i class="fa pdf-file"></i>
                    </a>
                    <p class="center">Animer les Scouts</p>
                </div>

                <div class="pdf-box col-xs-6 col-sm-3 col-md-2 text-center">
                    <a class="download-link" href="../documents/animpi.pdf" download="">
                        <i class="fa pdf-file"></i>
                    </a>
                    <p class="center">Animer les Pionniers</p>
                </div>
            </div>
        </div>
    </div>

    <div id="about_contacts" class="inscription-table">
        <div class="container" id="zone_anim">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Inscriptions 2015-2016</h2>
                    <hr>
                </div>
            </div>
            
            <?php
                try {
                    //$bdd = new PDO('mysql:host=rdbms.strato.de;dbname=DB1981852', 'U1981852', 'W3bma5t3r355610');
                    $bdd = new PDO('mysql:host=localhost;dbname=scout', 'root', '');
                } 
                catch(Exception $e) {
                    die('Erreur : '.$e->getMessage());
                }
            ?>

            <div class="row">
                <section class="inscription-zone">
                    <?php $req = $bdd->query('SELECT * FROM inscriptions2015') ?>
                        <?php while ($donnees = $req->fetch()) : ?>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <article class="inscription-box">
                                    <input class="id" type="hidden" value="<?= $donnees['id'] ?>">
                                    <input class="nom" type="hidden" value="<?= $donnees['nom'] ?>">
                                    <input class="prenom" type="hidden" value="<?= $donnees['prenom'] ?>">
                                    <input class="prenomEnfant" type="hidden" value="<?= $donnees['prenomEnfant'] ?>">
                                    <input class="naissance" type="hidden" value="<?= $donnees['naissance'] ?>">
                                    <input class="mail" type="hidden" value="<?= $donnees['mail'] ?>">
                                    <input class="gsm" type="hidden" value="<?= $donnees['gsm'] ?>">
                                    <input class="infos" type="hidden" value="<?= $donnees['infos'] ?>">
                                    
                                    <p class="text-right">N°<?= $donnees['id'] ?></p>
                                    <h3 class="first">Nom : <span><?= $donnees['nom'] ?></span></h3>
                                    <h3>Prénom : <span><?= $donnees['prenom'] ?></span></h3>
                                    <h3>Enfant : <span><?= $donnees['prenomEnfant'] ?></span></h3>

                                    <div class="text-center">
                                        <button class="ghost more-btn">Voir plus</button>
                                    </div>
                                </article>
                            </div>
                        <?php endwhile ?>
                    <?php $req->closeCursor() ?>
                </section>
            </div>
        </div>
    </div>

    <!-- <div id="about_contacts" class="fileupload-zone">
        <form id="fileupload" action="/data" method="POST" enctype="multipart/form-data">
        </form>
    </div> -->

    <!-- Modal -->
    <div id="inscription-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Inscription n°<e id="id"></e></h4>
                </div>

                <div id="modalContent" class="modal-body">
                    <h3>Nom : <e id="nom"></e></h3>
                    <h3>Prénom : <e id="prenom"></e></h3>
                    <h3>Enfant : <e id="prenomEnfant"></e></h3>
                    <h3>Naissance : <e id="naissance"></e></h3>
                    <h3>Mail : <e id="mail"></e></h3>
                    <h3>GSM : <e id="gsm"></span></h3>
                    <h3>Infos complémentaires :</h3>
                    <p><e id="infos"></e></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

<?php include("../includes/footer.php"); ?>