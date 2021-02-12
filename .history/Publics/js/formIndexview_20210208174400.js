$('#btn_inscrire_con').on('click', function() {
    $.ajax({
        url: "Connexion/formInscription",
        type: "POST",
        data: "data",
        datatype: "json",

        success: function(data) {
            $("#formConnexion").html(data);
        }
    })
})
$('#btn_annuler').on('click', function() {
    //refaire
})

$('#btn_connecter').on('click', function() {
    /* var d = new data_form("form-connexion");
     if (d.verify() == true) {
         d.sendInfo("Loadpage/connecter", function(data) {
             $('#form-connexion')[0].reset();
         })
     } else {
         Swal.fire({
             position: "center",
             icon: "warning",
             title: "Veillez remplir tous les champs!"
         });
     }*/

    var data = "nom=" + $('#nom').val() + "&mail=" + $('#mail').val() + "&pass=" + $('#pass').val();

    $.ajax({
        url: "Loadpage/connecter",
        type: "POST",
        data: data,
        datatype: "json",

        success: function(data) {
            console.log(data);
            //      if (data == "Veillez-vous inscrire") {
            //          Swal.fire({
            //              position: 'center',
            //              icon: 'warning',
            //              title: 'Veillez-vous inscrire !',
            //              showConfirmButton: false,
            //              timer: 1600
            //          })
            //      }
            //      $('#formIndexview').html(data);
        }
    })

})