(function($) {

    $('.header__iconA').on('click', function(e) {
        e.preventDefault();
        $('body').toggleClass('with_sidebar');
        $('.menu_l').css({ "height": screen.height });
    })
    $('.site-cache').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('with_sidebar');
    })
    $('#monCarousel img').css({ "height": "80vw", "width": "100%", "maxHeight": "450px" });
    /*
     */

})(jQuery);