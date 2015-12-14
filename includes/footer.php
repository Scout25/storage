<!-- Footer -->
<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center border">
				<p>Copyright &copy; <a target="_blank" href="http://be.linkedin.com/pub/axel-capaert/a8/350/812/">Axel Capaert</a> 2014</p>
				<p>Dev: <a target="_blank" href="https://www.guillaumepiron.com">Guillaume Piron</a></p>
			</div>
		</div>
	</div>
</footer>

<!-- Librairies -->
<script type="text/javascript" src="/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/js/bootstrap/bootstrap.min.js"></script>
<!-- <script async type="text/javascript" src="/js/nprogress/nprogress.min.js"></script> -->

<!-- Plugins to remove -->
<script async type="text/javascript" src="/js/plugins.js"></script>

<!-- Addthis -->
<!-- Mobile toolbar -->
<!-- <script async type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-543a8a2120ff17ef"></script> -->
<!-- Follow buttons -->
<script async type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-543a8a2120ff17ef"></script>
<!-- Sidebar buttons -->
<script async type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-543a8a2120ff17ef"></script>

<!-- Readmore -->
<?php if (!$view) : ?>
	<script async type="text/javascript" src="js/readmore.min.js"></script>
	<script async type="text/javascript">
	  $('.readmore').readmore({
		maxHeight: 160,
		moreLink: '<a class="right" href="#">Lire plus</a>',
		lessLink: '<a class="right" href="#">Fermer</a>',
	  });
	</script>
<?php endif ?>

<!-- 
####  Views
#-->

<!-- Index -->
<?php if ($view == "index") : ?>
	<!-- Google map -->
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>

  	<!-- Google map config -->
	<script async type="text/javascript">
		$(function(){

			$("#test").gmap3({
				marker: {
					latLng: [50.873000,4.310624],
					options: {
						draggable:true,
					},
					events: {
						dragend: function(infowindow) {
						  	$(this).gmap3({
								getaddress:{
							  		latLng:marker.getPosition(),
							  		callback:function(results){
										var map = $(this).gmap3("get"),
								  		infowindow = $(this).gmap3({get:"infowindow"}),
							  			content = results && results[1] ? results && results[1].formatted_address : "25 Avenue du cimetère, ganshoren";
										if (infowindow){
							  				infowindow.open(map, marker);
								  			infowindow.setContent(content);
										} else {
								  			$(this).gmap3({
												infowindow:{
									  				anchor:marker, 
									  				options:{content: content}
												}
								  			});
										}
							  		}
								}
						  	});
						}
			  		}
				},

				infowindow:{
			   		latLng: [50.872891,4.310594],
			   		draggable: true,
			   		options:{
				 		content: "<strong>25ème Porc-épic</strong><br/>25 Avenue du cimetère,<br/>1083 Ganshoren"
				   	},
				},

				map:{
			  		options:{
						zoom: 15,
						scrollwheel: false,
				  	}
				}
			});
		  
		});
	</script>
<?php endif ?>

<!-- Castors, Louveteaux, Scouts, Pis -->
<?php if ($view == "castors" || $view == "louveteaux" || $view == "scouts" || $view == "pis") : ?>
	<!-- Gallery effect -->
	<script async type="text/javascript">
	  var thisTitle;
	  $(".gallery-item > .gallery-link").hover(function (){
		  thisTitle = $(this).find(".gallery-title");

		  thisTitle.toggleClass("active");
	  });
	</script>
<?php endif ?>

<!-- Agenda -->
<?php if ($view == "agenda") : ?>
	<!-- Libraries -->
	<script async type="text/javascript" src="/js/calendar/responsive-calendar.min.js"></script>
	<!-- agenda.js -->
	<script async type="text/javascript" src="/js/scout25/agenda.js"></script>
<?php endif ?>

<!-- FAQ -->
<?php if ($view == "faq") : ?>
    <!-- Readmore -->
    <script type="text/javascript" src="../js/readmore.min.js"></script>
    <script async type="text/javascript">
	    $('.readmore').readmore({
		  maxHeight: 0,
		  moreLink: '<a class="btn ghost" href="#">Voir la réponse</a>',
		  lessLink: '<a class="btn ghost" href="#">Fermer</a>',
		});
    </script>
<?php endif ?>

<!-- Animateurs -->
<?php if ($view == "zone_anim") : ?>
    <script async src="/js/libraries/jquery-fileupload/vendor/jquery.ui.widget.js"></script>
    <script async src="/js/libraries/jquery-fileupload/jquery.fileupload.js"></script>
    <script async src="/js/libraries/jquery-fileupload/jquery.iframe-transport.js"></script>
    <script async type="text/javascript">
        // jQuery
        $(document).ready(function (){
            // Settings variables
            // Download names system
            var body = $("body");
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
                thisBox = $(this).parent().parent().parent();

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

				body.css("overflow", "visible");
                $("#inscription-modal").modal("toggle");
            });
        });
    </script>
<?php endif ?>
</body>
</html>
