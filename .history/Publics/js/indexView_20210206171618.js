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
            alert('ici');
        })
        //pour appeler le formulaire de connexion
        // $('#btn_connecter_header').on('click', function() {
        //     $('body').load("./Views/formIndexview.php");
        //     $('body').addClass("centrer");
        // });
        // var L = screen.height;
        // alert(L);
})(jQuery);