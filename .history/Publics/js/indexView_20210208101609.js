(function($) {

    $('.header__iconA').on('click', function(e) {
        e.preventDefault();
        $('body').toggleClass('with_sidebar');
    })
    $('.site-cache').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('with_sidebar');
    })
    $('#monCarousel img').css({ "height": "80vw", "width": "100%", "maxHeight": "450px" });

    $('#btn_connectere').on('click', function() {
        $('#myModal').on('hidden.bs.modal', function() {
            window.location.reload(true);
        });
        $('#myModal').modal('hide');
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
                    $('.site-container').html(data);
                }
            })
            // var d = new data_form("form-connexion");
            // if (d.verify() == true) {
            //     d.sendInfo("Connexion/connecter", function(data) {
            //         alert(data);
            //         // $('.site-container').html(data)
            //         // if (data.trim() == "ok") {
            //         //     Swal.fire({
            //         //         position: "center",
            //         //         icon: "success",
            //         //         title: "succes!"
            //         //     });
            //         // }
            //     })
            // }

    })

})(jQuery);