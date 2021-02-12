$('#btn_inscrire').on('click', function() {
    var d = new data_form("form-inscription");
    if (d.verify() == true) {
        d.sendInfo("Connexion/register", function(data) {
            if (data.trim() == '\"ok\"') {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "succes!"
                });
                $('#form-inscription')[0].reset();
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