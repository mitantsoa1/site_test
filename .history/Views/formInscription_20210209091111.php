
    <form id="form-inscription">
        <!-- Titre colonne -->
        <h3 class="text-center">S'inscrire</h3>
        <!-- Titre colone -->
        <!-- <div class="form-group">
            <input type="text" id="nom" class="form-control" placeholder="pseudo">
        </div> -->
        <input type="hidden" id="id">
        <div class="form-group">
            
            <input type="text" id="nom" class="form-control obligatoire " placeholder="nom">
        </div>
        <div class="form-group">
            
            <input type="text" id="prenom" class="form-control obligatoire" placeholder="prénom">
        </div>
        
        <div class="form-group">
            
            <input type="text" id="mail" class="form-control obligatoire" placeholder="mail">
        </div>
        <div class="form-group">
            
            <input type="password" id="pass" class="form-control obligatoire" placeholder="mot de passe">
        </div>
        <div class="text-center">
            <a href="#" class="btn btn-primary" id="btn_inscrire">S'inscrire</a>
            <a href="connecter" class="btn btn-success" id="btn_annuler">Annuler</a>
        </div>
        
    </form>
   <script>
    $('#btn_inscrire').on('click', function() {
    
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
                window.location.href = "accueil";

                // $.ajax({
                //     url: "Loadpage/accueil",
                //     type: 'post',
                //     data: "data=rien",
                //     datatype: 'json',
                //     success: function(data) {
                //         $('.formIndexview').html(data);
                //     },
                //     error: function() {

                //         Swal.fire({
                //             position: 'center',
                //             icon: 'warning',
                //             title: 'Erreur de connexion au serveur !',
                //             showConfirmButton: false,
                //             timer: 1600
                //         })
                //     }
                // });
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
   </script>
