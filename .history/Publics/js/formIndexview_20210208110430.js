$('#btn_inscrire').on('click', function() {
    $('#prenom').removeClass('hide');
    $('#btn_enregistrer').removeClass('hide');
    $('#btn_connecter').addClass('hide');
    $('#btn_inscrire').addClass('hide');
    $('#btn_annuler').removeClass('hide');
})
$('#btn_annuler').on('click', function() {
    $('#prenom').addClass('hide');
    $('#btn_enregistrer').addClass('hide');
    $('#btn_connecter').removeClass('hide');
    $('#btn_inscrire').removeClass('hide');
    $('#btn_annuler').addClass('hide');
})

$('#btn_enregistrer').on('click', function() {
    var d = new data_form("form-inscription");
    if (d.verify() == true) {
        d.sendInfo("Connexion/register", function(data) {
            if (data.trim() == '\"ok\"') {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "succes!",
                });
                $('#form-inscription')[0].reset();
                $.ajax({
                    url: "Loadpage/accueil",
                    type: 'post',
                    data: "data=rien",
                    datatype: 'json',
                    success: function(data) {
                        $('.formIndexview').html(data);
                    },
                    error: function() {

                        Swal.fire({
                            position: 'center',
                            icon: 'warning',
                            title: 'Erreur de connexion au serveur !',
                            showConfirmButton: false,
                            timer: 1600
                        })
                    }


                });
            } else if (data.trim() == "Mail existe") {
                Swal.fire({
                    position: "center",
                    icon: "warning",
                    title: "Mail existe!"
                });
            } else {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Erreur de connexion au serveur!"
                });
            }
        });
    } else {
        Swal.fire({
            position: "center",
            icon: "warning",
            title: "Veillez remplir tous les champs!"
        });
    }
})
$('#btn_connecter').on('click', function() {
    var data = "nom=" + $('#nom').val() + "&mail=" + $('#mail').val() + "&pass=" + $('#pass').val();

    $.ajax({
        url: "Connexion/connecter",
        type: "POST",
        data: data,
        datatype: "json",

        success: function(data) {
            if (data == "Veillez-vous inscrire") {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Veillez-vous inscrire !',
                    showConfirmButton: false,
                    timer: 1600
                })
            }
            $('#').html(data);
        }
    })

})