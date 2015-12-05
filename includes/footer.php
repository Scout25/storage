        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center border">
                        <p>Copyright &copy; <a target="_blank" href="http://be.linkedin.com/pub/axel-capaert/a8/350/812/">Axel Capaert</a> 2014</p>
                        <p>Dev: <a target="_blank" href="https://be.linkedin.com/in/guillaume-piron-79567810b">Guillaume Piron</a></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JavaScript -->
        <!-- <script type="text/javascript" src="/js/nprogress/nprogress.min.js"></script> -->
        <script type="text/javascript" src="/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap/bootstrap.min.js"></script>

        <!-- Plugins -->
        <script type="text/javascript" src="/js/plugins.js"></script>

        <!-- Mobile toolbar -->
        <!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-543a8a2120ff17ef" async></script> -->

        <!-- Follow buttons -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-543a8a2120ff17ef" async></script>

        <!-- Sidebar buttons -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-543a8a2120ff17ef" async></script>

        <!-- Galerie effect -->
        <script type="text/javascript">
            var thisTitle;
            $(".gallery-item > .gallery-link").hover(function (){
                thisTitle = $(this).find(".gallery-title");

                thisTitle.toggleClass("active");
            });
        </script>
        <!--Gmap3-->
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script type="text/javascript" src="js/gmap3.min.js"></script>
        <script type="text/javascript">
          $(function(){
          
            $("#test").gmap3({
              marker:{
                latLng: [50.873000,4.310624],
                options:{
                    draggable:true,
                },
                events:{
                  dragend: function(infowindow){
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

        <!-- Readmore -->    
        <script type="text/javascript" src="js/readmore.min.js"></script>
        <script type="text/javascript">
            $('.readmore').readmore({
              maxHeight: 160,
              moreLink: '<a class="right" href="#">Lire plus</a>',
              lessLink: '<a class="right" href="#">Fermer</a>',
            });
        </script>
    </body>
</html>