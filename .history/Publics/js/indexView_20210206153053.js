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

    //pour appeler le formulaire de connexion
    $('#btn_connecter_header').on('click', function() {
        $('.form').load("./Views/formIndexview.php");
    });
})(jQuery);