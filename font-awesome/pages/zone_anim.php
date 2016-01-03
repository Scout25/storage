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

    <!-- Footer -->
    <footer class="footer_contacts">
        <div class="container" id="footer_contacts">
            <?php include("../includes/footer.php"); ?>
        </div>
    </footer>
    <!-- /Footer -->
</body>
</html>