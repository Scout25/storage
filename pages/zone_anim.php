<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Head -->
<title>Zone animateurs, unité du Porc-épic 25, scouts et guides pluralistes de Ganshoren, Bruxelles-Norois</title>
<?php include("../includes/header.php"); ?>

<body class="wood zone_anim">

    <!-- Navbar -->
    <?php include("../includes/navbar.php"); ?>
    <!-- /Navbar -->

    <!-- Full Page Image Header Area -->
    <div id="top" class="header_contacts">
        <div class="vert-text">
            <h1>Zone animateurs</h1>
            <br/>
            <a href="#about_contacts" id="bouton_intro" class="btn btn-lg btn-default little">Poursuivre</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

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
    
    <!-- Footer -->
    <footer class="footer_contacts">
        <div class="container" id="footer_contacts">
            <?php include("../includes/footer.php"); ?>
        </div>
    </footer>
    <!-- /Footer -->
    <script async src="/js/libraries/jquery-fileupload/vendor/jquery.ui.widget.js"></script>
    <script async src="/js/libraries/jquery-fileupload/jquery.fileupload.js"></script>
    <script async src="/js/libraries/jquery-fileupload/jquery.iframe-transport.js"></script>
    <script async type="text/javascript">
        // jQuery
        $(document).ready(function (){
            // Settings variables
            // Download names system
            var downloadLinks = $(".download-link");
            var This;
            var thisText;
            // More informations system
            var thisBox;

            // Put the name of the files in the download attribute of the links
            downloadLinks.each(function (){
                This = $(this);
                thisText = This.parent().find('p').text();

                This.attr("download", thisText);
            });

            // More informations system on inscription-box
            $(".more-btn").on("click", function() {
                thisBox = $(this).parent().parent();

                // Collect datas
                var Id = thisBox.find(".id").val();
                var Nom = thisBox.find(".nom").val();
                var Prenom = thisBox.find(".prenom").val();
                var PrenomEnfant = thisBox.find(".prenomEnfant").val();
                var Naissance = thisBox.find(".naissance").val();
                var Mail = thisBox.find(".mail").val();
                var Gsm = thisBox.find(".gsm").val();
                var Infos = thisBox.find(".infos").val();

                // Fill the modal
                $("#id").html(Id);
                $("#nom").html(Nom);
                $("#prenom").html(Prenom);
                $("#prenomEnfant").html(PrenomEnfant);
                $("#naissance").html(Naissance);
                $("#mail").html(Mail);
                $("#gsm").html(Gsm);
                $("#infos").html(Infos);

                $("#inscription-modal").modal("toggle");
            });
        });
    </script>
</body>
</html>