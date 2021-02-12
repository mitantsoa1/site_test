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

    $('#btn_connecter').on('click', function() {
        $.ajax({
                url: "Connexion/connecter",
                type: "POST",
                data: "nom=" + $('#name').val() + "&mail=" + $('#mail').val() + "&pass=" + $('#pass').val(),
                datatype: "json",
                success: function(data) {
                    alert(data);
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