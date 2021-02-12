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
    alert("selon");
    var s = new forSearchAll();
    s.sendInfo("Publier/selectAllPub", function(data) {
        // console.log(data);

        var table = $('.adresse_content').html();

        for (var i = 0; i < data.length; i++) {
            var table_affichage = "<div class= '" + data[$i].categorie + "'> <table class= '" + data[$i].categorie + "'><tbody><tr><td>" + data[i].id + "</td><td>" + data[i].nom + "</td><td>" + data[i].prenom + "</td><td><a href='#' class='effacer' data-id='" + data[i].id + "' value='" + data[i].id + "'><i class='fas fa-trash'></i></a><a href='#' class='modifier'  data-toggle='tooltip'  data-placement='bottom' title='modifier' data-id='" + data[i].id + "' value='" + data[i].id + "' ><i class='fas fa-edit'></i></a></td></tr></tbody></table></div>";

            $('.adresse_content').html(table + table_affichage);
        }

    });

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