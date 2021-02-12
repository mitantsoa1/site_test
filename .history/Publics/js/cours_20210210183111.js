function cours() {
    showAll();
    $('.exercice').addClass('hide');
    $('.evaluation').addClass('hide');
}

function exercice() {
    showAll();
    $('.cours').addClass('hide');
    $('.evaluation').addClass('hide');
}

function evaluation() {
    showAll();
    $('.cours').addClass('hide');
    $('.exercice').addClass('hide');
}

function showAll() {
    $('.exercice').removeClass('hide');
    $('.cours').removeClass('hide');
    $('.evaluation').removeClass('hide');
}

function selectionAll() {
    var s = new forSearchAll();
    s.sendInfo("Publier/selectAllPub", function(data) {

        for (var i = 0; i < data.length; i++) {
            // var table_affichage = "<div class= '" + data[$i].categorie + "'> <table class= '" + data[$i].categorie + "'><tr><td>" + data[i].titre + "</td><td>" + data[i].contenu + "</td><td>" + data[i].photo + "</td><td>" + data[i].date + "</td>></tr></table></div>";

            $('.adresse_content').html("<div class= '" + data[$i].categorie + "'> <table class= '" + data[$i].categorie + "'><tr><td>" + data[i].titre + "</td><td>" + data[i].contenu + "</td><td>" + data[i].photo + "</td><td>" + data[i].date + "</td>></tr></table></div>");
        }

        // $('.adresse_content').html(data[0].titre);
    });
    var table = $('.adresse_content').html();
    $('.adresse_content').html(table + " table_affichage");
}
selectionAll();
$('#btn_publier_malagasy').on('click', function() {
    // alert("data");
    var d = new data_form("form_malagasy");
    if (d.verify() == true) {
        d.sendInfo("Publier/insertPub", function(data) {
            $('#form-connexion')[0].reset();
        })
    } else {
        Swal.fire({
            position: "center",
            icon: "warning",
            title: "Veillez remplir tous les champs!"
        });
    }
})