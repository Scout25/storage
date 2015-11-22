$( document ).ready( function() {
	$(".responsive-calendar").responsiveCalendar({
		time: '2015-11',
		translateMonths: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre"],
		monthChangeAnimation: false,
		events: {
		  	// Novembre
			"2015-11-21": {"number": 1, "badgeClass": "badge-warning", url: ",,,,Soirée Pionniers"},
			"2015-11-22": {"number": 2, "badgeClass": "badge-warning", url: "normale,,normale,"},
	  		"2015-11-27": {"number": 1, "badgeClass": "badge-warning", url: ",,,,Bar Pionniers"},
	  		"2015-11-29": {"number": 4, "badgeClass": "badge-warning", url: "piscine,piscine,normale,normale"},

	  		// Décembre
	  		"2015-12-06": {"number": 2, "badgeClass": "badge-warning", url: "demi,demi,,"},
	  		"2015-12-12": {"number": 2, "badgeClass": "badge-warning", url: ",,,speciale,Marché de Noël Ganshoren"},
	  		"2015-12-18": {"number": 1, "badgeClass": "badge-warning", url: ",,cinéma,,"},

	  		// Janvier
	  		"2016-01-10": {"number": 2, "badgeClass": "badge-warning", url: "normale,,,normale"},
	  		"2016-01-24": {"number": 2, "badgeClass": "badge-warning", url: ",normale,,normale"},
	  		"2016-01-31": {"number": 4, "badgeClass": "badge-warning", url: "normale,normale,normale,normale"},

	  		// Février
	  		"2016-02-06": {"number": 1, "badgeClass": "badge-warning", url: ",,,wePi"},
	  		"2016-02-07": {"number": 2, "badgeClass": "badge-warning", url: "normale,,,wePi"},
	  		"2016-02-08": {"number": 1, "badgeClass": "badge-warning", url: ",,,wePi"},
	  		"2016-02-09": {"number": 1, "badgeClass": "badge-warning", url: ",,,wePi"},
	  		"2016-02-14": {"number": 1, "badgeClass": "badge-warning", url: ",,normale,"},
	  		"2016-02-21": {"number": 4, "badgeClass": "badge-warning", url: "normale,normale,normale,normale"},
	  		"2016-02-21": {"number": 3, "badgeClass": "badge-warning", url: "normale,normale,normale,"},

	  		// Mars
	  		"2016-03-06": {"number": 2, "badgeClass": "badge-warning", url: "normale,,normale,"},
	  		"2016-03-13": {"number": 3, "badgeClass": "badge-warning", url: "normale,normale,,normale"},
	  		"2016-03-19": {"number": 1, "badgeClass": "badge-warning", url: ",,24h vélo,"},
	  		"2016-03-20": {"number": 1, "badgeClass": "badge-warning", url: ",,24h vélo,"},
	  		"2016-03-26": {"number": 1, "badgeClass": "badge-warning", url: ",,,Repas Pionniers"},

	  		// Avril
	  		"2016-04-01": {"number": 4, "badgeClass": "badge-warning", url: "Camp de pâques,Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-02": {"number": 4, "badgeClass": "badge-warning", url: "Camp de pâques,Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-03": {"number": 4, "badgeClass": "badge-warning", url: "Camp de pâques,Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-04": {"number": 4, "badgeClass": "badge-warning", url: "Camp de pâques,Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-05": {"number": 4, "badgeClass": "badge-warning", url: "Camp de pâques,Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-06": {"number": 4, "badgeClass": "badge-warning", url: "Camp de pâques,Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-07": {"number": 4, "badgeClass": "badge-warning", url: "Camp de pâques,Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-08": {"number": 4, "badgeClass": "badge-warning", url: "Camp de pâques,Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-09": {"number": 4, "badgeClass": "badge-warning", url: "Camp de pâques,Camp de pâques,Camp de pâques,Camp de pâques"},
	  		"2016-04-17": {"number": 4, "badgeClass": "badge-warning", url: "normale,normale,normale,normale"},
	  		"2016-04-17": {"number": 1, "badgeClass": "badge-warning", url: ",,,,Fête d'Unité"},

	  		// Mai
	  		"2016-05-01": {"number": 4, "badgeClass": "badge-warning", url: "normale,normale,normale,normale"},
	  		"2016-05-08": {"number": 1, "badgeClass": "badge-warning", url: ",,normale,"},
	  		"2016-05-15": {"number": 3, "badgeClass": "badge-warning", url: "normale,normale,,normale"},
	  		"2016-05-29": {"number": 1, "badgeClass": "badge-warning", url: ",,,normale"},

	  		// Juin
	  		"2016-06-26": {"number": 2, "badgeClass": "badge-warning", url: "Uniquement la matinée,,,,Barbecue l'après-midi"},
		}
	});
	
	var calendarModal = $("#calendarModal");
	var modalContent = $("#modalContent");
	var reunion = {
		    cinema: "Soirée Cheese and Movies, infos à suivre",
		    piscine: "Réunion piscine : prévoir maillot, bonnet, essuie, (lunettes) et 5,00€",
			normale: "Réunion normale",
			speciale: "Réunion spéciale",
			demi: "Demi Réunion, de 14h à 17h.",
			wePi: "<a href='/pages/pis.php?#news_pis' target='_blank'>Informations sur le week-end</a>",
			velo: "<a href='/pages/scouts.php?#news_scouts' target='_blank'>Informations sur les 24h vélo</a>",
		};

	function createContent(params) {
		var reunions = params.split(",");
		var thisReunion;
		var section;
		var content = "";

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
		    else if (reunions[i] == "cinéma")
				thisReunion = reunion.cinema;
		    else if (reunions[i] == "piscine")
				thisReunion = reunion.piscine;
			else if (reunions[i] == "wePi")
				thisReunion = reunion.wePi;
			else if (reunions[i] == "velo")
				thisReunion = reunion.velo;
			else
				thisReunion = reunions[i];

			if (thisReunion) {
				thisContent = "<p>"+section+" : "+thisReunion+"</p>";
				content += thisContent;
			}
		}

		return content;
	}

	$(document).on("click", ".day.active", function (e){
		e.preventDefault();
		var params = $(this).find("a").attr("href");

		modalContent.html(createContent(params));
		calendarModal.modal("toggle");
	});
});