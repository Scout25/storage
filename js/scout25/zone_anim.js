// jQuery
$(document).ready(function () {
    // Settings variables
    // Download names system
    var body = $("body");
    var downloadLinks = $(".download-link");
    var This;
    var thisText;
    // More informations system
    var thisBox;

    // Put the name of the files in the download attribute of the links
    downloadLinks.each(function () {
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