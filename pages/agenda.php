<?php
$head_title = "Agenda, unité du Porc-épic 25, scouts et guides pluralistes de Ganshoren, Bruxelles-Norois";
include("../includes/header.php");
?>

<header class="header">
    <section class="center">
        <div class="container-fluid">
            <div class="row title">
                <div class="col-md-12">
                    <h1>Agenda de l'année</h1>
                </div>
            </div>

            <a href="#news" class="btn outline btn-intro">
                Poursuivre
            </a>
        </div>
    </section>
</header>



<main role="main">
     <section id="news" class="page-section red">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Cette semaine:</h2>
                </div>
            </div>
                
            <div class="row">
                <div class="col-xs-12">
                    <article>
                        <p class="text-center">
                            Nous serons présents ce samedi et dimanche au marché de Noël de Ganhsoren.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Agenda -->
    <section id="agenda" class="page-section agenda">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <article class="responsive-calendar">
                        <div class="controls row">
                            <div class="col-xs-3 col-sm-2 col-lg-1 btn-month">
                                <a data-go="prev"><i class="fa fa-chevron-left"></i></a>
                            </div>
                            
                            <div class="col-xs-6 col-sm-8 col-lg-10">
                                <h3><span id ="month" data-head-month></span>&nbsp;&nbsp;<span id="year" data-head-year></span></h3>
                            </div>

                            <div class="col-xs-3 col-sm-2 col-lg-1 btn-month">
                                <a data-go="next"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div><hr/>
                        <div class="day-headers">
                            <div class="day header"><h4>Lundi</h4></div>
                            <div class="day header"><h4>Mardi</h4></div>
                            <div class="day header"><h4>Mercredi</h4></div>
                            <div class="day header"><h4>Jeudi</h4></div>
                            <div class="day header"><h4>Vendredi</h4></div>
                            <div class="day header"><h4>Samedi</h4></div>
                            <div class="day header"><h4>Dimanche</h4></div>
                        </div>
                        <div class="days" data-group="days">
                            <!-- the place where days will be generated -->
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Modal -->
<aside id="calendarModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <header class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
                <h4 class="modal-title">Informations du jour</h4>
            </header>

            <section id="modalContent" class="modal-body"></section>

            <footer class="modal-footer">
                <button type="button" class="btn ghost" data-dismiss="modal">Fermer</button>
            </footer>
        </div>
    </div>
</aside>

<script type"text/javascript">
    var thisMonth = <?= json_encode(date("Y-m")) ?>;
</script>

<?php include("../includes/footer.php"); ?>
