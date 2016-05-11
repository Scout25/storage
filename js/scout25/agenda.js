$(document).ready(function() {
	$(".responsive-calendar").responsiveCalendar({
		time: thisMonth,
		translateMonths: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
		monthChangeAnimation: false,
		events: {
		  	
	  		// Janvier
	  		"2016-01-10": {"number": 3, "badgeClass": "badge-warning", url: "normale,normale,,normale"},
	  		"2016-01-24": {"number": 2, "badgeClass": "badge-warning", url: ",normale,,normale"},
	  		"2016-01-31": {"number": 4, "badgeClass": "badge-warning", url: "normale,normale,normale,normale"},

	  		// Février
	  		"2016-02-06": {"number": 1, "badgeClass": "badge-warning", url: ",,,wePi"},
	  		"2016-02-07": {"number": 2, "badgeClass": "badge-warning", url: "normale,,,wePi"},
	  		"2016-02-08": {"number": 1, "badgeClass": "badge-warning", url: ",,,wePi"},
	  		"2016-02-09": {"number": 1, "badgeClass": "badge-warning", url: ",,,wePi"},
	  		"2016-02-14": {"number": 1, "badgeClass": "badge-warning", url: ",,normale,"},
	  		"2016-02-21": {"number": 4, "badgeClass": "badge-warning", url: "patinoire,patinoire,patinoire,demi"},
	  		"2016-02-26": {"number": 1, "badgeClass": "badge-warning", url: ",,,wePi"},
	  		"2016-02-27": {"number": 1, "badgeClass": "badge-warning", url: ",,,wePi"},
	  		"2016-02-28": {"number": 4, "badgeClass": "badge-warning", url: "normale,normale,normale,wePi"},

	  		// Mars
	  		"2016-03-04": {"number": 1, "badgeClass": "badge-warning", url: ",,,bar"},
	  		"2016-03-06": {"number": 2, "badgeClass": "badge-warning", url: "normale,,normale,"},
	  		"2016-03-13": {"number": 3, "badgeClass": "badge-warning", url: "normale,normale,,normale"},
	  		"2016-03-19": {"number": 2, "badgeClass": "badge-warning", url: ",,24h velo,Présence au 24h vélo"},
	  		"2016-03-20": {"number": 2, "badgeClass": "badge-warning", url: ",,24h velo,Présence au 24h vélo"},
	  		"2016-03-26": {"number": 1, "badgeClass": "badge-warning", url: ",,,Repas Pionniers"},

	  		// Avril
	  		"2016-04-02": {"number": 4, "badgeClass": "badge-warning", url: "Camp de pâques,Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-03": {"number": 4, "badgeClass": "badge-warning", url: "Camp de pâques,Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-04": {"number": 4, "badgeClass": "badge-warning", url: "Camp de pâques,Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-05": {"number": 3, "badgeClass": "badge-warning", url: ",Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-06": {"number": 3, "badgeClass": "badge-warning", url: ",Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-07": {"number": 3, "badgeClass": "badge-warning", url: ",Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-08": {"number": 3, "badgeClass": "badge-warning", url: ",Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-09": {"number": 3, "badgeClass": "badge-warning", url: ",Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-15": {"number": 1, "badgeClass": "badge-warning", url: ",,,Soirée pi"},
	  		"2016-04-17": {"number": 3, "badgeClass": "badge-warning", url: "normale,normale,,normale"},
	  		"2016-04-24": {"number": 1, "badgeClass": "badge-warning", url: ",,demi,"},
	  		"2016-04-30": {"number": 1, "badgeClass": "badge-warning", url: ",,,,Fête d'Unité"},

	  		// Mai
	  		"2016-05-15": {"number": 3, "badgeClass": "badge-warning", url: "normale,normale,,normale"},
	  		"2016-05-29": {"number": 1, "badgeClass": "badge-warning", url: ",,,normale"},

	  		// Juin
	  		"2016-06-26": {"number": 2, "badgeClass": "badge-warning", url: "Uniquement la matinée,,,,Barbecue l'après-midi"},

	  		//Juillet
	  		"2016-07-09": {"number": 1, "badgeClass": "badge-warning", url: ",,,grandcamppi,"},
	  		"2016-07-10": {"number": 1, "badgeClass": "badge-warning", url: ",,,grandcamppi,"},
	  		"2016-07-11": {"number": 1, "badgeClass": "badge-warning", url: ",,,grandcamppi,"},
	  		"2016-07-12": {"number": 1, "badgeClass": "badge-warning", url: ",,,grandcamppi,"},
	  		"2016-07-13": {"number": 1, "badgeClass": "badge-warning", url: ",,,grandcamppi,"},
	  		"2016-07-14": {"number": 1, "badgeClass": "badge-warning", url: ",,,grandcamppi,"},
	  		"2016-07-15": {"number": 1, "badgeClass": "badge-warning", url: ",,,grandcamppi,"},
	  		"2016-07-16": {"number": 4, "badgeClass": "badge-warning", url: "grandcampcs,grandcamplx,grandcampsc,grandcamppi,"},
	  		"2016-07-17": {"number": 4, "badgeClass": "badge-warning", url: "grandcampcs,grandcamplx,grandcampsc,grandcamppi,"},
	  		"2016-07-18": {"number": 4, "badgeClass": "badge-warning", url: "grandcampcs,grandcamplx,grandcampsc,grandcamppi,"},
	  		"2016-07-19": {"number": 4, "badgeClass": "badge-warning", url: "grandcampcs,grandcamplx,grandcampsc,grandcamppi,"},
	  		"2016-07-20": {"number": 4, "badgeClass": "badge-warning", url: "grandcampcs,grandcamplx,grandcampsc,grandcamppi,"},
	  		"2016-07-21": {"number": 4, "badgeClass": "badge-warning", url: "grandcampcs,grandcamplx,grandcampsc,grandcamppi,"},
	  		"2016-07-22": {"number": 4, "badgeClass": "badge-warning", url: "grandcampcs,grandcamplx,grandcampsc,grandcamppi,"},
	  		"2016-07-23": {"number": 3, "badgeClass": "badge-warning", url: ",grandcamplx,grandcampsc,grandcamppi,"},
	  		"2016-07-24": {"number": 3, "badgeClass": "badge-warning", url: ",grandcamplx,grandcampsc,grandcamppi,"},
	  		"2016-07-25": {"number": 3, "badgeClass": "badge-warning", url: ",grandcamplx,grandcampsc,grandcamppi,"},
	  		"2016-07-26": {"number": 3, "badgeClass": "badge-warning", url: ",grandcamplx,grandcampsc,grandcamppi,"},
	  		"2016-07-27": {"number": 3, "badgeClass": "badge-warning", url: ",grandcamplx,grandcampsc,grandcamppi,"},
	  		"2016-07-28": {"number": 2, "badgeClass": "badge-warning", url: ",grandcamplx,grandcampsc,,"},
	  		"2016-07-29": {"number": 2, "badgeClass": "badge-warning", url: ",grandcamplx,grandcampsc,,"},
	  		"2016-07-30": {"number": 2, "badgeClass": "badge-warning", url: ",grandcamplx,grandcampsc,,"},
	  		"2016-07-31": {"number": 2, "badgeClass": "badge-warning", url: ",grandcamplx,grandcampsc,,"},
		}
	});
	<!---->
	var body = $("body");
	var calendarModal = $("#calendarModal");
	var modalContent = $("#modalContent");
	var reunion = {
    	patinoire: "Réunion patinoire, rendez-vous à 10H00 à la patinoire Poseidon (Avenue des Vaillants 4, 1200 Bruxelles). Prévoir GANTS, 10,00€ + abonnement STIB, Fin de la réunion 17h au local",
        cheese: "Soirée Cheese and Movies | de 18 à 22h30, prix: 5,00€",
        piscine: "Réunion piscine : prévoir maillot, bonnet, essuie, (lunettes) et 5,00€",
		normale: "Réunion normale",
		speciale: "Réunion spéciale",
		demi: "Demi Réunion, de 12h30 à 17h.",
		wePi: "<a href='/pages/pis.php?#news_pis' target='_blank'>Informations sur le week-end</a>",
		velo: "<a href='/pages/scouts.php?#news_scouts' target='_blank'>Informations sur les 24h vélo</a>",
		bar: "Bar pi",
		grandcampcs: "Infos à venir...",
		grandcamplx: "Infos à venir...",
		grandcampsc: "Infos à venir...",
		grandcamppi: "Infos à venir...",
	};
	var reunions;
	var thisReunion;
	var section;
	var content;

	function createContent(params) {
		reunions = params.split(",");
		content = "";

		for (var i in reunions) {
			switch (i) {
				case "0" :
					section = "Castors";
				break;
				case "1" :
					section = "Louveteaux";
				break;
				case "2" :
					section = "Scouts";
				break;
				case "3" :
					section = "Pionniers";
				break;

				default :
					section = "Unité";
				break;
			}

			if (reunions[i] == "normale")
				thisReunion = reunion.normale;
			else if (reunions[i] == "speciale")
				thisReunion = reunion.speciale;
			else if (reunions[i] == "demi")
				thisReunion = reunion.demi;
		    else if (reunions[i] == "cheese")
				thisReunion = reunion.cheese;
			else if (reunions[i] == "piscine")
				thisReunion = reunion.piscine;
			else if (reunions[i] == "patinoire")
				thisReunion = reunion.patinoire;
			else if (reunions[i] == "wePi")
				thisReunion = reunion.wePi;
			else if (reunions[i] == "velo")
				thisReunion = reunion.velo;
			else if (reunions[i] == "bar")
				thisReunion = reunion.bar;
			else if (reunions[i] == "grandcampcs")
				thisReunion = reunion.grandcampcs;
			else if (reunions[i] == "grandcamplx")
				thisReunion = reunion.grandcamplx;
			else if (reunions[i] == "grandcampsc")
				thisReunion = reunion.grandcampsc;
			else if (reunions[i] == "grandcamppi")
				thisReunion = reunion.grandcamppi;
			else
				thisReunion = reunions[i];

			if (thisReunion) {
				thisContent = "<h5>"+section+"</h5><p>"+"&nbsp;: "+thisReunion+"</p><br>";
				content += thisContent;
			}
		}

		return content;
	}

	$(document).on("click", ".day.active a", function (e){
		e.preventDefault();
		var params = $(this).attr("href");

		modalContent.html(createContent(params));
		body.css("overflow", "visible");
		calendarModal.modal("toggle");
	});
});
