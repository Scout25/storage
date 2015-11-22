<?php
// include('../controllers/agendaController.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Head -->
<title>Agenda, unité du Porc-épic 25, scouts et guides pluralistes de Ganshoren, Bruxelles-Norois</title>
<link href="/css/calendar/responsive-calendar.css" rel="stylesheet">
<?php include("../includes/header.php"); ?>

<body id="agenda" class="body_agenda">
    
    <!-- Navbar -->
    <?php include("../includes/navbar.php"); ?>
    
    <!-- Full Page Image Header Area -->
    <div id="top" class="header_contacts">
        <div class="vert-text">
            <h1>Agenda de l'année</h1>
            <br/>
            <a href="#services" id="bouton_intro" class="btn btn-lg btn-default little">Poursuivre</a>
        </div>
    </div>

    <!-- Services -->
    <div id="services" class="services_contacts">
        <div class="col-xs-12 col-md-10 col-md-offset-1">
            <div class="responsive-calendar">
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
                    <div class="day header"><h6>Lundi</h6></div>
                    <div class="day header"><h6>Mardi</h6></div>
                    <div class="day header"><h6>Mercredi</h6></div>
                    <div class="day header"><h6>Jeudi</h6></div>
                    <div class="day header"><h6>Vendredi</h6></div>
                    <div class="day header"><h6>Samedi</h6></div>
                    <div class="day header"><h6>Dimanche</h6></div>
                </div>
                <div class="days" data-group="days">
                    <!-- the place where days will be generated -->
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer_contacts col-xs-12">
        <div class="container" id="footer_contacts">
            <?php include("../includes/footer.php"); ?>

            <!-- Moment.js -->
            <script type="text/javascript" src="/js/calendar/responsive-calendar.min.js" async></script>
            <script type="text/javascript" src="/js/scout25/agenda.js" async></script>
        </div>
    </footer>

    <!-- Modal -->
    <div id="calendarModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Informations du jour</h4>
          </div>
          <div id="modalContent" class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
          </div>
        </div>

      </div>
    </div>
</body>
</html>