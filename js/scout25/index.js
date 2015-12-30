var userIsMobile = false;

if ( navigator.userAgent.match(/Android/i)
	 || navigator.userAgent.match(/webOS/i)
	 || navigator.userAgent.match(/iPhone/i)
	 || navigator.userAgent.match(/iPad/i)
	 || navigator.userAgent.match(/iPod/i)
	 || navigator.userAgent.match(/BlackBerry/i)
	 || navigator.userAgent.match(/Windows Phone/i) )

	userIsMobile = true;

$(function(){

	$("#test").gmap3({
		marker: {
			latLng: [50.873000,4.310624],
			options: {
				draggable: true,
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
				draggable: userIsMobile ? false : true,
		  	}
		}
	});
  
});