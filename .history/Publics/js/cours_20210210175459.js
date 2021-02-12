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
$('#btn_publier_malagasy').on('click', function() {
    alert("data");
    // var d = new data_form("form_malagasy");
    // if (d.verify() == true) {
    //     d.sendInfo("Publier/insertPub", function(data) {
    //         $('#form-connexion')[0].reset();
    //     })
    // } else {
    //     Swal.fire({
    //         position: "center",
    //         icon: "warning",
    //         title: "Veillez remplir tous les champs!"
    //     });
    // }
})