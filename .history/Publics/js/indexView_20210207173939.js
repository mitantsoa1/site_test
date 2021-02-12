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
        var d = new data_form("form-connexion");
        if (d.verify() == true) {
            alert('ok');
            d.sendInfo("Connexion/connect", function(data) {
                alert(data);
                // $('.site-container').html(data)
                // if (data.trim() == "ok") {
                //     Swal.fire({
                //         position: "center",
                //         icon: "success",
                //         title: "succes!"
                //     });
                // }
            })
        }

    })

})(jQuery);