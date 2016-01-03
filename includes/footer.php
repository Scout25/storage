<!-- Footer -->
<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center border">
				<p>Copyright &copy; <a target="_blank" href="http://be.linkedin.com/pub/axel-capaert/a8/350/812/">Axel Capaert</a> 2014</p>
				<p>Dev: <a target="_blank" href="http://www.guillaumepiron.com">Guillaume Piron</a></p>
			</div>
		</div>
	</div>
</footer>

<!-- Librairies -->
<script type="text/javascript" src="/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/js/libraries/jquery-ui-1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/bootstrap/bootstrap.min.js"></script>
<!-- <script async type="text/javascript" src="/js/nprogress/nprogress.min.js"></script> -->

<!-- Plugins to remove -->
<script async type="text/javascript" src="/js/plugins.js"></script>

<!-- Addthis -->
<!-- Mobile toolbar -->
<!-- <script async type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-543a8a2120ff17ef"></script> -->
<!-- Follow buttons -->
<!-- <script async type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-543a8a2120ff17ef"></script> -->
<!-- Sidebar buttons -->
<!-- <script async type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-543a8a2120ff17ef"></script> -->

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
	<script async src="/js/scout25/index.js" type="text/javascript"></script>
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
	<!-- External -->
	<script src="//code.jquery.com/qunit/qunit-1.15.0.js"></script>
	<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
	<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
	<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>

	<!-- Libraries -->
    <script src="/js/libraries/jquery-fileupload/vendor/jquery.ui.widget.js"></script>
    <script src="/js/libraries/jquery-fileupload/jquery.iframe-transport.js"></script>
    <script src="/js/libraries/jquery-fileupload/jquery.fileupload.js"></script>
	<script>
		/* global window, $ */
		window.testBasicWidget = $.blueimp.fileupload;
	</script>
	<script src="/js/libraries/jquery-fileupload/jquery.fileupload-process.js"></script>
	<script src="/js/libraries/jquery-fileupload/jquery.fileupload-image.js"></script>
	<script src="/js/libraries/jquery-fileupload/jquery.fileupload-validate.js"></script>
	<script src="/js/libraries/jquery-fileupload/jquery.fileupload-ui.js"></script>
	<script>
		/* global window, $ */
		window.testUIWidget = $.blueimp.fileupload;
	</script>
	<!--<script src="/js/libraries/jquery-fileupload/test-fileupload.js"></script>-->
	<script src="/js/libraries/jquery-fileupload/main.js"></script>
	<!-- View script -->
    <script src="/js/scout25/zone_anim.js" type="text/javascript"></script>

<?php endif ?>
</body>
</html>
