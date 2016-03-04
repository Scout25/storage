<?php
try {
    //$bdd = new PDO('mysql:host=rdbms.strato.de;dbname=DB1981852', 'U1981852', 'W3bma5t3r355610');
    $bdd = new PDO('mysql:host=localhost;dbname=scout', 'root', '');
} 
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

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

            <a href="#pdf" class="btn outline btn-intro">
                Poursuivre
            </a>
        </div>
    </section>
</header>

<main role="main">
    <section id="pdf" class="page-section pdf-zone">
        <div class="container-fluid" id="zone_anim">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Documents utiles</h2>
                </div>
            </div>

            <div class="row">
                <article>
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
                </article>
            </div>
        </div>
    </section>

    <section class="page-section pdf-zone">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Dossiers animation</h2>
                </div>
            </div>

            <div class="row">
                <article>
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
                </article>
            </div>
        </div>
    </section>

    <section class="page-section inscriptions">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Inscriptions 2015-2016</h2>
                </div>
            </div>

            <div class="row">
                <?php $req = $bdd->query('SELECT * FROM inscriptions2015 order by id desc') ?>
                    <?php while ($donnees = $req->fetch()) : ?>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <section class="card blue inscription"> <!-- inscription-box -->
                                <input class="id" type="hidden" value="<?= $donnees['id'] ?>">
                                <input class="nom" type="hidden" value="<?= $donnees['nom'] ?>">
                                <input class="prenom" type="hidden" value="<?= $donnees['prenom'] ?>">
                                <input class="prenomEnfant" type="hidden" value="<?= $donnees['prenomEnfant'] ?>">
                                <input class="naissance" type="hidden" value="<?= $donnees['naissance'] ?>">
                                <input class="mail" type="hidden" value="<?= $donnees['mail'] ?>">
                                <input class="gsm" type="hidden" value="<?= $donnees['gsm'] ?>">
                                <input class="infos" type="hidden" value="<?= $donnees['infos'] ?>">

                                <header>
                                    <h3 class="text-right">N°<?= $donnees['id'] ?></h3>
                                </header>

                                <section>
                                    
                                    <h4 class="first">Nom : <span><?= $donnees['nom'] ?></span></h4>
                                    <h4>Prénom : <span><?= $donnees['prenom'] ?></span></h4>
                                    <h4>Enfant : <span><?= $donnees['prenomEnfant'] ?></span></h4>
                                </section>
                                
                                <footer>
                                    <div class="text-center">
                                        <button class="btn ghost more-btn">Voir plus</button>
                                    </div>
                                </footer>
                            </section>
                        </div>
                    <?php endwhile ?>
                <?php $req->closeCursor() ?>
            </div>
        </div>
    </section>

    <section class="page-section blue fileupload-zone" style="display:none">
        <div class="container-fluid">
            <!-- The file upload form used as target for the file upload widget -->
            <form id="fileupload" action="/data/index.php" method="POST" enctype="multipart/form-data">
                <div class="row input-zone">
                    <div class="col-md-12">
                        <div class="first-input">
                            <label for="section">Section</label><br>
                            <select required name="section" id="">
                                <option selected="selected" disabled="true" value="">Choisir une section</option>
                                <option value="castors">Castors</option>
                                <option value="louveteaux">Louveteaux</option>
                                <option value="scouts">Scouts</option>
                                <option value="pis">Pionniers</option>
                            </select>
                        </div>

                        <div class="">
                            <label for="album">Album</label><br>
                            <input type="text" name="album">
                        </div>
                    </div>
                </div>
                <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
               <div class="row fileupload-buttonbar">
                    <div class="col-lg-7 main-action-zone">
                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <button class="btn outline fileinput-button">
                            <i class="icon-plus icon-white"></i>
                            <span>Ajouter des fichiers...</span>
                            <input type="file" name="files[]" multiple>
                        </button>

                        <button type="submit" class="btn outline start">
                            <i class="icon-upload icon-white"></i>
                            <span>Envoyer</span>
                        </button>

                        <button type="reset" class="btn outline cancel">
                            <i class="icon-ban-circle icon-white"></i>
                            <span>Annuler</span>
                        </button>

                        <button type="button" class="btn outline delete">
                            <i class="icon-trash icon-white"></i>
                            <span>Supprimer</span>
                        </button>

                        <input type="checkbox" class="toggle">
                        <!-- The global file processing state -->
                        <span class="fileupload-process"></span>
                    </div>
                    <!-- The global progress state -->
                    <div class="col-lg-5 fileupload-progress">
                        <!-- The global progress bar -->
                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                        </div>
                        <!-- The extended global progress state -->
                        <div class="progress-extended">&nbsp;</div>
                    </div>
                </div>
                <!-- The table listing the files available for upload/download -->
                <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
            </form>
        </div>
    </section>

    <!-- Modal -->
    <aside id="inscription-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <header class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                    <h4 class="modal-title">Inscription n°<e id="id"></e></h4>
                </header>

                <section id="modalContent" class="modal-body">
                    <h3>Nom : <e id="nom"></e></h3>
                    <h3>Prénom : <e id="prenom"></e></h3>
                    <h3>Enfant : <e id="prenomEnfant"></e></h3>
                    <h3>Naissance : <e id="naissance"></e></h3>
                    <h3>Mail : <e id="mail"></e></h3>
                    <h3>GSM : <e id="gsm"></span></h3>
                    <h3>Infos complémentaires :</h3>
                    <p><e id="infos"></e></p>
                </section>

                <footer class="modal-footer">
                    <button type="button" class="btn ghost" data-dismiss="modal">Fermer</button>
                </footer>
            </div>
        </div>
    </aside>
</main>


<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">En cours...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn outline list-btn start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Envoyer</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn outline list-btn cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Annuler</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn outline list-btn delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Supprimer</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn outline list-btn cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Annuler</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>

<?php include("../includes/footer.php"); ?>