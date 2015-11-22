<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Head -->
<title>Zone animateurs, unité du Porc-épic 25, scouts et guides pluralistes de Ganshoren, Bruxelles-Norois</title>
<?php include("../includes/header.php"); ?>

<body class="blue">

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

    <div id="about_contacts" class="intro">
        <div class="container" id="zone_anim">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Documents utiles</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <a href="../documents/accident.pdf" target="blank"><img alt="Document PDF" class="img-responsive zoom" src="../img/icons/pdf.png">
                        <p class="center">Déclaration d'accident</p>
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="../documents/affilia.pdf" target="blank"><img alt="Document PDF" class="img-responsive zoom" src="../img/icons/pdf.png">
                        <p class="center">Affiliation</p>
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="../documents/autor_bois.pdf" target="blank"><img alt="Document PDF" class="img-responsive zoom" src="../img/icons/pdf.png">
                        <p class="center">Autorisation activités bois et forêts</p>
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="../documents/autor_parent.pdf" target="blank"><img alt="Document PDF" class="img-responsive zoom" src="../img/icons/pdf.png">
                        <p class="center">Participation et autorisation parentale</p>
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="../documents/decla_camp.pdf" target="blank"><img alt="Document PDF" class="img-responsive zoom" src="../img/icons/pdf.png">
                        <p class="center">Déclaration de camp</p>
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="../documents/fiche_medic.pdf" target="blank"><img alt="Document PDF" class="img-responsive zoom" src="../img/icons/pdf.png">
                        <p class="center">Fiche médicale</p>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <a href="../documents/pharma.pdf" target="blank"><img alt="Document PDF" class="img-responsive zoom" src="../img/icons/pdf.png">
                        <p class="center">Pharmacie</p>
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="../documents/fan.pdf" target="blank"><img alt="Document PDF" class="img-responsive zoom" src="../img/icons/pdf.png">
                        <p class="center">Inscription et fiche médicale FAN</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="about_contacts" class="intro">
        <div class="container" id="zone_anim">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Dossiers animation</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-md-offset-2">
                    <a href="../documents/animca.pdf" target="blank"><img alt="Document PDF" class="img-responsive pdf sections_logos zoom" src="../img/sections/logos/castors.png">
                        <p class="center">Animer les Castors</p>
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="../documents/animlx.pdf" target="blank"><img alt="Document PDF" class="img-responsive pdf sections_logos zoom" src="../img/sections/logos/louveteaux.png">
                        <p class="center">Animer les Louveateaux</p>
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="../documents/animsc.pdf" target="blank"><img alt="Document PDF" class="img-responsive pdf sections_logos zoom" src="../img/sections/logos/scouts.png">
                        <p class="center">Animer les Scouts</p>
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="../documents/animpi.pdf" target="blank"><img alt="Document PDF" class="img-responsive pdf sections_logos zoom" src="../img/sections/logos/pionniers.png">
                        <p class="center">Animer les Pionniers</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="about_contacts" class="intro">
        <div class="container" id="zone_anim">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Reservations repas parents</h2>
                    <hr>
                </div>
            </div>
            
            <?php
                
                try {
                        
                    // On se connecte à MySQL
                    $bdd = new PDO('mysql:host=rdbms.strato.de;dbname=DB1981852', 'U1981852', 'W3bma5t3r355610');
                    //$bdd = new PDO('mysql:host=localhost;dbname=scout', 'root', '');
                            
                }catch(Exception $e){
                        
                    // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
                                
                }

            ?>

            <style>
            .table-responsive {border: none !important;}
            .table-condensed {border: 1px solid white;}
            .condensed-right {border-right: 1px solid white;}
            </style>

            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td class="condensed-right"><h4>Nom</h4></td>
                                <td class="condensed-right"><h4>Prénom</h4></td>
                                <td class="condensed-right"><h4>Nom de l'enfant</h4></td>
                                <td class="condensed-right"><h4>Naissance</h4></td>
                                <td class="condensed-right"><h4>Email</h4></td>
                                <td class="condensed-right"><h4>GSM</h4></td>
                                <td class="condensed-right"><h4>Infos</h4></td>
                            </tr>
                        </thead>

                        <tbody>
                        <?php $req = $bdd -> query('SELECT * FROM inscriptions2015'); ?>

                            <?php while($donnees = $req -> fetch()) { ?>
                             <tr>
                                <td class="condensed-right"><p><?= $donnees['nom']; ?></p></td>
                                <td class="condensed-right"><p><?= $donnees['prenom']; ?></p></td>
                                <td class="condensed-right"><p><?= $donnees['prenomEnfant']; ?></p></td>
                                <td class="condensed-right"><p><?= $donnees['naissance']; ?></p></td>
                                <td class="condensed-right"><p><?= $donnees['mail']; ?></p></td>
                                <td class="condensed-right"><p><?= $donnees['gsm']; ?></p></td>
                                <td class="condensed-right"><p><?= $donnees['infos']; ?></p></td>
                            </tr>
                            <?php } ?>

                        <?php $req->closeCursor(); ?>
                        </tbody>
                    </table>
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
</body>
</html>